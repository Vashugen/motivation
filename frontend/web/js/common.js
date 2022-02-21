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

   return false;

});

$("#prizeForm").on("submit", function () {
   //1.проверка на призы
   //2.отправка на сервак
   //1.проверка на призы
   //1.проверка на призы
   //1.проверка на призы
});