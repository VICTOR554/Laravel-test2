<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function emergencyContact()
    {
        return $this->hasOne(EmergencyContact::class);
    }
    public function enclosure()
    {
        return $this->BelongsTo(Enclosure::class);
    }
    public function keepers()
    {
        return $this->BelongsToMany(Keeper::class);
    }

}
