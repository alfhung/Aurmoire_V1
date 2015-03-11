<!DOCTYPE html>
    
<html>
    
<head>

    <title>Aurmoire | Premium Fashion Club Services for Busy Professionals</title>
    
<!-- Meta tags -->
    <meta name="description" content="Join the Club. Enjoy personal styling, personal shopping & personal cleaning for a complete fashion experience" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
        
<!-- CSS styles -->

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    
<!-- JS scripts -->
    
    
</head>
    
<body>

<div id="wrapper">
    
<!-- Header & Navigation Section -->
    <div class="container">
        <div class="row header-box">
            <!-- Logo -->
            <a href="index.php">
                <img src="/images/aurmoire_logobeta1.png" alt=""/>
            </a>
            <!-- Sample Trial Link -->
            <div class="pull-right">
                <a href="#register">
                    <button type="button" class="btn btn-warning">Sign Up</button>
                </a>
            </div>
        </div>
    </div>

<!-- Line Section Break -->
<hr>
        
<!-- Content Section -->

    <!-- Splash Image -->
    <div class="splash">
        <div class="container">
            <div class="row">
                <!-- image -->
                <div class="col-xs-7">
                    <img src="/images/splash_img2.png">
                </div>
                <!-- description -->
                <div class="col-xs-5">
                    <!-- short tagline -->
                    <h3>Premium Fashion Club Services for Busy Professionals</h3>
                    <p>Personal Styling</p>
                    <p>Personal Shopping</p>
                    <p>Personal Dry Cleaning</p>
                    <br>
                    <!-- link to form -->
                    <a href="#register">
                        <button type="button" class="btn btn-warning">Get Your Sample Trial!</button>
                    </a>
                </div>
            </div>    
        </div>
    </div>

<!-- Line Break -->
<!--hr-->
    <div class="thumbnails">
        <!-- Club Description -->
        <h2>Aurmoire Provides a Comprehensive Fashion Experience</h2>

    <!-- Thumbnails -->
        <!-- Image -->
        <!-- Title -->
        <!-- Description -->
        <div class="container">
            <div class="row">
                <!-- Personal Styling -->
                <div class="col-xs-4">
                    <img src="/images/styling_icon.png">
                    <h3>Personal Styling</h3>
                    <p>
                        We prepare your wardrobes ready to wear for any occasion anywhere.
                        You will never need to worry about what to wear.
                        Even better, you will never have to wear the same wardrobes.
                    </p>
                </div>
                <!-- Personal Shopping -->
                <div class="col-xs-4 separator">
                    <img src="/images/shopping_icon.png">
                    <h3>Personal Shopping</h3>
                    <p>
                        We bring fashion to you. We work with you to
                        discover styles that fit your personality.
                        You no longer need to waste your precious time on checkout lines or browsing online.
                    </p>
                </div>
                <!-- Personal Cleaning -->
                <div class="col-xs-4">
                    <img src="/images/cleaning_icon.png">
                    <h3>Personal Dry Cleaning</h3>
                    <p>
                        We take care of the cleaning responsibilities.
                        Your wardrobes are delivered to local dry cleaners for supreme care.
                        No more concerns for you over piles of clothes to clean.
                    </p>
                </div>
            </div>
        </div>
    </div>

<!-- Line Break -->
<hr>
    
    <div class="trial">
        <!-- Trial Details -->
        <div class="container">
            <h2 class="text-center">Sample Trial Details</h2>
            <div class="row">
                <div class="col-xs-8">
                    <!-- short messages -->
                    <h4>It's more than just a service</h4>
                    <p>
                        Our ultimate mission is to create your influential image.
                        Let us take care of your fashion needs,
                        so you can devote more time doing what's important to you
                        with the people that matter to you.
                        We strive to make a difference in your life.
                        Through our club services, you are also part of an exclusive community.
                        If you are not ready to commit,
                        try out our services for free with our sample trial and learn about us.
                    </p>
                    
                    <h4>What you get from our sample trial</h4>
                    <ul>
                        <li>Personal style profile</li>
                        <li>Sample trial of our personal styling service</li>
                        <li>Sample trial of either our personal shopping or our personal dry cleaning service</li>
                        <li>Introduction to our premium packages</li>
                        <li>Introduction to our club</li>
                    </ul>
                    <p>
                        Our sample trial runs for only <strong>1</strong> hour
                        and it's <strong>FREE</strong>.
                        When you place your request, share with us your needs and your preferred method of contact.
                        We will then contact you to confirm an appointment.
                    </p>
                    
                    <h4>Limited Time Special Offer</h4>
                    <p>
                        We are offering a <strong>LIFETIME</strong> discount if you sign up after the trial period.
                        This offer is only available to a limited number of members.
                        If you invite a friend to join, you get an additional discount!
                    </p>
                </div>
            
                <div class="col-xs-4">
                    <div class="trial-form">
                        <!-- Trial Form -->
                        <!-- display text -->
                        <h4>Sample Trial Registration</h4>

                        <!-- php form manipulation code -->
                        <?php
                            include('signup.php');
                        ?>

                        <!-- internal page jump from links -->
                        <a name="register"></a>
                        
                        <!-- form -->
                        <form method="post" action="index.php">
                            <input type="text" name="first" id="first" value="<?php echo $_POST['first']; ?>" placeholder="First Name" maxlength="25" />
                            <input type="text" name="last" id="last" value="<?php echo $_POST['last']; ?>" placeholder="Last Name" maxlength="25" />
                            <input type="email" name="email" id="email" value="<?php echo $_POST['email']; ?>" placeholder="Email Address" maxlength="25" />
                            <input type="tel" name="phone" id="phone" value="<?php echo $_POST['phone']; ?>" maxlength="15" placeholder="Phone Number"/>
                            <textarea type="text" name="message" id="message" Placeholder="Your Request"><?php echo $_POST['message']; ?></textarea>
                            <center>
                                <p>
                                    By registering, you agree to Aurmoire's
                                    <a href="/includes/terms.html" target="_blank">Terms</a> and
                                    <a href="/includes/privacy.html" target="_blank">Private Policy</a>.
                                </p>
                                <button type="submit" name="submit" class="btn btn-warning">Sign Up</button><!-- Submit -->
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- Line Section Break -->
    <hr>
    
<!-- Footer Section -->
    <div class="container">
        <div class="row">
            <!-- Copyright -->
            <!-- Privacy -->
            <!-- Terms -->
            <div class="col-xs-6">
                <p class="credit">&copy; Copyright 2013 Aurmoire, Inc. &middot; <a href="/includes/privacy.html" target="_blank">Privacy</a> &middot; <a href="/includes/terms.html" target="_blank">Terms</a></p>
            </div>
        
            <div class="col-xs-6">
                <p class="credit pull-right">For general inquiries contact - ahung@aurmoire.com</p>
            </div>
        </div>
    </div>

</div>

<!-- JS Scripts -->
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-44017563-1', 'aurmoire.com');
  ga('send', 'pageview');
</script>

</body>
</html>