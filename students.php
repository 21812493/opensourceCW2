<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

//echo "<pre>";
//print_r($_POST);
//echo "/<pre>";

if(!empty($_POST['delete'])) {
   foreach ($_POST['delete'] as $dob => $value) {
      //implement sql delete 
      $sql = "delete from * studentid where dob=1974-11-10";
      echo "student = " . $dob . "<br />";
   }
}

   // check logged in
   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      // Build SQL statment that selects a student's modules
      $sql = "select * from student";

      $result = mysqli_query($conn,$sql);

      //Add checkbox to each row - completed 
      //Add delete button at the bottom of table - completed
      //impliment form which submits when delete button is clicked on - completed 
      //impliment PHP code to delete the selected rows from database

      $data['content'] .= "<form method='POST' action=''>";


      // prepare page content
      $data['content'] .= "<table border='1'>";
      $data['content'] .= "<tr><th colspan='9' align='center'>Student</th></tr>";
      $data['content'] .= "<tr><th>DOB</th><th>Firstname</th><th>Lastname</th><th>House</th><th>Town</th><th>County</th><th>Country</th><th>Postcode</th><th>Delete</th></tr>";

      // Display the modules within the html table
      while($row = mysqli_fetch_array($result)) {
         $data['content'] .= "<tr><td> $row[dob] </td><td> $row[firstname] </td>";
         $data['content'] .= "<td> $row[lastname] </td><td> $row[house] </td>";
         $data['content'] .= "<td> $row[town] </td></td> </td>";
         $data['content'] .= "<td> $row[county] </td></td> </td>";
         $data['content'] .= "<td> $row[country] </td></td> </td>";
         $data['content'] .= "<td> $row[postcode] </td></td> </td>";
         $data['content'] .= "<td> $row[level] <input type='checkbox' name='delete[$row[dob]]' /> </td>";
      }
      $data['content'] .= "</table>";
      $data['content'] .= "<input type='submit' value='Delete' />";

      $data['content'] .= "</form>";

      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>
