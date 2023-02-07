<?php include "header.php" ?>
<?php $title = "Exercice3"?>


<h3>
3. In-class Task Variable & Operators 07.02.2023 (variable.php)

</h3>

<h2>
.1 Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site. 
</h2>
<!--.2 is also included in this -->
<form action="action.php" method="post">
    <div class="row">

    <div class="col">
        <input type="text" name="fname" required placeholder="Firsts Name" class="form-control"> <br>
    </div>
    <div class="col">
        <input type="text" name="lname" required placeholder="Last Name" class="form-control"> <br>

     </div> <nr>
    
    Birth Date: <input type="date" name="bdate" required> <br>

    <input type="submit" name="Submit"> 
    </div>
</form>

<h3>
    .3 Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.
</h3>

<table class="table">
  <thead>
    <tr>
      <th>Header 1</th>
      <th>Header 2</th>
      <th>Header 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Row 1, Column 1</td>
      <td>Row 1, Column 2</td>
      <td>Row 1, Column 3</td>
    </tr>
    <tr>
      <td>Row 2, Column 1</td>
      <td>Row 2, Column 2</td>
      <td>Row 2, Column 3</td>
    </tr>
  </tbody>
</table>

<h3>
    .4 Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)

</h3>

<?php 
$string1 = "random";
$string2 = "random2lol";

$joinedString = $string1 . "" . $string2;

echo $joinedString;
?>

<h3>
    .5 Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.

</h3>

<?php 
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;
echo $sum
?>

<h3>
    .6 Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER)
</h3>

<?php 
echo $_SERVER['HTTP_USER_AGENT']
?>

<h3>
    .7 Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file. (Hint: Use predefined variable, basename function & date function to print the date and time)

</h3>





<?php include "footer.php" ?> 