<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function formatSeconds( $seconds ){
    $hours = 0;
    $milliseconds = str_replace( "0.", '', $seconds - floor( $seconds ) );

    if ( $seconds > 3600 )
    {
        $hours = floor( $seconds / 3600 );
    }
    $seconds = $seconds % 3600;

    return str_pad( $hours, 2, '0', STR_PAD_LEFT )
       . gmdate( ':i:s', $seconds )
       . ($milliseconds ? ".$milliseconds" : '')
    ;
}

function formatSecondsForHours( $seconds ){
    $hours = 0;
    $milliseconds = str_replace( "0.", '', $seconds - floor( $seconds ) );

    if ( $seconds > 3600 )
    {
        $hours = floor( $seconds / 3600 );
    }
    $seconds = $seconds % 3600;

    return str_pad( $hours, 2, '0', STR_PAD_LEFT )
       . gmdate( '', $seconds )
       . ($milliseconds ? ".$milliseconds" : '')
    ;
}