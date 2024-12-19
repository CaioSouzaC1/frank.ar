<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FranchiseUnit extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $tables = "franchise_units";

    protected $fillable = [
        'name',
        'franchise_id',
        'is_matrix',
        'address_id',
        'user_id'
    ];

    public function franchise(): BelongsTo
    {
        return $this->belongsTo(Franchise::class, 'id', 'franchise_id');
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'id', 'address_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    protected static function booted()
    {
        static::addGlobalScope('withFranchise', function ($query) {
            $query->with('franchise');
        });
        static::addGlobalScope('withAddress', function ($query) {
            $query->with('address');
        });
    }
}
