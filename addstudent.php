<html>
<head>
</head>
<body>

<?php
$DisplayForm = True;
if(isset($_POST['submit'])){
$DisplayForm = False;
echo $_POST['fname']; 
echo $_POST['lname'];
}
if ($DisplayForm){
?>
<form action="addstudent.php" method="post">
First Name:<font colour=red>*</font> <input type="text" name="fname"><br />
Last Name:<font colour=red>*</font> <input type="text" name="lname"><br />
DOB:<font colour=red>*</font> <input type="text" name="DOB"><br />
House:<font colour=red>*</font> <textarea name="House"></textarea><br />
Town:<font colour=red>*</font> <input type="text" name="town"><br />
County:<font colour=red>*</font> <input type="text" name="County"><br />
Country:<font colour=red>*</font> <input type="text" name="Country"><br />
Postcode:<font colour=red>*</font> <input type="text" name="Postcode"><br />
<input type="reset" name="reset">
<input type="submit" name="submit" value="Go"> 
</form>
<?php




}
?>





</body>
</html>