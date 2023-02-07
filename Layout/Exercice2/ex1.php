<?php include "header.php" ?>
    <h1>3.1 Write a simple PHP script to print your information</h1>
<?php
//opening tag

echo "Adam Kessa";
echo "BBCAP22";


?> 
<h1>3.2 Hello world! My name is "David"</h1>
<?php
//opening tag
echo "Hello World! My name is \"David\" ";

?> 

<h1>3.3 Current Date</h1>
<?php

echo date("d.m.Y")

?>
<h3>3.4 Variable in Php</h3>
<?php 
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>"?>

<h3>3.5 Table and Variables</h3>
<?php 
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<tr>
<td> 1 </td><tf> Pekka </td><td> $g1 </td>
</tr>
<tr>
<td> 2 </td><tf> Pekka </td><td> $g2 </td>
</tr>
<tr>
<td> 3 </td><tf> Pekka </td><td> $g3 </td>
</tr>
</table>
";
?>
<h3>4 Screenshot of the developement envioronment</h3>
<img src="docker_screem.png
">





<?php include "footer.php" ?>
