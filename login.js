var alertRedInput = "#8C1010";
var defaultInput = "rgba(10, 180, 180, 1)";



function login(){
  
  $("#login").fadeIn(100);
  $("#signup").hide();

}
function signup(){
  $("#login").hide();
  $("#signup").fadeIn(100);
  
}

function check_everything(email,password,colg,name){
    var error ="";
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
   if(!email.match(re)) {
         error =error+ "Invalid email\n";
    
   }
   
   if(password.length<8){
        error =error+"password should be atleast 8 characters long\n";
   }
   
   if(colg.length===0){
        error =error+"Please enter college name\n";
   }
   if(name.length===0){
       error =error+"Please enter your name\n";
   }
   
  return error;
   

    
    
}

$(document).ready(function(){


    $(".snd").click(function(event){
        // alert('button');
        

        var name = $("#name").val();
  var email = $("#email").val();
  var colg = $("#colg").val();
  var password = $("#password").val();
  var error =check_everything(email.trim(),password.trim(),colg.trim(),name.trim());
   if(error===""){
      
  $(".otps").hide();
        // $(".otpr").show();
        $(".circle").show();
  
 $.ajax({
      url: 'functions.php', 
      method:'POST',
      data:{
      otp_sent:'yes',
      name:name,
      email:email,
      colg:colg,
      password:password
      },

      success: function(html) {
          if(html=="otp sent successfully!"){
                 $(".circle").hide();
                 $("#otp").fadeIn(1000);
                 $(".otpr").show();
                 
                // $(".rotp").html("Verify!");
          }
          else{
              
             alert(html);
             $(".load").hide();
             $(".otps").show();
          }
        
       
      }

});

}

else{
    alert(error);
}

        
        event.preventDefault();
    });
    
    
    $(".log").click(function(event){
  var email = $("#email1").val();
  var password = $("#password1").val();

  
 $.ajax({
      url: 'functions.php', 
      method:'POST',
      data:{
      login:'yes',
      email:email,
      password:password
      },

      success: function(html) {
         
          if(html=="success"){
           window.location.href = "index.php";
          }
          else{
              alert(html);
          }
        
        

      }

});
});


    $(".rotp").click(function(event){
        $(".circle").show();
        $(".otpr").hide();
var otp=$("#otp2").val();

  $.ajax({
  url:'functions.php',
  method:'POST',
  data:{
    otp_r:'yes',
    otp_ans:otp
  },
  success: function(html){
      
  alert(html);
  if(html=="Success!")
  
  {    
       $("#name").val("");
 $("#email").val("");
 $("#colg").val("");
$("#password").val("");
$("#course").val("");
$("#otp").hide();
      $(".circle").hide();
      $(".otps").show();
      $("#login").fadeIn(100);
  $("#signup").hide();
    //   $(".").show();
    //   $(".").hide();
  }
  else{
      $(".circle").hide();
      $(".otpr").show();
      alert(html);
      
  }
  }
 });
  
});
});


