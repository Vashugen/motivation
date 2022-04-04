$(".prize-picture").on("click", function (){

    var element = $(this);
    if(element.data("checked")){
        //картинка уже чекнута, надо снять выделение
        //то есть заменить её нечекнутой картинкой
        var prize = element.data("prizeName");
        $.getJSON("change-pics-prize?name=" + prize, function (response) {
            if(response.success){
                element.attr("src", response.path);
            }else{
                //?? безболезненная замена
            }
        });
    }else{
        //картинка не чекнута, надо
        //заполнены ли инпуты
        var count = 0;
        if($("#prizeTextOne").val() != ""){
            count ++;
        }

        if($("#prizeTextTwo").val() != ""){
            count ++;
        }

        if($("#prizeTextThree").val() != ""){
            count ++;
        }

        if(count == 3){
            alert("Вы уже выбрали три награды! Для замены придётся что-то удалить)");
        }else{
            //1. определяем, есть ли ещё места //TODO засунуть в цикл
            var count = 0;
            if($("#prizePicsOne").val() != ""){
                count ++;
            }

            if($("#prizePicsTwo").val() != ""){
                count ++;
            }

            if($("#prizePicsThree").val() != ""){
                count ++;
            }

            if(count == 3){
                //TODO красивое окно для сообщений
                alert("Вы уже выбрали три награды! Для замены придётся что-то удалить)");
            }else{

                //2. помещаем значение в свободный инпут
                var prize = element.data("prizeName");

                if($("#prizePicsOne").val() == ""){
                    $("#prizePicsOne").val(prize);
                }else if($("#prizePicsTwo").val() == ""){
                    $("#prizePicsTwo").val(prize)
                }else{
                    $("#prizePicsThree").val(prize)
                }

                //3.заменяем картинку
                $.getJSON("change-pics-prize?name=" + prize, function (response) {
                    if(response.success){
                        element.attr("src", response.path);
                    }else{
                        //?? безболезненная замена
                    }
                });
            }
        }


    }

    return false;

});

$("#prizeForm").on("submit", function () {

    var prizes = {
        "one" : 1,
        "two" : 2,
        "three": 3
    };

    var count = 0;
    if($("#prizePicsOne").val() == ""){
        count ++;
    }else if($("#prizePicsTwo").val() == ""){
        count ++;
    }else if($("#prizePicsTree").val() == ""){
        count ++;
    }
    //2.отправка на сервак
    $.ajax({
        type: "POST",
        url: "save-prize",
        data: prizes,
        dataType: "json",
        success: function (response) {
            alert(response.message);
        }
    });

});