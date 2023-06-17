<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Answer extends Model
{
    use HasFactory;

    public function nextPage(): BelongsTo{
        return $this->belongsTo(Page::class, 'next_page');
    }

    public function question(): BelongsTo{
        return $this->belongsTo(Question::class);
    }

    public function responders(): BelongsToMany {
        return $this->belongsToMany(Responder::class, 'responder_answers')
            ->as('answer')
            ->withPivot('text', 'checked');
    }
}
