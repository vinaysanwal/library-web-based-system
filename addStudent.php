<?php include('header.php');
      include('include/function.php');
?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="formbox">
<form action="<?php  process_student_registration(); ?>" role="form" method="post" enctype="multipart/form-data">
 <div class="form-group">
   <label for="firstName">Enter First Name:</label>
   <input type="text" class="form-control" name="firstName" required>
 </div>
 <div class="form-group">
   <label for="lastName">Enter Last Name:</label>
   <input type="text" class="form-control" name="lastName" required>
 </div>
 <div class="form-group">
   <label for="rollNo">Enter Roll No :</label>
   <input type="text" class="form-control" name="rollNo" required>
 </div>
 <div class="form-group">
   <label for="stream">Enter Stream:</label>
   <input type="text" class="form-control" name="stream" required>
 </div>
 <div class="form-group">
   <label for="dob">Date Of Birth:</label>
   <input type="text" class="form-control" name="dob" required>
 </div>
 <div class="form-group">
    <label for="membership">Membership Status</label>
    <select class="form-control" name="membership" required>
      <option value="0">Basic</option>
      <option value="1">Advanced</option>
      <option value="2">Premium</option>
    </select>
</div>
 <button type="submit" class="btn btn-primary" name="submit_student_registration">Submit</button>
</form>
</div>
</div>
</div>
</div>
<?php include('footer.php'); ?>
