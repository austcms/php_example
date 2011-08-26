<?php
/**
 * AustAdapter
 *
 * Responsible for querying the API and returning the results.
 */
class AustAdapter
{
	public $apiPath = 'admin/';

	private $apiFiles = 'api/api.php';
	
	function setAdminPath($path){
		$this->apiPath = $path;
	}
	
	function query($queryString, $asArray = true){
		if( !defined('THIS_TO_BASEURL') ){
			define('THIS_TO_BASEURL', $this->apiPath);
		}
		
		$_GET = $queryString;
		ob_start();
		include($this->apiPath.$this->apiFiles);
		$result = ob_get_contents();
		ob_end_clean();

		if( $asArray && is_string($result) ){
			$result = json_decode($result, true);
		}
		return $result['result'];
	}
	
}

$austAdapter =  new AustAdapter;

function austQuery($query = ''){
	if( empty($query) ) return false;

	global $austAdapter;
	return $austAdapter->query($query);
}

function austPath($path = ''){
	if( empty($path) ) return false;

	global $austAdapter;
	$austAdapter->setAdminPath($path);

	return true;
}

?>