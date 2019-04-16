<?php

if (isset($_GET['delete']))
{
    unlink('upload' . '/' . $_GET['delete']);
}
header('Location: index.php');
?>

