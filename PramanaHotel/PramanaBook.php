<!DOCTYPE HTML>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="Pramana.css">
  <script type="text/javascript" src="Pramana.js"></script>
  <title>Pramana Hotel & Resort - Book Room</title>
</head>
<body>
  <img src="logo2.png">
  <br>
  <ul id="navigation">
    <li><a href="PramanaHome.php">HOME</a></li>
    <li><a href="PramanaFacility.php">FACILITY</a></li>
    <li><a href="PramanaBook.php">BOOK ROOM</a></li>
  </ul>
    <hr>
    <br>
    <form name="bookingForm" action='PramanaBookSuccess.php' onsubmit="return validateForm()" method="post">
    <table style="width:50%">
      <tr>
        <th id="BookHeader" colspan="2">BOOK ROOM</th>
      </tr>
      <tr>
        <th>Name</th>
        <td><input type="text" name="name" class="nameBox"></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><input type="email" name="email" class="emailBox"></td>
      </tr>
      <tr>
        <th>Phone</th>
        <td><input type="number" name="phone" class="phoneBox"></td>
      </tr>
      <tr>
        <th>Stay-in Date</th>
        <td>
          <input type="date" name="stayInDate" class="inBox">
        </td>
      </tr>
      <tr>
        <th>Length of Stay (days)</th>
        <td><input type="number" name="stayLength" class="stayBox"></td>
          ></td>
      </tr>
      <tr>
        <th>Room Type</th>
        <td>
          <select class="roomBox" required>
            <option value="">Select One</option>
            <option value="DeluxeRoom">Deluxe Room – $ 274</option>
            <option value="DeluxePool">Deluxe Pool Villa – $438</option>
            <option value="1Bed">1 Bedroom Pool Villa – $525</option>
            <option value="2Bed">2 Bedroom Pool Villa - $635</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>Additional Charge</th>
        <td>
          <input type="checkbox" name="charge1" value="extraBed">Extra Bed - $80<br>
          <input type="checkbox" name="charge2" value="shuttle">Airport Shuttle - $40<br>
          <input type="checkbox" name="charge3" value="tour">Ubud Tour 1D - $100
        </td>
      </tr>
      <th colspan="2">
        <input type="submit" value="Submit" class="submitButton">
      </th>
    </table>
  </form>

    <div id="Footer">
      <?php include 'footer.php';
      ?>
    </div>
</body>
</html>
