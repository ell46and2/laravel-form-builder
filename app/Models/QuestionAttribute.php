<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuestionAttribute extends Model
{
    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'order',
        'label',
        'value',
        'form_question_id'
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'order' => 'integer',
    ];

    /** @return BelongsTo<FormQuestion, QuestionAttribute> */
    public function question(): BelongsTo
    {
        return $this->belongsTo(FormQuestion::class);
    }
}
