<?php session_start();?>
<?php
require_once("config.php");
$cn = mysqli_connect(HOST , USER_NAME , USER_PW , DB); 
mysqli_set_charset($cn, "utf8");
 $qid= $_SESSION['quizid'];
 $sid=$_SESSION['studentid'];
 $correctanswer=$_SESSION['ans'];
 if(isset($_POST['corr'])){
 $answer=$_POST['corr'];}
 else {$answer="";}
 
 $switch=$_SESSION['page'];
 $subj=$_SESSION['subj'];

if($correctanswer==$answer)
{$my_static =1;
    }
    else
    {$my_static = 0;}

switch($subj)
         {
          case 'Arabic':
             { $subj='عربي';
             break;}
    case 'social':
           {$subj='دراسات اجتماعية';
             
             break;}
    case 'hl':
                  {
                    $subj='English H.L';
                  
                  break;}
    
    case 'ol':
                     {
                        $subj='English O.L';
                      
                      break;}
    
    default:
                             {
                             break;}

                             }







switch($switch)
{
    case 'first':
      { $rslt = mysqli_query($cn , "UPDATE quizquest SET answer1 = '$answer'  WHERE  quiz_id = $qid ;");

        $qry1 ="UPDATE quiz
        SET firstques = $my_static
        WHERE  st_id = $sid && id = $qid && subj ='$subj' ;";
        $rslt = mysqli_query($cn , $qry1);
       echo("<script>location.href = 'second.php';</script>");
        break;}
    case 'second':
           {  $rslt = mysqli_query($cn , "UPDATE quizquest SET answer2 = '$answer'  WHERE  quiz_id = $qid ;");
             $qry2 ="UPDATE quiz
             SET secondques = $my_static
             WHERE st_id = $sid && id = $qid && subj ='$subj';";
             $rslt = mysqli_query($cn , $qry2);
             echo("<script>location.href = 'third.php';</script>");
             break;
            }
    case 'third':
                  { $rslt = mysqli_query($cn , "UPDATE quizquest SET answer3 = '$answer'  WHERE  quiz_id = $qid ;");

                    $qry3 ="UPDATE quiz
                    SET thirdques = $my_static
                    WHERE  st_id = $sid && id = $qid && subj ='$subj' ;";
                    $rslt = mysqli_query($cn , $qry3);
                    echo("<script>location.href = 'forth.php';</script>");
                  break;}
    
    case 'forth':
                     { $rslt = mysqli_query($cn , "UPDATE quizquest SET answer4 = '$answer'  WHERE  quiz_id = $qid ;");

                       $qry4 ="UPDATE quiz
                        SET forthques = $my_static
                        WHERE  st_id = $sid && id = $qid && subj ='$subj'; ";
                        $rslt = mysqli_query($cn , $qry4);
                        echo("<script>location.href = 'fifth.php';</script>");
                      break;}
    case 'fifth':
                         {  $rslt = mysqli_query($cn , "UPDATE quizquest SET answer5 = '$answer'  WHERE  quiz_id = $qid ;");

                           $qry5 ="UPDATE quiz
                            SET 	fifth = $my_static
                            WHERE  st_id = $sid && id = $qid && subj ='$subj';";
                            $rslt = mysqli_query($cn , $qry5);
                            echo("<script>location.href = 'Finalscore.php';</script>");
                            
                          break;}
      case 'firste':
                            {  $rslt = mysqli_query($cn , "UPDATE quizquest SET answer1 = '$answer'  WHERE  quiz_id = $qid ;");

                              $qry1 ="UPDATE quiz
                              SET firstques = $my_static
                              WHERE  st_id = $sid && id = $qid && subj ='$subj' ;";
                              $rslt = mysqli_query($cn , $qry1);
                             echo("<script>location.href = 'seconde.php';</script>");
                              break;}
         case 'seconde':
                                 { $rslt = mysqli_query($cn , "UPDATE quizquest SET answer2 = '$answer'  WHERE  quiz_id = $qid ;");

                                   $qry2 ="UPDATE quiz
                                  SET secondques = $my_static
                                  WHERE  st_id = $sid && id = $qid && subj ='$subj' ;";
                                  $rslt = mysqli_query($cn , $qry2);
                                  echo("<script>location.href = 'thirde.php';</script>");
                                   break;}
         case 'thirde':
                                        { $rslt = mysqli_query($cn , "UPDATE quizquest SET answer3 = '$answer'  WHERE  quiz_id = $qid ;");

                                          $qry3 ="UPDATE quiz
                                          SET thirdques = $my_static
                                          WHERE  st_id = $sid && id = $qid && subj ='$subj' ;";
                                          $rslt = mysqli_query($cn , $qry3);
                                         echo("<script>location.href = 'forthe.php';</script>");
                                        break;}
                          
         case 'forthe':
                                           { $rslt = mysqli_query($cn , "UPDATE quizquest SET answer4 = '$answer'  WHERE  quiz_id = $qid ;");

                                             $qry4 ="UPDATE quiz
                                              SET forthques = $my_static
                                              WHERE  st_id = $sid && id = $qid && subj ='$subj' ;";
                                              $rslt = mysqli_query($cn , $qry4);
                                              echo("<script>location.href = 'fifthe.php';</script>");
                                            break;}
         case 'fifthe':
                                               {  $rslt = mysqli_query($cn , "UPDATE quizquest SET answer5 = '$answer'  WHERE  quiz_id = $qid ;");

                                                 $qry5 ="UPDATE quiz
                                                  SET 	fifth = $my_static
                                                  WHERE  st_id = $sid && id = $qid && subj = '$subj' ;";
                                                  $rslt = mysqli_query($cn , $qry5);
                                                   echo("<script>location.href = 'Finalscore.php';</script>");
                                                break;}
    default:
    echo("<script>location.href = 'timeout.php';</script>");
     break;}

?>