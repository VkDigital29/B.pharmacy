<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/edustyle.css">

</head>
<body>
    <script src="loaders.js" type="text/javascript"></script>
<div class="container">

<header>

    <a href="#" class="logo">B.Pharmacy<span>Books & Notes</span></a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="books.html">Books</a>
        <a href="notes.html">Notes</a>
        <a href="contact.html">Contact</a>
    </nav>  
</header>
<img src="https://allvedawisdom.files.wordpress.com/2022/12/cropped-b.-pharmacy-books-notes.png" class="center">
<h1 class="heading">contact us</h1>

<!-- contact section  -->

<section class="contact">

<div class="image">
    <img src="img/contact-img.svg" alt="">
</div>

<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- footer section  -->

<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="index.html">Home</a>
            <a href="books.html">Books</a>
            <a href="notes.html">Notes</a>
            <a href="contact.html">Contact</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
           <p> <i class="fas fa-phone"></i> +91-8378836293 </p>
           <p> <i class="fas fa-envelope"></i> kulkarnivishal308@gmail.com </p>
        </div>

    </div>

    <div class="credit"> created by <span> VkDigital </span> | all rights reserved </div>

</section>
</div>















<!-- custom js file link -->
<script src="eduscript.js"></script>

</body>
</html>
