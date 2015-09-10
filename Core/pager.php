<?php

function pagination( $page, $total, $url, $on_page = 10 )
{
    $totalPages = $total / $on_page;
    $result = [];
    for( $i = 1; $i <= $totalPages; $i++ )
    {
        $cssClass = "page";
        if( $i == $page)
        {
            $cssClass = "page active";
        }
        $result[] = [
            'class' => $cssClass,
            'name' => $i,
            'url' => $url . $i
        ];
    }
    return $result;