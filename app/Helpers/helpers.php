<?php

function getImageUrl($file, $path)
{
    $file->move($path, $file->getClientOriginalName());
    $imageUrl     = $path . $file->getClientOriginalName();
    return $imageUrl;
}
