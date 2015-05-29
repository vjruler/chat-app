# UWC. Back-end developer 3+

<p>The application must set:</p>

- Apache2+
- MySQL 5.1+
- PHP 5.3+
- Redis 2.2+
- node.js 0.6.14
- Extensions php:
* phpredis (https://github.com/nicolasff/phpredis)
* PDO MySQL extension
* php-openssl

## configuration:
- Apache root directory must be set to chat / and set AllowOverride All.
- It is also necessary to enable rewrite module for apache.
- Dump the database is in chat.sql
- Set up a connection to the database in /chat/protected/config/main.php
- Set up a connection to redis for node.js applications in chat-node / daemon.js
- Align the permissions for directories chat / and yii /, the web server can read and write files.

## Starting:
To run the application details please run chat-node / app.js:

node app.js

You can then go to the host that is specified in the settings apache.
