


<html>
   <head>
<title>Student's Registration Form</title>
   </head>
<body>
<form method='POST' action='user_registration.php'>
<table width='500' border='5' align='center'>
<tr> 
<th bgcolor='pink' colspan='2' style='color:brown;'>
Student's Registration Form
</th>
</tr>

<tr>
<td align='right' style='color:brown;'>Student's Name:</td>
<td><input type='text' name='user_name'>

</tr>

<tr>
<td align='right' style='color:brown;'>Father's Name:</td>
<td><input type='text' name='father_name'>
</tr>

<tr>
<td align='right' style='color:brown;'>School's Name:</td>
<td><input type='text' name='school_name'>

</tr>

<tr>
<td align='right' style='color:brown;'>Roll No:</td>
<td><input type='text' name='roll_no'>

</tr>
<tr>

<td align='right' style='color:brown;'>Class:</td>
<td>
<select name='student_class'>
<option value='null'>Select Class</option>
<option value='10th'>10th</option>
<option value='9th'>9th</option>
<option value='8th'>8th</option>
<option value='7th'>7th</option>
</select>

</td>
</tr>

<tr>
<td align='center' colspan='6'>
<input type='submit' name='submit' value='Register'

</td>
</tr>
</table>
</form>
</body>
</html>


<?php
include('db.php');

if(isset($_POST['submit']))
{
 $student_name = $_POST['user_name'];
$student_father = $_POST['father_name'];
$student_school = $_POST['school_name'];
$student_roll = $_POST['roll_no'];
$student_class = $_POST['student_class'];

if(!empty($student_name)&&!empty($student_father)&&!empty($student_school)&&!empty($student_roll)&&!empty($student_class))

{
$query = "insert into `u_reg` values('','$student_name','$student_father','$student_school','$student_roll','$student_class')";

if(mysql_query($query))

{
echo '<center><b>The following data has been inserted into your database:</b></center>';
echo  "<table align='center' border='4'>
<tr>
<td>$student_name</td>
<td>$student_father</td>
<td>$student_school</td>
<td>$student_roll</td>
<td>$student_class</td>
</tr>
</table>";

}

}

else
{
echo "<center><h2 style='color:red;'>all fields are required </h2></center>";
}
}








?>

