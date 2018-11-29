<?php
//helper functions ....


//function to trim values ...
function clean($value){
  return trim($value);
}


//function to sanitize a string ...
function sanitize($raw_value){
  return filter_var($raw_value, FILTER_SANITIZE_STRING);
}


//function to validate email ...
function val_email($raw_email){
  return filter_var($raw_email, FILTER_VALIDATE_EMAIL);
}


//function to validate int....
function val_int($raw_int){
  return filter_var($raw_int, FILTER_VALIDATE_INT);
}



//function to redirect ....
function redirect($url){
  return header("location: {$url}");
}


//function to hash passwords ...
function hash_pwd($raw_password){
  return md5($raw_email);
}


//functions to display session messages ....
function set_msg($msg){                 //"Welcome to your account";

    if(empty($msg)){

        $msg = "";

    }else{

        $_SESSION['setmsg'] = $msg;

    }

}


function display_msg(){

    if(isset($_SESSION['setmsg'])){

        echo $_SESSION['setmsg'];

        unset($_SESSION['setmsg']);
    }


}


function process_student_registration(){
  if(isset($_POST['submit_student_registration'])){
    $raw_firstName   = clean($_POST["firstName"]);
    $raw_lastName    = clean($_POST["lastName"]);
    $raw_rollNo      = clean($_POST["rollNo"]);
    $raw_stream      = clean($_POST["stream"]);
    $raw_dob         = clean($_POST["dob"]);
    $raw_membership  = clean($_POST["membership"]);

    $cl_firstName   = clean($raw_firstName);
    $cl_lastName    = clean($raw_lastName);
    $cl_rollNo      = clean($raw_rollNo);
    $cl_stream      = clean($raw_stream);
    $cl_dob         = clean($raw_dob);
    $cl_membership  = clean($raw_membership);

    require_once('pdo.php');
    //instantiating
    $db = new dbase ;

    //Check for double users ....

    $db->query("SELECT * FROM students where student_roll_no = :student_roll_no");
    $db->bind(':student_roll_no', $cl_rollNo , PDO::PARAM_INT);

    $get_student = $db->fetchSingle();

    if($get_student > 0){
      redirect('addStudent');
      set_msg('<div class="alert alert-danger text-center">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Warning</strong>Student with same roll number exist</div>');
    }else {
      $db->query('INSERT INTO students(student_id , student_first_name , student_last_name , student_roll_no , student_stream , student_dob , student_membership)
      VALUES(NULL , :student_first_name , :student_last_name , :student_roll_no , :student_stream , :student_dob , :student_membership)');

      $db->bind(':student_first_name' ,$cl_firstName , PDO::PARAM_STR);
      $db->bind(':student_last_name' ,$cl_lastName ,  PDO::PARAM_STR);
      $db->bind(':student_roll_no' ,  $cl_rollNo ,    PDO::PARAM_INT);
      $db->bind(':student_stream' ,   $cl_stream ,    PDO::PARAM_STR);
      $db->bind(':student_dob' ,      $cl_dob ,       PDO::PARAM_STR);
      $db->bind(':student_membership' ,$cl_membership, PDO::PARAM_STR);

      $run = $db->execute();

      if($run){
        redirect('student');
      }else {
      }
    }
  }
}


function process_addBooks(){
  if(isset($_POST['add_books'])){
     $raw_book_name   = clean($_POST["bookName"]);
     $raw_book_price  = clean($_POST["price"]);
     $raw_book_year   = clean($_POST["yearOfPublishing"]);
     $raw_book_author     = clean($_POST["authorName"]);
     $raw_book_category   = clean($_POST["bookCategory"]);

     $cl_book_name   = clean($raw_book_name);
     $cl_book_price  = clean($raw_book_price);
     $cl_book_year   = clean($raw_book_year);
     $cl_book_author = clean($raw_book_author);
     $cl_book_category = clean($raw_book_category );

    require_once('pdo.php');
    //instantiating
    $db1 = new dbase ;

    $db1->query('INSERT INTO books(book_id , book_name , book_price , book_year_published , book_author , book_category)
    VALUES(NULL , :bookName , :bookPrice , :bookYear , :bookAuthor , :book_Category)');

    $db1->bind(':bookName',    $cl_book_name , PDO::PARAM_STR);
    $db1->bind(':bookPrice',   $cl_book_price ,  PDO::PARAM_INT);
    $db1->bind(':bookYear',    $cl_book_year, PDO::PARAM_STR);
    $db1->bind(':bookAuthor',  $cl_book_author ,    PDO::PARAM_STR);
    $db1->bind(':book_Category',$cl_book_category,   PDO::PARAM_STR);

    $run1 = $db1->execute();

    if($run1){
      redirect('books');
    }else {
    }

  }
}


function process_addStaff(){
  if(isset($_POST['add_staff'])){
     $raw_firstName     = clean($_POST["firstName"]);
     $raw_lastName      = clean($_POST["lastName"]);
     $raw_workTye       = clean($_POST["workType"]);
     $raw_age           = clean($_POST["age"]);
     $raw_date_join     = clean($_POST["dateofjoining"]);
     $raw_salary        = clean($_POST["salary"]);
     $raw_workingStatus = clean($_POST["workingStatus"]);

     $cl_firstName  = clean($raw_firstName);
     $cl_lastName   = clean($raw_lastName);
     $cl_workType   = clean($raw_workTye);
     $cl_Age        = clean($raw_age);
     $cl_joinDate   = clean($raw_date_join );
     $cl_Salary     = clean($raw_salary);
     $cl_workingStatus = clean($raw_workingStatus );

    require_once('pdo.php');
    //instantiating
    $db1 = new dbase ;

    $db1->query('INSERT INTO staff(staff_id , staff_first_name , staff_last_name , staff_work_type , staff_age , staff_joining_date , staff_salary, staff_working_status)
    VALUES(NULL , :staff_first_name , :staff_last_name , :staff_work_type , :staff_age , :staff_joining_date, :staff_salary, :staff_working_status)');

    $db1->bind(':staff_first_name',    $cl_firstName ,     PDO::PARAM_STR);
    $db1->bind(':staff_last_name',     $cl_lastName ,      PDO::PARAM_STR);
    $db1->bind(':staff_work_type',     $cl_workType,       PDO::PARAM_STR);
    $db1->bind(':staff_age',           $cl_Age ,           PDO::PARAM_INT);
    $db1->bind(':staff_joining_date',  $cl_joinDate,       PDO::PARAM_STR);
    $db1->bind(':staff_salary',        $cl_Salary ,        PDO::PARAM_STR);
    $db1->bind(':staff_working_status',$cl_workingStatus,  PDO::PARAM_STR);

    $run1 = $db1->execute();

    if($run1){
      redirect('staffMember');
    }else {
    }

  }
}


function process_addNovel(){
  if(isset($_POST['add_novel'])){
     $raw_book_name    = clean($_POST["bookName"]);
     $raw_author_name   = clean($_POST["authorName"]);
     $raw_available     = clean($_POST["available"]);
     $raw_year           = clean($_POST["yearOfPublishing"]);

     $cl_book_name  = clean($raw_book_name);
     $cl_author     = clean($raw_author_name);
     $cl_available  = clean($raw_available);
     $cl_year       = clean($raw_year);

    require_once('pdo.php');
    //instantiating
    $db1 = new dbase ;

    $db1->query('INSERT INTO novels(novel_id , novel_name , novel_author_name , novel_year_of_publishing , novel_available)
    VALUES(NULL , :novel_name , :novel_author_name , :novel_year_of_publishing , :novel_available)');

    $db1->bind(':novel_name',                   $cl_book_name ,     PDO::PARAM_STR);
    $db1->bind(':novel_author_name',            $cl_author ,        PDO::PARAM_STR);
    $db1->bind(':novel_year_of_publishing',     $cl_available,      PDO::PARAM_STR);
    $db1->bind(':novel_available',              $cl_year ,          PDO::PARAM_STR);

    $run1 = $db1->execute();

    if($run1){
      redirect('bestnovel');
    }else {
    }

  }
}



?>
