<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $tables = 'addresses';

    protected $fillable = [
        'street',
        'number',
        'city',
        'cep',
        'state',
        'country',
        'complement',
        'neighborhood'
    ];

    public function franchise(): HasOne
    {
        return $this->hasOne(Franchise::class, 'address_id', 'id');
    }
}
