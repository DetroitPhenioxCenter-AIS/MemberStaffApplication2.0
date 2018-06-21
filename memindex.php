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
                     <a class="nav-link" href="logout.php?logout=mem">Logout</a>
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
         <div class="row">
  <div class="w-100">
  <ul class="nav nav-pills shadow"  role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home"> <span class="fas fa-tachometer-alt" style="color:#a8a8a8;"></span>    Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#d1"> <span class="far fa-calendar-alt" style="color:#a8a8a8;"></span>Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  data-toggle="pill" href="#d2"> <span class="fa fa-cubes" style="color:#a8a8a8;"></span>  Schedule Visit</a>
    </li>
        <li class="nav-item">
      <a class="nav-link"  data-toggle="pill" href="#v1"> <span class="fa fa-cubes" style="color:#a8a8a8;"></span>  Prgramming Services</a>
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
   <?php   if(isset($_GET['app']) && $_GET['app'] == 'yes'){ ?>
    <div class="row">
      <div id="alert" class="alert alert-success" role="alert">
       Visit booked.
      </div></div>
  <?php } ?>
  <?php   if(isset($_GET['program']) && $_GET['program'] == 'update'){ ?>
    <div class="row">
      <div id="alert" class="alert alert-success" role="alert">
       Programs updated.
      </div></div>
  <?php } ?>
     Hello! <?php echo $_SESSION['memname'];?><br><br>
     <div class="row">
     <div class="col-md-4">  
       <div class="card">
  <div class="card-header text-white bg-dark">
  Upcoming Visits
  </div>
  <div class="card-body">
    <blockquote class="mb-0">
     <?php 
         $sdate=mysqli_query($conn,"SELECT CURRENT_DATE()");
          $date=mysqli_fetch_array($sdate);
         $sqls="SELECT * FROM serviceapp WHERE Sdate>='$date[0]' and M_ID='{$_SESSION['m_id']}'";
        $pros=mysqli_query($conn,$sqls);
         // echo $pros;
         
         //echo $resultps;
          while($resultps=mysqli_fetch_array($pros)):
       ?>
         <p><h5><?php echo $resultps['Service'];?></h5> on <b><?php echo $resultps['Sdate'];?></b> from <?php echo $resultps['Intime'];?> to <?php echo $resultps['Outtime'];?></p>
        <?php   endwhile;
         ?>
    </blockquote>
     </div>
     </div></div>
     <div class="col-md-4">  
     <div class="card">
  <div class="card-header text-white bg-secondary">
   Programs Enrolled
  </div>
  <div class="card-body">
    <blockquote class="mb-0">
       <?php 
         $sql="SELECT Programs FROM member WHERE M_ID='{$_SESSION['m_id']}'";
         $pro=mysqli_query($conn,$sql);
         $resultp=mysqli_fetch_array($pro);
       ?>
      <p><?php echo $resultp[0];?></p>
    </blockquote>
     </div>
     </div></div>
     </div>
    
    </div>
    
    <div id="d1" class="container tab-pane fade"><br>
    profile
    
    </div>
    <div id="d2" class="container tab-pane fade"><br>
    <h4>Visit Form</h4>
    <form id="#reg-form" action="schedule_serv.php" method="POST">
                           <div class="form-row">
                              
                              <div class="form-group col-md-6">
                                 <label for="inputfn">Date</label>
                                 <input type="date" name="sdate" class="form-control" required id="inputEmail4" placeholder="Jane">
                              </div>
                               <div class="form-group col-md-3">
                                 <label for="inputPassword4">In Time</label>
                                 <input type="text" name="int" class="form-control" required id="inputPassword4" placeholder="mm/dd/yyyy">
                              </div>
                              <div class="form-group col-md-3">
                                 <label for="inputPassword4">Out Time</label>
                                 <input type="text" name="outt" class="form-control" required  id="inputPassword4" placeholder="mm/dd/yyyy">
                              </div>
                              
                           </div>
                           <div class="form-row">
                          
                              <div class="form-group">
                                 <label for="inputEmail4">What services would you like to use when you visit?</label>
                                 <select name="service" required class="form-control">
                                 <option value="Lounge area">Lounge area</option>
                                 <option value="Washer Dryer">Washer Dryer </option>
                                 <option value="Computerlab">Computerlab</option>
                                  <option value="Counselling">Counselling</option>
                                   <option value="Identification">Identification</option>
                                   <option value="Programming Event">Programming Event</option>
                              </select>
                              </div>
                              
                           </div>
                            <button type="submit" name="schedule" class="btn btn-dark">Schedule</button><br><br>

                           </form>
   
    </div>
    <div id="v1" class="container tab-pane fade"><br>
    <h2>Opt for all the services you would want to be in</h2><br>
    <form  action="pservices.php" method="POST">
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
                             <div class="form-row">
                            <div class="form-check-inline col-md-4">
                                   <label class="form-check-label" for="check1">
                               <input type="checkbox" class="form-check-input" id="check1" name="program[]" value="Other" checked>Other: Please Describe How We Can Help
                              </label>
                            </div></div>
                            <br><br>
                             If you want to change the programs you can reselect and change anytime.<br><br>
                            <button type="submit" name="programs" class="btn btn-dark">Submit or Update</button>

                           </form>
   </div>

    

    </div>
  </div>
</div>
          
      </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
   </body>
</html>

