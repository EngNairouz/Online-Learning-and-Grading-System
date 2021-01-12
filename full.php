<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<title>ADMIN</title>

<link  rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">

</head>
<meta charset="utf-8">
<body style="background-image:url('ques.jpeg');background-repeat:no-repeat;background-size:100%;">

<div class="center;col-md-8">

<div class="m-4"><h4>بيانات الطلاب</h4> </div>


<table class="table table-striped;table table-hover">
  <thead class="thead-dark">
      <tr>
        <th>المسلسل</th>
        <th>الاسم</th>
        <th>الكود</th>
        <th>الصف</th>
        <th>عربي</th>
        <th>دراسات اجتماعية</th>
        <th>Math</th>
        <th>Science</th>
        <th>English H.L</th>
        <th>English O.L</th>
        </tr>
      </thead>
      <tbody>        
      <?php       
       require_once("config.php");
        $cn = mysqli_connect(HOST , USER_NAME , USER_PW , DB); 
         mysqli_set_charset($cn, "utf8");
        $rslt = mysqli_query($cn , "SELECT `id`, `full_name`, `code`, `level`, MAX( Arabic),  MAX(social),  MAX(Math),  MAX(Science),MAX( hl), MAX( ol)
        FROM students GROUP BY code
        ");
        while($row = mysqli_fetch_row($rslt))
        {
          //var_dump($row);
          ?>
          <tr>
            <td><strong><?php echo $row[0]?></strong></td>
            <td><strong><?php echo $row[1]?></strong></td>
            <td><strong><?php echo $row[2]?></strong></td>
            <td><strong><?php echo $row[3]?></strong></td>
            <td><strong><?php echo $row[4]?></strong></td>
            <td><strong><?php echo $row[5]?></strong></td>
            <td><strong><?php echo $row[6]?></strong></td>
            <td><strong><?php echo $row[7]?></strong></td>
            <td><strong><?php echo $row[8]?></strong></td>
            <td><strong><?php echo $row[9]?></strong></td>
            <!--<td><?php echo $row[10]?></td>-->
          </tr>
          <?php
        }
        mysqli_close($cn);
      ?>
      
      </tbody>
    </table>
   
     <div class="m-4";align="bottom">
       
       <a href="welcoming.php"
       class="p-3 mb-2 bg-secondary text-white"
       role="button" aria-pressed="true"> الصفحة الرئيسية</a>
             
             </div>
      </div>
      </div> </div>
      <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>

</body>
</html>