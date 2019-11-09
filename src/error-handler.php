<?php

declare(strict_types=1);

/**
 * Manipulation errors
 * 
 * @param int $errno = number
 * @param string $errstr = message
 * @param string $errfile = file
 * @param int $errline = line file
 */
function setInternalServerError(int $errno, string $errstr, string $errfile, int $errline)
{    
    echo '<h1>Error</h1>';
 
    if (!DEBUG) {
        exit;
    }

    echo '<span style="font-weigth: bold; color: red">';

    switch ($errno) {
        case E_USER_ERROR:
            echo '<strong>ERROR: </strong> [' . $errno . '] ' . $errstr . "<br>\n";
            echo 'Fatal error on line ' . $errline . ' in file ' . $errfile . "<br>\n";
            break;
        
        case E_USER_WARNING:
            echo '<strong>WARNING: </strong> [' . $errno . '] ' . $errstr . "<br>\n";
            echo 'WARNING error on line ' . $errline . ' in file ' . $errfile . "<br>\n";
            break;

        case E_USER_NOTICE:
            echo '<strong>NOTICE: </strong> [' . $errno . '] ' . $errstr . "<br>\n";
            echo 'NOTICE error on line ' . $errline . ' in file ' . $errfile . "<br>\n";
            break;

        default:
            echo '<strong>Unknow error type: </strong> [' . $errno . '] ' . $errstr . "<br>\n";
            echo 'Unknow error on line ' . $errline . ' in file ' . $errfile . "<br>\n";
            break;
    }

    echo '<ul style="color: #ba9313">';
        foreach (debug_backtrace() as $error) {
            if (!empty($error['file'])) {
                echo '<li>';
                echo $error['file'] . ':' . $error['line'];
                echo '</li>';
            }
        }
    echo '</ul>';
    echo '</span><hr><a href="phpinfo.php">PHP info</a>';
    
    exit();
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');
