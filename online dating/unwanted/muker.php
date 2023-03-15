<?php 
include 'g2dbcon.php';
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password']; 
    $bd_month=$_POST['bd_month'];
    $bd_day=$_POST['bd_yr'];
    $gender=$_POST['gender'];
	$sql="insert into register( name, email, password, bd_month, bd_day, bd_yr, gender) values('$name','$email','$password','$bd_month', '$bd_day', '$bd_yr','$gender')";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		//echo "the data is successfully inserted";
		header('location:Display.php');
	} 
	else{
		die(mysqli_error($conn));
	}
}
 ?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper{
  position: relative;

  height: 800px;
  transform: translate();
  padding: 24px;
  width: 1000px;
  margin-right:1000px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 40px;
  border-bottom: 6px solid coral;
  font-weight: 600;
  color: rgb(250, 243, 243);
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  
  background: coral;
}
.wrapper form{
  margin-top: 30px;
 
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: coral;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #ada9a9;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button button{
  color: #fff;
  letter-spacing: 1px;
  border-radius: 7px;
  background: coral;
  cursor: pointer;
  height: 100%;
  width: 50%;
}
 .input-box.btn:hover{
  background: coral;
  transition: all 0.3s ease;
}
form .text h3{
 color: rgb(165, 159, 159);
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: coral;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
form .input-box #bd,#bd1,#bd2{
  width: 32%;
  height: 57%;
  font-size: 15px;
}
form {
  color: #ada9a9;
  font-size: 18px;
  font-weight: 500;
}
form .input-box #option {
  height: 70%;
  width: 60%;
  border-color: coral;
  border-radius: 6px;
  color: #ada9a9;
  font-size: 15px;
  font-weight: 500;
}
form .input-box .but{
  width: 32%;
  height: 57%;
  font-size: 15px;

}
    </style>
   
   </head>
<body background="im/cp.jpg" style="  background-size: cover;">
 
  
  <div class="wrapper">
    <h2>Registration</h2>
    <form id="sample_form">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="name" class="forming"required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" class="forming" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password" class="forming" required>
      </div>
      
        <div class="input-box">
        <input type="password" placeholder="Confirm password" name="confi" class="forming" required>
      </div>
      <div class="input-box">
        Birthday<br><br>
        <input type="text" placeholder="MM" id="bd" name="bd_month" class="forming"> <input type="text" placeholder="DD" id="bd1" name="bd_day" class="forming"> <input type="text" placeholder="YYYY" id="bd2" name="bd_yr" class="forming"><br>  </div>
    
        <div class="input-box">
          <br>Gender<br>
         <select name="gender" id="option" class="forming">
           <option value="male">Male</option>
           <option value="female">Female</option>
         </select>
        </div>
      
      <div class="policy">
        
        <br><h3></h3>
      </div>
      <div class="input-box button">
        <button type="button" name="submit" id="submit" class="btn" onclick="save_data(); return false;" >Register</button>
      </div>
      <div class="text">
        <h3>Already have an account? <a href="register.html">Login now</a></h3>
      </div>
    </form>
  </div>

  
</body>

</html