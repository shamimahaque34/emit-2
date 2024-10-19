<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'parent_id'];

    // Relationship for submenus
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    // Relationship for the parent menu
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }


    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    // Get all parent menus
    public static function parentMenus()
    {
        return self::whereNull('parent_id')->with('children')->get();
    }
}
