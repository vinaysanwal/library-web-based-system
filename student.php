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
        <?php
        require_once('include/pdo.php');
        //instantiating
        $db = new dbase ;

           $db->query('SELECT * from students');

           $get_students = $db->fetchMultiple();
        ?>
        <?php foreach($get_students as $students) { ?>
        <tbody>
            <tr>
                <td><?php echo $students['student_id'] ?></td>
                <td><?php echo ($students['student_first_name'] . " " . $students['student_last_name']); ?></td>
                <td><?php echo $students['student_roll_no']; ?></td>
                <td><?php echo $students['student_stream']; ?></td>
                <td><?php echo $students['student_dob']; ?></td>
                <td><?php echo $students['student_membership']; ?></td>
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
