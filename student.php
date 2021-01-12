<?php session_start();?>
<?php require_once("header.php");?>
<title>STUDENT</title>
</head>
<body style= "background-image:url('bk.jpg');background-repeat:no-repeat;background-size:100%;">

<?php // define variables and set to empty values
$name = $code = $lang = $level ="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $name = test_input($_POST["name"]);
 $code = test_input($_POST["code"]);
 $lang = test_input($_POST["lang"]);
 $level = test_input($_POST["level"]);

}
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
  return $data;}?>


<div class="m-4">
<hr > 
    
 <hr>
 <div class="m-4">
<h1 style="font-family:verdana;color:white;text-align:center"> 
    برجاء كتابة البيانات
 </h1>
 </div>
 </div>
 
<div class="row align-items-center justify-content-center" style="background-image: url('bkk.png');">
<form method="post" action="start.php" class="needs-validation";novalidate>
  <div class="form-group" >
    <div class="col-md-25">
   <!--<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>-->
      <label for="validationTooltip01" style="color:white" > اسم الطالب </label>
      <input type="text" class="form-control" name="name" id="validationTooltip01" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>


  <div class="form-group">
    <div class="col-md-10">
      <label for="validationTooltip03" style="color:white"> كود الطالب </label>
      <input type="text" class="form-control" name="code" id="validationTooltip03" required>
      <div class="invalid-tooltip">
        Please provide a valid code.
      </div>
    </div>
  </div>


  <div class="form-group">
    <div class="col-md-10">
      <label for="validationTooltip08" style="color:white"> المادة  </label>
      <!--<input type="text" class="form-control" id="validationTooltip03" required>-->
      <select class="custom-select" name="lang" id="validationCustom08" required>
        <option selected disabled value="">اختر....</option>
        <option>عربي</option>
        <option>دراسات اجتماعية</option>
        <option>English H.L</option>
        <option>English O.L</option>
        <option>Math</option>
        <option>Science</option>

      </select>
     
      <div class="invalid-tooltip">
        Please select a valid Lang.
      </div>
    </div>
  </div>

  <div class="form-group" >
    <div class="col-md-10">
      <label for="validationTooltip01" style="color:white" >  الصف  </label>
      <select class="custom-select" name="level" id="validationCustom08" required>
        <option selected disabled value="">اختر....</option>
        <option>الاول الإعدادي</option>
        <option>الثاني الإعدادي</option>
        <option>الثالث الإعدادي</option>
        <option>الرابع الإبتدائي</option>
        <option>الخامس الإبتدائي</option>
        <option>السادس الإبتدائي</option>
        

      </select>
     
      <div class="invalid-tooltip">
        Please select a valid level.
      </div>
    </div>
    </div>


  <button class="btn btn-primary"  type="submit">بدأ الاختبار</button>
  <!---->
</form>
</div>




<br> <br> <br> <br> <br> <br> <br> <br>



<?php require_once("footer.php");?>