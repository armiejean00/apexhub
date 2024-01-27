


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
            <a href="home">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="admin-booking">
                <i class='bx bxs-book-alt'></i>
                <span class="text">Booking</span>
            </a>
        </li>
        <li class="active">
            <a href="#">
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

        <!-- MAIN -->
        <main>
           <p style="font-size:25px">Good Day! {{ Auth::user()->firstname }}</p>
            
            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>100</h3>
                        <p>Total Bookings</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>284</h3>
                        <p>Users</p>
                    </span>
                </li>

            </ul>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Calendar</h3>

                    </div>
                    
                    <!-- <table>
			<thead>
				<tr>
					<th>User</th>
					<th>Date </th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<img src="img/people.png">
						<p>John Doe</p>
					</td>
					<td>01-10-2021</td>
					<td><span class="status completed">Completed</span></td>
				</tr>
				<tr>
					<td>
						<img src="img/people.png">
						<p>John Doe</p>
					</td>
					<td>01-10-2021</td>
					<td><span class="status completed">Completed</span></td>
				</tr>
				<tr>
					<td>
						<img src="img/people.png">
						<p>John Doe</p>
					</td>
					<td>01-10-2021</td>
					<td><span class="status completed">Completed</span></td>
				</tr>
				<tr>
					<td>
						<img src="img/people.png">
						<p>John Doe</p>
					</td>
					<td>01-10-2021</td>
					<td><span class="status cancelled">Cancelled</span></td>
				</tr>
				<tr>
					<td>
						<img src="img/people.png">
						<p>John Doe</p>
					</td>
					<td>01-10-2021</td>
					<td><span class="status completed">Completed</span></td>
				</tr>
			</tbody>
		</table> -->
                </div>

                <div class="todo">
                    <div class="head">
                        <h3>Available Desk</h3>


                    </div>
                    <p style="color: green;font-size: 12px;">available</p>
                    <p style="color: red;font-size: 12px;">not-available</p>
                    <ul class="todo-list">


                        <li class="completed">
                            <p>Office 1</p>

                            <p style="color: red;">1A</p>
                            <p style="color: green;">1B</p>
                            <p style="color: green;">1C</p>
                            <p style="color: red;">1D</p>
                        </li>
                        <li class="completed">
                            <p>Office 2</p>
                            <p style="color: red;">2A</p>
                            <p style="color: green;">2B</p>
                            <p style="color: green;">2C</p>
                            <p style="color: red;">2D</p>

                        </li>
                        <li class="completed">
                            <p>Office 3</p>
                            <p style="color: red;">3A</p>
                            <p style="color: red;">3B</p>
                            <p style="color: green;">3C</p>
                            <p style="color: red;">3D</p>

                        </li>
                        <li class="completed">
                            <p>Office 4</p>
                            <p style="color: red;">4A</p>
                            <p style="color: green;">4B</p>
                            <p style="color: green;">4C</p>
                            <p style="color: red;">4D</p>
                            <p style="color: green;">4E</p>
                            <p style="color: red;">4F</p>

                        </li>
                        <li class="completed">
                            <p>Office 5</p>
                            <p style="color: green;">5A</p>
                            <p style="color: green;">5B</p>
                            <p style="color: green;">5C</p>
                            <p style="color: red;">5D</p>
                            <p style="color: green;">5E</p>
                            <p style="color: red;">5F</p>

                        </li>
                        <li class="completed">
                            <p>Office 6</p>
                            <p style="color: green;">6A</p>
                            <p style="color: green;">6B</p>
                            <p style="color: green;">6C</p>
                            <p style="color: red;">6D</p>

                        </li>
                    </ul>
                </div>
            </div>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Bookings</h3>

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Date </th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="./img/Alex Gonley.jpg">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

               
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


   <script src="{{asset('assets/js/homepage.js')}}"></script>
</body>

</html>

