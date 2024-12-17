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
        'address_id'
    ];

    public function franchise(): BelongsTo
    {
        return $this->belongsTo(Franchise::class, 'id', 'franchise_id');
    }

    protected static function booted()
    {
        static::addGlobalScope('withFranchise', function ($query) {
            $query->with('franchise');
        });
    }
}
