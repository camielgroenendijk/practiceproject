<?php

namespace App\Models;

use App\Http\Controllers\BlogsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
