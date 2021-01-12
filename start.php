<?php session_start();?>
<?php require_once("header.php");?>
<title>DONE</title>
</head>
<?php
require_once("config.php");
$cn = mysqli_connect(HOST , USER_NAME , USER_PW , DB); 
mysqli_set_charset($cn, "utf8");
$name= $_POST["name"];
$code=$_POST["code"];
$level= $_POST["level"];
$lang= $_POST["lang"];
$subj="";
$sid=0;
$flag=0;//new student



         $qr= "SELECT id FROM students WHERE code = $code;";
        
         $rslt = mysqli_query($cn , $qr); 
          while($row = mysqli_fetch_row($rslt))
            {      $flag=1; //existing student         
            
                   $sid= $row[0] ;
            }

         
         if  ($flag==0) 
         {
            
            
         $qry ="insert into students (full_name,code,level) values ('$name',$code ,'$level' );";
         $rslt = mysqli_query($cn , $qry);

         $qry1 ="SELECT id FROM students where code =$code";
         $rslt = mysqli_query($cn , $qry1); 
              
         while($row = mysqli_fetch_row($rslt))
             {   
                //var_dump($row);
              $sid= $row[0] ;
              
             } 
                       

        }

        $qry2 ="insert into quiz (code,level,subj,st_id) values ($code ,'$level','$lang',$sid )";
        $rslt = mysqli_query($cn , $qry2);

        $q ="SELECT MAX(id) FROM quiz where st_id = $sid";
        $rslt = mysqli_query($cn , $q); 
        while($row = mysqli_fetch_row($rslt))
             {   
              $qid= $row[0] ;
             } 
             $qry3 ="insert into quizquest (quiz_id) values ($qid)";
             $rslt = mysqli_query($cn , $qry3);
         ?>
         
         
    <?php 

         switch($lang)
         {
          case 'عربي':
             { $subj="arabic";
             break;}
    case 'دراسات اجتماعية':
           {$subj="social";
             
             break;}
    case 'English H.L':
                  {
                    $subj="hl";
                  
                  break;}
    
    case 'English O.L':
                     {
                        $subj="ol";
                      
                      break;}
    case 'Math':
                         { 
                            $subj="math";
                          
                          break;}
    case 'Science':
                            {
                                $subj="science";
                             
                             break;}
    default:
                             { echo "defaultt" ;
                             break;}

                             }


         $_SESSION['subj']=$subj;
         $_SESSION['studentid']=$sid;
         $_SESSION['level']=$level;
         $_SESSION['quizid']=$qid;


switch($subj)
{
 case 'Arabic':
      { require_once("counter.php");
      echo("<script>location.href = 'quiz.php';</script>");
      break;}
case 'social':
      { require_once("counter.php");
       echo("<script>location.href = 'quiz.php';</script>");
       break;}
case 'hl':
      {  require_once("counter.php");
         echo("<script>location.href = 'quize.php';</script>");
         break;}

case 'ol':
      {  require_once("counter.php");
         echo("<script>location.href = 'quize.php';</script>");
         break;}
case 'math':
         { require_once("counter.php");
          echo("<script>location.href = 'quize.php';</script>");
          break;}
case 'science':
            {require_once("counter.php");
            echo("<script>location.href = 'quize.php';</script>");
            break;}
default:
                    { 
                       echo "defaultt" ;
                    break;}

                    }


?>

<?php require_once("footer.php");  ?>
