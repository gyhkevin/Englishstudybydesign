<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Send Email</title>
</head>

<body>
<?php
$to = 'springwu40@hotmail.com';
$name = $_POST["username"];
$usermail= $_POST["email"];
$subject = $_POST["subject"];
$question = $_POST["question"];
$msg = "
<html>
<head>
<title>$subject</title>
</head>
<body>
<p>Name: $name;</p>
<p>E-mail: $usermail;</p>
<p>Subject: $subject;</p>
<p>Question: $question;</p>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
//$headers .= 'To: Haiven <haiven1989@126.com>' . "\r\n";
//$headers .= 'Cc: Chen Livia <livia.chen@century3inc.cn>, Gao Yu <yu.gao@century3inc.cn>' . "\r\n";
$headers .= "From: $usermail" . "\r\n";
// Mail it

if(!empty($name)&&!empty($usermail)&&!empty($subject)&&!empty($question))
{
	mail($to, $subject, $msg, $headers);
    echo "<script type=\"text/JavaScript\">\r\n"; 
    echo " alert(\"我们已经收到您的提问，我们会尽快给您答复，谢谢！\");\r\n"; 
    echo " location.href='".$_SERVER["HTTP_REFERER"]."';\r\n"; 
    echo "</script>"; 
}else {
	echo "<script type=\"text/JavaScript\">\r\n"; 
    echo " alert(\"Please fill out the complete form!\");\r\n"; 
    echo " location.href='".$_SERVER["HTTP_REFERER"]."';\r\n"; 
    echo "</script>"; 
}

?>

<!--<script type="text/javascript">
	alert("Send Successfully! ");
    history.go(-1);
</script>-->
</body>
</html>
