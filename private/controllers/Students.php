<?php

/**
 * Students controller
 */

class Students extends Controller
{
    function index($id = null)
    {
        echo 'this is the students controller' . $id;
    }
}
