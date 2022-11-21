<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrape extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'scrapes';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'resume_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'handle',
        'url',
        'page',
        'retry_count',
        'resume_at',
        'created_at',
    ];

    public function isResuming()
    {
        if(is_null($this->scrape)) {
            return true;
        }

        return false;
    }
}
