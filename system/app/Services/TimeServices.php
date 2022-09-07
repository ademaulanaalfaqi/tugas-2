<?php

namespace App\Services;

class TimeServices {

    function showTimeNow(){
        return date('H:i');
    }
}