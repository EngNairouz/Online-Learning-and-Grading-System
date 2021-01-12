<?php session_start();?>
<?php require_once("header.php");?>

<title>security</title>
</head>
<div class="m-4"; align="center">
<?php 
  $usernme= $_POST["usernme"];
  $password= $_POST["password"];
  if ($usernme == '' && $password == '')
  { echo("<script>location.href = 'teacher1.php';</script>");
   }
  else {?>
  <h1>غير مصرح</h1>
  <div><img src="not.png" alt="not allowed" width="300" height="300"></div>
  <br>
  <a href="welcoming.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true"> الصفحة الرئيسية</a>
  <?php }?>

</div>


<?php require_once("footer.php");?>
