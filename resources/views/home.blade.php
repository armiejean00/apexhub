


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/homepage.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Homepage</title>
</head>

<body>


    <!-- SIDEBAR -->
<section id="sidebar" class="hide">
    <a href="#" class="brand">
        <img src="{{asset('assets/img/logo.png')}}" alt="image" style="width:60px">

    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="#">
                <i class='bx bxs-home'></i>
                <span class="text">Home</span>
            </a>
        </li>
        <li>
            <a href="booking">
                <i class='bx bxs-book-alt'></i>
                <span class="text">Booking</span>
            </a>
        </li>
       
       

      
    </ul>
    <ul class="side-menu" style="margin-top:300px">
       
       
        <li> 
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:red">
                                       <i class='bx bxs-log-out-circle'> </i>Logout
                                    </a>
                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </li>
    </ul>
</section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <p>ApexHubSpot</p>

            <form action="#">
                <div class="form-input">

                </div>
            </form>

           
          
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
           <p style="font-size:25px">Good Day! {{ Auth::user()->firstname }}, Book your Desk Now</p>
            <br>
           
<div id="dateInputContainer">
    <label for="date_input">Select a Date:</label>
    <input type="date" id="date_input" name="date_input" min="{{ date('Y-m-d') }}" max="{{ date('Y-m-d', strtotime('+2 week')) }}">
</div>

            <div class="table-data">
                
                <div class="order">
                    <div class="head">
                     
 
<div>
<form action="{{ route('home') }}" method="post">
        @csrf

        <label for="floor">Select Office:</label>
        <select name="floor" id="floor">
            <option value="floor1">Office 1</option>
            <option value="floor2">Office 2</option>
            <option value="floor3">Office 3</option>
        </select>
        <button type="submit" style="background-color:lightblue;border:none;padding:5px;font-size:15px;border-radius:5px;cursor:pointer">View</button>
    </form>
    <br>

    @if ($image)
        <img src="{{ asset('assets/img/'.$image) }}" alt="" style="height:400px">
    @endif

</div>
<h4>
    Selected date: 

</h4>

<h4>
    Choose a Desk Available:

</h4>

                    </div>
                   <button style="margin-left:700px;cursor:pointer;padding:10px;font-size:25px;border-radius:10px">Book Now</button>
                  
                </div>

                

                
               
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


   <script src="{{asset('assets/js/homepage.js')}}"></script>
   <script>
    <script>
    document.querySelector('#date_input').addEventListener('change', function() {
        var selectedDate = this.value;
        fetch('/update-data', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ date: selectedDate })
        })
        .then(function(response) {
            // Handle the response and update the relevant data on the page
        });
    });
</script>

    
   </script>
</body>

</html>

