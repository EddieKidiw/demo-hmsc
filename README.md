Demo Script HMSC
==========

Require
-----------

Install php extension [HMSC](https://github.com/EddieKidiw/HMSC)

Quick Start
-----------

Install the library using [composer](https://getcomposer.org)

    composer require eddiekidiw/demo-hmsc


```php
<?php

include"vendor/autoload.php";
use Classes\Admin;
use Classes\User;

$Admin = new Admin();
$User = new User();

$Admin->SetAdminName("PHP admin");
echo $Admin->GetAdminName();
var_dump($Admin);

$User->SetUserName("PHP user");
echo $User->GetUserName();
var_dump($User);
```

Encode your php script [here](https://tool.eddiekidiw.com/hmsc.html)
