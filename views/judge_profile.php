<?php
include 'judge_header.php';
require_once '../controllers/judge_controller.php';
$user=getjudge($_COOKIE["id"]);
foreach($user as $users){
}
 ?>
<div class=" d-flex flex-row ">
  <div class="card-header w-22  p-1 bg-secondary">
    <div>
            <?php  echo "<td><img src='".$users["pp"]."' width='190px' height='200px'></td>";?>
        <div class="text-center">
          <button type="button" class="btn btn-primary mt-1"  data-toggle="modal" data-target="#ppmodal">Update Profile Picture<button>
            <div class="modal" id="ppmodal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                 <h5 class="text-center text-primary">Update Profile Picture</h5>
                 <a="true" class="close" data-dismiss="modal"> &times; </a>
                 </div>
                </div>
              </div>
            </div>

          </div>
                  <div class="font-weight-bold text-capitalize  text-white mt-2 text-center">
                     <?php echo "<td>".$users["fullname"]."</td>";?>
          </div>
    </div>
</div>

  <div class="card-body">
    <table class="table font-weight-bold text-capitalize">
    <tbody>
      <tr>
        <th scope="row">Full Name</th>
        <td><?php echo "<td>".$users["fullname"]."</td>";?></td>
      </tr>
      <tr>
        <th scope="row">ID</th>
        <td><?php echo "<td>".$users["id"]."</td>";?></td>
      </tr>
      <tr>
        <th scope="row">User Name</th>
        <td><?php echo "<td>".$users["username"]."</td>";?></td>
      </tr>
      <tr>
        <th scope="row">Email</th>
        <td><?php echo "<td>".$users["email"]."</td>";?></td>
      </tr>
      <tr>
        <th scope="row">Phone</th>
        <td><?php echo "<td>".$users["phone"]."</td>";?></td>
      </tr>
      <tr>
        <th scope="row">Birthday</th>
        <td><?php echo "<td>".$users["dob"]."</td>";?></td>
      </tr>
      <tr>
        <th scope="row">Gender</th>
        <td><?php echo "<td>".$users["gender"]."</td>";?></td>
      </tr>
      <tr>
        <th scope="row">Address</th>
        <td><?php echo "<td>".$users["address"]."</td>";?></td>
      </tr>
      <tr>
        <th scope="row">City</th>
        <td><?php echo "<td>".$users["city"]."</td>";?></td>
      </tr>
      <tr>
        <th scope="row">State</th>
        <td><?php echo "<td>".$users["state"]."</td>";?></td>
      </tr>
      <tr>
        <th scope="row">Zip/Postal</th>
        <td><?php echo "<td>".$users["zip"]."</td>";?></td>
      </tr>
    </tbody>
  </table>
  <br>
 <div align="left">
  <a href="#" class="btn btn-dark " id="editbtn">Edit Info</a>
</div>
</div>
</div>
