<?php 

    $home_contact_title_small = get_field('home_contact_title_small');
    $home_contact_title = get_field('home_contact_title');
    $home_contact_text_left = get_field('home_contact_text_left');
    $home_contact_text_right = get_field('home_contact_text_right');
?>

<section class="contact">
    <div class="contactInner animate fadeInBottomLow">
        <div class="contactContainer">
            <div class="contactIcons">
                <div class="contactIcon fadeInLeft d-400">
                    <div class="contactIcon--img">
                        <img src="<?php echo THEME_URL; ?>_dev/img/telephone.png" alt="">
                    </div>
                    <div class="contactIcon--text">
                        <span>Zadzwoń do nas</span>
                        <h2>+48 517 706 357</h2>
                    </div>
                </div>
                <div class="contactIcon fadeInRight d-400">
                    <div class="contactIcon--img">
                        <img src="<?php echo THEME_URL; ?>_dev/img/open.png" alt="" >
                    </div>
                    <div class="contactIcon--text">
                        <span>Adres e-mail</span>
                        <h2>biuro@eneco.pl</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div id="map"></div>

