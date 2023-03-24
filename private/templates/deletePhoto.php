<?php
    $sql = "DELETE FROM photos WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("Location: readPhotos.php");

