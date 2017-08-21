<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

body{
    background: blue;
}

/* Set a style for all buttons */
button {
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancel {
    padding: 14px 20px;
    background-color: red;
}

/* Float cancel and signup buttons and add an equal width */
.cancel,.signup {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 14px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.terms{
  color: red;
}

</style>
<body>

<h2>Signup Form</h2>

<form method="POST" action="SellerInfo.php" style="border:2px solid ">
  <div class="container">
<table>
  <tr>
  <td>  <label><b>First Name </b></label></td>
    <td><input type="text" placeholder="Enter First Name" name="fname" required> </td>
    </tr>
    <br>
<tr>
  <td><label><b>Last Name</b></label></td>
<td>    <input type="text" placeholder="Enter Last Name" name="lname" required></td>
</tr>
  <br>
<tr>
  <td><label><b>Username</b></label></td>
<td>
    <input type="text" placeholder="Enter Username" name="uname" required>
  </td>
</tr>
  <br>
<tr>
<td>    <label><b>Email</b></label> </td>
<td>    <input type="text" placeholder="Enter Email" name="email" required> </td>
</tr>
  <br>
<tr>
  <td>
    <label><b>Password</b></label> </td>
    <td>
    <input type="password" placeholder="Enter Password" name="pw" required> </td>
  </tr>
  <br>
<tr>
  <td>
    <label><b>Repeat Password</b></label></td>
    <td>
    <input type="password" placeholder="Re-Enter Password" name="pwre" required>
</td>
</tr>
  <br>

<tr>
  <td>  <label><b>City</b></label></td>
  <td> <input type="text" placeholder="Enter City" name="city" required></td>
</tr>
  <br>
    <br>
    <tr>
  <td>  <input type="checkbox" >
    <div class="terms">
    Agree to our <a href="#">Terms and Conditions</a> </td>
<td> </td>
</div>
    <div class="clearfix">
      <tr>
    <td>  <button type="button" class="cancel">Cancel</button></td>
    <td>  <button type="submit" value = "submit"  name = "submit" class="signup">Sign Up</button></td></tr>
    </div>
  </div>
</table>
</form>

</body>
</html>
