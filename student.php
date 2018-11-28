<?php include ('header.php'); ?>
<div class="container">
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <div class="tablebox">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <button class="btn btn-danger btn-add">Add Student</button>
        <thead>
            <tr>
               <th>ID</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Stream</th>
                <th>DOB</th>
                <th>Membership</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <a href="index"><td>1</td></a>
                <a href="#"><td>Vinay Sanwal</td></a>
                <a href="#"><td>12345</td></a>
                <a href="#"><td>Science</td></a>
                <a href="#"><td>2/08/1995</td></a>
                <a href="#"><td>Premium</td></a>
                <td>
                  <i class="fa fa-edit" title="edit"></i>
                  <i class="fa fa-trash" title="delete"></i>
                  <i class="fa fa-eye" title="view"></i>
                </td>
            </tr>
        </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php include("footer.php");?>
