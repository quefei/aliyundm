<?php

/**
 * 
 */
if (! function_exists('dmSendMail'))
{
	// Composer 自动加载 src/Sdk/aliyun-php-sdk-core/Config.php
	// Composer 自动加载 src/Sdk/aliyun-php-sdk-dm/Dm/Request/V20151123/
	require_once(__DIR__.'/../../../../autoload.php');
	
	
    function dmSendMail($to, $subject, $body, $AccessKeyID, $AccessKeySecret, $SendAddress, $Sender, $MailTag)
    {
        $iClientProfile = DefaultProfile::getProfile("cn-shenzhen", $AccessKeyID, $AccessKeySecret);
		
		
		$client = new DefaultAcsClient($iClientProfile);
		$request = new SingleSendMailRequest();
		
		
		$request->setAccountName($SendAddress);
		$request->setFromAlias($Sender);
		$request->setAddressType(1);
		$request->setTagName($MailTag);
		$request->setReplyToAddress("true");
		$request->setToAddress($to);
		$request->setSubject($subject);
		$request->setHtmlBody($body);
		
		
		try {
			$response = $client->getAcsResponse($request);
			print_r($response);
		}
		catch (ClientException  $e) {
			print_r($e->getErrorCode());
			print_r($e->getErrorMessage());
		}
		catch (ServerException  $e) {
			print_r($e->getErrorCode());
			print_r($e->getErrorMessage());
		}
    }
}
