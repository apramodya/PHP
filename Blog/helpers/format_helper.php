<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/14/17
 * Time: 8:42 PM
 */
//fotmat date
function formatDate($date){
    return date("F j, Y, g:i a",strtotime($date));
}

// format blog body
function shortenText($text, $chars=450){
    $text = $text." ";
    $text = substr($text, 0 ,$chars);
    $text = substr($text, 0 ,strrpos($text,' '));
    $text = $text."...";

    return $text;
}
