<?php include('header.php'); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="formbox">
<form action="">
 <div class="form-group">
   <label for="bookName">Enter Book Name:</label>
   <input type="text" class="form-control" name="bookName" required>
 </div>
 <div class="form-group">
    <label for="bookCategory">Book Category</label>
    <select class="form-control" name="bookCategory" required>
      <option>Science</option>
      <option>Arts</option>
      <option>Engineering</option>
    </select>
 </div>
 <div class="form-group">
   <label for="price">Enter Price :</label>
   <input type="text" class="form-control" name="price" required>
 </div>
 <div class="form-group">
   <label for="yearOfPublishing">Year of Publishing</label>
   <input type="text" class="form-control" name="yearOfPublishing" required>
 </div>
 <div class="form-group">
   <label for="auhorName">Enter Author Name</label>
   <input type="text" class="form-control" name="authorName">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
<?php include('footer.php'); ?>
