<?php
include("./scripts/common.php");
//DOCTYPE etc
outputHeader("Sales");
//NAVBAR
outputBannerNavigation("Sales");
?>
<div class="container-fluid" style="background-color: black; color: grey;">
  <div class="container text-center">
    <h2> Sales </h2>
  </div>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Customer</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">21/01/2021</th>
        <td>Peter</td>
        <td>Tesla Model S</td>
        <td>£74,000</td>
        <td>1</td>
        <td> <button type="submit" class="btn" style=""> Remove</button> </td>
      </tr>
      <tr>
        <th scope="row">18/01/2021</th>
        <td>Peter</td>
        <td>Tesla Model S</td>
        <td>£74,000</td>
        <td>1</td>
        <td> <button type="submit" class="btn" style=""> Remove</button> </td>
      </tr>
      <tr>
        <th scope="row">20/01/2021</th>
        <td>James</td>
        <td>Tesla Model X</td>
        <td>£81,990</td>
        <td>2</td>
        <td> <button type="submit" class="btn" style=""> Remove</button> </td>
      </tr>
    </tbody>
  </table>
</div>

<!-- end body and output footer -->