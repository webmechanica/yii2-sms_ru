# yii2-sms_ru

[Yii2](http://www.yiiframework.com) extension for [sms.ru](http://sms.ru)

Первоначально пакет был создан [Александром Зелениным](https://github.com/zelenin). Но впоследствии пакет был удален. Выложен только потому, что используется в проектах компании "Вебмеханика".


## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

	php composer.phar require webmechanica/yii2-sms_ru "dev-master"

or add

	"webmechanica/yii2-sms_ru": "dev-master"

to the require section of your composer.json

Add code in your components section of application configuration:

	'sms' => [
		'class' => 'webmechanica\yii\extensions\Sms',
		'api_id' => '<api_id>'
	],

or:

	'sms' => [
		'class' => 'webmechanica\yii\extensions\Sms',
		'api_id' => '<api_id>',
		'login' => '<login>',
		'password' => '<password>'
	],

## Usage

SMS sending:

    \Yii::$app->sms->sms_send( '<number>', '<text>' );

[Full methods list](https://github.com/webmechanica/sms_ru/blob/master/readme.md)

## Author

[Aleksandr Zelenin](https://github.com/zelenin/), e-mail: [aleksandr@zelenin.me](mailto:aleksandr@zelenin.me)