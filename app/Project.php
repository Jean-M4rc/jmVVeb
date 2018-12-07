<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Get comments
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
