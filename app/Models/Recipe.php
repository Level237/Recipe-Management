<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Ingredient;
class Recipe extends Model
{
    use HasFactory;

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ingredients():BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)
        ->withPivot([
            'amount',
            'unit'
        ]);
    }
}
