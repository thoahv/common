<!-- find file in folder ------------------------------------------------------------->
if(is_dir($dirname."/vote"))
    			$this->rmdir_recursive($dirname.'/vote');

function rmdir_recursive($dir) {
        foreach(scandir($dir) as $file) {           //find file in folder.
            if ('.' === $file || '..' === $file) 
                continue;
            if (is_dir("$dir/$file")) 
                $this->rmdir_recursive("$dir/$file");
            else 
                unlink("$dir/$file");
        }
        rmdir($dir);
    }
    
//replace file_get_contents

$file = "http://www.example.com/my_page.php";
if (function_exists('curl_version'))
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $file);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $content = curl_exec($curl);
    curl_close($curl);
}
else if (file_get_contents(__FILE__) && ini_get('allow_url_fopen'))
{
    $content = file_get_contents($file);
}
else
{
    echo 'You have neither cUrl installed nor allow_url_fopen activated. Please setup one of those!';
}

// file_get_conten zend fb
   $client = new Zend_Http_Client();
            $client->setMethod(Zend_Http_Client::GET);
	    	$arpost = array(
				            'client_id' => $ssoOptions[$oauthType]['appId'],
				            'redirect_uri' => $ssoOptions[$oauthType]['callbackUrl'],
				            'client_secret' => $ssoOptions[$oauthType]['secret'],
				            'code' => $code
	    				);
            // get access_token
            $accessTokenUrl = $ssoOptions[$oauthType]['accessTokenUrl'] . http_build_query($arpost);
            $client->setUri($accessTokenUrl);
            $response = $client->request();
           
            $content =  $response->getBody();
