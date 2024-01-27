


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
        <li>
            <a href="{{route('use.index1')}}">
                <i class='bx bxs-group'></i>
                <span class="text">Manage Users</span>
            </a>
        </li>

        <li class="active">
            <a href="#">
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

        <!-- MAIN -->
        <main>
          
     
         <h1>Manage Desk</h1>

   
 <br>
    <div>
        <a href="{{route('desks.create')}}" style="background-color:darkblue;color:white;padding:5px;border-radius:5px">Add Desk</a>
    </div>
   
<br>
 <div>
        @if(session()->has('success'))
        <div style="color:green">
            {{session('success')}}
        </div>

        @endif
    </div>

    <div class="table-data">
                <div class="order">
                    <div class="head">
                        
                    </div>
                  <table>
        <tr>
           
            <th>Desk Number</th>
            <th>Availability</th>
          
            <th>Action</th>
        </tr>

      @foreach($desks->sortBy('desk_number') as $desk)
    <tr>
        <td>Desk {{$desk->desk_number}}</td>
        <td style="color:{{$desk->isAvailable ? 'green' : 'red'}}">{{$desk->isAvailable ? 'Available' : 'Unavailable'}}</td>
        <td>
            <form method="post" action="{{ route('desks.destroy', ['desks'=>$desk]) }}">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" style="background-color: #ef7364; color: #fff; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;"/>
            </form>
        </td>
    </tr>
@endforeach


    </table>

               
            </div>




    

    
    <!-- CONTENT -->
    


   <script src="{{asset('assets/js/homepage.js')}}"></script>
</body>

</html>

