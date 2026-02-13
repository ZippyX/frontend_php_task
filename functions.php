<?php
include "data.php";

function getPhotos()
{
$uri = explode('/',$_SERVER["REQUEST_URI"]);
$category = end($uri);
FindImagesWithCategory($category);

}

function FindImagesWithCategory($category)
{
    global $arr; 
    foreach($arr as $key => $value)
        {
            if($value[0] == "fruits")
                {
                    $path = $value[1];
                    echo "<img src=\"$path\">";
                }
        }

}
?> 
