<?php

namespace App\Models;

use App\Helpers\Enums\RolesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    // Relation with user model
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Role::admin()->first(); // Role::where('name', '=', RolesEnum::findByKey(ucfirst('admin'))->value)->first()
     * SELECT * FROM roles WHERE name = 'Admin' LIMIT 1
     * Role::first();
     * SELECT * FROM roles LIMIT 1
     * @param $query
     */
    public function scopeAdmin($query)
    {
        return $this->getRole($query, 'admin');
    }

    public function scopeCustomer($query)
    {
        return $this->getRole($query);
    }

    protected function getRole($query, $role = 'customer')
    {
        return $query->where(
            'name',
            '=',
            RolesEnum::findByKey(ucfirst($role))->value
        );
    }
}
