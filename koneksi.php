<?php
class koneksi{
public function __construct(){
$this->mysqli = new mysqli('localhost', 'root', '3gpower', 'tugasakhir');
 }
public function getConnection(){ 
return $this->mysqli;
 }
 }
?>