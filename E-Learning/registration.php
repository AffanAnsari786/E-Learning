<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    
    <section class="container">
        <div class="cut-icon">
            <a href="./index.php">
                <i class="fa-solid fa-square-xmark"></i>
            </a>
        </div>
        <div class="transLeft">
            <form method="POST" action="./login.php">
                <h1 class="adminHeader"> <span style="color: black;">Student</span> Login</h1>
                <div class="name-field adminUserid">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username" name="email" required>
                </div>
                <div class="pass-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="remember-pass">
                    <div class="pass">
                        <p><a href="#">Forget Password?</a></p>
                    </div>
                </div>
                <div class="signInOut-btn sigin_In">
                    <button>Sigin in</button>
                </div>
                <div class="account-toggle">
                    <p>Don't have an account? Click <a href="#" class="singUp-btn" id="singUpToggle">Here</a></p>
                </div>
            </form>
        </div>

        <div class="transRight">
            <form method="POST" action="./signup.php">
                <h1>Sign Up</h1>
                <div class="name-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username" name="name"required>
                </div>
                <div class="name-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="pass-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="pass-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" name="cpassword" required>
                </div>
                <div class="signInOut-btn sign_Up">
                    <button><a style="color: black">Sigin Up</a></button>
                </div>
                <div class="account-toggle">
                    <p>Already have an account!!? Click <a href="#" class="singUp-btn" id="singInToggle">Here</a></p>
                </div>
            </form>
        </div>

    </section>

    <div class="login-option">
            <div class="cut-icon">
                <a href="index.php">
                    <i class="fa-solid fa-square-xmark"></i>
                </a>
            </div>
            <div class="head">
              <h3>Log in as</h3>
            </div>
            <div class="btn1 admin-btn">
              <button value="admin">Admin</button>
            </div>
            <div class="btn1 student-btn">
                <button value="student">Student</button>
            </div>
            <div class="end-para">
              <p>Select from the above option</p>
          </div>
    </div>

    
    <script src="registration.js"></script>
</body>
</html>