<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vu Aluma</title>
    <!-- External Stylesheets -->
    <link rel="stylesheet" href="css/header_navigationbar.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- PHP Includes -->
    <?php include_once "setting/index_navigation.php"; ?>
    <!-- Custom Styles for the Footer -->
    <style>
        footer {
            background-color: #050119;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Header Section -->
<header>
    <nav>
        <!-- Add your header navigation content here -->
    </nav>
</header>

<!-- Main Content Section -->
<div id="welcome">

    <!-- Image Slideshow -->
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 6</div>
            <img class="img" src="pictures/hblock.jpg" alt="Image 1" width="100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <img class="img" src="pictures/friends.webp" alt="Image 2" width="100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 6</div>
            <img class="img" src="pictures/friends2.webp" alt="Image 3" width="100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <img class="img" src="pictures/UMP.webp" alt="Image 3" width="100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <img class="img" src="pictures/alumni7.webp" alt="Image 3" width="100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6 / 6</div>
            <img class="img" src="pictures/alumni9.webp" alt="Image 3" width="100%">
        </div>

        <!-- Navigation Arrows -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- Image Slide Dots -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <!-- Welcome Text -->
    <p class="p1">Welcome to Vignan Alumni</p>
    <p class="p2">Let's keep in touch.. <br><br> </p>
    <p class="p3">Are you missing them? Your coursemates, your squad, your friends who stayed up all night
        with you for assignments, gatherings, events, and so on. Come and join Vignan Alumni to keep in touch with
        your friends that you miss!<br><br>
        Welcome back dearest alumni. Genuinely, one of our greatest assets is our global network of alumni. This page
        is to celebrate your achievements and provides you access to our alumni community. Let's discover how to get
        involved and connect with the University and its supporters. Learn about the events we hold, and our services
        for Vignan alumni. We’re currently in touch with over all of our alumni from across and the world,
        and we’re still looking for those we’ve lost contact with. Do you currently receive
        mailings from us? Have you recently changed address and need to let us know? Vignan Alumni
        maintains a database of thousands of Vignan graduates, but we do not have accurate
        contact details for everyone. Please help us to keep in touch with you.
    </p>
    <br><br><br>
    <!-- Horizontal Line -->
    <hr class="hr" color="#050119" size="4"/>
</div>



<!-- Footer Section -->
<footer>
    <p>&copy; 2023 Vignan Alumni. All rights reserved.</p>
    <!-- Add more footer content as needed -->
</footer>

<!-- External JavaScript -->
<script src="javascript/index.js"></script>

<!-- Automatic Slideshow Script -->
<script>
    // Set the interval for automatic sliding in milliseconds (e.g., 5000 ms = 5 seconds)
    var slideInterval = 5000;

    // Function to automatically advance slides
    function autoSlide() {
        plusSlides(1);
    }

    // Set an interval to call the autoSlide function
    var autoSlideInterval = setInterval(autoSlide, slideInterval);

    // Pause automatic sliding on mouseover
    document.getElementById('welcome').addEventListener('mouseover', function () {
        clearInterval(autoSlideInterval);
    });

    // Resume automatic sliding on mouseout
    document.getElementById('welcome').addEventListener('mouseout', function () {
        autoSlideInterval = setInterval(autoSlide, slideInterval);
    });
</script>

</body>
</html>
