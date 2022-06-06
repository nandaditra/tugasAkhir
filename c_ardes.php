<?php
require_once "m_ardes.php";

class c_ardes {
public $model;

function __construct(){
$this->model = new m_ardes(); 
}

function loginCheck(){
        $email = $_POST['email'];
        $Cpassword = $_POST['password'];
        $this->model->login($email, $Cpassword);
  
}

function upload(){
    $this->model->fileUpload();
}

function view(){
    $this->model->viewUpload();
}
 
function viewContact($pilihId){
    $this->model->viewContactProcess($pilihId);
}

function insert(){
    $namaDepan = $_POST['first_name'];
    $namaBelakang = $_POST['last_name'];
    $gender = $_POST['gender'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $otoritas = $_POST['otoritas'];
    $password = $_POST['password'];

$insert = $this->model->insertUser($namaDepan, $namaBelakang, $gender,
$email, $domisili, $password,  $otoritas);

// header("location:login.php");
}

function insertPP(){
$insert = $this->model->fileUploadPP();
// header("location:login.php");
}

function insertContact(){
    $noTelp = $_POST['noTelp'];
    $noWa = $_POST['noWa'];
    $ig = $_POST['ig'];
    $email = $_POST['email'];
    $insert = $this->model->insertContactProcess($noTelp, $noWa, $ig, $email);
}

function delete(){
    $id=1;
    $insert = $this->model->deleteUserProcess($id);
    // header("location:v_input.php?i=0");
}

function deleteUpload(){
    $delete = $this->model->deleteUploadProcess();
    // header("location:v_input.php?i=0");
}

function deleteUser(){
    $delete = $this->model->deleteUserProcess();
    // header("location:v_input.php?i=0");
}


function viewResult(){
// $data = $this->model->selectAll();
    include "v_result.php"; 
}


function __destruct(){
}
}
?>
