<?php 
  $title = "Booking";
  // this helps to eliminate CSS caching issues
  $lastModTime = filemtime("style.css"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunardo Cinema</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= $lastModTime ?>">
    <script src='../wireframe.js'></script>
</head>
<body>
    <header id="head">
        <div class="logo-title-container">
            <img src="logo-board-wide-fade.jpg" alt="Lunardo Cinema Logo">
        </div>
    </header>
    <nav class="navbar nav-curve">
        <ul class="navbar">
            <li class="navbar" style="float:left"><a href="index.php#head"><h1 class="nav-title">Lunardo Cinema</h1></a></li>
            <li class="navbar navbar-buttons"><a href="index.php#now-showing">Now Showing</a></li>
            <li class="navbar navbar-buttons"><a href="index.php#seats-prices">Seats & Prices</a></li>
            <li class="navbar navbar-buttons"><a href="index.php#about-us">About Us</a></li>
        </ul>
    </nav>
    <main>
        <section id="booking-form">
            <h2 class="Heading-title">Book Your Movie Tickets</h2>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OAZWXUkrjPc"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <form action="" method="post" class="movie-form">
                <div class="synopsis">
                    <h3>Napoleon</h3>
                    <p>A look at the military commander's origins and his swift, ruthless climb to emperor, viewed through the prism of his addictive and often volatile relationship with his wife and one true love, Josephine.</p>
                </div>
                <input type="hidden" name="movie" value="ACT">

                <div class="session-buttons">
                    <input type="radio" id="monTue" name="day" value="MON_TUE" data-pricing="FULL" hidden>
                    <label for="monTue" class="session-label">Mon - Tue: 9pm</label>
        
                    <input type="radio" id="wedFri" name="day" value="WED_FRI" data-pricing="DISC" hidden>
                    <label for="wedFri" class="session-label">Wed - Fri: 9pm</label>
        
                    <input type="radio" id="satSun" name="day" value="SAT_SUN" data-pricing="FULL" hidden>
                    <label for="satSun" class="session-label">Sat - Sun: 6pm</label>
                </div>
                <div class="seat-selection">
                    <!-- Standard Adult Seats -->
                    <p>Standard Adult Seats</p>
                    <select name="seats[STA]" data-FULL="21.5" data-DISC="16">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
        
                    <!-- Standard Concession Seats -->
                    <p>Standard Concession Seats</p>
                    <select name="seats[STP]" data-FULL="19.0" data-DISC="14.5">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
        
                    <!-- Standard Child Seats -->
                    <p>Standard Child Seats</p>
                    <select name="seats[STC]" data-FULL="17.5" data-DISC="13.0">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
        
                    <!-- First Class Adult Seats -->
                    <p>First Class Adult Seats</p>
                    <select name="seats[FCA]" data-FULL="31.0" data-DISC="25.0">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
        
                    <!-- First Class Concession Seats -->
                    <p>First Class Concession Seats</p>
                    <select name="seats[FCP]" data-FULL="28.0" data-DISC="23.5">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
        
                    <!-- First Class Child Seats -->
                    <p>First Class Child Seats</p>
                    <select name="seats[FCC]" data-FULL="25.0" data-DISC="22.0">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                
                <!-- Customer Details Fields -->
                <div class="customer-details">
                    <div>
                        <label for="customerName">Full Name:</label>
                        <input type="text" id="customerName" name="customer[name]" required>
                    </div>
                    <div>
                        <label for="customerEmail">Email Address:</label>
                        <input type="email" id="customerEmail" name="customer[email]" required>
                    </div>
                    <div>
                        <label for="customerMobile">Mobile Number:</label>
                        <input type="tel" id="customerMobile" name="customer[mobile]" 
                            pattern="[0-9]{10}" required title="Ten digit mobile number">
                    </div>
                </div>



                <!-- Submit button -->
                <input type="submit" value="Book Movie" class="link-button">
            </form>
        </section>      
    </main>
    <footer>
        <p>Contact us at lunardo@cinema.com | (07) 1234 5678</p>
        <p>123 Cinema Street, Townsville</p>
        <div>&copy;<script>
            document.write(new Date().getFullYear());
          </script> Samuel Smith - S3910951 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
        <a href="https://github.com/S3910951/a2">GitHub Repository</a>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
    <aside id="debug">
        <hr>
        <h3>Debug Area</h3>
        <pre>
    GET Contains:
    <?php print_r($_GET); ?>
    POST Contains:
    <?php print_r($_POST); ?>
    SESSION Contains:
    <?php if (isset($_SESSION)) print_r($_SESSION); ?>
        </pre>
    </aside>
</body>
</html>
