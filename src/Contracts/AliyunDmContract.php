<?php

namespace Quefei\AliyunDm\Contracts;

interface AliyunDmContract
{
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
    public function send($to, $subject, $body, $AccessKeyID, $AccessKeySecret, $SendAddress, $Sender, $MailTag);
}
