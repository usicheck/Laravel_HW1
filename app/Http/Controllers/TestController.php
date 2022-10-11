<?php

namespace App\Http\Controllers;

use App\Services\Contracts\UserInfoContract;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(protected UserInfoContract $contract)
    {
    }

    public function test() {
        dd($this->contract->generate());
    }

}
