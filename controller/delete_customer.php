<?php

require('../db/database.php');

$db = new Database();

$id_cus = $_GET['id_cus'];

$db->query('DELETE FROM customer WHERE id_cus=:id_cus');

$db->bind('id_cus',$id_cus);

$db->execute();

header("Location: ../data_customer.php");
