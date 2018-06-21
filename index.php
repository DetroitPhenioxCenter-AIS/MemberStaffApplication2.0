<?php
    session_start();
   
?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet"> 
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

       <link rel="stylesheet" href="styles.css">
       <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

       <script type="text/javascript"> 
      $(document).ready( function() {
        $('#alert').delay(2000).fadeOut();
      });
     
  

    </script>
      <title>Super user</title>
   </head>
   <body id="adminpage">
      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#"><img class="img-responsive" height="40" src="http://www.detroitphoenixcenter.org/images/layer%200.png?crc=3873543260"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
               <ul class="navbar-nav ml-auto my-2 my-lg-0">
                  <li class="nav-item active">
                     <a class="nav-link" href="#"><i class="fa fa-bell"></i></a>
                  </li>
                  
                  <li class="nav-item">
                     <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="logout.php?logout=admin">Logout</a>
                  </li>
                  <!--  <li class="nav-item">
                     <a class="nav-link disabled" href="#">Disabled</a>
                     </li> -->
               </ul>
               <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form> -->
            </div>
         </nav>
  <div class="w-100">
  <ul class="nav nav-pills shadow"  role="tablist" data-options="deep_linking: true">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home"> <span class="fas fa-tachometer-alt" style="color:#a8a8a8;"></span>	  Dashboard</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <span class="far fa-copy" style="color:#a8a8a8;"></span>	 Add Forms</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" data-toggle="pill" href="#d1">Employee</a>
      <a class="dropdown-item" data-toggle="pill" href="#d2">Member</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <span class="fas fa-users" style="color:#a8a8a8;"></span>	View Profiles</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" data-toggle="pill" href="#v1">Employee</a>
      <a class="dropdown-item" data-toggle="pill" href="#v2">Member</a>
    </div></li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu1"> <span class="far fa-calendar-alt" style="color:#a8a8a8;"></span>  Events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#fundraiser"> <span class="fa fa-cubes" style="color:#a8a8a8;"></span>  Fundraisers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu2"> <span class="fa fa-cubes" style="color:#a8a8a8;"></span>  Inventory</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#app"> <span class="fa fa-cubes" style="color:#a8a8a8;"></span>  Visits</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#docs"> <span class="fa fa-cubes" style="color:#a8a8a8;"></span>  Docs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#fund"> <span class="fa fa-cubes" style="color:#a8a8a8;"></span>  Fund Analysis</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#reports"> <span class="fa fa-cubes" style="color:#a8a8a8;"></span>  Reports</a>
    </li>
  </ul>
</div>
 <?php 
  $conn = mysqli_connect('127.0.0.1','root','');
   mysqli_select_db($conn,'USERBASE'); ?>
  <!-- Tab panes -->
  <div class="container">
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
   <?php   if(isset($_GET['adds']) && $_GET['adds'] == 'success'){ ?>
    <div class="row">
      <div id="alert" class="alert alert-success" role="alert">
        Employee added.
      </div></div>
  <?php } ?>
  <?php   if(isset($_GET['deletem']) && $_GET['deletem'] == 'success'){ ?>
   <div class="row">
      <div id="alert" class="alert alert-warning" role="alert">
        Member deleted.
      </div></div>
  <?php } ?>
  <?php   if(isset($_GET['deletes']) && $_GET['deletes'] == 'success'){ ?>
   <div class="row">
      <div id="alert" class="alert alert-warning" role="alert">
        Employee deleted.
      </div></div>
  <?php } ?>
  <?php   if(isset($_GET['addm']) && $_GET['addm'] == 'success'){ ?>
   <div class="row">
      <div id="alert" class="alert alert-success" role="alert">
        Member added.
      </div></div>
  <?php } ?>
