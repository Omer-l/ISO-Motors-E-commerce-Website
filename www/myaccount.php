<?php
include("./scripts/common.php");
//DOCTYPE etc
outputHeader("My Account");
//NAVBAR
outputBannerNavigation("My Account");
?>



<div class="container-fluid" style="background-color: black; color: grey;">
  <h1>Welcome!</h1>
  <h2>Peter1@gmail.com</h2>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">21/01/2021</th>
        <td>Tesla Model S</td>
        <td>£74,000</td>
        <td>1</td>
      </tr>
      <tr>
        <th scope="row">18/01/2021</th>
        <td>Tesla Model S</td>
        <td>£74,000</td>
        <td>1</td>
      </tr>
      <tr>
        <th scope="row">20/01/2021</th>
        <td>Tesla Model X</td>
        <td>£81,990</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
</div>
<div style="background-color: black;">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
<!-- end body and output footer -->
<?php outputFooter() ?>