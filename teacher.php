<?php session_start();?>
<?php require_once("header.php");?>
<title>teacher</title>
</head>
<body style= "background-image:url('qq.jpg');background-size:150%;">
<?php 
require_once("config.php");
$cn = mysqli_connect(HOST , USER_NAME , USER_PW , DB); 
mysqli_set_charset($cn, "utf8");
$tid = $_SESSION['teacherid'];
$level = $_SESSION['level'];
$switch = $_SESSION['subj'];
 
// define variables and set to empty values
$ques = $ans1 = $ans2 = $ans3 = $ans4=$correctAnswer="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $ques = test_input($_POST["ques"]);
 $ans1 = test_input($_POST["ans1"]);
 $ans2 = test_input($_POST["ans2"]);
 $ans3 = test_input($_POST["ans3"]);
 $ans4 = test_input($_POST["ans4"]);
 $correctAnswer = test_input($_POST["correctanswer"]);

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
<h1  style="background-image: url('ohoh.png');background-size:100%;font-family:verdana;color:black;text-align:center"> 
برجاء كتابة الاسئلة 
 </h1>
 </div>
 </div>
 
<div  style="background-image: url('bkk.png');background-size:100%;">
<form method="post" action="bank.php" class="needs-validation";novalidate>
  <div class="form-group" >
    <div class="col-md-10">
   <!--<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>-->
      <label for="validationTooltip01" style="color:black" > <strong>السؤال :- </strong> </label>
      <input type="text" class="form-control" name="ques" id="validationTooltip01" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-md-4">
      <label for="validationTooltip03" style="color:black"> <strong>الاجابة الاولى </strong></label>
      <input type="text" class="form-control" name="ans1" id="validationTooltip03" required>
      <div class="invalid-tooltip">
        Please provide a valid code.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-4">
      <label for="validationTooltip03" style="color:black"> <strong>الاجابة الثانية </strong></label>
      <input type="text" class="form-control" name="ans2" id="validationTooltip03" required>
      <div class="invalid-tooltip">
        Please provide a valid code.
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-4">
      <label for="validationTooltip03" style="color:black"><strong> الاجابة الثاثة </strong> </label>
      <input type="text" class="form-control" name="ans3" id="validationTooltip03" required>
      <div class="invalid-tooltip">
        Please provide a valid code.
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-4">
      <label for="validationTooltip03" style="color:black">
      <strong> الاجابة الرابعة </strong></label>
      <input type="text" class="form-control" name="ans4" id="validationTooltip03" required>
      <div class="invalid-tooltip">
        Please provide a valid code.
      </div>
    </div>
  </div>


  <fieldset class="form-group">
  <div class="m-2" >
      <legend class="col-form-label col-sm-2 pt-0" style="color:black;background-image: url('ohoh.png');background-size:100%;">
   <strong> الاجابة الصحيحة : </strong>
      </legend>
  <div class="col-sm-10 ; form-group row">

    <div class="form-check">
          <input class="form-check-input" type="radio" name="correctanswer" id="gridRadios3" value="answer1">
          <label class="form-check-label" for="validationTooltip03" style="color:black" for="gridRadios4">
            الاجابة الاولي..
          </label>
    </div>

      

   <div class="form-check">
          <input class="form-check-input" type="radio" name="correctanswer" id="gridRadios3" value="answer2">
          <label class="form-check-label"for="validationTooltip03" style="color:black" for="gridRadios4">
            الاجابة الثانية..
          </label>
        
    </div>
    
  

<div class="form-check">
          <input class="form-check-input" type="radio" name="correctanswer" id="gridRadios3" value="answer3">
          <label class="form-check-label"for="validationTooltip03" style="color:black" for="gridRadios4">
            الاجابة الثالثة..
          </label>
        
    </div>

<div class="form-check">
          <input class="form-check-input" type="radio" name="correctanswer" id="gridRadios3" value="answer4">
          <label class="form-check-label" for="validationTooltip03" style="color:black" for="gridRadios4">
            الاجابة الرابعة..
          </label>
        
    </div>

    </div>
    </div>
  </fieldset>

 
  <button class="btn btn-primary"  type="submit">ارسال</button>
  <a href="welcoming.php"
       class="p-2 m-2 bg-secondary text-white"
       role="button" aria-pressed="true"> الصفحة الرئيسية</a>
  <!---->
</form>
</div>
</div>





<br> <br> <br> <br> <br> <br> <br> <br>



<?php require_once("footer.php");  ?>
