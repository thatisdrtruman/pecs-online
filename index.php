<?php
  include "database.php";

$sql = "SELECT firstname, surname, user_id from teacherorparent";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PECS-Online - Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/pecs-general.css">

</head>
<body>
<div class="header white-text">
  <img src="images/pecs-online-logo.png" alt="PECS-Online" style="width:10%; height:10%;">
</div>

<div class="header white-text">
  <h3>Welcome to PECS online</h3>
  <h4>Who is using this now?</h4>
</div>

<div class="grid-container">
  <?php
  if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)){
      echo "<a href='child-login.php?user_id=". $row["user_id"]. "'>";
      echo "<button class='button button1 white-text'>" . $row["firstname"]. $row["surname"]. "</button>";
      echo "</a>";
    }
  } else {
    echo "There's no one. Add some";
  }
  ?>

  <a href="register-teacher-parent.html">
  <button class="button button8 white-text ">Add +</button>
  </a>
</div>


</body>
</html>
<?php
mysqli_close($conn);
?>