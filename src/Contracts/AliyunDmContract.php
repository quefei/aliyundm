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
     * @return string
     */
    public function send($to, $subject, $body);
}
