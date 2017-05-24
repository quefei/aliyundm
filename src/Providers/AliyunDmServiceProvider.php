<?php

namespace Quefei\AliyunDm\Providers;

use Illuminate\Support\ServiceProvider;

class AliyunDmServiceProvider extends ServiceProvider
{
	public function boot()
    {
        /**
         * 生成配置文件
         */
        $this->publishes([
            __DIR__.'/../Config/AliyunDmConfig.php' => config_path('aliyundm.php'),
			__DIR__.'/../Helpers' => app_path('Helpers'),
        ]);
    }
	
	
	public function register()
    {
        //
    }
}
