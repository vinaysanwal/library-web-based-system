<?php include('header.php'); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="formbox">
<form action="">
 <div class="form-group">
   <label for="firstName">Enter First Name:</label>
   <input type="text" class="form-control" name="firstName" required>
 </div>
 <div class="form-group">
   <label for="lastName">Enter Last Name:</label>
   <input type="text" class="form-control" name="lastName" required>
 </div>
 <div class="form-group">
    <label for="workType">Work Type:</label>
    <select class="form-control" name="workType" required>
      <option>Libraian</option>
      <option>cleaner</option>
      <option>xyz</option>
    </select>
</div>
 <div class="form-group">
   <label for="age">Enter Age:</label>
   <input type="text" class="form-control" name="age" required>
 </div>
 <div class="form-group">
   <label for="date">Starting Date:</label>
   <input type="text" class="form-control" name="date" required>
 </div>
 <div class="form-group">
   <label for="date">Salary</label>
   <input type="text" class="form-control" name="salary" required>
 </div>
 <div class="form-group">
    <label for="workingStatus">Working Status</label>
    <select class="form-control" name="workingStatus" required>
      <option>Yes</option>
      <option>No</option>
    </select>
</div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
<?php include('footer.php'); ?>
