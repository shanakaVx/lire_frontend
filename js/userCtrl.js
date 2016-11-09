var uname = "";

$('#btnLogin').click(function(){
    login();
});

$('#btnLogout').click(function(){
    logout();
});

$('#btnRegister').click(function(){
    register();
});

$('#btnPre').click(function(){
    alert("hee");
    buyApi(1);
});

$('#btnDev').click(function(){
    buyApi(2);
});

$('#btnTrial').click(function(){
    buyApi(3);
});


function login(){
    var user = $.trim($('#txtUsername').val());
    var pass = $.trim($('#txtPassword').val());

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
              $('#txtPassword, #txtUsername').val("");
              var k = data.split(",");
              appKey = k[0]
              userName = user;
              uname = k[1];
              $('#loginLink').fadeOut();
              $('#regLink').html("<a class='page-scroll' href='#' data-toggle='modal' data-target='#modalLogout'>Logout "+uname+"</a>");
              $('#selVoice').append("<option data-id='"+k[2]+"'>"+uname+"-voice</option>");
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
                $('#selVoice').html("<option data-id='1'>Mika-Sinhala-default</option>");
              } else 
                alert("Logout failing, please try again");
          });
}


function register(){
    var mail = $.trim($('#txtRegUsername').val());
    var name = $.trim($('#txtRegName').val());
    var pw = $.trim($('#txtRegPassword2').val());
    var pw2 = $.trim($('#txtRegPassword').val());

    if(pw != pw2){
        alert("Passwords do not match!");
        return;
    }

    sendObj = {
      "mail": mail,
      "name": name,
      "pw" : pw
    };

    $.ajax({
        type: "GET",
        url: "http://localhost:8080/register",
        data: sendObj,
        success: function(data, status){
            alert("You are now registered! Please login");
            $('#txtRegUsername, #txtRegName, #txtRegPassword2, #txtRegPassword').val("");
        },
        error: function(data){
            alert("Oops! something went wrong, please try again");
        }
    });
}



function getUname(appk){
    sendObj = {
      "appk": appk
    };
    $.ajax({
        type: 'GET',
        url: 'http://localhost:8080/getuname',
        data: sendObj,
        success: function(data,status){
            if(data != "notfound")
                uname = data;
        },
        error: function(data){
            console.log(data);
        }
    });
    console.log(uname);
}


function buyApi(plan){
    sendObj = {
      "plan": plan,
      "appk": appKey
    };

    $.ajax({
        type: 'GET',
        url: 'http://localhost:8080/buyapi',
        data: sendObj,
        success: function(data, status){
            if(data == "errorinun"){
                alert("Some thing went wrong!");
                return;
            }
            alert("You will be sent to the payment gateway!");
            alert("Your payment has accepted!");
            alert("Thankyou!\n Your payment had received\n"+
            "Now you can access Lire API externally \nYour application key is : "+data+"\n please save this key for future use");
        }
    });
}