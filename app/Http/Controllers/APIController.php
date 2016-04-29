<?php

namespace App\Http\Controllers;

use App\Version;
use Illuminate\Http\Request;

class APIController extends Controller {

    /**
     * Get the version.
     * 
     * @return mixed
     * @author Cali
     */
    public function getVersion()
    {
        return Version::newestVersion();
    }

    /**
     * Get the release version.
     * 
     * @return mixed
     * @author Cali
     */
    public function getReleaseVersion()
    {
        return Version::newestReleaseVersion();
    }
}
