<html>
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
<link href="css/main.css" rel="stylesheet">
<link href="css/secondaryPages.css" rel="stylesheet">
</head>
    
<body>
    <header class="header">
        <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <img src="images/S7ty2.png" class="mLogo">
        </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
       <ul class="nav navbar-nav" id="mainNav">
          <li  id="firstLink"><a href="indexar.php" class="scroll-link">الرئيسية</a></li>
          <li><a href="bookingar.php" class="scroll-link">الحجز</a></li>
          <li ><a href="electronicArchivear.php" class="scroll-link">السجل الطبى</a></li>
          <li class="active"><a href="bloodBankar.php" class="scroll-link">بنك الدم</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
    
      
            <div class="chooseDoctor">
          <div class="panel panel-default">
            
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
                        $_SESSION['hospitalId'] = $result;                  
                        ?> 
                    <select  class="col-md-5 col-xs-8" id="hospitalBook" style="width: 100%; margin-bottom: 25px; height: 50px; font-size: 22px; font-weight: bold; background-color: rgba(0,0,0,0.8); color: white;">
                      <option value="">من فضلك اختر المشفى الاقرب اليك :</option>
                      <?php 
                      foreach ($result as $value) {
                       ?>
                       $value['Id'];
                       <option value="<?php echo $value['Id']; ?>">
                        <?php echo $value['Name']; ?>
                       </option>
                       <?php
                      }
                    }
                       ?>
                    </select>
            <div class="panel-body" >
              <div class="table-responsive">
                <table class="table" style="text-align: right;" id="table">
                  <thead>
                    <tr>
                      <th style="text-align: right;">فصيلة الدم</th>
                      <th style="text-align: right;">الكمية</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody id="tableBody">

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="row fixed-bottom" style="margin-top: 350px;">
      
        <div class="text-right" style="cursor: pointer;" >
        <a href="bloodBankar.php" style="text-decoration: none;">AR |</a> <a href="bloodBank.php" class="active" style="text-decoration: none;">| EN</a>
     
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
        url: 'http://se7ety3-001-site1.gtempurl.com/api/Bloodbanks/GetBloodbank/' + $(this).val(),
        method: 'GET',
        beforeSend: function() {
          $('#tableBody').html('<div class="text-center"><i class="fa fa-spinner fa-3x fa-spin"></i></div>');
        },
         success: function(data){
            var html = null;
            if (data == null) {
              $('#tableBody').html('<div class="alert alert-danger">عذرا , لا يوجد دم فى هذه المستشفى</div>');
            } else {
              for (x in data) {
                html += `
                <tr>
                  <td>`+x+`</td>
                  <td>`+data[x]+`</td>
                </tr>
              `;
            }
            $('#tableBody').html(html);
            }
            
        }
      });
  })
 
</script>
    </body>
</html>
