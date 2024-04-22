<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "stage"; 

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";


    if (isset($_POST['send'])) {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $company = $_POST["company"];
        $message = $_POST["message"];
        if (empty($name) || empty($phone) || empty($email) || empty($subject) || empty($message)) {
            echo "All fields are required";
        } else {
            $sql = "INSERT INTO contact (name, phone, email, subject, company, message)
                    VALUES ('$name', '$phone', '$email', '$subject', '$company', '$message')";
    
            if (mysqli_query($conn ,"INSERT INTO contact (name, phone, email, subject, company, message)VALUES ('$name', '$phone', '$email', '$subject', '$company', '$message')")) {
                echo "Message Sent Successfully!";
                header('Location: contact.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/service.css">
    <link rel="stylesheet" href="asset/css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Link bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
  
     <!-- START NAVBAR -->
     <nav class="navbar navbar-expand-lg  p-0" style="background: #fff;">
        <div class="container-fluid">
            <a class="navbar-brand" id="logo" style="width: 15%;" href="#">
                <img src="asset/images/logo.png" alt="" width="100%" height="100%">
            </a>
            <button style="    border-left: 1px solid #00000096;border-radius: 0;" id="btn-menu-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span >
                    <i class="bi bi-three-dots-vertical"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0 " id="menu-links">
                    <li class="nav-item">
                        <a class="nav-link active"  aria-current="page" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="services.html"   data-mdb-toggle="dropdown" aria-expanded="false" >
                        Nos Services
                        </a>
                        <div class="dropdown-menu p-0 border-0">
                            <ul >
                                <li class="p-1"><a class="dropdown-item" href="servicesDetails.html">Service Details</a></li>
                                <li class="p-1"><a class="dropdown-item" href="demenagment-cle-en-main.html">Demenagement cle en main</a></li>
                                <li class="p-1"><a class="dropdown-item" href="amenagement-maison.html">Amenagement maison</a></li>
                                <li class="p-1"><a class="dropdown-item" href="emballage-et-deballage.html">Emballage et deballage</a></li>
                                <li class="p-1"><a class="dropdown-item" href="demontage-et-remontage-des-meubles.html">Demontage et remontage des meubles</a></li>
                                <li class="p-1"><a class="dropdown-item" href="location-de-camin.html">Location de camin</a></li>
                                <li class="p-1"><a class="dropdown-item" href="garde-meuble.html">Garde- meuble</a></li>
                                <li class="p-1"><a class="dropdown-item" href="monte-meuble.html">Monte - meuble</a></li>
        
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="movingPlanner.html"  data-mdb-toggle="dropdown" aria-expanded="false">
                        Moving Planner
                        </a>
                        <div class="dropdown-menu p-0 border-0">
                            <ul >
                                <li class="p-1"><a class="dropdown-item" href="claim.html">A Propos</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="blog.html">Blog</a>
                    </li>
                </ul>
                <div id="media" class="w-100">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end align-items-center w-100 pe-4" >
                        <li class="nav-item">
                            <a class="px-2 py-2 ms-2" href="/">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="px-2 py-2 ms-2 ">
                                <i class="bi bi-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="px-2 py-2 ms-2">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="px-2 py-2 ms-2">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            
            </div>
            <div class="btn-get-a-quote">
                <button class="button-navbar-get">GET A QUOTE</button>
            </div>
        </div>
    </nav>
    <!-- END OF NAVBAR -->

    <!-- START SECTION HEADER CONTACT -->
    <section id="servises-section-header-our-services">
        <div class="container-fluid page-header mb-5 p-0" >
            <div class="container-fluid page-header-inner">
                <div >
                    <div class="row" id="mini-section">
                        <div class="col-md-8">
                            <div id="border-section">
                                <div class="flex items-center text-start mb-4">
                                    <span class="inline-block bg-orange-500 dark:bg-orange-400 h-1 w-10 mr-2"></span>
                                    <h1 class="text-5xl font-bold">Get In Touch</h1>
                                </div>
                                <h2 class="text-lg">
                                    Home
                                    <span> / </span>
                                    Contact
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <!-- END SECTION HEADER CONTACT -->


    <!-- START SECTION ABOUT -->
    <section class="py-3 py-md-5 py-xl-8 mt-5" id="contact-section-page">
        <div class="container-fluid">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-4 col-xl-4  p-0 m-0" id="image-column">
                    <iframe class="card-img-left" style="width: 100%;height: 50vh;" loading="lazy" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
                </div>
                <div class="col-12 col-lg-8 col-xl-8 card">
                    <div class="row justify-content-xl-center card-body">
                        <div class="col-12 col-xl-11 ">
                            <h5 id="sub-title-about">
                                <div>
                                    <svg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%' viewBox='0 0 24 24' fill='#ec6e31' stroke='none'>
                                        <polygon points='9.4,2 24,2 14.6,21.6 0,21.6'/>
                                    </svg>
                                    <svg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%' viewBox='0 0 24 24' fill='#ec6e31' stroke='none'>
                                        <polygon points='9.4,2 24,2 14.6,21.6 0,21.6'/>
                                    </svg>
                                </div>
                                CONTACT DETAIL
                            </h5>
                            <h2 id="title-about" class="h1 mb-3">Visit Our Office</h2>
                            <p class="mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                            </p>
                            <div class="row gy-4 gy-md-0 gx-xxl-5X" id="about-sectino-right">
                                <div class="col-12 col-md-4">
                                    <div class="d-flex">
                                        <div class="me-1">
                                            <span>
                                                <i class="fa-solid fa-location-dot"></i>
                                            </span>
                                        </div>
                                        <div>
                                        <h4 class="mb-3">Address</h4>
                                        <p class="text-secondary mb-0">
                                            Jln Cempaka Wangi 
                                            <br>
                                            No.22 Jakarta - Indonesia
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <span>
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                        </div>
                                        <div>
                                        <h4 class="mb-3">Email</h4>
                                        <p class="text-secondary mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <span>
                                                <i class="fa-solid fa-phone-volume"></i>
                                            </span>
                                        </div>
                                        <div>
                                        <h4 class="mb-3">Phone</h4>
                                        <p class="text-secondary mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="py-3 py-md-5 py-xl-8 mt-0 px-4" id="contact-section-page2">
        <div class="container-fluid card">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center card-body">
                <div class="col-12 col-lg-4 col-xl-4 ">
                    <div class="row justify-content-xl-center ">
                        <div class="col-12 col-xl-11 p-0 ">
                            <h2 id="title-about" class="h1 mb-3">We Love To Hear From You</h2>
                            <p class="mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <P id="title-social-media">
                                Follow Our Social Media
                            </P>
                            <div>
                                <ul>
                                    <li class="me-1">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </li>
                                    <li class="me-1">
                                        <i class="fa-brands fa-twitter"></i>
                                    </li>
                                    <li class="me-1">
                                        <i class="fa-brands fa-youtube"></i>
                                    </li>
                                    <li class="me-1">
                                        <i class="fa-brands fa-instagram"></i>
                                    </li>
                                    <li>
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xl-8">
                
                    <form id="contactForm" action="" method="post">
                        <div class="row mb-2">
                            <div class="form-group col-12 col-lg-4">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                <span id="nameError" class="text-danger"></span>
                            </div>
                            <div class="form-group col-12 col-lg-4">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                                <span id="phoneError" class="text-danger"></span>
                            </div>
                            <div class="form-group col-12 col-lg-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                <span id="emailError" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group col-12 col-lg-6">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                <span id="subjectError" class="text-danger"></span>
                            </div>
                            <div class="form-group col-12 col-lg-6">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="Company">
                                <span id="companyError" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-lg-12">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"></textarea>
                                <span id="messageError" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe"></div>

                        <div id="html_element" class="mt-3"></div>
                        <span id="recaptchaError" class="text-danger"></span><br>
                        <button type="submit" name="send" id="send" class="btn-section-contact my-3">SEND MESSAGE <i class="fa-solid fa-envelope-open-text"></i></button>
                    </form>

                    <script>
                        var onloadCallback = function() {
                            grecaptcha.render('html_element', {
                            'sitekey' : '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI'
                            });
                        };
                        document.getElementById('send').addEventListener('click', function(e) {
                            
                            let name = document.getElementById('name').value;
                            let phone = document.getElementById('phone').value;
                            let email = document.getElementById('email').value;
                            let subject = document.getElementById('subject').value;
                            let company = document.getElementById('company').value;
                            let message = document.getElementById('message').value;
                            let errorName = document.getElementById('nameError');
                            let errorPhone = document.getElementById('phoneError');
                            let errorEmail = document.getElementById('emailError');
                            let errorSubject = document.getElementById('subjectError');
                            let errorCompany = document.getElementById('companyError');
                            let errorMessage = document.getElementById('messageError');

                            var recaptchaResponse = grecaptcha.getResponse();
                            if (!recaptchaResponse) {
                                e.preventDefault(); 
                                document.getElementById('recaptchaError').innerHTML = 'Please complete the reCAPTCHA';
                                return;
                            } else {
                                document.getElementById('recaptchaError').innerHTML = '';
                            }
                            
                            if (name.trim() === '') {
                                e.preventDefault(); 
                                errorName.innerHTML = 'Please enter your name';
                            }else{
                                errorName.innerHTML='';
                            }
                            if (phone.trim() === '') {
                                e.preventDefault(); 
                                errorPhone.innerHTML = "Please enter your phone number";
                            }else{
                                errorPhone.innerHTML = '';
                            }
                            if (email.trim() === '') {
                                e.preventDefault(); 
                                errorEmail.innerHTML = 'Please provide an email address';
                            }else{
                                errorEmail.innerHTML = '';
                            }
                            if (subject.trim() === '') {
                                e.preventDefault(); 
                                errorSubject.innerHTML = 'Please write the subject of your message';
                            }else{
                                errorSubject.innerHTML = '';
                            }      
                            if (company.trim() === '') {
                                e.preventDefault(); 
                                errorCompany.innerHTML = 'Please tell us about your company';
                            }else{
                                errorCompany.innerHTML='';
                            }
                            if (message.trim().length < 5) {
                                e.preventDefault(); 
                                errorMessage.innerHTML = 'Your message must be at least 5 characters long';
                            }else{
                                errorMessage.innerHTML= '';
                            }
                        });
                    </script>


                </div>
            </div>
        </div>
    </section>   
    
    <!-- END SECTION ABOUT -->


    <!-- START SECTION MOVE -->
    <section class="move mt-5" id="move">
        <header class="section__container_move header__container_move">
            <div class="header__image__container_move row">
                
                <div class="header__content_move col-12 col-lg-6 d-flex align-items-center">
                    <div>
                        <h3 class="move-headline">
                            Have A Plan To Move?
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                        </p>
    
                        <div >
                            <button class="move-page-btn">GET A QUOTE</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="asset/images/handsome.png" alt="" class="img">
                </div>
            </div>
        </header>
    </section>
    <!-- END SECTION MOVE -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container-fluid py-4">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="asset/images/logo.png" alt="" width="180" class="mb-3">
                <p class="font-italic text-muted">
                    Hendrerit neque sem volutpat ornare bibendum class euismod. 
                    Ultricies sociosqu elit rhoncus imperdiet.
                </p>
            <ul class="list-inline mt-4" id="footer-media-icon">
                <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="bi bi-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="bi bi-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="bi bi-youtube"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="bi bi-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="bi bi-whatsapp"></i></a></li>
            </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 our-services">
            <h6 class=" font-weight-bold mb-4 title-link-footer">Our Services</h6>
            <ul class="list-unstyled mb-0">
                <li class="mb-2 px-2"><a href="#" >International Moves</a></li>
                <li class="mb-2 px-2"><a href="#" >Domestic Moves</a></li>
                <li class="mb-2 px-2"><a href="#" >Office Moves</a></li>
                <li class="mb-2 px-2"><a href="#" >Secure Storage</a></li>
                <li class="mb-2 px-2"><a href="#" >Vehicle Transfer</a></li>
            </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 our-nework">
            <h6 class=" font-weight-bold mb-4 title-link-footer">Our Network</h6>
            <ul class="list-unstyled mb-0">
                <li class="mb-2 px-2"><a href="#" class="text-muted">Asia</a></li>
                <li class="mb-2 px-2"><a href="#" class="text-muted">Africa</a></li>
                <li class="mb-2 px-2"><a href="#" class="text-muted">Europe</a></li>
                <li class="mb-2 px-2"><a href="#" class="text-muted">France</a></li>
                <li class="mb-2 px-2"><a href="#" class="text-muted">Middle East</a></li>
            </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0">
            <h6 class=" font-weight-bold mb-4 title-link-footer">Subscribe Newsletter</h6>
            <p class="text-muted mb-4">Subscribe to our Newsletter to get important news, amazing offers & inside scoops:</p>
            <div class="p-1 rounded border">
                <div class="form-footer row">
                <div  class="col-md-12 col-lg-8">
                    <input type="email" placeholder="Enter your email address">
                </div>
                <div class="col-md-12 col-lg-4 d-flex align-items-center mt-1">
                    <div>
                        <button >SIGN UP</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Copyrights -->
    <div class="py-1 Copyrights ">
        <div class="container-fluid  d-flex flex-wrap justify-content-between align-items-center my-4" style="font-size: 12px;    font-weight: 400;">
            <div class="col-md-4 d-flex align-items-center">
                <p class="mb-3 mb-md-0 ">Copyright © 2022 <span>Moveto</span>, All Rights Reserved. Powered By <span>Moxcreative</span></p>
            </div>
          
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex" id="list-security">
                <li class="ms-3 px-2"><a  href="#">Terms of Use</a></li>
                <li class="ms-3 befour px-2"><a  href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
    <script src="asset/js/script.js"></script>
</body>
</html>