<?php
session_start();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
		$ssn=$_POST['ssn'];
		$password = $_POST['Password'];
		$data = array("ssn" => $ssn , "Password" => $password);                                                    
		$data_string = json_encode($data);                                                                                   
		                                                                                                               
		$ch = curl_init('http://se7ety3-001-site1.gtempurl.com/api/login');                     
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json',                                                                                
		    'Content-Length: ' . strlen($data_string))                                                                       
		);                                                                                                                  
		$result = json_decode(curl_exec($ch), true);
		$_SESSION['userdata'] = $result;
		if (!isset($result['Message'])) {

			$_SESSION['userdata'] = $result;
			header("Location:index.php");
		}
		}

		?>

<!DOCTYPE html>
<html>
<head>
<title>صحتى</title>
    <link rel="icon" type="image/gif/png" href="images/title.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8"/>
<!-- css files -->
<link href="css/userIntro.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- //css files -->

<!-- fontAweSome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="font/css/fontawesome.min.css" rel="stylesheet">
<!-- //fontAweSome -->
    
</head>
<body style="background-image: url(images/6.jpg); background-size: cover;">
	<div class="bg"></div>
<!--main-->
    <div class="login">
<div class="main-agileits">
	<h2 class="sub-head">صحتى</h2>
		<div class="sub-main">	
			<?php
			if (isset($result['Message'])) {
				?>
				<div class="alert alert-danger">
					<?php echo $result['Message']; ?>
				</div>
			<?php
			}
			?>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"  >
                <input  placeholder="رقمك القومى" name="ssn" class="ssn" type="text" required="" style="text-align: right;">
				<input  placeholder="كلمة السر" name="Password" class="pass" type="password" required="" style="text-align: right;">
				<br><br>
				<button class="regsubmit" name="submit">تسجيل الدخول</button>
                
                <h3 class="dont">ليس لديك حساب	|| <a href="registerar.php" class="create">انشئ حساب جديد</a></h3>
			</form>
		</div>
		<div class="clear"></div>
</div>
<div class="row fixed-bottom" style="margin-top: 50px; margin-right: 50px; ">
      
        <div class="text-right" style="cursor: pointer;" >
        <a href="loginar.php" style="text-decoration: none; ">AR |</a> <a href="login.php" class="active" style="text-decoration: none;">| EN</a>
     
    
    </div>
        </div>
    </div>
<!--//main-->
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script src="js/main.js"></script>
		
		
</body>
</html>
