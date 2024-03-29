<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\blog;

class Author extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blogs()
    {
        return $this->hasMany(blog::class);
    }
}

