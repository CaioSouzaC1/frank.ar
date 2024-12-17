<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Franchise extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = 'franchises';

    protected $fillable = [
        'name',
        'address_id',
        'primary_color',
        'secondary_color'
    ];

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'id', 'address_id');
    }
}
