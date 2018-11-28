<?php include ('header.php'); ?>
<div class="container">
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <div class="tablebox">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <button class="btn btn-danger btn-add">Add Staff</button>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Work Type</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>Yes</td>
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
