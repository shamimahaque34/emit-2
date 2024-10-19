<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content'];

    // Each page may be associated with one menu
    public function menu()
    {
        return $this->hasOne(Menu::class);
    }
}
