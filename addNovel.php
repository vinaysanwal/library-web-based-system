<?php include('header.php');
      include('include/function.php');
?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="formbox">
<form action="<?php process_addNovel(); ?>" role="form" method="post" enctype="multipart/form-data">
 <div class="form-group">
   <label for="bookName">Enter Book Name:</label>
   <input type="text" class="form-control" name="bookName" required>
 </div>
 <div class="form-group">
   <label for="authorName">Enter Author Name:</label>
   <input type="text" class="form-control" name="authorName" required>
 </div>
 <div class="form-group">
    <label for="available">Available</label>
    <select class="form-control" name="available" required>
      <option>Yes</option>
      <option>No</option>
    </select>
</div>
<div class="form-group">
  <label for="yearOfPublishing">Year Of Publishing:</label>
  <input type="text" class="form-control" name="yearOfPublishing" required>
</div>
 <button type="submit" class="btn btn-primary"name="add_novel">Submit</button>
</form>
</div>
</div>
</div>
</div>
<?php include('footer.php'); ?>