<?php   if(isset($_GET['inv']) && $_GET['inv'] == 'yes'){ ?>
   <div class="row">
      <div id="alert" class="alert alert-success" role="alert">
        Inventory  added.
      </div></div>
  <?php } ?>
  <?php   if(isset($_GET['updatei']) && $_GET['updatei'] == 'success'){ ?>
   <div class="row">
      <div id="alert" class="alert alert-warning" role="alert">
        Inventory  updated.
      </div></div>
  <?php } ?>
  <?php   if(isset($_GET['invite']) && $_GET['invite'] == 'yes'){ ?>
   <div class="row">
      <div id="alert" class="alert alert-warning" role="alert">
       Guests invited.
      </div></div>
  <?php } ?>
  <?php   if(isset($_GET['email']) && $_GET['email'] == 'exist'){ ?>
   <div class="row">
      <div id="alert" class="alert alert-warning" role="alert">
       Email already exists. Use new email.
      </div></div>
  <?php } ?>
    <div class="row">
    <div class="col-md-3">
     <p>Hello <?php echo($_SESSION['u_id']); ?> !</p>
     </div>
      <div class="col-md-9">
      	
      </div>
     </div>
     <div class="row justify-content-center">
    
    <div class="card card-body ">
     <i class="fa fa-users text text-danger" style="font-size:48px;"></i><br>
   <h5> <?php 
    $countmem = mysqli_query($conn,"SELECT count(*) as total from member;");
    $countm = (mysqli_fetch_array($countmem)); 
    echo($countm[0]);

    ?><br></h5>Members
    

 </div>
      <div class="card card-body justify-content-center">
      <i class="fa fa-user text text-success" style="font-size:48px;"></i><br>
      	<h5>
      	<?php 
    $countstaff = mysqli_query($conn,"SELECT count(*) as totals from userstaff;");
    $counts = (mysqli_fetch_array($countstaff)); 
    echo($counts[0]);

    ?><br></h5>Staff
    
      </div>
       <div class="card card-body justify-content-center">
       <i class="fa fa-money-bill-alt text text-primary" style="font-size:48px;"></i><br>
       <h5>18</h5>Donors
     
     </div>
    
     <div class="card card-body ">
       
       <i class="fa fa-dollar-sign text text-dark" style="font-size:48px;"></i><br>
       <h5>$18000</h5>Revenue
     
     </div>
      <div class="card card-body">
        <i class="far fa-calendar-alt text-warning" style="font-size:48px;"></i><br>
        <h5>8</h5>Events
     
     </div>
      <div class="card card-body">
        <i class="fa fa-hand-holding-usd" style="font-size:48px;"></i><br>
        <h5>4</h5>Fundraisers
     
     </div></div>
     <br>
     <div class="row">
     	<div class="col-md-6">
     		<h4>Last Month's Review</h4>
     Members 		
     		<div class="progress">
  
  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">5</div>
