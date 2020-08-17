


<!DOCTYPE html>
<html>
<head>
	<title>sign in</title>
</head>
<body>

<h1><center>Sign In</center></h1>
 <br><br><br><br>



<?php
$myfile = fopen("ss.txt", "w") or die("Unable to open file!");
$txt = "John Doessssssss\n";
fwrite($myfile, $txt);
$txt = "Jane Doeddddd\n";
fwrite($myfile, $txt);
fclose($myfile);
?>



<table border="1" align="center" width="300" >

<tr>
 
<th>User Name</th>
 
<td><input type="text" name="fn" id="fn1" maxlength="30" title="User Name" placeholder="User Name" required/></td>
</tr>

<tr>
<th>Password </th>
 
<td><input type="password" placeholder="password" /></td>

 </tr>
<td colspan="2" align="center"><input type="submit" value="Submit"/>









</body>
</html>