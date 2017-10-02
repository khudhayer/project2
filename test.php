<?php

$con = mysqli_connect('localhost', 'root', 'root', 'loginuser');

$filename = $_FILES['image']['name'];

$uploadOk = 1;

$imageFileType = pathinfo($filename, PATHINFO_EXTENSION);

$imageFileType=strtolower($imageFileType);


if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}



if ($uploadOk == 0)
{
    echo "Sorry, your file was not uploaded.";
}
else
    {
    $target_dir = "uploads/";

    $our_file_name = "sag_" . rand();

    $the_full_path_to_the_file = $target_dir . $our_file_name.'.'. $imageFileType;

    move_uploaded_file($_FILES["image"]["tmp_name"],$the_full_path_to_the_file );

    $query = "INSERT INTO file (filename) VALUES ('$our_file_name"."."."$imageFileType')";

    if (mysqli_query($con,$query))
        echo "The file has been uploaded.";
    else
        echo "The Error in the SQL Uploading";
}

?>