<?php

namespace Quefei\AliyunDm\Services;

use Quefei\AliyunDm\Contracts\AliyunDmContract;

require_once(__DIR__.'/../Helpers/AliyunDmHelper.php');

class AliyunDmService implements AliyunDmContract
{
	public $to;
	public $subject;
	public $body;
	public $AccessKeyID = config('aliyundm.AccessKeyID');
	public $AccessKeySecret = config('aliyundm.AccessKeySecret');
	public $SendAddress = config('aliyundm.SendAddress');
	public $Sender = config('aliyundm.Sender');
	public $MailTag = config('aliyundm.MailTag');


	/**
     * 发送邮件
     *
     * @param  string  $to
	 * @param  string  $subject
	 * @param  string  $body
     * @return string
     */
    public function send($this->to, $this->subject, $this->body)
	{
		dmSendMail($this->to, $this->subject, $this->body, $this->AccessKeyID, $this->AccessKeySecret, $this->SendAddress, $this->Sender, $this->MailTag);
	}
}