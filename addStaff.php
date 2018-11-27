<?php include('header.php'); ?>
<div class="container">
<div class="cardbox">
<form action="">
 <div class="form-group">
   <label for="firstName">Enter First Name:</label>
   <input type="text" class="form-control" name="firstName">
 </div>
 <div class="form-group">
   <label for="lastName">Enter Last Name:</label>
   <input type="text" class="form-control" name="lastName">
 </div>
 <div class="form-group">
   <label for="rollNo">Enter Roll No :</label>
   <input type="text" class="form-control" name="rollNo">
 </div>
 <div class="form-group">
   <label for="stream">Enter Stream:</label>
   <input type="text" class="form-control" name="stream">
 </div>
 <div class="form-group">
   <label for="dob">Date Of Birth:</label>
   <input type="text" class="form-control" name="dob">
 </div>
 <div class="form-group">
    <label for="exampleFormControlSelect1">Membership Status</label>
    <select class="form-control" name="membership">
      <option>Basic</option>
      <option>Advanced</option>
      <option>Premium</option>
    </select>
  </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
<?php include('footer.php'); ?>
