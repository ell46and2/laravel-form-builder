<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FormSection extends Model
{
    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'label'
    ];

    /** @return HasMany<FormQuestion> */
    public function Questions(): HasMany
    {
        return $this->hasMany(FormQuestion::class);
    }
}
