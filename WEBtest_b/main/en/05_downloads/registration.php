<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--copyright© 2012-2015 Yura Komatsu All Rights Reserved.-->
<?php
session_start();
?>
<?php
  include("header_1.php");
  include("header_bootstrap.php");
  
  header('Content-type: text/html; image/jpeg, charset=UTF-8');
  header('Content-Language: ja');
  ?>
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
  
  <head>
  </p>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>form</title>

</head>
<?php
$errors= 0; //入力エラーをカウントする変数
$url_program = "acp-1.1.1.tar.gz";
$filename = "Version 1.1.1.";
$filesize = "646KB";
$filedate = "July 13, 2015";

$timestamp = time();
$timedate = date("Y/m/d/ H:i:s",$timestamp);

$ipAddress = $_SERVER["REMOTE_ADDR"];

$hostname = $_SERVER["REMOTE_HOST"];
#$hostname = gethostname();
#$hostname = php_uname("n");


if(!isset($_SESSION["form1"])){
	$_SESSION["form1"] = "input";
	$_SESSION["saved"] = "";
	$error["name"]["message"] = "";
	$error["belong"]["message"] = "";
	$error["addr"]["message"] ="";
	$name = "";  //名前
	$belong = "";  //所属
	$addr = "";  //e-mail
	
	
}else{
	$name = stripslashes( $_POST["name"] );
 
	{$error["name"]["message"] =""; }
	
	$belong= $_POST["belong"];

	 { $error["belong"]["message"] = ""; }
	 
	 $addr = stripslashes( $_POST["addr"] );
	 

	 {$_SESSION["form1"] = "checked"; }

}

?>
    
<!--  <head>
  </p>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>form</title>
-->

<body>

<!--<table border="1" align="center">
-->
 <!--<form role="form">-->
 
   <div class="second">　
   　　　　　　　　　　　　　　　　　　
<?php

if("checked" != $_SESSION["form1"]){
	printForm($name,$belong,$addr,$error);
	                                      //フォームの表示	
		
}else{
	saveData($name,$belong,$addr,$timedate,$ipAddress,$hostname);      //データの保存 
	printResult($name,$belong,$addr,$filename,$url_program,$filesize,$filedate);   //入力結果の表示
	
   $_SESSION["form1"] = "input"; 
}
//fileprint ( $filename_footer ) ;

//関数定義

//フォームの表示

                                                       
 function printForm($name,$belong,$addr,$error){
	 echo"<br>".
	     "<br>";
   
     echo"<form role=\"form\" class=\"form-group-sm\" method=\"post\" action=\"registration.php\">\n".
	 
	   "<h4 class=\"form-group-sm-heading\"><label for=\"exampleInputMessate1\">Please fill in the following form.(Optional)</label></h4>\n";
	
	 echo"<br>";
	 
	 echo"<div class=\"form-group\">
	      <td valign=\"top\"><h5><label for=\"exampleInputName\">　&nbsp;Name:{$error["name"]["message"]}</h5></label></td>". 
	                                            
	    "<center><input type=\"text\" class=\"form-control\" id=\"exampleInputName\"placeholder=\"Name\" 
	     name=\"name\" value=\"$name\" style=\"width:600px\" autofocus></center></div>\n";
	   
	 echo"<div class=\"form-group\">
	      <td valign=\"top\"><h5><label for=\"exampleInputAffiliatino1\">　&nbsp;Affiliation:{$error["belong"]["message"]}</h5></label></td>".
	 
	    "<center><input type=\"text\" class=\"form-control\" id=\"exampleInputBelong\" placeholder=\"Affiliation\" 
	     name=\"belong\" value=\"$belong\" style=\"width:600px;\"></center></div>\n";
	 
	 echo"<div class=\"form-group\>
	      <td valign=\"top\"><h5><label for=\"exampleInputEmail1\">　&nbsp;Email address:{$error["addr"]["message"]}</h5></label></td>".
	 
	     "<center><input type=\"text\" class=\"form-control\" id=\"exampleInputEmail\" placeholder=\"Email address\" 
	    name=\"addr\" value=\"$addr\" style=\"width:600px\"></center></div>\n".
	 "<br>".
	 "<br>"; 
	 
	 echo"<div class=\"form-group\"><align=\"center\">
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" button class=\"btn btn-lg btn-info \"name=\"submit\" value=\"Submit\">\n".
	   "<input type=\"reset\" button class=\"btn btn-lg btn-default \"name=\"cancel\" value=\"Reset \"></div>\n".
	 
	 "<br>".
	 "</form>\n";
     	 
 }

 //データの保存
  function saveData($name,$belong,$addr,$timedate,$ipAddress,$hostname){
	 if("yes" !=$_SESSION["saved"]){
	 $file = fopen("../../en/06_log/form1.log","a");
		 if(!$file)
		    die("ファイル書き込みのオープンに失敗しました"); 
		 if(!flock($file,LOCK_EX))
		   die("ファイルのロックに失敗しました");
		  
		  fwrite($file,"{$name},\t{$belong},\t{$addr},\t{$timedate},\t{$ipAddress},\t{$hostname},\r\n");
		  flock($file,LOCK_UN);
		  fclose($file);
		  $_SESSION["saved"] ="yes";
	 }
 }
 
?>
</div>
<!--  </form>
-->
<!--<table border="1" align="center">

<?php 

 //入力の結果の表示

 function printResult($name,$belong,$addr,$filename,$url,$filesize,$filedate){
	 echo "<br>";
	 echo "<br><h4><label for=\"exampleInputmessage\">Thank you, Mr./Ms. {$name} <br></label></h4>\n";
	 echo "<br>";
	 echo "<table class=\"table table-bordered\">\n";
	 echo "<tr>
	         <td><h5><center>Contents</center></h5></td>".
			"<td><h5><center>File name</center></h5></td>".
			"<td><h5><center>Size</center></h5></td>".
			"<td><h5><center>Date</center></h5></td></tr>\n";
	 echo  "<tr>
		      <td><h5><center>\"$filename\"</br>
			           Source code </center></h5></td>".
			  "<td><h5><center><a href=\"$url\" target=\"_blank\"><u>\"$url\"</u></a></center></h5></td>".
			  "<td><h5><center>　\"$filesize\"　</h5></center></td>".
			  "<td><h5><center>  \"$filedate\"</h5><center></td></tr>\n";
	
	 echo"</table>\n";
	   
     echo "<br>";
     echo "<br>";
     echo "<br>";
 }
 ?>
 
</table>
-->

<?php
  include("footer.php");
  ?>
  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<p>&nbsp;</p>

</body>
 </html>
 
