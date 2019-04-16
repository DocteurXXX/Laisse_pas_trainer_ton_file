<div class="container-fluid">
    <h1>Please upload your files :</h1></br>
    <div class="row col-lg-6"></div>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000"> <!-- taille en octet, soit 1Mo, côté client -->
        <input type="file" name="image[]" multiple="multiple">
        <input type="submit" name="submit" value="Envoyer le fichier">
    </form>
</div>



<?php

    include 'upload.php';

?>

<br/>
<br/>
<br/>