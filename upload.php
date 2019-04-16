<?php
if (isset($_POST['submit']))
{
    for ($i=0; $i < count($_FILES['image']);$i++)
    {
        $file[$i] = $_FILES['image'][$i];

//Définition variables :
        $fileName[$i] = $_FILES['image']['name'][$i];
        $fileTmpName[$i] = $_FILES['image']['tmp_name'][$i];
        $fileSize[$i] = $_FILES['image']['size'][$i];
        $fileError[$i] = $_FILES['image']['error'][$i];
        $fileType[$i] = $_FILES['image']['type'][$i];

//Type de formats acceptés :
        $fileExt[$i] = explode('.', $fileName[$i]); //récupération de l'extension
        $fileActualExt[$i] = strtolower(end($fileExt[$i])); //minuscule
        $allowed = array('jpg', 'png', 'gif'); //liste formats autorisés

        if (in_array($fileActualExt[$i], $allowed)) {
            if ($fileError[$i] === 0) {
                if ($fileSize[$i] < 1000000) {
                    $fileNameNew[$i] = 'image' . "-" . uniqid() . "." . $fileActualExt[$i];
                    $fileDestination[$i] = 'upload/' . $fileNameNew[$i];
                    move_uploaded_file($fileTmpName[$i], $fileDestination[$i]);
                    header("Location: index.php?unploadsucess");
                } else {
                    echo 'Your file is too heavy.';
                }
            } else {
                echo 'There was an error uploading your file';
            }
        } else {
            echo 'You cannot upload such a file';
        }
    }
}

?>