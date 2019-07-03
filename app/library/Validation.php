<?php

class Validate
{
    public static function required($listRequests)
    {
        foreach ($listRequests as $key => $request) {
            if (trim($request) == '') {
                echo  $request. " is required!";
            }
        }
    }
}
