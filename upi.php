<?php
	 $key = "deddb76d-f484-4696-914f-aac6255febd5";    // you can get your key from https://merchant.upigateway.com/user/api_credentials
	 $content = json_encode(array(
	 	"key"=> $key,
	 	"client_txn_id"=> "123456789", // order id or your own transaction id
	 	"amount"=> "100", 
	 	"p_info"=> "Product Name",
	 	"customer_name"=> "Jon Doe", // customer name
	 	"customer_email"=> "jondoe@gmail.com", // customer email
	 	"customer_mobile"=> "9876543210", // customer mobile number
	 	"redirect_url"=> "http://google.com", // redirect url after payment, with ?client_txn_id=&txn_id=
	 	"udf1"=> "user defined field 1", // udf1, udf2 and udf3 are used to save other order related data, like customer id etc.
	 	"udf2"=> "user defined field 2",
	 	"udf3"=> "user defined field 3",
	 ));
	 $url = "https://merchant.upigateway.com/api/create_order";
	 $curl = curl_init($url);
	 curl_setopt($curl, CURLOPT_HEADER, false);
	 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	 curl_setopt($curl, CURLOPT_HTTPHEADER,
	 		array("Content-type: application/json"));
	 curl_setopt($curl, CURLOPT_POST, true);
	 curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
	 $json_response = curl_exec($curl);
	 $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	 if ( $status != 200 ) {
	 	// You can handle Error yourself.
	 	die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
	 }
	 curl_close($curl);
	 $response = json_decode($json_response, true);
	 if($response["status"] == true){
	 	// Method 1
	 	// redirect to payment page of UPI
	 	header("Location: ".$response["data"]["payment_url"]);
	 	die();
	 	// Method 2
	 	// echo "<script>window.location.href='".$response["data"]["payment_url"]."'</script>";
	 	// die();
	 }else{
	 	echo $response['msg'];
	 }
?>