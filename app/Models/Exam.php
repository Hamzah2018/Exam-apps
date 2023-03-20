<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'describe',
        'user_id',
        'categry_id',  
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public  function Category(): BelongsTo{
        return $this -> belongsTo(Category::class,'categry_id','id');
    }
    public  function ِQuestion(): HasMany{
        return $this -> hasMany(ِQuestion::class);
    }
}

