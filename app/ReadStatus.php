<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReadStatus extends Model
{
    /**
     * Set relationsip with books
     * @return HasMany
     */
    public function books()
    {
        return $this->hasMany('App\Books');
    }
}
