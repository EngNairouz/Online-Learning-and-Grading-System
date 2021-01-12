<?php session_start();?>
<?php require_once("header.php");?>
<title>Confirm </title>
</head>
<?php
require_once("config.php");
$cn = mysqli_connect(HOST , USER_NAME , USER_PW , DB); 
mysqli_set_charset($cn, "utf8");

$name= $_POST["teachername"];
$level= $_POST["level"];
$subj= $_POST["subj"];
  
         $qry ="insert into teacher (name,subject) values ('$name','$subj')";
         $rslt = mysqli_query($cn , $qry); 
         $qry1 ="SELECT MAX(id) FROM teacher";
         $rslt = mysqli_query($cn , $qry1); 
              
         while($row = mysqli_fetch_row($rslt))
        {
          //var_dump($row);
        $tid= $row[0] ;
        
         }

         $_SESSION['subj']=$subj;
         $_SESSION['teacherid']=$tid;
         $_SESSION["level"]=$level;
   

switch($subj)
{
    case 'عربي':
             {echo("<script>location.href = 'teacher.php';</script>");
              
             break;}
    case 'دراسات اجتماعية':
           {echo("<script>location.href = 'teacher.php';</script>");
             
             break;}
    case 'English H.L':
                  {echo("<script>location.href = 'teachere.php';</script>");
                  
                  break;}
    
    case 'English O.L':
                     {echo("<script>location.href = 'teachere.php';</script>");
                      
                      break;}
    case 'Math':
                         {echo("<script>location.href = 'teachere.php';</script>");
                          
                          break;}
    case 'Science':
                            {echo("<script>location.href = 'teachere.php';</script>");
                             
                             break;}
    default:
                             { echo "defaultt" ;
                             break;}

                             }




?>

<?php require_once("footer.php");?>


