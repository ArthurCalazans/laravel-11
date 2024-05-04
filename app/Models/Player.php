<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nickname'];

    public function characters()
    {
        return $this->hasMany(RpgCharacter::class);
    }
}
