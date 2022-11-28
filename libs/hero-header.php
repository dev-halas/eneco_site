<?php 
    $title = get_field('hero_title');
    $title_bold = get_field('hero_title_bold');
    $text = get_field('hero_text');
    $button = get_field('hero_button');
    $vertical = get_field('hero_vertical');
    $image = get_field('hero_image');

?>
<section class="hero animate">
    <img src="<?php echo esc_url($image['url']); ?>" alt="heroImg" class="heroImg">
    <div class="heroInner">
        <h1 class="heroTitle title fadeInTopLow d-200">
            <?php echo $title; ?>
            <span class="title"><?php echo $title_bold; ?></span>
        </h1>
        <div class="heroContent">
            <div class="heroText fadeInBottomLow d-600">
                <?php echo $text; ?>
            </div>
            <a href="<?php echo $button['url']; ?>" class="buttonOutline--white">
                <?php echo $button['title']; ?>
            </a>
        </div>
        <span class="heroVertical">
            <?php echo $vertical; ?>
        </span>
    </div>

</section>