<?php

namespace App\Helpers\Enums;

/**
 * Roles Constants
 */
enum RolesEnum: string
{
    case Admin = "Admin";
    case Customer = "Customer";

    public static function findByKey(string $key)
    {
        return constant("self::$key");
    }
}
