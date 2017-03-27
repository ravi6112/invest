<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'rmihp632_pbd');
define('DB_PASSWORD', 'pbd_123');
define('DB_NAME', 'rmihp632_pbd');


if (isset($_GET['term'])){
	$return_arr = array();

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $stmt = $conn->prepare('SELECT sales_no FROM sales WHERE cancel_status="0" AND sales_no LIKE :term');
	    $stmt->execute(array('term' => '%'.$_GET['term']));
	    
	    while($row = $stmt->fetch()) {
	        $return_arr[] =  $row['sales_no'];
	    }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}


    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}


?>