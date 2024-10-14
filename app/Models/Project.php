<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date', 'description', 'image_project', 'slug', 'type_id'];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
