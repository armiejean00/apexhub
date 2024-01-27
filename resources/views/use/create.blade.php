


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
        <li>
            <a href="/admin/home">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/admin/admin-booking">
                <i class='bx bxs-book-alt'></i>
                <span class="text">Booking</span>
            </a>
        </li>
        <li>
            <a href="/admin/admin-officemap">
                <i class='bx bxs-map'></i>
                <span class="text">Office Map</span>
            </a>
        </li>
        <li class="active">
            <a href="#">
                <i class='bx bxs-group'></i>
                <span class="text">Manage Users</span>
            </a>
        </li>

        <li>
            <a href="{{route('desks.index')}}">
                <i class='bx bx-desktop'></i>
                <span class="text">Manage Desk</span>
            </a>
        </li>
      
    </ul>
    <ul class="side-menu" style="margin-top:150px">
       
       
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
<p style="color: black; font-size: 24px;margin-top:20px;margin-left:20px ">Add User</p>
<br>
<div >
    @if($errors->any())
    <ul style="list-style: none;">
        @foreach($errors->all() as $error)
        <li style="color: red; font-size: 16px;">{{$error}}</li>
        @endforeach
    </ul>
    @endif
</div>
        <!-- MAIN -->
        <div style="margin-top:30px;background-color:#fff;width:320px;height:310px;margin-left:20px;border-radius:20px">
   



<form method="post" action="{{route('use.store')}}" style="display: flex; flex-direction: column; align-items: center;">
    @csrf
    @method('post')
    <div style="margin-top:20px">
        <label style="font-size: 16px;">First Name</label>
        <input type="text" name="firstname" placeholder="firstname" style="padding: 10px; margin: 10px; border: 1px solid gray; border-radius: 5px;"/>
    </div>
    <div>
        <label style="font-size: 16px;">Last Name</label>
        <input type="text" name="lastname" placeholder="lastname" style="padding: 10px; margin: 10px; border: 1px solid gray; border-radius: 5px;" />
    </div>
    <div>
        <label style="font-size: 16px;">Email</label>
        <input type="email" name="email" placeholder="email" style="padding: 10px; margin: 10px; border: 1px solid gray; border-radius: 5px;" />
    </div>
    <div>
        <label style="font-size: 16px;">Password</label>
        <input type="password" name="password" placeholder="password" style="padding: 10px; margin: 10px; border: 1px solid gray; border-radius: 5px;" />
    </div>

    <div>
        <input type="submit" value="Add User" style="padding: 10px 20px; background-color: blue; color: white; border: none; border-radius: 5px;" />
    </div>
</form>
</div>



   <script src="{{asset('assets/js/homepage.js')}}"></script>
</body>

</html>

