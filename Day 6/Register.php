<?php
    //Registration Form:
?>
<?php
    $connection = mysqli_connect("localhost:3308", "root", "", "db_internship") or die("Error in Connection");

    if($_POST) {
        $email = $_POST['txt1'];
        $pass = $_POST['txt2'];
        $add1 = $_POST['txt3'];
        $add2 = $_POST['txt4'];
        $city = $_POST['txt5'];
        $state = $_POST['txt6'];

        $q = mysqli_query($connection, "INSERT INTO tbl_themed_data (email, pass, address1, address2, city, state)"
                        . "VALUES('{$email}', '{$pass}', '{$add1}', '{$add2}', '{$city}', '{$state}')")
                        or die("Error: " . mysqli_error($connection));
        
        if($q) {
            echo "<script type='text/javascript'>alert('Record Inserted Successfully!');</script>";
        }
    }
?>
<div class="div">
<form class="row g-3" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input name="txt1" type="email" class="form-control" id="inputEmail4" placeholder="Enter your email" required autofocus>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input name="txt2" type="password" class="form-control" id="inputPassword4" placeholder="Enter your password" required>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Address</label>
    <input name="txt3" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input name="txt4" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input name="txt5" type="text" class="form-control" id="inputCity" placeholder="Enter your city">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">State</label>
    <select name="txt6" id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>Gujarat</option>
    </select>
  </div>
  <!--<div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>-->
  <!--<div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>-->
  <div class="col-md-5"></div>
  <div class="col-md-7">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</div>