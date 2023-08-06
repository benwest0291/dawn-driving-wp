<?php
$heading = $data["heading"];
$bg_image= $data["background_image"];
$credential = $data['credential'];
?>

<section class="banner" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(<?php echo ($bg_image != null ? $bg_image['url'] : ''); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <?php if($heading == null){ ?>
                    <h1 class="banner__heading"><?php the_title(); ?></h1>
                <?php } else { ?>
                    <h1 class="banner__heading"><?php echo $heading; ?></h1>
                <?php } ?>
                <div class="d-flex mt-4">
                    <i class="banner__breadcrumb fa-solid fa-house mr-1"></i>
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('</p><p id=“breadcrumbs">', '</p><p>');
                    }
                    ?>
                </div>
                <?php if($credential != null){ ?>
                    <img class="banner__credential mt-3" src="<?php echo $credential['url'];?>" />
                <?php } ?>
            </div>
            <div class="col-12 col-md-8">
                <!--Empty for background image -->
            </div>
        </div>
    </div>
</section>
