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
