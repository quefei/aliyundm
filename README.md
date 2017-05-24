# AliyunDm for Laravel 阿里云邮件推送




## （一）安装



### 1. 安装：


```php
  composer require quefei/aliyundm
```



### 2. 注册：


在 `config/app.php` 文件的 `providers` 数组中加入：

```php
  Quefei\AliyunDm\Providers\AliyunDmServiceProvider::class,
```


在 `config/app.php` 文件的 `aliases` 数组中加入：

```php
  'DM' => Quefei\AliyunDm\Facades\DM::class,
```



### 3. 生成配置文件：


```php
  php artisan vendor:publish
```



### 4. 环境配置：


在 `.env` 文件中加入以下，它们的值从阿里云的 `控制台` 获取：

```php
  /**
   * 加入以下
   */
   
  ALIYUN_ACCESS_KEY_ID=
  ALIYUN_ACCESS_KEY_SECRET=
  ALIYUN_SEND_ADDRESS=
  ALIYUN_SENDER=
  ALIYUN_MAIL_TAG=
  
  
  
  /**
   * 列如（假设的值）
   */
   
  ALIYUN_ACCESS_KEY_ID=L6d644013c2414ab    // 短信服务 与 邮件推送 共用该 ID
  ALIYUN_ACCESS_KEY_SECRET=Tb2ed79818ac6498f72c45bf0b17d0    // 短信服务 与 邮件推送 共用该 SECRET
  ALIYUN_SEND_ADDRESS=service@mail.dongfang.com
  ALIYUN_SENDER=东方公司    // 用户自定义
  ALIYUN_MAIL_TAG=service
```




## （二）使用



收件人、主题、正文是 `字符串`：

```php
  /**
   * 导入
   */
   
  use Quefei\AliyunDm\Facades\DM;
  
  
  
  /**
   * 使用
   */
   
  DM::send("收件人", "主题", "正文");
  
  
  
  /**
   * 列如
   */
  
  DM::send("123456789@qq.com", "斗地主", "欢迎参加斗地主大赛");
```

