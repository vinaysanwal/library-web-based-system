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
function set_msg($msg){
  if(empty($msg)){
    $msg = "";
  }else{
    $_SESSION['setmsg'] = $msg;
  }
}

function display_msg(){
  if(isset($_SESSION['setmsg'])){
    echo $_SESSION['setmsg'];
    unset($_SESSION['setmsg']);//to unset the current message....
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



?>
