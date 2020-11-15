<!DOCTYPE html>
<html lang="en-gb" class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Se7ety</title>
<link rel="icon" type="image/gif/png" href="images/title.png">

<!-- BootStrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<link href="css/styles.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<!--main css-->
<link href="css/booking.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>
<body>
  
    <header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle menu" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <img src="images/S7ty2.png" class="mLogo">
          </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li  id="firstLink"><a href="index.php" class="scroll-link">Home</a></li>
          <li  class="active" ><a href="booking.php" class="scroll-link">Booking</a></li>
          <li ><a href="electronicArchive.php" class="scroll-link">Medical Record</a></li>
          <li><a href="bloodBank.php" class="scroll-link">Blood Bank</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
    <div class="container">
        <div class="bookingForm">
            <div class="row">
                <h1 class="klmtBook">Welcome To The Booking Menu</h1>
            </div>
            <div class="clearfix visible-xs-block"></div>
            
            
            <div class="row">
                <form class="selectBooking" method="post">
                   <?php
                    session_start();
                        if ($_SERVER['REQUEST_METHOD'] == 'GET') 
                        {    
                        $ch = curl_init('http://se7ety3-001-site1.gtempurl.com/api/hospitals/'.$_SESSION['userdata']['UserId'].'/0/100');                     
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                            'Content-Type: application/json',
                        ));
                        $result = json_decode(curl_exec($ch), true);
                        ?> 
                    <select  class="col-md-3 col-xs-8" id="hospitalBook" name="hospital">
                      <option value="">Choose Your Hospital :</option>
                      <?php 
                      foreach ($result as $value) {
                       ?>
                       <option value="<?php echo $value['Id']; ?>">
                        <?php echo $value['Name']; ?>
                       </option>
                       <?php
                      }
                      
                    }
                       ?>
                    </select>
                    <select id="departSelect" class="col-md-3 col-xs-8" name="department">
                      <option value="">Choose Your Department :</option>
                      
                    </select>
                    <select id="doctorSelect" name="doctor" class="col-md-3 col-xs-8">
                      <option value="">Choose Your Doctor :</option>
                      
                    </select>
                    <br><br><br>
                    <div class="row" style="margin-left: 5px;">
                    <select id="doctorDates" class="col-md-9 col-xs-9" name="date">
                      <option value="">Choose Your Doctor's Date :</option>
                      
                    </select>
                  </div>
                    <br><br>


              <select  id="useridval" style="display: none;" value="">
                 <option value="<?php echo $_SESSION['userdata']['UserId']  ?>">
                 </option>
              </select>


                </form>
                    <button style="margin-left: 35%; margin-top: 48%; width: 350px; height: 41px; font-size: 25px; padding: 2px;" class="btn secondary-btn" id="boookBtn">Book Now</button>
   
              <div id="wait"></div>
            </div>
        </div>
        <div class="row fixed-bottom" style="margin-top: 50px;">
      
        <div class="text-right" style="cursor: pointer;" >
        <a href="bookingar.php" style="text-decoration: none;">AR |</a> <a href="bookin.php" class="active" style="text-decoration: none;">| EN</a>
     
            </div>
    </div>
    </div>
<!--Scripts-->
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<!-- custom js file -->
<script src="js/main.js"></script>
<!--/ custom js file -->
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
    
    
<script type="text/javascript">
  $('#hospitalBook').on('change', function () {
     $.ajax({
        url: 'http://se7ety3-001-site1.gtempurl.com/api/hospitals/spec/' + $(this).val(),
        method: 'GET',
         success: function(data){
            var select = document.getElementById('departSelect');
            select.innerHTML = '';
            for (var i = 0; i<data.length; i++){
                var opt = document.createElement('option');
                opt.value = data[i].Id;
                opt.innerHTML = data[i].Name;
                select.appendChild(opt);
            }
        }
      });
  })
</script>
    
<script type="text/javascript">
  $('#departSelect').on('change', function () {
     $.ajax({
        url: 'http://se7ety3-001-site1.gtempurl.com/api/hospitals/getdoctors/'+ $("#hospitalBook").val()+"/" + $(this).val(),
        method: 'GET',
        
         success: function(data){             
            var select = document.getElementById('doctorSelect');
            select.innerHTML = '';
            for (var i = 0; i<data.length; i++){
                var opt = document.createElement('option');
                opt.value = data[i].Id;
                opt.innerHTML = data[i].Name;
                select.appendChild(opt);
            }
             
        }
      });
  })
</script>

<script type="text/javascript">
  $('#doctorSelect').on('change', function () {
     $.ajax({
        url: 'http://se7ety3-001-site1.gtempurl.com/api/hospitals/Dates/'+ $(this).val()+ "/"+ $("#hospitalBook").val(),
        method: 'GET',
        
         success: function(data){             
            var select = document.getElementById('doctorDates');
            select.innerHTML = '';
            for (var i = 0; i<data.length; i++){
                var opt = document.createElement('option');
                opt.value = data[i].Id;
                opt.innerHTML ="From  " + data[i].From + "  To  " + data[i].To + "   Day  " + data[i].Day;
                select.appendChild(opt);
            }
        }
      });
  })
</script> 

<script type="text/javascript">
    $('#boookBtn').on('click', function () {
     $.ajax({
       url: 'http://se7ety3-001-site1.gtempurl.com/api/hospitals/Reservation/'+ $("#useridval").val() +"/" + $("#doctorDates").val(),
        method: 'GET',
        
         success: function(data){           
         var successMessage = "Your Booking Recorded successfully";
            alert(successMessage);
             window.location.href= 'index.php';
            }
        }
      );
  })
  
</script> 

</body>
</html>