<?php

namespace App\Services;

use App\Models\User;
use App\Services\Contracts\UserInfoContract;

class UserInfoHtml implements UserInfoContract
{
public function generate() {
    $user = User::all()->random();
    return "<li>$user->name</li>
<li>$user->surname</li>
<li>$user->email</li>

";
}
}
