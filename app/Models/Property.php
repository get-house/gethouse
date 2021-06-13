<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Property extends Model
{
    use HasFactory;

    public function landlord():BelongsTo
    {
        return $this->belongsTo(Landlord::class);
    }

    public function agent():BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function tenant():HasOne
    {
        return $this->hasOne(Tenant::class);
    }
}
