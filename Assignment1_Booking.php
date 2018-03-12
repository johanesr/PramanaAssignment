<!DOCTYPE HTML>
<html>
<head>
  <title>Home</title>
  <!-- Connect CSS -->
  <link rel="stylesheet" type="text/css" href="Assignment1.css">
</head>
<body>
  <!-- HEADER -->
  <div class = "header">
    <a href="Assignment1_Home.php"><img src="logo2.png"></a>
  </div>
  <!-- TOP MENU -->
  <div>
    <p class = "menu"><a href="Assignment1_Home.php">Home</a></p>
    <p class = "menu"><a href="Assignment1_Facility.php">Facility</a></p>
    <p class = "menu"><a href="Assignment1_Booking.php">Booking Room</a></p>
    <hr>
  </div>
  <div class = "content">
    <form name="myForm" action="Assignment1_Insert.php" onsubmit="return validateForm()" method="post">
      <table border="3">
        <tr>
          <th colspan="2">Book Room</th>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="Name" required></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="Email" required></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="number" name="Phone" required></td>
        </tr>
        <tr>
          <td>Stay In Date</td>
          <td><input type="date" id="DateIn" name="DateIn"></td>
        </tr>
        <tr>
          <td>Length of Stay (days)</td>
          <td><input type="number" name="DaysStay" required></td>
        </tr>
        <tr>
          <td>Room Type</td>
          <td>
            <select name="RoomType">
              <option disabled selected value>Select One</option>
              <option value="DRoom">Deluxe Room - $274</option>
              <option value="DPool">Deluxe Pool Villa - $438</option>
              <option value="1Bedroom Pool Villa">1 Bedroom Pool Villa - $525</option>
              <option value="2Bedroom Pool Villa">2 Bedroom Pool Villa - $635</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Additional Charges</td>
          <td>
            <input type="checkbox" name="EBed" value="1">Extra Bed - $80<br>
            <input type="checkbox" name="AShuttle" value="1">Airport Shuttle - $40<br>
            <input type="checkbox" name="UbudTour" value="1">Ubud Tour 1D - $100<br>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="submit">
          </td>
        </tr>
      </table>
    </form>
  </div>
  <!-- FOOTER HTML -->
  <?php
  echo "<div class = \"footer\">&copy;2017 Pramana Experience - All Right Reserve</div>";
  ?>
</body>
</html>

<!-- JAVASCRIPT -->
<script>
function validateForm()
{
  // Check Phone
  var phoneNumber = document.forms["myForm"]["Phone"].value;
  if (phoneNumber.toString().length<8 || phoneNumber<=0)
  {
    alert("Phone number has to be valid (No negative & 8 digits) [Phone]")
    return false;
  }

  // Check The Day of Stay
  var today = new Date();
  var inDate = document.getElementById("DateIn").value;
  if (today.getTime() > new Date(inDate).getTime())
  {
    alert("You cannot stay at this date [Stay In Date]");
    return false;
  }

  // Check Number Days Stay
  var x = document.forms["myForm"]["DaysStay"].value;
  if (x <= 0)
  {
    alert("You cannot stay for " + x + " days [Length of Stay]");
    return false;
  }

  alert("Thank you and enjoy your stay!");
  return true;
}
</script>
