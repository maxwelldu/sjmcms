<?php
return [
    'components' => [
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
         'db' => [
			  'class' => 'yii\db\Connection',
              //'dsn' => 'mysql:host=maxwelldu.mysql.rds.aliyuncs.com;dbname=test',
             'dsn' => 'mysql:host=localhost;dbname=test',
              'username' => 'root',
              'password' => '',
              'charset' => 'utf8',
          ],
    ],
];
