<?php
require('../db/database.php');


$id_cus = $_POST['id_cus'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jk = $_POST['jk'];

$db = new Database();


$db->query('INSERT INTO customer (id_cus, nama, alamat, telp, jk ) VALUES(:id_cus, :nama, :alamat, :telp, :jk)');

$db->bind(':id_cus', $id_cus);
$db->bind(':nama', $nama);
$db->bind(':alamat', $alamat);
$db->bind(':telp', $telp);
$db->bind(':jk', $jk);


$db->execute();
header("Location: ../data_customer.php");
