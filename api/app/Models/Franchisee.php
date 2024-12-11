<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Franchisee extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = "franchisees";

    protected $fillable = [
        'user_id',
        'admin_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,  'user_id', 'id');
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class,  'admin_id', 'id');
    }

    protected static function booted()
    {
        static::addGlobalScope('withUser', function ($query) {
            $query->with('user');
        });
    }
}
