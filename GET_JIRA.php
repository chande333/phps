$call = json_decode(file_get_contents('php://input'));
call_user_func($call->fn);

function checkOPSconnection(){
	global $call;

	$ch = curl_init();

	curl_setopt_array($ch, [
		CURLOPT_URL => "https://{DOMAIN}.atlassian.net/rest/api/2/project/OPS",
		CURLOPT_HEADER => false,
		CURLOPT_USERPWD => $call->username.":".$call->token,
		CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
		CURLOPT_RETURNTRANSFER => false,
		CURLOPT_SSL_VERIFYPEER => false
	]);

	$result=curl_exec($ch);
	curl_close($ch);
	echo $result;
	return $result;

}
