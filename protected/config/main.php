<?php
return array(
	'id' => 'webapp',
	'name' => 'My Web Application',
	'components' => array(
		// uncomment the following to use a MySQL database
		'db' => array(
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=yii2',
			'username' => 'yii2',
			'password' => '<password>',
		),
		'cache' => array(
			'class' => 'yii\caching\DummyCache',
		)
	),
);
