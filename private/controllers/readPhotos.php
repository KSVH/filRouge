<?php

    require_once('../private/model/photosModel.php');

    function readPhotosPage() 
    {
        $getPhotos = getPhotos();
        require('../private/templates/readPhotos.php');
    }