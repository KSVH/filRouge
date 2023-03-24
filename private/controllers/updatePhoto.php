<?php
    require_once('../private/model/photosModel.php');
    function updatePhotoPage() 
    {
        $updatePhoto = updatePhoto();
        require('../private/templates/updatePhoto.php');
    }