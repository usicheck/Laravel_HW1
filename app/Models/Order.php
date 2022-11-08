<?php

namespace App\Models;

use App\Helpers\Enums\OrderStatusesEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    /**
     * Because have a user_id column
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    /**
     * Many to many with products
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        /**
         * relation with pivot fields (from order_product table)
         */
        return $this->belongsToMany(Product::class)->withPivot(['quantity', 'single_price']);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function inProcess(): Attribute
    {
        return new Attribute(
            get: fn() => $this->status->name === OrderStatusesEnum::InProcess->name
        );    }
}
