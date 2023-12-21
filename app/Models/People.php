<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'cell'
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'people_id', 'id');
    }
}
