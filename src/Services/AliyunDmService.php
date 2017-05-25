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
	 * @param  string  $AccessKeyID
	 * @param  string  $AccessKeySecret
	 * @param  string  $SendAddress
	 * @param  string  $Sender
	 * @param  string  $MailTag
     * @return string
     */
    public function send($to, $subject, $body, $AccessKeyID, $AccessKeySecret, $SendAddress, $Sender, $MailTag)
	{
		dmSendMail($to, $subject, $body, $AccessKeyID, $AccessKeySecret, $SendAddress, $Sender, $MailTag);
	}
}
