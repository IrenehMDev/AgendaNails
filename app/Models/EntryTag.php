<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryTag extends Model
{
    use HasFactory;

    protected $table = 'entry_tag';

    protected $fillable = [
        "entry_id",
        "tag_id"
    ];
}
