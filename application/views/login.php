<!DOCTYPE html>
<html>  
<head>
<title>Subscribe</title>
  <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-signin-client_id" content="518071318205-jcrn9s2g82ptqef45h5ctjsqhoj84nvr.apps.googleusercontent.com">
      
      <meta name="Keywords" content="Notepad,android app,android studio,notepad,sqlite,SQLite,XML,Android,Java,Web development,tutorials,programming,training,learning,primer,lessons,references,examples,source code,demos,tips">
      <meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use android studio,java,SQLite,sqlite,android and XML.">
    <link href="/css/login/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="/css/login/login.css" rel='stylesheet' type='text/css' />
    <!--webfonts-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<!--//webfonts-->
      <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

      <script type="text/javascript">
        // window.onload=check;

          function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
          });
        }
    function onSuccess(googleUser) {
      var profile = googleUser.getBasicProfile();
      console.log('Logged in as: ' + profile.getName());
      console.log('Email: ' + profile.getEmail());
      var user=profile.getName();
      var Email=profile.getEmail();
      $.post("/register",
      {
        name:user,
        email:Email
      },
      function(data,status){
        alert("Registered with google.");
      });
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 300,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

</head>
<body>

 <h1 style="">Registration Form</h1>
 <div class="w3l_frm">
 <div class="container">
 <h2 style="color: rgb(255, 0, 102);">Registration Form</h2>
      
    <div class="header-social wthree">
    <ul>
    <li>
      <center>
        <a href="#popup1" class="m"> <span class=""></span>Register With Email</a>
      </center>
    </li>
    </ul>

    </div>
    <div class="header-social wthree">
      <div class="line-mid">
        <h4 style="color: rgb(255, 0, 102);">or</h4>
      </div>
    </div>
    <div class="header-social wthree">
        <ul>
      <center><li><div id="my-signin2"></div></li></center>
    </ul>
    </div>
      <br>
    <div class="header-social wthree">
    <h3>By Signing I agree to the <a href="#">Terms and Conditions</a></h3>
    <br>
    <center><a href="/home" class="home"><< Home</a></center>
  </div>
   </div>
   </div>
   <div id="popup1" class="overlay">
    <div class="popup">
        <form action="/register" method="post">
          <div class="form-group">
                  <input type="text" name="name" placeholder="Full Name" required="" autofocus=""> 
          </div>
          <div class="form-group">
                  <input type="email" name="email" placeholder="Email" required="" autofocus=""> 
          </div>
                  <input type="submit" value="Register">
                </form>
      <a class="close" href="#">&times;</a>
      
    </div>
  </div>
  <div id="popup" class="overlay">
    <div class="popup">
        <h2>Registered Successfully !</h2>
      <a class="close" href="#">&times;</a>
    </div>
  </div>
  <div id="popup2" class="overlay">
    <div class="popup">
        <h2>Already Registered !</h2>
      <a class="close" href="#">&times;</a>
    </div>
  </div>
  <div class="copyright">
    <p>&copy; 2018 AKSR Registration Form . All rights reserved</p>
  </div>
</body>
</html>