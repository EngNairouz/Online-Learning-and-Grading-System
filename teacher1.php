<?php session_start();?>
<?php require_once("header.php");?>
<title>teacher</title>
</head>
<body style= "background-image:url('qq.jpg');background-repeat:no-repeat;background-size:150%;">

<?php // define variables and set to empty values
$name = $subj  = $level ="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $name = test_input($_POST["teachername"]);
 $subj = test_input($_POST["subj"]);
 $level = test_input($_POST['level']);
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
 

<div  style="background-image: url('bkk.png');">
    <form method="post" action="confirmteacher.php" class="needs-validation";novalidate>
    <div>
    <div class="form-group" >
          <div class="col-md-6">
      <label for="validationTooltip01" style="color:black" > الاسم  </label>
      <input type="text" class="form-control" name="teachername" id="validationTooltip01" required>
             <div class="valid-tooltip">
        Looks good!
             </div>

          </div>
    </div>

    <div class="form-group" >
         <div class="col-md-4">
        <label for="validationTooltip01" style="color:black" >  الصف  </label>
        <select class="custom-select" name='level' id="validationCustom08" required>
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

    <div class="form-group">
         <div class="col-md-4">
      <label for="validationTooltip08" style="color:black"> المادة  </label>
      <!--<input type="text" class="form-control" id="validationTooltip03" required>-->
      <select class="custom-select" name="subj" id="validationCustom08" required>
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


  

  



  <button class="btn btn-primary"  type="submit">انطلاق</button>
  <!---->
  </div>
  </form>
</div>




<br> <br> <br> <br> <br> <br> <br> <br>



<?php require_once("footer.php");  ?>