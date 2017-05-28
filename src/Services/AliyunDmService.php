<?php

namespace Quefei\AliyunDm\Services;

use Quefei\AliyunDm\Contracts\AliyunDmContract;

require_once(__DIR__.'/../Helpers/AliyunDmHelper.php');

class AliyunDmService implements AliyunDmContract
{
	public $to;
	public $subject;
	public $body;
	public $AccessKeyID;
	public $AccessKeySecret;
	public $SendAddress;
	public $Sender;
	public $MailTag;


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
		$this->dmConfig();
		
		$this->sendMail($to, $subject, $body, $this->AccessKeyID, $this->AccessKeySecret, $this->SendAddress, $this->Sender, $this->MailTag);
	}
	
	
	public function dmConfig()
	{
		$this->AccessKeyID = config('aliyundm.AccessKeyID');
		$this->AccessKeySecret = config('aliyundm.AccessKeySecret');
		$this->SendAddress = config('aliyundm.SendAddress');
		$this->Sender = config('aliyundm.Sender');
		$this->MailTag = config('aliyundm.MailTag');
	}
	
	
    public function sendMail($to, $subject, $body, $AccessKeyID, $AccessKeySecret, $SendAddress, $Sender, $MailTag)
	{
		dmSendMail($to, $subject, $body, $AccessKeyID, $AccessKeySecret, $SendAddress, $Sender, $MailTag);
	}
}
