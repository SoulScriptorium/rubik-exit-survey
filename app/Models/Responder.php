<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Responder extends Model
{
    use HasFactory;

    protected array $dates = ['created_at', 'deleted_at', 'birth']; // which fields will be Carbon-ized

    public function answers(): BelongsToMany {
        return $this->belongsToMany(Answer::class, 'responder_answers')
            ->as('answer')
            ->withPivot('text', 'checked');
    }


}
