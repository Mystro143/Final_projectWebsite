<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project_ Brick By Brick real estate webdesign</title>

    <!-- font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

     <!--CSS file link-->
     <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts -->

<header class="header">
    <a href="#" class="logo"><i class="fa-solid fa-vihara"></i> Brick by Brick</a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#about">About</a>
        <a href="#agents">Agents</a>
        <a href="#booking">Booking</a>
        <a href="#reviews">Reviews</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</header>
 <!-- header section edns -->

 <!-- ======================================================== -->
 <!-- home section  -->
<section class="home" >
    <div class="image">
        <!-- home image -->
        <img src="Image/sunny cloud.gif">
    </div>
    <div class="content">
        <h3>Home sweet home, away from home</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis dolorum harum tempora vel fugiat! Voluptatem, aliquid perferendis ab aspernatur iure amet accusamus, est quia esse totam magni maiores nisi at.</p>

        <a href="#" class="btn"> Contact us<span class="fas fa-chevron-right"> </span></a>
    </div>
</section>
<!-- home section end -->
<!-- ============================================================= -->


<!-- ======================================================== -->
 <!-- icon section  -->
  <section class="icon-cont"> 

    <div class="icons">
        <i class="fas fa-user-tie"></i>
        <h3>300+</h3>
        <p>Agents around the word</p>
    </div>

    <div class="icons">
        <i class="fas fa-building-user"></i>
        <h3>2000+</h3>
        <p>Satisfied clients</p>
    </div>

    <div class="icons">
        <i class="fas fa-house-user"></i>
        <h3>400+</h3>
        <p>homes rented out annually</p>
    </div>

    <div class="icons">
        <i class="fas fa-building"></i>
        <h3>100+</h3>
        <p>available housing</p>
    </div>


  </section>
  
<!-- icon section end -->
<!-- ============================================================= -->


<!-- ======================================================== -->
 <!-- services section  -->
  <section class="services" id="services">
    <h1 class="heading">  our <span>services</span></h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-user-secret"></i>
            <h3> Agent booking </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae esse excepturi eaque! Ex, ab cum quidem esse culpa ipsum eligendi ullam laboriosam, saepe eius quae excepturi in praesentium quasi?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>

        </div>

        <div class="box">
            <i class="fas fa-truck-moving"></i>
            <h3> Moveing in-and-out </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae esse excepturi eaque! Ex, ab cum quidem esse culpa ipsum eligendi ullam laboriosam, saepe eius quae excepturi in praesentium quasi?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>

        </div>
    </div>

  </section>


 <!-- service section end -->
<!-- ============================================================= -->


<!-- ======================================================== -->
 <!-- forms section  -->
    <sectioon class="book" id="book">
        <h1 class="heading" ><span>book</span> now </h1>

        <div class="row">

        <div class="image">
            <img src="Image/discuss.gif" alt="discussion image">
        </div>


        <form action="includes/formHandler.inc.php" method="post" onsubmit="return chekBlanc(event)">

            <h3>Book appointment</h3>
            <input type="text" id="fname" name ="fname" placeholder="your full name" class="box" >

            <input type="number" id="phoneNum"   name ="phoneNum" placeholder="phone-number" class="box">

            <input type="email" id="email"  name ="email"  placeholder="E-mail" class="box">

            <select name="status" class="box">

                <option value="Status"> status</option>
                <option value="student"> Student</option>
                <option value="International"> International </option>
                <option value="resident"> Resident</option>
                <option value="part time worker"> Student</option>
                
            </select>

            <input type="date" id="bookDate"   name ="bookingDate"  class="box">

            <input type="submit" value="book" class="btn" id="bookAppoinment">
            <input type="reset" value="Clear Form" class="btn">

            <p class="errorMsg" id="errorMsg"></p>
            

        </form>

        </div>
    </sectioon>

 <!-- forms section end -->
<!-- ============================================================= -->










    <!--Javascript file-->
    <script src="source_script.js"></script>
</body>
</html>