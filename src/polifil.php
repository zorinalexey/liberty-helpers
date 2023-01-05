<?php

if ( ! defined('SEP')) {
    define('SEP', DIRECTORY_SEPARATOR);
}

if ( ! defined('TMP')) {
    define('ROOT', dirname(dirname(dirname(dirname(__DIR__)))) . SEP);
}

if ( ! defined('TMP')) {
    define('TMP', ROOT . 'TMP' . SEP);
}