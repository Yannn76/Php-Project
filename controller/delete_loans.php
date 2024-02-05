<?php

require('../db/database.php');

$db = new Database();

$id = $_GET['id'];

$db->query('DELETE FROM loans WHERE id= :id');

$db->bind('id',$id);

$db->execute();

header("Location: ../data_pinjam.php");
