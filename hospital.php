<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){
   
   
    $drname = $_POST['drname'];
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];



   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(drname,name, email, number, date) VALUES('$drname','$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL MANAGEMENT</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="hosp.css">
    <link rel="stylesheet" href="hospital.php">
    <link rel="stylesheet" href="navbar.html">
    <link rel="stylesheet" href="checkup.html">

</head>
<body>
    
<header class="header" id="head">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong></strong>medical </a>
     <ul>
    <nav class="navbar">
        <a href="hospital.php">home</a>
        <a href="#about">about</a>
        <a href="services.html">services</a>
        
        <a href="#appointment">appointment</a>
        <a href="review.html">review</a>
    
    </nav>
</ul>
    <div id="menu-btn" class="fas fa-bars"></div>

</header>


<section class="home" id="home">

    

    <div class="content">
        <h3>We Care We Cure</h3>
        <p>The Best Doctor gives the least medicines.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>
    <div class="image">
        <img src="hospital.jpg" alt="">
    </div>
</section>



<section class="icons-container" id="icn">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>



<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>The KLE Society’s successful foray into healthcare began with the Dr Prabhakar Kore Super specialty Hospital and Research Centre – a Hospital offering 2000 beds and state of the art medical facilities. The KLE Society continues the fine tradition of service through the KLES Dr Prabhakar Kore Hospital & Medical Research Centre, Belagavi. This 2000 beds modern hospital envisioned by Dr Prabhakar Basaprabhu Kore , set on an 17 acre sprawling land mass also offers concessional beds to the poor and needy populace. The hospital provides the services of more than 300 consultant doctors, skilled nurses, technical and paramedical staff. The state of the art infrastructure includes 30 operation theatres and a wide range of specialty & super specialty features.
            </p>
            <p></p>
            <a href="abouthospital.html" class="btn" target="_parent" > learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>













<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="appointment-img.svg" alt="" id="img">
        </div>

        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="info">
            <?php
                if(isset($message)) {
                    foreach($message as $message) {
                    echo'<p class ="message">'.$message.'</p>';
                }
                }
            ?>
          
       
            <h3>make appointment</h3>
  

           
            <select type="name" name="drname" placeholder="doctor name" class="box">
                                        <option value="">Select Dr </option>
                                         <option value="Dr K.Ravishankar Naik">Dr K.Ravishankar Naik</option>
                                        <option value="Dr Rajesh Shankar">Dr Rajesh Shankar</option>
                                 

                                                <option value="Dr Rajendra">Dr Rajendra</option>
                                                 <option value="DrMallikarjun V jali">DrMallikarjun V jali</option>
                                                <option value="Dr Santosh D. Hajare">Dr Santosh D. Hajare</option>
                                                <option value="Dr Rajesh S. Pawar">Dr Rajesh S. Pawar</option>
                                                <option value="Dr. Rekha S. Patil">Dr. Rekha S. Patil</option>

</select>

<input type="text"name="name" placeholder="your name" class="box">

            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn" onclick="GeneratePdf()">

            <input type="submit" onclick="my()" name="submit"  value="print" class="btn">

        </form>
        <script id="printr">
    function my(){
        document.getElementById("head").style.display = "none";
        document.getElementById("home").style.display = "none";
        document.getElementById("icn").style.display = "none";
        document.getElementById("img").style.display = "none";
        document.getElementById("about").style.display = "none";
        document.getElementById("foot").style.display = "none";

        window.print();
    }
</script>

</section>


<script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity=
"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
    crossorigin="anonymous">
</script>
    
    







<section class="footer" id="foot">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="services.html"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="doctors.html"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="review.html"> <i class="fas fa-chevron-right"></i> review </a>
        </div>


        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +917676676729 </a>
            <a href="#"> <i class="fas fa-phone"></i> +919782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> kle@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Belgaum </a>
        </div>

        

    </div>

    

</section>


<script src="hospital4.js"></script>
<script>
    // Function to check if a given date is a Sunday
    function isSunday(date) {
        return date.getDay() === 0; // Sunday is represented by 0 in JavaScript's Date.getDay()
    }

    // Function to validate the selected date
    function validateDate() {
        const selectedDateInput = document.querySelector('input[name="date"]');
        const selectedDate = new Date(selectedDateInput.value);

        if (isSunday(selectedDate)) {
            alert("Appointments cannot be scheduled on Sundays. Please choose another date.");
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }

    // Add an event listener to the form for date validation before submission
    const appointmentForm = document.querySelector('form');
    appointmentForm.addEventListener('submit', function (event) {
        if (!validateDate()) {
            event.preventDefault(); // Prevent form submission if the date is a Sunday
        }
    });
</script>
</body>
</html>
