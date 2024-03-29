<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keeper extends Model
{
    use HasFactory;

    public function animals()
    {
        return $this->BelongsToMany(Animal::class);
    }
}
