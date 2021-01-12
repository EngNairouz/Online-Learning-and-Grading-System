
<?php session_start(); ?>
<?php require_once("header.php");?>
<title>Final score</title>
</head>

<body style="background-image:url('final.jpg');background-repeat:no-repeat;background-size:100%;">
<br><br><br><br><br><br><br><br>
<hr> <hr>
<div>

<?php
require_once("config.php");
$cn = mysqli_connect(HOST , USER_NAME , USER_PW , DB); 
mysqli_set_charset($cn, "utf8");
$qid= $_SESSION['quizid'];
$qry ="SELECT firstques,
              secondques ,
             thirdques ,
             forthques ,
fifth  FROM `quiz` WHERE id =$qid;";
$rslt = mysqli_query($cn , $qry);

while($row = mysqli_fetch_row($rslt))
        {
          //var_dump($row);
         $one= $row[0] ;
         $two=$row[1]; 
         $three=$row[2];
         $four=$row[3];
         $fife=$row[4];

         }
         $score=$one+$two+$three+$four+$fife;
       // echo $score;
        $qryy ="UPDATE quiz
                            SET 	total = $score
                            WHERE   id=$qid; ";
                            $rslt = mysqli_query($cn , $qryy);

         $qqq="SELECT subj ,st_id FROM quiz WHERE id =$qid;";
        $rslt = mysqli_query($cn ,$qqq );
        while($row = mysqli_fetch_row($rslt))
        {
         $subj=$row[0] ;
         $sid=$row[1] ;
         }
         
         switch($subj)
{
    
        case 'عربي':
           { $subj='Arabic';
           break;}
  case 'دراسات اجتماعية':
         {$subj='social';
           
           break;}
  case 'hl':
                {
                  $subj='hl';
                
                break;}
  
  case 'English O.L':
                   {
                      $subj='ol';
                    
                    break;}
    default:
                             
                             break;

                             }



         $qq="SELECT $subj FROM students WHERE id =$sid;";
         $rslt = mysqli_query($cn , $qq);
         while($row = mysqli_fetch_row($rslt))
        {
         $max= $row[0] ;
         }
         if ($score>$max){
            $qryyy="UPDATE students
              SET $subj = $score
              WHERE  id =$sid;";
            $rslt = mysqli_query($cn , $qryyy);
         }

        

?>
</div>
<div >
<h1>   </h1>
</div>
<div >
</div>
<div class="col">
 <div class="m-50">
<h1 style="text-align:center;color:White" >لقد انتهيت!</h1>
</div>
   <!-- Filled Input Readonly State -->
   <div class="d-flex align-items-center justify-content-center">
   <div class ="d-inline-flex p-2">
<div class="card pmd-card bg-dark text-white " >
	<label  style="text-align: center" for="filled-readonly-input">الدرجة</label>
	<input type="text"   style="text-align: center" readonly value="<?php echo $score ;?>/5" id="filled-readonly-input" class="form-control">
</div>
</div>
</div>
 



<hr><hr>

</div>

<?php require_once("footer.php");?>