<?php

$dir = 'upload/';

$files = scandir($dir);



?>

<div class="container-fluid">

    <h1>Uploaded files :</h1></br>

    <div class="row col-lg-12">
    <?php

        foreach ($files as $key => $value) {
            $word = '/\bimage\b/';  //Si l'image contient le bloc image (pour éviter d'afficher les dossiers cachés)
            if (preg_match($word, $value) == TRUE) {


                ?>
                <div class="card" style="width: 18rem;">
                    <img src=<?php echo "$dir" . "$value" ?> class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value ?></h5>
                        <form method="GET" action="unlike.php">
                        <input type="hidden" name="delete" value="<?php echo $value ?>">
                            <input class="button" type="submit" value="Delete">
                        </form>

                    </div>
                </div>
            <?php } } ?>
    </div>
</div>

