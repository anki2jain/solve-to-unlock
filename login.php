<html>

<head>
<style>


@import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 30px;
  padding: 40px;
  background:black;
  height:700px;
  width:1200px;
  overflow-x: hidden;
  /* overflow-y:auto; */
  /* background:#fff; */
  background: url(infox.png);
  background-repeat: no-repeat;
}

.signupSection {
  /* background: url(infox.png); */
  background-repeat: no-repeat;
  position: relative;
  padding:50px 50px 50px 50px;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 800px;
  height: 600px;
  text-align: center;
  display: flex;
  color: white;
  box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, 0.5);
}

.info {
  width: 45%;
  background: rgba(20, 20, 20, 0.8);
  padding: 30px 0;
  border-right: 5px solid rgba(30, 30, 30, 0.8);
}
.info h2 {
  padding-top: 30px;
  font-weight: 300;
}
.info p {
  font-size: 18px;
}
.info .icon {
  font-size: 8em;
  padding: 20px 0;
  color: #0ab4b4;
}

.signupForm {
  width: 60%;
  padding-left:50px;
  margin-bottom:3px;
  padding: 5px 0;
  background: rgba(20, 40, 40, 0.8);
  transition: .2s;
}
.signupForm h2 {
  font-weight: 300;
}

.inputFields {
  margin: 15px 0;
  font-size: 16px;
  padding: 10px;
  width: 250px;
  border: 1px solid #0ab4b4;
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, 0.2);
  color: white;
  outline: none;
}

.noBullet {
  list-style-type: none;
  padding: 0;
}

#join-btn {
  border: 1px solid #0ab4b4;
  background: rgba(20, 20, 20, 0.6);
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
}
#join-btn:hover {
  background: rgba(20, 20, 20, 0.8);
  padding: 10px 80px;
}

@media only screen and (max-width: 400px) {
    .info {
        display: none;
    }
    .signupSection{
        transform:translate(-35%,-30%);
        width:500px;
    }
}

</style>

<script>
var alertRedInput = "#8C1010";
var defaultInput = "rgba(10, 180, 180, 1)";

function userNameValidation(usernameInput) {
    var username = document.getElementById("username");
    var issueArr = [];
    if (/[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/.test(usernameInput)) {
        issueArr.push("No special characters!");
    }
    if (issueArr.length > 0) {
        username.setCustomValidity(issueArr);
        username.style.borderColor = alertRedInput;
    } else {
        username.setCustomValidity("");
        username.style.borderColor = defaultInput;
    }
}

function passwordValidation(passwordInput) {
    var password = document.getElementById("password");
    var issueArr = [];
    if (!/^.{7,15}$/.test(passwordInput)) {
        issueArr.push("Password must be between 7-15 characters.");
    }
    if (!/\d/.test(passwordInput)) {
        issueArr.push("Must contain at least one number.");
    }
    if (!/[a-z]/.test(passwordInput)) {
        issueArr.push("Must contain a lowercase letter.");
    }
    if (!/[A-Z]/.test(passwordInput)) {
        issueArr.push("Must contain an uppercase letter.");
    }
    if (issueArr.length > 0) {
        password.setCustomValidity(issueArr.join("\n"));
        password.style.borderColor = alertRedInput;
    } else {
        password.setCustomValidity("");
        password.style.borderColor = defaultInput;
    }
}
</script>
</head>

<body>

<<<<<<< HEAD
<div class="signupSection"  id="signup"  >


  <div class="info" >
    <h2>Unlock your sherlock</h2>


    <i clas1s="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Infox is here</p>
  </div>
  <form   style="background:#221B22" class="signupForm" name="signupform">
=======
<div class="signupSection">
  <div class="info">
    <h2>Solve to Unlock</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Infox is here</p>
  </div>
  <form action="#" method="POST" class="signupForm" name="signupform">
>>>>>>> 76f8a4a747ac7aa2fdefddc581ae8dc38d5def85
    <h2>Sign Up</h2>
    <ul class="noBullet">
      <li>
        <label for="username"></label>
<<<<<<< HEAD
        <input type="text" class="inputFields" id="name" name="username" placeholder="Name" value="" />
=======
        <input type="text" class="inputFields" id="name" name="username" placeholder="name" value="" oninput="return userNameValidation(this.value)" required/>
>>>>>>> 76f8a4a747ac7aa2fdefddc581ae8dc38d5def85
      </li>
      <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>


<li>
        <label for="college"></label>
<<<<<<< HEAD
        <input type="text" class="inputFields" id="colg" name="college" placeholder="Your Collage name" value="" required/>
=======
        <input type="text" class="inputFields" id="college" name="college" placeholder="Your Collage name" value="" oninput="return userNameValidation(this.value)" required/>
>>>>>>> 76f8a4a747ac7aa2fdefddc581ae8dc38d5def85
      </li>


      <li>
        <label for="Course Year"></label>
<<<<<<< HEAD
        <input type="text" class="inputFields" id="year" name="year" placeholder="Course" value=""/>
      </li>
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value=""/>
      </li>
      <li  id="otp" style="display:none;">
        <label for="otp"></label>
        <input type="password" class="inputFields" id="otp2" name="otp" placeholder="OTP" value=""/>
=======
        <input type="text" class="inputFields" id="year" name="year" placeholder="Course" value="" oninput="return userNameValidation(this.value)" required/>
      </li>
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="" oninput="return passwordValidation(this.value)" required/>
      </li>
      <li  style="">
        <label for="otp"></label>
        <input type="password" class="inputFields" id="otp" name="otp" placeholder="OTP" value="" oninput="return passwordValidation(this.value)" required/>
>>>>>>> 76f8a4a747ac7aa2fdefddc581ae8dc38d5def85
      </li>



<<<<<<< HEAD
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
=======
      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Join">
      </li>
    </ul>
  </form>
</div>

</body>

</html>
>>>>>>> 76f8a4a747ac7aa2fdefddc581ae8dc38d5def85
