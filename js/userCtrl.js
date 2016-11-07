

$('#btnLogin').click(function(){
    login();
});

$('#btnLogout').click(function(){
    logout();
});


function login(){
    var user = $('#txtUsername').val();
    var pass = $('#txtPassword').val();

    sendObj = {
        "un" : user,
        "pw" :pass
    };

    $.get(
          'http://localhost:8080/login',
          sendObj,
          function(data, status){
              console.log(data);
              if(data == "Failed"){
                alert("Wrong login details");
                return;
              }
              appKey = data;
              userName = user;
              $('#loginLink').fadeOut();
              $('#regLink').html("<a class='page-scroll' href='#' data-toggle='modal' data-target='#modalLogout'>Logout</a>");
          });
}



function logout(){
    sendObj = {
      "un": userName,
      "appk": appKey  
    };

    $.get(
          'http://localhost:8080/logout',
          sendObj,
          function(data, status){
              console.log(data);
              if(data == "success"){
                $('#loginLink').fadeIn();
                $('#regLink').html("<a class='page-scroll' href='#' data-toggle='modal' data-target='#modalRegister'>Register</a>");  
              } else 
                alert("Logout failing, please try again");
          });
}