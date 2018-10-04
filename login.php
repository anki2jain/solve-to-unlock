<html>
<head>

<link rel="stylesheet" href="login.css">
<script src="jquery.js"></script>
<script src = "login.js"></script>
<title>Crptoxlogin</title>
<style>
    .info{
        background: url(sherlock.jpg);
    }
</style>
</head>

<body>

<div class="signupSection"  id="signup"  >
    
     
  <div class="info" >
    <h2>Unlock your sherlock</h2>
    
    
    <i clas1s="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Infox is here</p>
  </div>
  <form   style="background:#221B22" class="signupForm" name="signupform">
    <h2>Sign Up</h2>
    <ul class="noBullet">
      <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="name" name="username" placeholder="Name" value="" />
      </li>
      <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>

     
<li>
        <label for="college"></label>
        <input type="text" class="inputFields" id="colg" name="college" placeholder="Your Collage name" value="" required/>
      </li>
      

      <li>
        <label for="Course Year"></label>
        <input type="text" class="inputFields" id="year" name="year" placeholder="Course" value=""/>
      </li>
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value=""/>
      </li>
      <li  id="otp" style="display:none;">
        <label for="otp"></label>
        <input type="password" class="inputFields" id="otp2" name="otp" placeholder="OTP" value=""/>
      </li>
      
      
      
      <li id="center-btn" style=" padding-left:150px;" class="otps">
        <h5 class="snd" type="" style="width:40px;" id="join-btn" name="join" alt="Join" value="">send otp</h5>
               </li>
      <li id="center-btn" class="circle" style="display:none;             padding-left:150px;">
            
       <h5 class="loading" type="" style="width:30px;" id="join-btn" name="join" alt="Join" value=""><img src="Rolling-1s-28px.gif"></h5>
      </li>         
      <li id="center-btn" class="otpr" style="display:none; width:30px;padding-left:150px;">
        <h4  type="submit" style="width:30px;" class="rotp" id="join-btn" name="join" alt="Join" value="">Verify</h4>
      </li>


    </ul>
    <h4 id="al" onclick="login();">Already joined! login here</h4>
  </form>
  
  

</div>



<div class="signupSection" style="display:none;" id="login" >

<div class="info">
<h2>Thanks for joining!</h2>
    <h2>Solve to Unlock</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Infox is here</p>
  </div>
  
<form action="#" method="POST"  style="background:#221B22" class="signupForm" name="signupform">
    <h2>Login here</h2>
    <ul class="noBullet">
    <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email1" name="email" placeholder="Email" value="" required/>
      </li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password1" name="password" placeholder="Password" value=""  required/>
      </li>
      <li id="center-btn" style=" padding-left:150px;">
        <h5 type="submit" class="log" style="width:50px" id="join-btn" name="join" alt="Join" value="">Log in</h5>
      </li>
    </ul>
    <h4 id="al" onclick="signup()">Wants to join! Click here</h4>
  </form>
</div>
</body>
</html>
