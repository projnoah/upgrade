<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model {

    protected $guarded = [
        'id'
    ];

    /**
     * Get the newest version.
     * 
     * @param bool $beta
     * @author Cali
     */
    public static function newestVersion()
    {
        return static::latest()->first();
    }

    /**
     * Get the newest release version.
     * 
     * @return mixed
     * @author Cali
     */
    public static function newestReleaseVersion()
    {
        return static::latest()->where('beta', '0')->first();
    }
}
