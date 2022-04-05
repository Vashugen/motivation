function allowedToCheck(){

    //TODO
    //1. засунуть в цикл
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

    if($("#prizePicsOne").val() != ""){
        count ++;
    }

    if($("#prizePicsTwo").val() != ""){
        count ++;
    }

    if($("#prizePicsThree").val() != ""){
        count ++;
    }

    return count < 3;

}

function getCheckedPrize(){

    //TODO
    //1. засунуть в цикл
    if($("#prizeTextOne").val() != ""){
        var prize = $("#prizeTextOne").val();
        $("#prizeTextOne").val(null);
        return prize;
    }

    if($("#prizeTextTwo").val() != ""){
        var prize = $("#prizeTextTwo").val();
        $("#prizeTextTwo").val(null);
        return prize;
    }

    if($("#prizeTextThree").val() != ""){
        var prize = $("#prizeTextThree").val();
        $("#prizeTextThree").val(null);
        return prize;
    }

    if($("#prizePicsOne").val() != ""){
        var prize = $("#prizePicsOne").val();
        $("#prizePicsOne").val(null);
        return prize;
    }

    if($("#prizePicsTwo").val() != ""){
        var prize = $("#prizePicsTwo").val();
        $("#prizePicsTwo").val(null);
        return prize;
    }

    if($("#prizePicsThree").val() != ""){
        var prize = $("#prizePicsThree").val();
        $("#prizePicsThree").val(null);
        return prize;
    }
}

$(".prize-picture").on("click", function (){

    var element = $(this);
    var prize = element.data("prizeName");
    if(element.data("checked")){

        //1. удаляем из инпута
        if($("#prizePicsOne").val() == prize){
            $("#prizePicsOne").val(null);
        }else if($("#prizePicsTwo").val() == prize){
            $("#prizePicsTwo").val(null);
        }else{
            $("#prizePicsThree").val(null);
        }
        //2. меняем картинку
        element.css("display", "none");
        $("#cake").css("display", "block");
    }else{
        //1.доступны ли ещё для выбора
        if(allowedToCheck()) {
            //2. помещаем значение в свободный инпут
            if($("#prizePicsOne").val() == ""){
                $("#prizePicsOne").val(prize);
            }else if($("#prizePicsTwo").val() == ""){
                $("#prizePicsTwo").val(prize);
            }else{
                $("#prizePicsThree").val(prize);
            }

            //3.заменяем картинку
            element.css("display", "none");
            $("#cakeCheck").css("display", "block");
        }else {
            //TODO красивое окно для сообщений
            alert("Вы уже выбрали три награды! Для замены придётся что-то удалить)");
        }
    }

    return false;

});


$("#prizeForm").on("submit", function () {

    if(allowedToCheck()){
        //TODO в красивое модальное окно!!
        alert("Довыберите свои награды до трёх!");
    }

    var prizeOne = getCheckedPrize();
    var prizeTwo = "";
    var prizeThree = "";

    var prizes = {
        "one" : prizeOne,
        "two" : prizeTwo,
        "three": prizeThree
    };

    //2.отправка на сервак
    $.ajax({
        type: "POST",
        url: "save-prizes",
        data: prizes,
        dataType: "json",
        success: function (response) {
            alert(response.message);
        }
    });

});