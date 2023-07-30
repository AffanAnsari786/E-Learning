<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $login = true;
}else{
  $login = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Websites</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="view">

        <div class="header-top">
            <header>
                <nav>
                    <div class="logo">
                        <img src="images/logo1.jpg" class="logo-img">
                    </div>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#courses">Courses</a></li>
                        <li><a href="#testimonial">Testimonial</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <?php
            if(!$login){
             echo "<a href=./registration.php class=btn>Login</a>";
            }
            if($login){
              echo "<a href=./logout.php class=btn>Logout</a>";
            }
            ?>
                   
                        <!-- <a class="btn" href="registration.html">Log in</a> -->
                    </ul>
                    <div class="menu">
                        <i class="fa-solid fa-bars"></i>
                      </div>
                </nav>
            </header>
            <div class="topmenu hide">
                <i class="fa-solid fa-circle-xmark cancel"></i>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#testimonial">Testimonial</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <a class="btn" href="registration.html">Log in</a>
                </ul>
              </div>

        </div>

        
        <!-- content Section -->
        <section class="content-section" id="home">
            <div class="content-box">
                <div class="left-box">
                    <p class="ready">Are you ready to learn?</p>
                    <h1>Learn with fun<br>on <span>any schedule</span></h1>
                    <p class="left-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dolor,
                        voluptatum libero et inventore vero dolorem recusandae laboriosam error minima officiis modi
                        sint, corrupti odit perspiciatis! At sunt officiis perspiciatis vero, quae id porro ipsa,
                        suscipit impedit atque mollitia labore.</p>
                    <a href="#" class=" btn started">Get Started</a>
                </div>
                <div class="right-box">
                    <img src="images/welcome1.png" alt="header images" class="right-img">
                </div>
            </div>
        </section>
    </div>

    <div class="main">
    <div id="feature-head">
        <h3>Features</h3>
    </div>
    <section class="features" id="features">
        <div class="boxes">
            <img src="images/topic.jpg" alt="book images">
            <h2>1500+ Topic</h2>
            <p>Learn Anything</p>
        </div>
        <div class="boxes al-shadows">
            <img src="images/student.jpg" alt="book images">
            <h2>1800+ Student</h2>
            <p>Learn Anything</p>
        </div>
        <div class="boxes">
            <img src="images/test_taken.jpg" alt="book images">
            <h2>9k+ Test Tokens</h2>
            <p>Learn Anything</p>
        </div>
        <div class="boxes">
            <img src="images/doubt.jpg" alt="book images">
            <h2>Live Doubt</h2>
            <p>Learn Anything</p>
        </div>
    </section>

    <!-- online courses -->
    <div class="course-top" id="courses">
        <div class="online-title">
            <h3>Our Most Popular Online Courses</h3>
        </div>

        <section class="online-courses">
            <div class="online-box">
                <img src="images/web.jpg" alt="">
                <h2>Web Development</h2>
                <p>Designation</p>
                <a href="#" class="btn started courses-btn">Buy Courses</a>
                <div class="bottom-feature">
                    <div class="left-date">
                        <img src="images/date.png" style="width: 20px; height: 20px" alt="">
                        <p>Start 30 July 2023</p>
                    </div>
                    <div class="right-stu">
                        <img src="images/seat.png" style="width: 20px; height: 20px" alt="">
                        <p>60 Seats</p>
                    </div>
                </div>
            </div>

            <div class="online-box">
                <img src="images/android.jpg" alt="">
                <h2>Android Development</h2>
                <p>Designation</p>
                <a href="#" class="btn started courses-btn">Buy Courses</a>
                <div class="bottom-feature">
                    <div class="left-date">
                        <img src="images/date.png" style="width: 20px; height: 20px" alt="">
                        <p>Start 30 July 2023</p>
                    </div>
                    <div class="right-stu">
                        <img src="images/seat.png" style="width: 20px; height: 20px" alt="">
                        <p>60 Seats</p>
                    </div>
                </div>
            </div>

            <div class="online-box">
                <img src="images/aws.jpg" alt="">
                <h2>AWS Course</h2>
                <p>Designation</p>
                <a href="#" class="btn started courses-btn">Buy Courses</a>
                <div class="bottom-feature">
                    <div class="left-date">
                        <img src="images/date.png" style="width: 20px; height: 20px" alt="">
                        <p>Start 30 July 2023</p>
                    </div>
                    <div class="right-stu">
                        <img src="images/seat.png" style="width: 20px; height: 20px" alt="">
                        <p>60 Seats</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- testimonial section -->
    <section class="testimonial" id="testimonial">
        <div class="test-title">
            <h3>Testimonial</h3>
        </div>
        <div class="testimonial-box">
            <img src="images/testimonial_img.jpg" style="width: 120px; height: 120px; border-radius: 50%;" alt="">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat nihil, eos saepe aliquid veritatis vel
                eligendi dolor consectetur, repudiandae excepturi nostrum iste tenetur nobis provident quas soluta rem
                similique inventore tempore perferendis. Tempora itaque est quisquam numquam voluptatum sunt accusamus
                aut? Laudantium atque doloremque iste eos tempora dolorem natus ea!</p>
        </div>
    </section>

    <!-- contact section -->
    <section class="contact" id="contact">
        <h1 class="heading">Contact Us!</h1>

        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" placeholder="Email Subject">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <div class="contactBtnContainer">
                <input type="submit" value="Send Message" class="contact-btn">
            </div>
        </form>
    </section>

    <!-- Footer Section -->
    <footer id="footer">
        <div class="footer-box">
            <div class="footer-about">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dignissimos commodi tenetur labore
                    debitis quisquam corrupti dolorum nesciunt nemo expedita.</p>
            </div>

            <div class="footer-links">
                <h3>Courses</h3>
                <a href="#">Graphic Designing</a>
                <a href="#">Web Development</a>
                <a href="#">Business</a>
                <a href="#">Marketing</a>
                <a href="#">Featured Engineering</a>
            </div>

            <div class="footer-links">
                <h3>Terms</h3>
                <a href="#">Graphic Designing</a>
                <a href="#">Web Development</a>
                <a href="#">Business</a>
                <a href="#">Marketing</a>
                <a href="#">Featured Engineering</a>
            </div>

            <div class="footer-links">
                <h3>Usefull Links</h3>
                <a href="#">Graphic Designing</a>
                <a href="#">Web Development</a>
                <a href="#">Business</a>
                <a href="#">Marketing</a>
                <a href="#">Featured Engineering</a>
            </div>

        </div>
        <p class="end">Copyright &copy; 2023 AffanAnsari</p>
        <a href="#home" class="arrow_up"><i class="fa-solid fa-arrow-up"></i></a>
      
    </footer>

    </div>
 
    

    <script src="script.js"></script>
</body>

</html>