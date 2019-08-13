<p align="center">
    <h1 align="center">Env extension for Yii 2</h1>
    <br>
</p>

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist zhangdi/yii2-env
```

or add

```json
"zhangdi/yii2-env": "*"
```

to the require section of your composer.json.

## Usage

```php
<?php
use ZhangDi\Env\Env;

// get raw value
$rawValue = Env::get('ENV_NAME', 'default value');

// get bool value, second argument is default value
$boolValue = Env::getBoolean('ENV_NAME', false);

// get int value, second argument is default value
$intValue = Env::getInt('ENV_NAME', 0);
```