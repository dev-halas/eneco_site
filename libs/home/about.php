<?php 

    $home_about_title_small = get_field('home_about_title_small');
    $home_about_title = get_field('home_about_title');
    $home_about_text_left = get_field('home_about_text_left');
    $home_about_text_right = get_field('home_about_text_right');
?>

<section class="about">
    <div class="aboutInner animate fadeInBottomLow">
        <div class="aboutContainer">
            <span class="smallTitle"><?php echo $home_about_title_small;?></span>
            <h1 class="title"><?php echo $home_about_title ;?></h1>
            <div class="aboutText">
                <div class="aboutText--col fadeInLeft d-400">
                    <?php echo $home_about_text_left ;?>
                </div>
                <div class="aboutText--col fadeInRight d-400">
                    <?php echo $home_about_text_right ;?>
                </div>
            </div>

            <?php if( have_rows('home_about_icons') ): ?>
                <div class="aboutIcons">
                    <?php while( have_rows('home_about_icons') ) : the_row(); 
                        $home_about_icon_img = get_sub_field('home_about_icon_img');
                        $home_about_icon_text = get_sub_field('home_about_icon_text');
                    ?>
                        <div class="aboutIcon">
                            <img src="<?php echo $home_about_icon_img['url']; ?>" alt="<?php echo $home_about_img['alt']; ?>" class="aboutIconImg">
                            <span class="aboutIconText"><?php echo $home_about_icon_text; ?></span>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>
