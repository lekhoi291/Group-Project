<html>
<head>
    <title> User Login</title>
    <link rel="stylesheet" type="text/css" href="mainbody.css">
    <link rel="stylesheet" type="text/css" href="loginheader.css">
    <link rel="stylesheet" type="text/css" href="signinsignup.css">
    <link rel="icon" href="../img/Polar_Bear-512.png">
    <script src="../Js/jquery-3.3.1.min.js"></script>
    <script src="../Js/jquery-3.3.1"></script>
</head>
<body>
<div class="loginheadercontain">
        <a href="../Index.php"><div class="dotcontain backtohomepage">
            <img src="../img/047_-_homepage-512.png">
        </div></a>
        <div class="backtohomepage">
            <a href="../Index.php">Homepage</a>
        </div>
    </div>
    
</div>

<div class="login-wrap">
    <div class="login-html">
        <div class="containerlogin">
        <div class="avatarcontainer avatar">
            <img src="../img/avatar.jpg">
        </div>
    </div>
        <div>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
            <label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up">
            <label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="validation.php" method="post">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name="user" class="input" placeholder="Enter Your Name" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Enter Your Password" required>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
				        <label for="tab-2">Let's join our community!</a>
			        </div>
                    </form>
                </div>
                <div class="sign-up-htm">
                <script src="dectect.js"></script>
                    <form action="registration.php" method="post" name="signup">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user_signup" type="text" name="user" class="input" placeholder="Enter Your Name" required>
                        <div id="feedback"></div>
                    </div>
                    <div class="group">
                        <label for="user" class="label">Password</label>
                        <input id="pass" name="password" type="password" class="input" data-type="password" pattern=".{6,}" placeholder="Enter Your Password" required title="6 characters minimum">
                    </div>
                    <div class="group">
                        <label for="user" class="label">Phone number</label>
                        <input type="tel" name="phone" class="input"placeholder="Enter Your Phone Number">
                    </div>
                    <div class="group">
                        <label for="user" class="label">Email</label>
                        <input type="email" name="mail" class="input" placeholder="Enter Your Email">
                    </div>
                    <div class="group">
				        <input type="submit" class="button" name="register" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
				        <label for="tab-1">Already Member?</a>
			        </div>
                    </form>
               </div>
           </div> 
        </div>    
    </div>
</body>
</html>