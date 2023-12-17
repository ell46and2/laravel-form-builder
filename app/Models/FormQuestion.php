<?php

namespace App\Models;

use App\Enums\FieldType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FormQuestion extends Model
{
    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'order',
        'field_type',
        'label',
        'parent_id',
        'form_section_id'
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'field_type' => FieldType::class,
        'order' => 'integer'
    ];


    /** @return HasMany<FormQuestion> */
    public function children(): HasMany
    {
        return $this->hasMany(FormQuestion::class, 'parent_id');
    }

    /** @return BelongsTo<FormSection, FormQuestion> */
    public function section(): BelongsTo
    {
        return $this->belongsTo(FormSection::class);
    }

    /** @return HasMany<QuestionAttribute> */
    public function attributes(): HasMany
    {
        return $this->hasMany(QuestionAttribute::class);
    }
}
