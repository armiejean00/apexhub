<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHS</title>
    
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    
     <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>

<body>
    <header>
        <a href="#" class="logo">

            <img src="{{asset('assets/img/logo.png')}}" alt="image">
        </a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <ul class="navbar">
            <li> <a href="#home">Main</a></li>
            <li> <a href="#about">FAQs</a></li>
            <li> <a href="#userguide">User Guide</a></li>
            <li> <a href="#customers">Our Team</a></li>
        </ul>
        <div class="header-icon" style="background-color:#bc9667">
            <a href="{{ route('register') }}" style="font-size:15px;padding:5px;border-radius:10px">Get Started</a>



        </div>



    </header>

    <section class="home" id="home">
        <div class="home-text">
            <h1>Where Flexibility Meets Productivity<br>
                in Every Seat</h1>
            <p>Step into the future of work with Hotdesk, where the landscape of productivity transforms.<br>
                Unleash Your Productivity, Any Seat, Anytime.</p>

        </div>

    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="{{asset('assets/img/hotdesk.jpg')}}" alt="">
            <img src="{{asset('assets/img/hotdsk.jpg')}}" alt="">
        </div>
        <div class="about-text">
            <h4>What is hotdesking and how does it work in our system?</h4>
            <p>Hotdesking is a flexible office arrangement where employees do not have assigned desks, but instead can choose from a pool of available workstations each day. In our system, employees can book a desk through our online platform or mobile app</p>
           <h4>How do I reserve a hotdesk in our system?</h4>
<p>To reserve a hotdesk, employees can log into our system using their credentials and access the hotdesking feature. They can view the availability of desks for a specific date, and select a desk that suits their requirements. Once they have made a reservation, the desk will be reserved under their name for the designated time slot.</p>
           <h4>Can I reserve a hotdesk in advance?</h4>
<p>Yes, our system allows employees to reserve hotdesks in advance. They can book a desk for a future date and time, ensuring they have a workspace available when they need it. However, it is important to note that reservations are subject to availability, so it is advisable to book in advance to secure a desired desk.</p>
           <h4>Can I choose the same hotdesk every day?</h4>
<p>While our hotdesking system offers flexibility and the ability to choose from available desks, it does not guarantee the same desk every day. The availability of desks and the overall concept of hotdesking is based on a first-come, first-served basis. Employees can choose any available desk each day, depending on their needs and preferences.</p>
          
        </div>

    </section>



    <section class="about" id="userguide">
       
        <div class="about-text">
            <h2>User Guide</h2>

            <h4>Creating an Account:</h4>
<p>
    To access the hotdesk booking system, you need to create a user account. Follow these steps: <br>
    a. Open the website and click on the "Get Started" option. <br>
b. Open the website and click on the "Register" option. <br>
c. Fill out the required information, such as your firstname,lastname, email address, and password. <br>
d. Click on the "Create Account" button to complete the registration process.
</p>      

<h4>Logging in:</h4>
<p>
  Once you have registered, follow these steps to log in: <br>
a. Visit the website's homepage. <br>
b. Click on the "Get Started". <br>
c. Click on the "Login" option. <br>
d. Enter your registered email address and password. <br>
e. Click on the "Login" button.
</p>     

<h4>How to Book a Desk:</h4>
<p>
 Booking a hotdesk, you can use the following steps: <br>
a. On the website's home, Find Booking. <br>
b. enter desk number. <br>
c. Specify the desired date. <br>
d. Then click "Book Now"
</p>  
            

        </div>
         <div class="about-img">
            <img src="{{asset('assets/img/userguide.jpg')}}" alt="">
            
        </div>

    </section>

    

    <section class="customers" id="customers">
        <div class="heading">
            <h2>Our TEAM</h2>
        </div>
        <div class="customers-container">
            <div class="box">
              
                <p>Project Manager</p>
                <h2>Aurora Zafra Bactol</h2>
               <img src="{{asset('assets/img/aurora.jpg')}}" alt="">
            </div>
            <div class="box">
                
                <p>Lead Developer</p>
                <h2>Harry Reyes</h2>
                <img src="{{asset('assets/img/harry.gif')}}" alt="">
            </div>
            <div class="box">
              
                <p>Co-Developer</p>
                <h2>Joshua Allador</h2>
                <img src="{{asset('assets/img/joshua.png')}}" alt="">
            </div>
            <div class="box">
               
                <p>UI/UX Design Lead</p>
                <h2>Armie Jean Miranda</h2>
                <img src="{{asset('assets/img/armie.png')}}" alt="">
            </div>
            <div class="box">
                
                <p>Co-Developer</p>
                <h2>Paula Soleil Jabinal</h2>
                <img src="{{asset('assets/img/paula.jpg')}}" alt="">
            </div>
            <div class="box">
               
                <p>Project Coordinator</p>
                <h2>Jossa Marie Advincula</h2>
                <img src="{{asset('assets/img/jossa.jpg')}}" alt="">
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="footer-box">
            <h3>ApexHubSpot</h3>
            <p>If you have any concern, contact use via:</p>
            <div class="social">
              
            </div>
<br>
            
        </div>


        <div class="footer-box">
            <h3>Contact</h3>
            <div class="contact">
                
                <span><i class='bx bxs-phone'></i>+63162753920</span>
                <span><i class='bx bxs-envelope'></i>aurorazafrabactol@student.laverdad.edu.ph</span>
                <span><i class='bx bxs-envelope'></i>armiejeanmiranda@student.laverdad.edu.ph</span>

            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&#169; AHS </p>
    </div>




  <script src="{{asset('assets/js/index.js')}}"></script>
</body>

</html>