<?php include ('header.php'); ?>
<div class="container">
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <div class="tablebox">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <button class="btn btn-danger btn-add">Add Novel</button>
        <thead>
            <tr>
                <th>Name</th>
                <th>Author Name</th>
                <th>Available</th>
                <th>Year oF Publishing</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
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
