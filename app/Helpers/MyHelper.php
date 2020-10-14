<?php

if (!function_exists('getCurrentMethod')) {
    /**
     * description.
     *
     * @param
     *
     * @return
     */
    function getCurrentMethod()
    {
        return \Route::getCurrentRoute()->getActionMethod();
    }
}

