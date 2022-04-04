$("#userLoginForm").on("submit", function () {

   var params = $(this).serialize();

   $.ajax({
      type: "POST",
      url: "login-user",
      data: params,
      dataType: "json",
      success: function (response) {
         if(response.success == false){
            $("#infoModalBody").html('<h4><center>' + response.message + '</center></h4>');
            $("#infoModal").modal("show");
         }else{
            //удачно залогинилась
         }
      }
   });

   return false;

});

$("#userRegisterForm").on("submit", function (){

   var params = $(this).serialize();

   $.ajax({
      type: "POST",
      url: "register-user",
      data: params,
      dataType: "json",
      success: function (response) {
         if(response.success == false){
            $("#infoModalBody").html('<h4><center>' + response.message + '</center></h4>');
            $("#infoModal").modal("show");
         }else{
            $("main").empty();
            $("main").html(response.data);
         }
      }
   });

   return false;

});