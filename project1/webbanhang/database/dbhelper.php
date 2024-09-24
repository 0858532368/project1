<?php
require_once('config.php');

function execute($sql) {

	$conn = my  sqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');


	mysqli_query($conn, $sql);

	mysqli_close($conn);
}