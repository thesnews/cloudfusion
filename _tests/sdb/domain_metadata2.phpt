--TEST--
AmazonSDB::domain_metadata returnCurlHandle

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	// Instantiate
	$sdb = new AmazonSDB();
	$response = $sdb->domain_metadata('warpshare-unit-test', true);

	// Success?
	var_dump($response);
?>

--EXPECT--
resource(9) of type (curl)
