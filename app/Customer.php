<?php

namespace Bird;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'city',
        'state',
        'birthdate',
        'special_customer'
    ];

    protected $casts = [
        'special_customer' => 'boolean'
    ];

    protected $dates = [
        'birthdate'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchases::class);
    }
}
