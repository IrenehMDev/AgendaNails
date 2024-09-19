<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "status_entry_id",
        "title",
        "subtitle",
        "content"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statusEntry()
    {
        return $this->belongsTo(StatusEntry::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'entry_tag');
    }
}
