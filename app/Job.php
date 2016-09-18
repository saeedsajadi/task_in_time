<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\jDate;
use Morilog\Jalali\jDateTime;

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = [
        'job_day',
        'job_start',
        'job_end'
    ];

    /**
     * karbare ijad konande faaliyat
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * onvan haye faaliyat
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function titles()
    {
        return $this->belongsToMany(Title::class)->withTimestamps();
    }

    public function getTitleListAttribute()
    {
        return $this->titles->lists('id');
    }

    /**
     * convert jalali date to gregorian date
     * @param $date
     * @return string gregorian date
     */
    public function setJobDayAttribute($date)
    {
        $date_arr = explode('/', $date);
        $g_date_arr = jDateTime::toGregorian($date_arr[0], $date_arr[1], $date_arr[2]);
        $this->attributes['job_day'] = implode('-', $g_date_arr);
    }

    /**
     * convert gregorian date to jalali date
     * @param $date
     * @return string jalali date
     */
    public function getJobDayAttribute($date)
    {
        return jDate::forge($date)->format('%Y/%m/%d');
    }
}
