<?php 
// app/Helpers/Navigation_helper.php

if (! function_exists('set_active')) {
    function set_active($page, $current_page) {
        return ($page === $current_page) ? 'active' : '';
    }
}
