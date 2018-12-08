<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\NameSaving;

class Project extends Model
{
    protected $fillable = [
        'name', 'slug',
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'saving' => NameSaving::class,
    ];

    /**
     * Get comments
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
