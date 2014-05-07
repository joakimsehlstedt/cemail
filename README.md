CEmail a PHP class for sending very simple email messages.
==================================

This module sends a simple email message. It sanitizes and validates the "to" and "from" email addresses before anything is sent through. The module has been tested and designe for the Anax-MVC.

By Joakim Sehlstedt

Installation
=============

To make full use of the module gitclone a copy of the [Anax-MVC](https://github.com/mosbth/Anax-MVC).

You can either copy the files from this repository or use the composer package at [packagist.org/packages/jox/cemail](https://packagist.org/packages/jox/cemail).

To test the module from a anax front-controller run the following code . 

```php
// Standard $di object creation
$di = new \Anax\DI\CDIFactoryDefault();

// Set your services here
$di->set('email', '\Jox\Email\CEmail');

// Standard injection of services into Anax $app object.
$app = new \Anax\Kernel\CAnax($di);
```

Run this from within your preferred route.

```php
// Send email and recieve send status string
$res = $app->email->sendEmail('from-whatever@example.com', 'to-whatever@example.com', 'Message Subjectline', 'Message body...');
```
The result of your sending will show up in the form of a string message in the $res variable.

You can also test the function from the test.php file in the webroot folder included in the package.

Don't forget to change the email addresses in the examples otherwise you wont see any messages!

Good luck!

License
----------------------------------

This software is free software and carries a MIT license.



Todo
----------------------------------



History
----------------------------------

v1.0 (latest)

Initial release.



 Copyright 2014 by Joakim Sehlstedt