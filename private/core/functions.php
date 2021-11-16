<?php


function get_var($var)
{
    if (isset($_POST[$var])) {
        return $_POST[$var];
    } else if (isset($_GET[$var])) {
        return $_GET[$var];
    } else {
        return '';
    }
}


function esc($var)
{
    return htmlspecialchars($var);
}
