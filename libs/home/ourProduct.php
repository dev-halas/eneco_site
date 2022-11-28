<?php 
    $home_product_subtitle = get_field('home_product_subtitle');
    $home_product_title = get_field('home_product_title');
    $home_product_text = get_field('home_product_text');
    $home_product_download = get_field('home_product_download');
?>

<section class="ourProduct">
    <div class="ourProduct--inner">

            <div class="ourProduct--content">
                <span class="ourProduct--eko">EKO</span>
                <img src="<?php echo THEME_URL; ?>_dev/img/info-eneco-kruszywo.png" alt="ikona info" class="ourProduct--leftIcon">
                <span class="smallTitle"><?php echo $home_product_subtitle; ?></span>
                <h1 class="title"><?php echo $home_product_title; ?></h1>
                <div class="ourProduct--text animate fadeInLeft d-400">
                    <?php echo $home_product_text; ?>
                </div>
            </div>
            <div class="ourProduct--icons animate">
                <div class="ourProduct--iconsInner">
                    <div class="ourProduct--icon fadeIn d-800">
                        <img src="<?php echo THEME_URL; ?>_dev/img/recycle.png" alt="ico">
                        <span>Produkt z recyklingu</span>
                    </div>
                    <div class="ourProduct--icon fadeIn d-1000">
                        <img src="<?php echo THEME_URL; ?>_dev/img/ecology.png" alt="ico">
                        <span>Działania na rzecz natury</span>
                    </div>
                </div>
            </div>
            <div class="ourProduct--rightBackground animate fadeInRight d-200">
                <img src="<?php echo THEME_URL; ?>_dev/img/kruszywo-eneco.jpg" alt="">
            </div>
            <div class="ourProduct--certificate">
                <span>Certyfikat oraz stosowne pozwolenia</span>
                <a href="<?php echo esc_url($home_product_download['url']); ?>" target="_blank" class="buttonWhite">
                    <?php echo $home_product_download['title']; ?>
                </a>
            </div>
    </div>
</section>