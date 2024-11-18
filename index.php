<?php
require_once "Controller/MahasiswaController.php";
require_once "Controller/ProgramStudiController.php";

$mahasiswa = new MahasiswaController();
$program_studi = new ProgramStudiController();


if(!$_GET){
    $mahasiswa->index();
}else if(isset($_GET['id'])){
    $mahasiswa->show($_GET['id']);
}else if($_GET['program']){
    $program_studi->index();
}

