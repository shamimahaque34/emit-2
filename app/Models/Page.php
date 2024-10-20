<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title','image','is_remote','posting_title','date_opened','job_description','work_experience','job_type','apply_link', 'slug', 'content'];

    // Each page may be associated with one menu
    public function menu()
    {
        return $this->hasOne(Menu::class);
    }
}
