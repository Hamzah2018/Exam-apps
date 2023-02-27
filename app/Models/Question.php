<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Question extends Model
{
    use HasFactory;
    public  function Category(): BelongsTo{
        return $this -> belongsTo(Category::class,'parent_id','id');
    }
    public  function ِQuestion(): HasMany{
        return $this -> hasMany(ِQuestion::class);
    }
}
