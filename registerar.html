<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
		$firstName= $_POST['FName'];
		$lastName= $_POST['LName'];
		$ssn=$_POST['ssn'];
		$password = $_POST['Password'];
		$email = $_POST['mail'];
		$mobNumber = $_POST['Number'];
		$obtNumber = $_POST['ONumber'];
		$city = $_POST['city'];
		$district = $_POST['district'];
		$address = $_POST['address'];

		$data = array("FirstName"=>$firstName,"LastName" => $lastName,"SSN" => $ssn , "Password" => $password, "Email" => $email,
			"Mobile" =>$mobNumber, "OptionalNumber" => $obtNumber, "City" =>$city, "Destrict"=> $district, "Address"=> $address);                                                    
		$data_string = json_encode($data);                                                                                   
		                                                                                                               
		$ch = curl_init('http://se7ety3-001-site1.gtempurl.com/api/register');                     
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
			header("Location:login.php");
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
<!-- //css files -->
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- //bootstrap -->
<!-- fontAweSome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="font/css/fontawesome.min.css" rel="stylesheet">
<!-- //fontAweSome -->
    
</head>
<body style="background-image: url(images/6.jpg); background-size: cover; background-repeat: no-repeat;">
    <div class="bg" style="height: 1100px;"></div>
<!--main-->
    
    
<!-- Heade r-->
    <div class="login" style="top: 0px;">
<div class="main-agileits" style="z-index: 3;">
	<h1 class="sub-head">صحتى</h1>
		<div class="sub-main">	
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<input placeholder="الاسم الاول" name="FName" class="name" type="text" required="" style="text-align: right;">
				<input placeholder="الاسم الاخير" name="LName" class="name2" type="text" required="" style="text-align: right;">
                <input placeholder="الرقم القومى" name="ssn" id="ssn" class="ssn" type="text" required="" style="text-align: right;">
                <label style="color: red; font-family:fantasy; font-weight: 300; font-size: 13px; letter-spacing: 1px;">يجب ان يحتوى الرقم القومى على 14 رقم </label>
				<input placeholder="كلمة السر" id="password" name="Password" onclick="checkLength()" class="pass" type="password" required="" style="text-align: right;">
                <label style="color: red; font-family:fantasy; font-weight: 300; font-size: 13px; letter-spacing: 1px;">يجب ان تبدأ كلمة السر بحرف كبير A~Z , و ارقام و علامات</label>
				<input placeholder="تأكيد كلمة السر" id="Cpassword" name="CPassword" class="pass" type="password" required="" style="text-align: right;">
				<input placeholder="البريد الالكترونى" name="mail" class="mail" type="email" required="" style="text-align: right;">
				<input placeholder="رقم الهاتف" name="Number" class="number" type="text" required="" style="text-align: right;">
				<input placeholder="رقم بديل" name="ONumber" class="number" type="text" required="" style="text-align: right;">
                <br>
                <select name="المدينة" style="width: 320px; height: 42px; padding: 5px; border-radius: 5px; padding-left: 35px; font-size: 15px; color: rgba(1,1,1,0.7);" style="text-align: right;">
                	<option value="0">القاهرة</option>
                </select>
                <br><br>
                <input placeholder="الحى" name="district" class="district" type="text" required="" style="text-align: right;">
				<input placeholder="العنوان" name="address" class="address" type="text" required="" style="text-align: right;">
				<br><br>
				<button class="regsubmit">التسجيل</button>
			</form>
		</div>
    </div>
		<div class="clear"></div>
		<div class="row fixed-bottom" style="margin-top: 30px; margin-right: 50px;">
      
        <div class="text-right" style="cursor: pointer;" >
        <a href="registerar.php" style="text-decoration: none;">AR |</a> <a href="register.php" class="active" style="text-decoration: none;">| EN</a>
     
            </div>
    </div>
</div>
<!--//main-->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
