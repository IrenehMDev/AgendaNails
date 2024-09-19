<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "descripcion",
        "active"
    ];

    public function entries()
    {
        return $this->hasMany(Entry::class);
    }
}
