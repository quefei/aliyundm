<?php

namespace Quefei\AliyunDm\Providers;

use Illuminate\Support\ServiceProvider;
use Quefei\AliyunDm\Services\AliyunDmService;

class AliyunDmServiceProvider extends ServiceProvider
{
	public function boot()
    {
        /**
         * 生成配置文件
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
