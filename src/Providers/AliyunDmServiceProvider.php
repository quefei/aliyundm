<?php

namespace Quefei\AliyunDm\Providers;

use Illuminate\Support\ServiceProvider;
use Quefei\AliyunDm\Services\AliyunDmService;

class AliyunDmServiceProvider extends ServiceProvider
{
	public function boot()
    {
        /**
         * 生成配置文件，用户使用时需要自定义一下：
         *
         * $AccessKeyID = config('aliyundm.AccessKeyID');
         * $AccessKeySecret = config('aliyundm.AccessKeySecret');
         * $SendAddress = config('aliyundm.SendAddress');
         * $Sender = config('aliyundm.Sender');
         * $MailTag = config('aliyundm.MailTag');
         * 
         */
        $this->publishes([
            __DIR__.'/../Config/AliyunDmConfig.php' => config_path('aliyundm.php'),
        ]);
    }
	
	
	public function register()
    {
        $this->registerAliyunDmBind();
		
        $this->registerAliyunDmSingleton();
    }
	
	
	private function registerAliyunDmBind()
    {
        $this->app->bind('Quefei\AliyunDm\Contracts\AliyunDmContract', function () {
            return new AliyunDmService();
        });
    }
	
	
	private function registerAliyunDmSingleton()
    {
        $this->app->singleton('aliyundm', function () {
            return new AliyunDmService();
        });
    }
}
