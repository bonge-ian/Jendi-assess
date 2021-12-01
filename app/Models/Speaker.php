<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'bio', 'avatar', 'occupation'
    ];

    public function conference(): BelongsToMany
    {
        return $this->belongsToMany(Conference::class);
    }
}
