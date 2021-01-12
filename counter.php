


<?php


         $durationn= 5;
         
         $_SESSION["durationn"]=$durationn;
         $_SESSION["startt"]=date("Y-m-d H:i:s");
         $end=date('Y-m-d H:i:s',strtotime('+'.$_SESSION["durationn"].'minutes',strtotime($_SESSION["startt"])));
         $_SESSION["end"]=$end;
        
   
?>


