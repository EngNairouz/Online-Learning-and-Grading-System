<?php session_start();?>
<?php require_once("header.php");?>
<title>Security</title>
</head>

<body style="background-image:url('bk1.jpg');background-repeat:no-repeat;background-size:100%;">


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php // define variables and set to empty values
$usernme = $password ="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $usernme = test_input($_POST["usernme"]);
 $password = test_input($_POST["password"]);
}
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
  return $data;}?>


<div class="m-5 " style="background-image:url('ohoh.png');background-repeat:no-repeat;background-size:100%;">
<div class="row align-items-center justify-content-center">
<div class="col-m-5" >
<form method="post" action="check2.php" class="needs-validation";novalidate>
<div class="form-row">
    <div class="col-md-25">
      <label style="color:midnightblue" for="validationTooltip03"> <strong>اسم المستخدم </strong></label>
      <input type="text" class="form-control" name="usernme" id="validationTooltip03" required>
      <div class="invalid-tooltip">
        Please provide a valid username.
      </div>
    </div>
    <div class="col-md-25">
      <label style="color:midnightblue" for="validationTooltip04"> <strong>الرقم السري </strong> </label>
      <input type="password" class="form-control" name="password" id="validationTooltip04" required>
      <div class="invalid-tooltip">
        Please provide a valid password.
      </div>
    </div>
  </div>
  
 <br>
  <button class="btn btn-primary"  type="submit">دخول</button>
  
</form>
</div>
</div>
</div>
<?php require_once("footer.php");?>