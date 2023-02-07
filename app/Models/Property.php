<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'isVerified' => 'boolean',
    ];

    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class);
    }

    public function currentTenant(): HasOne
    {
        return $this->hasOne(Tenant::class, 'id', 'current_tenant_id');
    }

    public function media(): MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }
}