</div>
Donations
<div class="progress">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">10</div>
</div>
Fundraisers
<div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">13</div>
</div>
Donors
<div class="progress">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">14</div>
</div>
     	</div>
     	<div class="col-md-6">
        <div class="card">
  <div class="card-header text-white bg-success">
  Todays Activities
  </div>
  <div class="card-body">
    <blockquote class="mb-0">
     <?php 
         $sdatet=mysqli_query($conn,"SELECT CURRENT_DATE()");
          $datet=mysqli_fetch_array($sdatet);
         $sqlst="SELECT * FROM events WHERE Edate ='$datet[0]'";
        $prost=mysqli_query($conn,$sqlst);
         // echo $pros;
         
         //echo $resultps;
          while($resultpst=mysqli_fetch_array($prost)):
       ?>
         <p><b><?php echo $resultpst['Name'];?></b></b> 
         </p>
        <?php   endwhile;
         ?>
    </blockquote>
     </div>
     </div>
      </div>
     </div><br>
     <div class="row">
       <div class="col-md-6">
        <div class="row">
        <div class="col-md-8">
         <div class="card">
  <div class="card-header text-white bg-success">
  Upcoming Events
  </div>
  <div class="card-body">
    <blockquote class="mb-0">
     <?php 
         $sdate=mysqli_query($conn,"SELECT CURRENT_DATE()");
          $date=mysqli_fetch_array($sdate);
         $sqls="SELECT * FROM events WHERE Edate>='$date[0]'";
        $pros=mysqli_query($conn,$sqls);
         // echo $pros;
         
         //echo $resultps;
          while($resultps=mysqli_fetch_array($pros)):
       ?>
         <p><b><?php echo $resultps['Name'];?></b> on <b><?php echo $resultps['Edate'];?></b> 
         </p>
        <?php   endwhile;
         ?>
    </blockquote>
     </div>
     </div></div> 
     <div class="col-md-4">
         <div class="card">
  <div class="card-header text-white bg-primary">
  Top Donors
  </div>
  <div class="card-body">
    <blockquote class="mb-0">
     <?php 
         $sqld="SELECT * FROM member";
        $prod=mysqli_query($conn,$sqld);
         // echo $pros;
         
         //echo $resultps;
          while($resultpsd=mysqli_fetch_array($prod)):
       ?>
         <p><?php echo $resultpsd['FirstN'];?>
         </p>
        <?php   endwhile;
         ?>
    </blockquote>
     </div>
     </div></div> 
     </div>  
      </div>
     </div>
      
     </div>
    
    <div id="d1" class="container tab-pane fade"><br>
     <h1>Staff form</h1>
                        <form action="staffinsert.php" method="POST">
                           <div class="form-group">
                              <label for="Name">Name</label>
                              <input type="text" required name="name" class="form-control" id="Name" pattern="[A-Za-z ]+" placeholder="John Doe">
                           </div>
                           <div class="form-group">
                              <label for="Name">Gender</label>
                              <select required name="gender" class="form-control">
                                 <label for="inputEmail4">Gender</label>
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                                 <option value="other">Other</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="Phone">Phone</label>
                              <input type="text" name="phone" class="form-control" id="Phone" pattern="[0-9]{3}[ -][0-9]{3}[ -][0-9]{4}" placeholder="123-456-7891">
                           </div>
                           <div class="form-group">
                              <label for="Desig">Position</label>
                              <input required type="text" name="desig" class="form-control" pattern="[A-Za-z ]+" id="Desig" placeholder="Enter Name">
                           </div>
                           <button type="submit" name="sendmail" class="btn btn-danger">Submit</button>
                        </form>
    </div>
    <div id="d2" class="container tab-pane fade"><br>
    <h1>Member form</h1>
                        <form action="insert.php" method="POST">
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputfn">First Name</label>
                                 <input type="text" name="FirstN" class="form-control" pattern="[A-Za-z ]+" id="inputEmail4" placeholder="Jane">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputln">Last Name</label>
                                 <input type="text" name="LastN" class="form-control" pattern="[A-Za-z ]+" id="inputPassword4" placeholder="Doe">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputEmail4">Gender</label>
                                 <select name="Gender" class="form-control">
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                                 <option value="other">Other</option>
                              </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">DOB</label>
                                 <input type="text" name="DOB" class="form-control" pattern="[0-9]{2}[/][0-9]{2}[/][0-9]{4}" id="inputPassword4" placeholder="mm/dd/yyyy">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputEmail4">Email</label>
                                 <input type="email" name="Email" class="form-control" id="inputEmail4" placeholder="Email">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Phone</label>
                                 <input type="text" name="Phone" class="form-control" pattern="[0-9]{3}[ -][0-9]{3}[ -][0-9]{4}" id="inputPassword4" placeholder="Password">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputEmail4">ID</label>
                                 <input type="text" name="ID" class="form-control" id="inputPassword4" pattern="[A-Za-z ]+" placeholder="Birth certificate"/>
                                
                              </div>
                           
                           <div class="form-group col-md-6">
                                 <label for="inputPassword4">Health Insurance</label>
                                 <input type="text" name="Courses" class="form-control" id="inputPassword4" pattern="[A-Za-z ]+" placeholder="Primary school etc.">
                              </div>
                              </div>
                               <div class="form-row">
                               <div class="col-md-6">
                                   <label for="inputPassword4">Blood group</label>
                                 <input type="text" name="Bloodgroup" class="form-control" pattern="[A-Z][+-]*" id="inputPassword4" placeholder="O+ etc.">
                                </div>
                               <div class="col-md-6">
                              
                                </div>
                                
                               </div><br>
                                <h5>Programs Enrolled</h5>
                               <div class="form-row">
                             <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="program[]" value="General Counseling" checked> General Counseling
                              </label>
                            </div>
                            <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="program[]" value="Housing Assistance" checked>Housing Assistance
                              </label>
                            </div>
                            
                            
                            <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="program[]" value="Job Search and Placement" checked>Job Search and Placement 
                              </label>
                            </div></div>  <br><br>
                        
                           <div class="form-row">
                             <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="program[]" value="Identification" checked>Identification (State or Driver's License)
                              </label>
                            </div>
                            <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="program[]" value="Back to School Supplies" checked>Back to School Supplies
                              </label>
                            </div>
                            <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="program[]" value="Basic Supplies " checked>Basic Supplies 
                              </label>
                            </div>
                           </div><br><br>
                           <div class="form-row">
                             <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="program[]" value="Sports and Fun Events" checked>Sports and Fun Events
                              </label>
                            </div>
                            <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="program[]" value="College101" checked>College Scholarship, Information, and Preparation
                              </label>
                            </div>
                            <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="program[]" value="Relaxation Room" checked>Relaxation Room 
                              </label>
                            </div></div><br><br>
                            <h5>Case Mangaement</h5>
                             <div class="form-row">
                            <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="case[]" value="Substance Abuse" checked>Substance Abuse
                              </label>
                            </div>
                             <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="case[]" value="Domestic Abuse" checked>Physical Abuse
                              </label>
                            </div>
                            <div class="form-check-inline col-md-3">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="case[]" value="Domestic Abuse" checked>Sexual Abuse
                              </label>
                            </div>
                            </div><br>
                                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Additional info</button>
                          <div id="demo" class="collapse">
                          <br>
                             <h5>Emergency Contact</h5>
                              <div class="row">
                              <div class="form-group col-md-4">
                                 <label for="inputfn">Name</label>
                                 <input type="text" name="EmName" class="form-control" pattern="[A-Za-z ]+" id="inputEmail4" placeholder="Jane">
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="inputln">Phone</label>
                                 <input type="text" name="EmNum" class="form-control" pattern="[0-9]{3}[ -][0-9]{3}[ -][0-9]{4}" id="inputln" placeholder="Phone"/>
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="inputEmail4">ID</label>
                                 <input type="text" name="EmID" class="form-control" id="inputPassword4" pattern="[A-Za-z ]+" placeholder="Birth certificate"/>
                                
                              </div>
                              </div>
                                 <div class="form-group">
                              <label for="comment">Notes</label>
                              <textarea class="form-control" rows="5" name="notes" id="comment"></textarea>
                                 </div>

                              </div>

                            <!-- <div class="form-group">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" id="gridCheck">
                                 <label class="form-check-label" for="gridCheck">
                                 I agree to all the terms and conditions.
                                 </label>
                              </div>
                           </div>  -->
                           &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="addmem" class="btn btn-dark">Submit</button><br><br>
                        </form>
    </div>
    <div id="v1" class="container tab-pane fade"><br>
  <h2>Staff</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p> 
  <script>
jQuery(document).ready(function(){
 jQuery("#myInput").on("keyup", function() {
    var value = jQuery(this).val().toLowerCase();
    jQuery("#myTable tr").filter(function() {
      jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
 
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
 
<?php
    $query = "SELECT * FROM userstaff";


// result for method one
$result1 = mysqli_query($conn, $query);

?>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>View details</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable">
     <?php while($row1 = mysqli_fetch_array($result1)):?>
            <tr>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[4];?></td>
                <td><?php echo $row1[3];?></td>
               <!-- data-toggle="modal" data-target="#myModal" -->
                <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="<?php echo'#'.$row1[1];?>">View profile</button></td>
                 <td><form action='deletestaff.php?name="<?php echo $row1[1]; ?>"' method="post">
        <input type="hidden" name="names" value="<?php echo $row1[1]; ?>">
        <input class="btn btn-sm btn-info" type="submit" name="deletestaff" value="Delete">
    </form></td>
                <!-- The Modal -->
  <div class="modal fade" id="<?php echo $row1[1];?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $row1[1];?>'s Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
          Name:<?php echo $row1[1];?><br>
          Email:<?php echo $row1[4];?><br>
          Designation:<?php echo $row1[5];?><br>
        </div>
        
        <!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div> 
  </div> 
  </tr>
     <?php endwhile;?>
    </tbody>
  </table>
  


  
</div>

    <div id="v2" class="container tab-pane fade"><br>
       <h2>Members</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p> 
  <script>
jQuery(document).ready(function(){
 jQuery("#myInput2").on("keyup", function() {
    var value = jQuery(this).val().toLowerCase();
    jQuery("#myTable2 tr").filter(function() {
      jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
 
  <input class="form-control" id="myInput2" type="text" placeholder="Search..">
  <br>
  <?php 
// mysql select query

    $query2 = "SELECT * FROM member";


// result for method one
$result2 = mysqli_query($conn, $query2);

?>
  <table class="table table-bordered justify-content-center table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>DOB</th>
        <th>View Profiles</th>
        <th> Delete</th>
      </tr>
    </thead>
    <tbody id="myTable2">
     <?php while($row2 = mysqli_fetch_array($result2)):
        $name=$row2[1];
        
     ?>
            <tr>
                <td><?php echo $row2[1];?></td>
                <td><?php echo $row2[2];?></td>
                <td><?php echo $row2[5];?></td>
                <td><?php echo $row2[4];?></td>
                <td><button type="button" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="<?php echo'#'.$row2[1];?>">View profile</button>
                

                </td>
                <td>

                <form action='delete.php?name="<?php echo $row2[1]; ?>"' method="post">
        <input type="hidden" name="name" value="<?php echo $row2[1]; ?>">
        <input class="btn btn-sm btn-info" type="submit" name="submit" value="Delete">
    </form>

                </td>
                <div class="modal fade" id="<?php echo $row2[1];?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $row2[1];?>'s Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
          NAME : <?php echo $row2[1];?><br>
          EMAIL : <?php echo $row2[5];?><br>
          PHONE : <?php echo $row2[6];?><br>
          <!-- <?php
           $sqld="SELECT Programs FROM Programs WHERE M_ID='$row2[0]'";
           $resd=mysqli_query($conn,$sqld);
           $rowd=mysqli_fetch_array($resd);

           ?> -->
          PROGRAMS ENROLLED:<?php echo $row2['Programs'];?><br>
          CASES : <?php echo $row2['Casem'];?><br>
          INITIAL NOTES : <?php echo $row2['Notes'];?><br>
          COMMEMTS:<br><dl>
          <?php
             $comq="SELECT * FROM Comments WHERE M_ID='$row2[0]'";
             $comb=mysqli_query($conn,$comq);
             while($rowcom=mysqli_fetch_array($comb)):
          ?>
            <dt class="text text-primary">On <?php echo $rowcom['DateC'];?></dt>
            <dd>- <?php echo $rowcom['Comment'];?></dd>
          <?php endwhile;?>
             </dl>
         
          <form action='comm.php?id="<?php echo $row2[0]; ?>"' method="POST">
                           <div class="form-row">
                          <div class="form-group col-md-4">
                                 <label for="inputln">Comment here:</label>
                                 <input type="text" name="comm" class="form-control" required  id="inputPassword4" placeholder="10">
                                 <input type="hidden" name="commid" value="<?php echo $row2[0]; ?>">
                              </div>
                              </div>
                           <button type="submit" name="addcomm" class="btn btn-dark">Add</button><br><br>
                        </form>
        </div>
        
        <!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div> 
  </div> 
            </tr>
     <?php endwhile;?>
    </tbody>
  </table>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Events</h3>
      <form action="insert_event.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-2">
    <label for="exampleFormControlFile1">Upload Flier</label>
    <input type="file" name="eventi" class="form-control-file" id="exampleFormControlFile1">
  </div>
   <div class="form-group col-md-2">
   <label for="inputln">Name</label>
   <input type="text" name="eventn" class="form-control" pattern="[A-Za-z ]+" id="inputPassword4" placeholder="Winter Ball">
   </div>
   <div class="form-group col-md-2">
   <label for="inputfn">Date</label>
   <input type="date" name="eventd" class="form-control" id="inputEmail4" placeholder="11-12-2018"></div>
   <div class="form-group col-md-3">
   <label for="inputfn">Venue</label>
   <input type="text" name="eventv" class="form-control" pattern="[A-Za-z ]+" id="inputEmail4" placeholder="5th stret"></div>
   <div class="form-group col-md-3">
   <label for="inputfn">Description</label>   <input type="text" name="eventdn" class="form-control" pattern="[A-Za-z ]+" id="inputEmail4" placeholder="Ball for RC"></div>
  </div>

     <button type="submit" name="addevent" class="btn btn-default">Add</button><br><br>
</form>
<br>

<div class="row">
 <?php 
 $sqle="SELECT * FROM events";
$resulte = mysqli_query($conn, $sqle);
 while($rowe = mysqli_fetch_array($resulte)):
  ?>
  <div class="col-md-3">
  <div class="card mh-100" style="height:400px">
    <img class="card-img-top" src="<?php echo'images/'.$rowe[5]; ?>" height="150" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $rowe[1]; ?></h5>
       <p class="card-text"><small> Date : <?php echo $rowe[2]; ?><br>Venue : <?php echo $rowe[3]; ?><br>Description : <?php echo $rowe[4]; ?>.</small></p>
       <div class="row"><div class="col-md-3"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="<?php echo'#'.$rowe[1];?>">Invite</button></div>
        <div class="col-md-9"><form action='deletestaff.php?name="<?php echo $rowe[0]; ?>"' id='delevent' method="post">
        <input type="hidden" name="namee" value="<?php echo $rowe[0]; ?>">
        <input class="btn btn-sm btn-info" type="submit" name="deleteevent" value="Delete">
    </form></div></div>
    </div>
    <div class="modal fade" id="<?php echo $rowe[1];?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Invite donors</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
          <form action='invite.php' method="post">
<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Check</th>
      </tr>
    </thead>
    <tbody id="myTable3">
    <?php 
     $sqlinv="SELECT * FROM member";
     $result9=mysqli_query($conn,$sqlinv);

    ?>
     <?php while($row9 = mysqli_fetch_array($result9)):?>
            <tr>
                <td><?php echo $row9[1];?></td>
                  <td>
       <div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" name="check_list[]" class="form-check-input" value="<?php echo $row9[5]; ?>">
  </label>
</div>
    </td>    
              
    </tr>
     <?php endwhile;?>
    </tbody>
  </table>
     <input type="hidden" name="eventid" value="<?php echo $rowe[0];?>">
   <button type="submit" name="invite" class="btn btn-dark">Invite</button><br><br>
  </form>
        </div>
        
        <!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div> 
  </div>   
   
  </div></div>
 <?php endwhile;?>
  

    </div>


    </div>
  <div id="fundraiser" class="container tab-pane fade"><br>
      <h3>Fundraisers</h3>
      <form action="insert_fundr.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-2">
    <label for="exampleFormControlFile1">Upload Flier</label>
    <input type="file" name="fndi" class="form-control-file" id="exampleFormControlFile1">
  </div>
   <div class="form-group col-md-2">
   <label for="inputln">Name</label>
   <input type="text" name="fndn" class="form-control" pattern="[A-Za-z ]+" id="inputPassword4" placeholder="Winter Ball">
   </div>
   <div class="form-group col-md-2">
   <label for="inputfn">Amount</label>
   <input type="text" name="fnda" class="form-control" id="inputEmail4" placeholder="200"></div>
   <div class="form-group col-md-3">
   <label for="inputfn">Description</label>   <input type="text" name="fndd" class="form-control" pattern="[A-Za-z ]+" id="inputEmail4" placeholder="Ball for RC"></div>
  </div>

     <button type="submit" name="addfnd" class="btn btn-default">Add</button><br><br>
</form>
<br>

<div class="row">
 <?php 
 $sqlfu="SELECT * FROM fundraiser";
$resultfu = mysqli_query($conn, $sqlfu);
 while($rowfu = mysqli_fetch_array($resultfu)):
  ?>
  <div class="col-md-3">
  <div class="card mh-100">
    <img class="card-img-top" src="<?php echo'images/'.$rowfu['Image']; ?>" height="150" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $rowfu['Name']; ?></h5>
       <p class="card-text"><small>Description : <?php echo $rowfu['Description']; ?>.</small></p>
       Donations
<div class="progress">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php echo $rowfu['Amount']; ?></div>
</div><br>
        <div><form action='deletestaff.php?name="<?php echo $rowfu[0]; ?>"' id='delevent' method="post">
        <input type="hidden" name="namee" value="<?php echo $rowfu[0]; ?>">
        <input class="btn btn-sm btn-info" type="submit" name="deletefund" value="Delete">
    </form></div>
    </div>
    
   
  </div></div>
 <?php endwhile;?>
  

    </div>


    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Inventory</h3>
       <form action="inventory.php" method="POST">
                           <div class="form-row">
                          <div class="form-group col-md-4">
                                 <label for="inputfn">Inventory</label>
                                 <input type="text" name="inventory" class="form-control" required pattern="[A-Za-z ]+" id="inputEmail4" placeholder="Books">
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="inputln">We need</label>
                                 <input type="text" name="num" class="form-control" required pattern="[0-9]+" id="inputPassword4" placeholder="10">
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="inputfn">URL</label>
                                 <input type="text" name="url" class="form-control" required id="inputEmail4" placeholder="https://...">
                              </div></div>
                           <button type="submit" name="addinve" class="btn btn-dark">Add</button><br><br>
                        </form>
        <script>
jQuery(document).ready(function(){
 jQuery("#myInput3").on("keyup", function() {
    var value = jQuery(this).val().toLowerCase();
    jQuery("#myTable3 tr").filter(function() {
      jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
 
  <input class="form-control" id="myInput3" type="text" placeholder="Search..">
  <br>
 
<?php
    $queryi = "SELECT * FROM inventory";


// result for method one
$result3 = mysqli_query($conn, $queryi);

?>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Items</th>
        <th>We need</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable3">
     <?php while($row3 = mysqli_fetch_array($result3)):?>
            <tr>
                <td><?php echo $row3[1];?></td>
                <td><?php echo $row3[2];?></td>
                <td> <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="<?php echo'#'.$row3[1];?>">Update</button></td>
                  <td> <form action='deletestaff.php?id="<?php echo $row3[0]; ?>"' method="post">
        <input type="hidden" name="inv" value="<?php echo $row3[0]; ?>">
        <input class="btn btn-sm btn-info" type="submit" name="deleteinv" value="Delete">
    </form></td>
       <div class="modal fade" id="<?php echo $row3[1];?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add to existing</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
          <form action='up_inv.php?id="<?php echo $row3[0]; ?>"' method="POST">
                           <div class="form-row">
                          <div class="form-group col-md-4">
                                 <label for="inputln">We need</label>
                                 <input type="text" name="invu" class="form-control" required pattern="[0-9]+" id="inputPassword4" placeholder="10">
                                 <input type="hidden" name="invi" value="<?php echo $row3[0]; ?>">
                              </div>
                              </div>
                           <button type="submit" name="uaddinve" class="btn btn-dark">Update</button><br><br>
                        </form>
        </div>
        
        <!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div> 
  </div>        
              
    </tr>
     <?php endwhile;?>
    </tbody>
  </table>
    </div>
     <div id="app" class="container tab-pane fade"><br>
        <script>
 
  function passData() {
var name = document.getElementById("pass_data").value;
var dataString = 'data_to_be_pass=' + name;
if (name == '') {
alert("Please Enter the Anything");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
dataType: "json",
url: "pass-data.php",
data: dataString,
cache: false,
success: function(data) {
$("#data").html(data);
$("#wash").html(data.wd);
$("#lga").html(data.lga);
$("#program").html(data.pe);
$("#councel").html(data.cc);
$("#computer").html(data.cl);
$("#identity").html(data.id);
var wd='';
$.each(data,function(key,value){
	var keys = key;
	if(keys =="details" & this.details){
	$.each(value.details,function(key,valued){
	wd+='<tr>';
	wd+='<td>'+valued.Name+'</td>';
	wd+='<td>'+valued.Intime+'</td>';
	wd+='<td>'+valued.Outtime+'</td>';
	wd+='<tr>';
});
}
}); 
$("#wash_con").append(wd);
},
error: function(err) {
alert(err);
}
});
}
return false;
}
 
  </script>
         <form>
                           <div class="form-row">
                              
                              <div class="form-group col-md-6">
                                 <label for="inputfn">Date</label>
                                 <input type="date"  id="pass_data" class="form-control" onblur="passData();" required id="inputEmail4" placeholder="Jane">
                              </div>
                              </div>
                         
                           </form>
                           
                          <div class="row justify-content-center">
    <p id="data"></p>
    <div class="card card-body ">
     <i class="fa fa-tshirt text-info" style="font-size:48px;"></i><br>
   <h5 id="wash"></h5>Washer/Dryer
   <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#washd">View</button>
  <div class="modal fade" id="washd">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Wash/Dry Service visits</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body" >
         <table id="wash_con"></table>
        </div>
        
        <!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div> 
  </div> 
 </div>
 <div class="card card-body ">
     <i class="fa fa-home text text-warning" style="font-size:48px;"></i><br>
   <h5 id="lga"> </h5>Lounge area
   <button type="submit" name="addinve" class="btn btn-dark">Add</button> 

 </div>
 <div class="card card-body ">
     <i class="fas fa-desktop text text-success" style="font-size:48px;"></i><br>
   <h5 id="computer"> </h5>Computerlab
    <button type="submit" name="addinve" class="btn btn-dark">Add</button>

 </div>
 <div class="card card-body ">
     <i class="fas fa-hand-holding-heart text text-danger" style="font-size:48px;"></i><br>
   <h5 id="councel"> </h5>Councelling
    <button type="submit" name="addinve" class="btn btn-dark">Add</button>

 </div>
 <div class="card card-body ">
     <i class="fas fa-code text text-primary" style="font-size:48px;"></i><br>
   <h5 id="program"> </h5>Programming Event 
    <button type="submit" name="addinve" class="btn btn-dark">Add</button>

 </div>
  <div class="card card-body ">
     <i class="fas fa-id-card text text-default" style="font-size:48px;"></i><br>
   <h5 id="identity"> </h5>Identification
    <button type="submit" name="addinve" class="btn btn-dark">Add</button>

 </div>


 </div>
   </div>
 <div id="docs" class="container tab-pane fade"><br>
   <h4>Docs</h4>
     <form action="insert_doc.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-3">
                                 <label for="docname">Name</label>
                                 <input type="text" name="docname" class="form-control" required pattern="[A-Za-z ]+" id="inputEmail4" placeholder="Books">
                              </div>
  <div class="form-group col-md-3">
    <label for="exampleFormControlFile1">Upload Docs</label>
    <input type="file" name="doc" class="form-control-file" id="exampleFormControlFile1">
  </div>
   <div class="form-group col-md-6">
                              <label for="Name">Category</label>
                              <select required name="cat" class="form-control">
                                 <option value="DPC Mission,Vision,Purpose"> DPC Mission, Vision ,Purpose</option>
                                 <option value="DPC Policies and Procedures">DPC Policies and Procedures</option>
                                 <option value="DPC Grant Submissions">DPC Grant Submissions</option>
                                 <option value="DPC HR">DPC HR</option>
                                <option value="DPC Legal">DPC Legal</option>
                                <option value="DPC Finance">DPC Finance</option>
                                 <option value="DPC Advertising and Marketing">DPC Advertising and Marketing</option>
                                 <option value="DPC Programming">DPC Programming</option>
                                 <option value="DPC Fundraisers">DPC Fundraisers</option>
                                 <option value="DPC Other">DPC Other</option>
                                 <option value="DPC Board Meeting Minutes Agenda">DPC Board Meeting Minutes / Agenda </option>
                                 <option value="DPC Operational Meeting Minutes Agenda">DPC Operational Meeting Minutes / Agenda </option>
                                 <option value="Corporate Sponsors">Corporate Sponsors</option>
                                 <option value="Government Sponsors">Government Sponsors</option>  
                              </select>
                           </div>
  </div>

     <button type="submit" name="adddoc" class="btn btn-default">Add Doc</button><br><br>
</form><br>
<hr>
<h4>View</h4>
<?php 
$countm = mysqli_query($conn,"SELECT count(D_ID),Category as total from docs GROUP BY Category");
?>
<div class="row">
<?php while($countmm = (mysqli_fetch_array($countm))):?>
  <div class="col-md-3">
   <div class="card">
   
    <div class="card-body">
      <h6 class="card-title"><b><?php echo $countmm[1]; ?></b></h6>
      <p class="card-text"><?php echo $countmm[0]; ?> documents</p>
     <button type="button" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="<?php echo '#'.$countmm[1]; ?>">View</button>
    </div>
  </div>

  <br>
  <div class="modal fade" id="<?php echo $countmm[1];?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Docs </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
    <?php 
     $sqlcat="SELECT * FROM docs where Category='$countmm[1]'";
     $resultcat=mysqli_query($conn,$sqlcat);

    ?>
    <div class="row">
     <?php while($rowcat = mysqli_fetch_array($resultcat)):?>
                <div class="col-md-3">
                  <a href="<?php echo $rowcat[3];?>" target="blank"><i style="font-size: 40px;" class="far fa-file-pdf"></i></a><br>
                   <small><?php echo $rowcat[1];?></small> </div> 
    
     <?php endwhile;?>
         </div>
        </div>
        
        <!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div> 
  </div>   
 </div>
   <?php endwhile;?>
  </div>

 
  
 </div>
 <div id="fund" class="container tab-pane fade"><br>
  <form action="fund.php" method="POST">
                           <div class="form-row">
                           <div class="form-group col-md-2">
                                 <label for="inputfn">Name</label>
                                 <input type="text" name="fund_n" class="form-control" required id="inputEmail4" placeholder="Name">
                              </div>
                           <div class="form-group col-md-2">
                                 <label for="inputfn">Budget Amount</label>
                             <div class="input-group mb-3">
                                <div class="input-group-prepend">
                             <span class="input-group-text" id="basic-addon1">$</span>
                              </div>
                             <input type="text" class="form-control" required name="budget_a" placeholder="3000" aria-label="Username" aria-describedby="basic-addon1">
                             </div></div>
                             <div class="form-group col-md-2">
                                 <label for="inputfn">Actual Amount</label>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                             <span class="input-group-text" id="basic-addon1">$</span>
                              </div>
                             <input type="text" class="form-control" required name="actual_a" placeholder="2000" aria-label="Username" aria-describedby="basic-addon1">
                             </div></div>
                              <div class="form-group col-md-2">
                                 <label for="inputfn">Donor count</label>
                                 <input type="text" name="donor_c" class="form-control" required id="inputEmail4" placeholder="15">
                              </div>
                                <div class="form-group col-md-2">
                                 <label for="inputfn">Additional comments</label>
                                 <input type="text" name="add_c" class="form-control" required id="inputEmail4" placeholder="invited 15 more">
                              </div>
                                
                              </div>
                               
                                 <button type="submit" name="fund_a" class="btn btn-dark">Add</button>
                              
                        </form>
<hr><br>
<?php 
$sqlf=mysqli_query($conn,"SELECT * FROM funds");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
     google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Name', 'Budget', 'Actual', 'Donors'],
          <?php
            while($rowf=mysqli_fetch_array($sqlf)):
              echo"['".$rowf[1]."',".$rowf[2].",".$rowf[3].",".$rowf[4]."],";
            endwhile;
           ?>
        ]);

        var options = {
          chart: {
            title: 'Fundraiser Analysis',
            subtitle: 'Daily fundraiser analysis',
          },
          bars: 'vertical',
          vAxis: {format: 'decimal'},
          height: 400,
          colors: ['#1b9e77', '#d95f02', '#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        var btns = document.getElementById('btn-group');

        btns.onclick = function (e) {

          if (e.target.tagName === 'BUTTON') {
            options.vAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
      }
    </script>
       <div id="chart_div"></div>
    <br/>
    <div id="btn-group">
      <button class="btn btn-sm btn-primary" id="none">No Format</button>
      <button class="btn btn-sm btn-danger" id="decimal">Decimal</button>
      <button class="btn btn-sm btn-success" id="short">Short</button>
    </div>
    
 </div>
 <div id="reports" class="container tab-pane fade"><br>
 <h4>Reports</h4>

 </div>
    </div>
  </div>

          
      </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
   </body>
</html>

