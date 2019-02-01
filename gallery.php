<?php
$PAGE_TITLE = 'Gallery';
include_once 'header.inc';
?>
<div class="container">
    <?php
    $selectedGallery = "";
    if (isset($_GET['gallery']) && !empty($_GET['gallery'])) {
        $selectedGallery = $_GET['gallery'];
    }

    function genAdditionalShortFromLong($long)
    {
        return [basename($long) => $long];
    }

    $directories = array_filter(glob('assets/images/gallery/*'), 'is_dir');
    $shortToLongDirMapping = [];
    foreach ($directories as $directory) {
        if (empty($selectedGallery)) {
            $selectedGallery = basename($directory);
        }
        $shortToLongDirMapping[basename($directory)] = $directory;
    }
    ?>
    <ul class="nav nav-pills">
        <?php foreach ($shortToLongDirMapping as $galleryName => $galleryPath) { ?>
            <li role="presentation" <?= $selectedGallery == $galleryName ? 'class="active"' : '' ?>>
                <a href="?gallery=<?= $galleryName; ?>"><?= $galleryName; ?></a>
            </li>
        <?php } ?>
    </ul>
    <hr>
    <div class="row equal">
        <?php

        if (!empty($selectedGallery)) {
            if ($shortToLongDirMapping[$selectedGallery]) {
                $listOfImagesInSelectedGallery = array_filter(glob($shortToLongDirMapping[$selectedGallery] . DIRECTORY_SEPARATOR . '*'), 'is_file');
                foreach ($listOfImagesInSelectedGallery as $image) {
                    ?>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="<?= $image ?>" alt="<?= basename($image) ?>" class="img-responsive">
                        </a>
                    </div>
                    <?php
                }
            }
        }
        ?>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="footer-icons" style="text-align: center; color:black; font-size:35pt;">
                    <a href="https://twitter.com/pantherbotics">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.facebook.com/Pantherbotics">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/pantherbotics">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="https://github.com/Pantherbotics">
                        <i class="fa fa-github" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/user/3863Pantherbotics">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.thebluealliance.com/team/3863">
                        <img src="assets/images/footer-icons/thebluealliance.svg" alt="The Blue Alliance"
                             style="width: 24pt;height: 36pt; filter: brightness(100);">
                    </a>
                    <!--<a href="https://frc-events.firstinspires.org/2019/team/3863">-->
                    <!--<img src="images/footer-icons/FIRST.svg" alt="FIRST"-->
                    <!--style="width: 47pt;height: 47pt; filter: brightness(100);">-->
                    <!--</a>-->
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="custom.js"></script>-->
</body>
</html>
