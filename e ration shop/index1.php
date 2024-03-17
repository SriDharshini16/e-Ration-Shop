<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> SignUp Page </title>
<style> 
body {
  font-family: Calibri, Helvetica, sans-serif;
}
button { 
       background-color: #4CAF50; 
       width: 100%;
        color: black; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 

 input[type=text], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid green; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
    } 
      
   
 .container { 
        padding: 25px; 
        width:300px;
	height:30px;
    } 
.imgj{
 repeat: no-repeat;
 attachment: fixed;
 size: 30px 40px;
 width:120px;
 height:120px
 opacity=0.75
}
.home{
  background-color: WHITE;
  border: none;
  color: #128230;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  width: 10%;
  float:right;
}
.help{
background-color: WHITE;
  border: none;
  color: #128230;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  width: 9%;
  float:right;
}
</style> 
</head>  
<body>
<button class="help"><a href="help.html"  style="text-decoration: none; color: inherit;"><i class="fa fa-question-circle"> HELP</i></a></button>
<button class="home"><a href="index.html"  style="text-decoration: none; color: inherit;"><i class="fa fa-home"> HOME</i></a></button> 
<image class="imgj" src="https://www.tnrtp.org/wp-content/uploads/2020/06/TN-LOGO-T-.png" alt="logo">

<form action="connect.php" method="post">
    <center> <h1> SignUp Form </h1> </center> 
    <center>
        <div class="container"> 
            <label>Card Number </label> <br>
            <input type="text" placeholder="Enter Card Number" id="firstName" name="firstName" required><br>
            <br><label>Password </label> 
            <input type="password" placeholder="Enter Password" id="password" name="password" required><br>
            <br><label>Card Type </label> <br>
	    <select name="cardtype" id="cardtype" style="width: 300px;height:40px;border: 2px solid green;" reqiured>
    <option value="0">Select Card Type:</option>
    <option value="1">PHHRICE</option>
    <option value="2">PHAA</option>
    <option value="3">NPHH</option>
    <option value="4">NPHHS</option>
    <option value="5">NPHHNC</option>
    
  </select><br>
            <br><button type="submit">SignIn</button> 
            <input type="checkbox" checked="checked"> Remember me 
            <br><button type=button class="cancelbtn" > Cancel</button> 
            <br><label>Already have an account? <a href="http://localhost/e%20ration%20shop/login.html" style="text-decoration: none; color: inherit;">Click here</a></label>
        </div>   
</center>
</form> 
</body>   
</html>

 
