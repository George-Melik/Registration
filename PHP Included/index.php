<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Number Generator</title>
<link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>


<div id="main2">
  <h1>Mobile Number Generator</h1>
<form action="index.php" method="post" >
  <select name="limit">
    <option value="2" >2 Starter </option>
    <option value="4" >4 Added </option>
    <option value="6" >6 Larger</option>
    <option value="100" >100</option>
  </select>
  <p><input type="text" name="code" maxlength="3" placeholder="Network Code"  /></p>
  <p><input type="text" name="num" maxlength="6"  placeholder="Last 6 Digits Here" /></p>
  <p><input class="button" type="submit"  name="series" value="SERIES NUMBER" >  </p>
  <p><input class="button" type="submit" name="random"  value="RANDOM NUMBER" >  </p>
</form>


<p>


  <?php


          if(isset($_POST['series']))


          { // If isset Start


            $code=$_POST['code'];
            $limit=$_POST['limit'];
            $num=$_POST['num'];



          $myno = ""."$code"."$num";

          for( $i=1; $i<=$limit; $i++){
          echo "<p>0".$myno.$i.",</p>";
         }
  }

          if(isset($_POST['random'])){
            $code=$_POST['code'];
            $limit=$_POST['limit'];

          for($i=1; $i<=$limit; $i++){
          $rand = substr(str_shuffle("0123456789"),0,7);
          echo "<p>0".$code.$rand.",</p>";
          }
  }

   ?>




</p>

</div>

</body>
</html>
