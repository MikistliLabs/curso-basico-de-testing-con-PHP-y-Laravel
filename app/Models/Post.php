<?php

namespace App\Models;

use Illuminate\database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Mutators
    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }
    // Accessors
    public function getSlugAttribute(){
        return str_replace(' ','-', $this->name);
    }
    public function href(){
        return "blog/{$this->slug}";
    }
}
