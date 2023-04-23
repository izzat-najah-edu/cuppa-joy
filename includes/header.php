<header>
    <?php require "navbar.php" ?>
    <div class="card max-width-400 bg-transparent border-0 text-light text-center">
        <?php if (isset($logo_url)) { ?>
            <img class="card-img-top" src="<?php echo $logo_url ?>" alt="Logo">
        <?php } ?>
        <div class="card-body">
            <?php if (isset($logo_title)) { ?>
                <h2 class="card-title display-2"><?php echo $logo_title ?></h2>
            <?php } ?>
            <?php if (isset($logo_description)) { ?>
                <hr>
                <p class="card-text"><?php echo $logo_description ?></p>
            <?php } ?>
        </div>
    </div>
</header>
