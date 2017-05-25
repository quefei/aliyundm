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




## （二）使用



收件人、主题、正文、AccessKeyID、AccessKeySecret、发信地址、发件人、邮件标签是 `字符串`：

```php
  /**
   * 导入
   */
   
  use Quefei\AliyunDm\Facades\DM;
  
  
  
  /**
   * 使用
   */
   
  DM::send("收件人", "主题", "正文", "AccessKeyID", "AccessKeySecret", "发信地址", "发件人", "邮件标签");
  
  
  
  /**
   * 列如（假设的值）
   */
  
  DM::send("123456789@qq.com", "斗地主", "欢迎参加斗地主大赛", "L6d644013c2414ab", 

  "Tb2ed79818ac6498f72c45bf0b17d0", "service@mail.dongfang.com", "东方公司", "service");
```

或者：

```php
  /**
   * 包含
   */
   
  require_once(__DIR__.'/../../../vendor/autoload.php');
  
  
  
  /**
   * 使用
   */
   
  dmSendMail("收件人", "主题", "正文", "AccessKeyID", "AccessKeySecret", "发信地址", "发件人", "邮件标签");
  
  
  
  /**
   * 列如（假设的值）
   */
  
  dmSendMail("123456789@qq.com", "斗地主", "欢迎参加斗地主大赛", "L6d644013c2414ab", 
  
  "Tb2ed79818ac6498f72c45bf0b17d0", "service@mail.dongfang.com", "东方公司", "service");
```

