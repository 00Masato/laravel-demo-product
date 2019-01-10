<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function getDataId()
    {
        return $this->id;
    }

    public function getDataBook()
    {
        return $this->book;
    }

    public function getDataCategory()
    {
        return $this->category;
    }

    public function getDataIcon()
    {
        return $this->icon;
    }

    public function getDataImage()
    {
        return $this->image;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function scopeCategorySearch($query, $str)
    {
        return $query->where('category', $str);
    }




}
