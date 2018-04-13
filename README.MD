# weikaiii-curl

方便curl使用，支持链式操作，简化curl常用操作

# 版本要求

 PHP 5.3 +

 Laravel/Lumen >= 5.1

 Composer 

# 安装

```php
composer require weikaiii/curl
```
# 配置

### Laravel 应用

1. 在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5 无需手动注册)

```
'providers' => [
    // ...
     Weikaiii\Curl\CurlServiceProvider::class,
],
'aliases' => [
    // ...
   'Curl' => Weikaiii\Curl\CurlClass::class,
],
```

# 使用

#####GET:

```php
$content = Curl::init()->url(目标url)->get(数组参数);
```

##### POST:

```php
Curl::init()->url(目标url)->post(数组参数);
```

##### 保存生成的选项：

```php
Curl::init()->url(目标url)->header($header)->cookie($cookie)->save();

下面可以直接用 保持上面的请求头和cookie
Curl::init()->post($data);

Curl::init()->file('img.jpg')->post();

```

##### 设置参数

```php
Curl::init()->set('CURLOPT_选项', 值)->url(目标url);
```

#####设置超时60秒

```
Curl::init()->time('60')->url(目标url);
```

##### 设置证书

```
Curl::init()->cacert('证书文件路径')->url(目标url);
```

##### 设置cookie

```
Curl::init()->cookie($cookie)->url(目标url);
```

##### 设置header

```
Curl::init()->header($header)->url(目标url);
```

##### 设置language

```
Curl::init()->language($language)->url(目标url);
```

##### 设置agent

```
Curl::init()->agent($agent)->url(目标url);
```





