# PHP Wechat SDK

## Usage

### Install

```bash
composer require 'qyhly/wechat'
```

### Wechat

```php
require __DIR__ . '/vendor/autoload.php';

$wechat = new \qyhly\Wechat\Wechat();
$accessToken = $wechat->getAccessToken;
```

### WechatPay

```php
require __DIR__ . '/vendor/autoload.php';

$wechatPay = new \qyhly\Wechat\WechatPay();
$res = $wechatPay->unifiedOrder();
```
