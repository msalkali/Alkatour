<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book</title>

    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

<body>
    <header >
    
        <a id="menu-btn" class=" fas fa-bars"></div>

        <a href="index.html" class="logo"><span>ALKA</span>tour </a>

        <nav class="nav_bar">
            <a href="index.html">home</a>
            <a href="book.html">book</a>
            <a href="places.html">places</a>
            <a href="packages.html">packages</a>
            <a href="services.html">our-services</a>
            <a href="gallary.html">gallary</a>
            <a href="contact.html">contact</a>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" method="" class="search-container">
            <input type="search" id="search-bar" placeholder="search...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>
  
    <div class="login-container">

        <i class="fas fa-times" id="form-close"></i>
        <form action="book_form.php" method="post">
            <h3>Login</h3>
            <label for="email">Email</label>
            <input type="email" class="box" placeholder="Enter email...." required>
            <label for="psw">Password</label>
            <input type="password" id="psw" name="psw"
                title="invalid, password should have atleast a number, uppercase and atleast 6 or more characters"
                class="box" placeholder="Enter password...." required>
            <input type="submit" value="Login" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember user</label>
            <p>i dont have an account <a href="#">click to reg..</a> </p>
        </form>
    </div>


    <div id="message">
        <h4>Password must contain the following requirements</h4>
        <p id="number" class="invalid"><b>number</b></p>
        <p id="length" class="invalid">minimum <b>6 characters</b></p>
        <p id="letter" class="invalid"> <b> uppercase</b> </p>

    </div>


    <section class="book">
        <h1 class="heading">
            <span>B</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>t</span>
            <span>o</span>
            <span>u</span>
            <span>r</span>
            <span class="space"></span>
            <span>s</span>
            <span>i</span>
            <span>t</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="book-form">
            
            <form action="book_form.php" method="post" class="book-form">
                <div class="inputbox">
                    <span>name :</span>
                    <input type="text" placeholder="enter name.." name="name" required>
                </div>
                <div class="inputbox">
                <span>email :</span>
                    <input type="email" placeholder="enter email.." name="email" required>
                </div>

                <div class="inputbox">
                <span>number :</span>
                    <input type="number" placeholder="enter number.." name="number" required>
                </div>
                <div class="inputbox">
                <span>guests :</span>
                    <input type="number" placeholder="enter number.." name="guests" required>
                </div>

                <div class="inputbox">
                <span>arriving :</span>
                    <input type="date" name="arriving" required>
                </div>
                <div class="inputbox" >
                <span>leaving :</span>
                    <input type="date" name="leaving" required>
                </div>
                <input type="submit" class="btn" value="book now" name="send" required>
            </form>

        </div>

    </section>






    <section class="footer">

<div class="f-container">
    <div class="f">

        <h3>Links</h3>
        <a href="index.html"> <i class="fas fa-angle-right"></i> home</a>
        <a href="book.html"><i class="fas fa-angle-right"></i>book</a>
        <a href="places.php"><i class="fas fa-angle-right"></i>places</a>
        <a href="packages.html"><i class="fas fa-angle-right"></i>packages</a>
        <a href="services.html"><i class="fas fa-angle-right"></i>our-services</a>
        <a href="gallary.html"><i class="fas fa-angle-right"></i>gallary</a>
        <a href="contact.html"><i class="fas fa-angle-right"></i>contact</a>
    </div>

    <div class="f">

        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>policies</a>
        <a href="#"><i class="fas fa-angle-right"></i>tearms and conditions</a>
        <a href="#"><i class="fas fa-angle-right"></i>our-services</a>
       
    </div>
    <div class="f">

        <h3>Contact info</h3>
       <a href="#"><i class="fas fa-phone"></i>+2348144409971</a>
       <a href="#"><i class="fas fa-envelope"></i>sadeeqalcarly@gmail.com</a>

    </div>

    <div class="f">

        <h3>Follow us</h3>
        <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i> linkedIn</a>
        <a href="https://twitter.com/home"><i class="fab fa-twitter"></i> Twitter</a>

    </div>

</div>

<h1 class="cred">Created by <span> Eng.Abubakar Alkali </span> | all rights reserved </h1>

</section>


    <script src="index.js"></script>
</body>

</html>