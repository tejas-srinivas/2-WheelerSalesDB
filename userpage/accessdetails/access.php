<?php 
include('../../loginpage/connect.php');
session_start();
if (!isset($_SESSION['username'])) {
  header('location: login.html');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="access.css" rel="stylesheet" type="text/css"> 
    <title>ACCESS 125</title>
    
  </head>
  <body style ="background-color: #0000">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <img src="logo.png" style="width:200px; margin-top: -5px; height:80px;">
                    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-2">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#specs" >SPECIFATIONS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  VEHICLE ATTRIBUTES
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#dime">Dimensions and weigth</a></li>
                  <li><a class="dropdown-item" href="#mile">Milage and speed</a></li>
                  <li><a class="dropdown-item" href="#sus">Suspension and chassis</a></li>
                  <li><a class="dropdown-item" href="#per">Performance figures</a></li>
                  <li><a class="dropdown-item" href="#keyf">Key features and competitors</a></li>
                  <li><a class="dropdown-item" href="#engine">Engine and gearbox</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../dashboard.php">BACK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../user_details.php">BOOK NOW</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>  
    </br>
    </br>
</br>
</br>
</br>
    
    <div >
        <h1 class="heading2" style="color:#f98e1d"><u>360 DEGREE VIEW</u></h1> 
        <form action="access.php" method="post">
        <button type="submit" name="book-now">
            BOOK NOW
        </button>  
        </form>
    </div>
    </br>
    </br>
    <div class="slideshow">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 1"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="access1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="access2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="access3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="access4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="access5.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="access6.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="access7.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="access8.png" class="d-block w-100" alt="...">
          </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="background-color:#0000 ;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="background-color: black;">
          <span class="carousel-control-next-icon" aria-hidden="false" style="background-color: black;"></span>
          <span class="visually-hidden" style="background-color: black;">Next</span>
         </button>
        </div>
      </div>
    </div>

      </br>
      </br>
      </br>
    </br>
        
    <div class=" col-md-5 col-xm-12">
        <div>
          <h1 id="specs"  style="color:#f98e1d" class=" heading3"><u>SPECIFATIONS</u></h1>
        </div>
        <div class="border1"></div>
      </br>
      <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>SPECIFATIONS</th>
                <th></th>
                
            </tr>
        </thead>
        <tr>
            <td></td>
            <td></td>
            
        </tr>
          <thead>
              <tr>
                  <th>PARAMETER</th>
                  <th>DETAILS</th>
                  
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>2-WHEELER TYPE</td>
                  <td>Scooter</td>
                  
              </tr>
              <tr>
                  <td>Engine cc(Displacement)</td>
                  <td>124 cc</td>
                  
              </tr>
              <tr>
                  <td>Minimum power</td>
                  <td>8.7 HP @ 6750 rpm</td>
                  
              </tr>
              <tr>
                  <td>Maximum Torque</td>
                  <td>10 Nm @ 5500 rpm</td>
                  
              </tr>
              <tr>
                  <td>Number of Cylinders</td>
                  <td>1</td>
                  
              </tr>
              <tr>
                  <td>Number of Gears</td>
                  <td>CVT</td>
                  
              </tr>
              <tr>
                  <td>Seat Height</td>
                  <td>773 mm</td>
                  
              </tr>
              <tr>
                  <td>Ground Clearance </td>
                  <td>160 mm</td>
                  
              </tr>
              <tr>
                  <td>Kerb Weight</td>
                  <td>103 kg</td>
                  
              </tr>
              <tr>
                  <td>Fule Tank Capacity</td>
                  <td>5 litres</td>
                  
              </tr>
             
          </tbody>
          
      </table>
          </div>
    </br>
    </br>
    </br>
    <div class="get col-md-5 col-xm-12">
        <div class="heading4"><u><h1 id="dime" style="color:#f98e1d">DIMENSIONS AND WEIGHT</h1></u></div>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>DIMENSIONS AND WEIGHT</th>
                    <th></th>
                    
                </tr>
            </thead>
            <tr>
                <td></td>
                <td></td>
                
            </tr>
            <thead>
                <tr>
                    <th>PARAMETER</th>
                    <th>DETAILS</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Overall Length</td>
                    <td>1870 mm</td>
                    
                </tr>
                <tr>
                    <td>Overall Width</td>
                    <td>690 mm</td>
                    
                </tr>
                <tr>
                    <td>Overall Height</td>
                    <td>1160 mm</td>
                    
                </tr>
                <tr>
                    <td>Ground Clearance</td>
                    <td>160 mm</td>
                    
                </tr>
                <tr>
                    <td>Seat Height</td>
                    <td>773 mm</td>
                    
                </tr>
                <tr>
                    <td>Maximum Wheelbase</td>
                    <td>1265 mm</td>
                    
                </tr>
                <tr>
                    <td>Kerb Weight</td>
                    <td>103 kg</td>
                    
                </tr>
                <tr>
                    <td>Fuel Tank Capacity </td>
                    <td>5 litres</td>
                    
                </tr>
                <tr>
                    <td>Under-seat Storage</td>
                    <td>21.8 litres</td>
                    
                </tr>
               
                
                </tbody>
                </table>
    </div>
        </br>
    </br>
    </br>
    <div class="col-md-5 col-xm-12">
        <div><u><h1 id="mile" style="color:#f98e1d">MILEAGE AND TOP SPEED</h1></u></div>
    
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>MILEAGE AND TOP SPEED</th>
                <th></th>
                
            </tr>
        </thead>
        <tr>
            <td></td>
            <td></td>
            
        </tr>
        <thead>
            <tr>
                <th>PARAMETER</th>
                <th>DETAILS</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mileage</td>
                <td>Suzuki Access 125 mileage is 50 kmpl (approximate).</td>
                
            </tr>
            <tr>
                <td>Performance</td>
                <td>In terms of performance, the 125cc scooter can accelerate from 0-60 kmph in around 8 seconds.</td>
                
            </tr>
            <tr>
                <td>Top Speed</td>
                <td>Suzuki Access 125 top speed is 92 kmph (approximate).</td>
             </tr>
               
            </tbody>
            
        </table>
    </br>
    </br>
    </div>
    <div class="suspension col-md-5 col-xm-12">
        <div><u><h1 id="sus" style="color:#f98e1d">SUSPENSION AND CHASSIS</h1></u></div>
        
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>SUSPENSION AND CHASSIS</th>
                    <th></th>
                    
                </tr>
            </thead>
            <tr>
                <td></td>
                <td></td>
                
            </tr>
        <thead>
            <tr>
                <th>PARAMETER</th>
                <th>DETAILS</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Front Suspension</td>
                <td>Telescopic</td>
                
            </tr>
            <tr>
                <td>Rear Suspension</td>
                <td>Swing Arm</td>
                
            </tr>
            <tr>
                <td>Frame (Chassis)</td>
                <td>Under Bone</td>
                
            </tr>
            </tbody>
        </table>
        </div>
        </br>
        </br>
        <div class="col-md-5 col-xm-12">
            <div><u><h1 id="per"style="color:#f98e1d">PERFORMANCE FIGURES</h1></u></div>
        </br>
    </br>
            
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>PERFORMANCE FIGURES</th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tr>
                    <td></td>
                    <td></td>
                    
                </tr>
            <thead>
                <tr>
                    <th>PARAMETER</th>
                    <th>DETAILS</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0-60 kmph</td>
                    <td>8 secs </td>
                    
                </tr>
                
                   
                </tbody>
                
            </table>
            </div>
</br>
</br>
<div class="features col-md-5 col-xm-12"> 
    <div><u><h1 id="keyf"style="color:#f98e1d">KEY FEATURES AND COMPETITORS</h1></u></div>
    
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>KEY FEATURES AND COMPETITORS</th>
                <th></th>
                
            </tr>
        </thead>
        <tr>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            <th>PARAMETER</th>
            <th>DETAILS</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Braking System</td>
            <td>CBS (Combined Braking System)</td>
            
        </tr>
        <tr>
            <td>Similar Bikes</td>
            <td>TVS NTorq 125, Honda Activa 125, Aprilia SR 125, Vespa LX 125, Suzuki Burgman 125, TVS NTorq 125 Race Edition</td>
            
        </tr>
        </tbody>
    </table>
    </div>
</br>
</br>


<div class="heading4"><u><h1 id="engine"style="color:#f98e1d">ENGINE AND GEARBOX</h1></u></div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ENGINE AND GEARBOX</th>
                <th></th>
                
            </tr>
        </thead>
        <tr>
            <td></td>
            <td></td>
            
        </tr>
        <thead>
            <tr>
                <th>PARAMETER</th>
                <th>DETAILS</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Engine Details</td>
                <td>124cc, Air-Cooled, 4-Stroke, Single Cylinder</td>
                
            </tr>
            <tr>
                <td>Fuel System</td>
                <td>Fuel Injection</td>
                
            </tr>
            <tr>
                <td>Cooling</td>
                <td>AIR COOLED</td>
                
            </tr>
            <tr>
                <td>Engine cc (Displacement)</td>
                <td>124 cc</td>
                
            </tr>
            <tr>
                <td>Maximum Power</td>
                <td>8.7 HP @ 6750 rpm</td>
                
            </tr>
            <tr>
                <td>Maximum Torque</td>
                <td>10 Nm @ 5500 rpm</td>
                
            </tr>
            <tr>
                <td>Number of Cylinders</td>
                <td>1</td>
                
            </tr>
            <tr>
                <td>Emission Norms </td>
                <td>BS6-Compliant</td>
                
            </tr>
            
            <tr>
                <td>Bore</td>
                <td>52.5 mm</td>
                
            </tr>
            <tr>
                <td>Stroke</td>
                <td>57.4 mm</td>
                
            </tr>
            <tr>
                <td>Valve System</td>
                <td>2-Valve, SOHC</td>
                
            </tr>
            <tr>
                <td>Number of Gears</td>
                <td>CVT</td>
                
            </tr>
            <tr>
                <td>Clutch</td>
                <td>Automatic</td>
                
            </tr>
</tbody>
</table>

  </body>
</html>


<?php
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'root';
  $DATABASE_PASS = '';
  $DATABASE_NAME = 'wheels&deals';
  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  if (mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_errno());
  }
  $u_id = $_SESSION['u_id'];
if(isset($_POST['book-now'])){ 
    
    $sql = "SELECT * from users_verification WHERE u_id='$u_id'";
    $result = mysqli_query($con, $sql);
    if($result){
        $row = mysqli_num_rows($result);
        if($row == 1){
            echo "<script>window.location.href='../userpage/vechileBooking.php'</script>";
        }
    }
    else {
        echo "<script>window.location.href='../userpage/userdetails.php'</script>";
    }
}    
?>