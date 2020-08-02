<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Book
 * @package App
 */
class Book extends Model
{
    // disable timestamp for books (not needed)
    public $timestamps = false;

    // the fillable fields
    public $fillable = ['user_id', 'title', 'author', 'blurb', 'read_status_id'];

    /**
     * Set book status relationship
     * @return HasOne
     */
    public function status()
    {
        return $this->hasOne('App\ReadStatus', 'id', 'read_status_id');
    }
}
