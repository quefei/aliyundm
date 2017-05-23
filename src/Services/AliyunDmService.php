<?php

namespace Quefei\AliyunDm\Services;

use Quefei\AliyunDm\Contracts\AliyunDmContract;

include_once __DIR__.'/../Sdk/aliyun-php-sdk-core/Config.php';

use Quefei\AliyunDm\Sdk\Dm\Request\V20151123 as Dm;

class AliyunDmService implements AliyunDmContract
{
	/**
     * 发送邮件
     *
     * @param  string  $to
	 * @param  string  $subject
	 * @param  string  $body
     * @return string
     */
    public function send($to, $subject, $body)
	{
		$iClientProfile = DefaultProfile::getProfile("cn-shenzhen", config('aliyundm.AccessKeyID'), config('aliyundm.AccessKeySecret'));
		
		
		
		$client = new DefaultAcsClient($iClientProfile);
		$request = new Dm\SingleSendMailRequest();
		
		
		
		$request->setAccountName(config('aliyundm.SendAddress'));
		$request->setFromAlias(config('aliyundm.Sender'));
		$request->setAddressType(1);
		$request->setTagName(config('aliyundm.MailTag'));
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
