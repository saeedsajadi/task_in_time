<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table = 'titles';
    protected $fillable = ['title'];

    /**
     * daryafte faaliyat ha bar asase onvan
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_title');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
