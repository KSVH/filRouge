<?php
    require_once('../private/model/photosModel.php');
    function deletePhotoPage() 
    {
        $deletePhoto = deletePhoto();
        require('../private/templates/deletePhoto.php');
    }