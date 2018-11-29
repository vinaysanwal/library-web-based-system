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
        <?php
        require_once('include/pdo.php');
        //instantiating
        $db = new dbase ;
           $db->query('SELECT * from staff');
           $get_staff = $db->fetchMultiple();
        ?>
        <?php foreach($get_staff as $staff) { ?>
        <tbody>
            <tr>
                <td><?php echo $staff['staff_id'] ?></td>
                <td><?php echo ($staff['staff_first_name'] . " " . $staff['staff_last_name']); ?></td>
                <td><?php echo $staff['staff_work_type']; ?></td>
                <td><?php echo $staff['staff_age']; ?></td>
                <td><?php echo $staff['staff_joining_date']; ?></td>
                <td><?php echo $staff['staff_salary']; ?></td>
                <td><?php echo $staff['staff_working_status']; ?></td>
                <td>
                  <i class="fa fa-edit" title="edit"></i>
                  <i class="fa fa-trash" title="delete"></i>
                  <i class="fa fa-eye" title="view"></i>
                </td>
            </tr>
        </tbody>
      <?php } ?>
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
