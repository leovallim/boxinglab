<?php 
$content = $args['block_init'];
// var_dump($content['block_init_video']);
?>
<?= ht_section(array('home-video', ht_section_class($args['block_class'])), $args['block_id']); ?>
    <div class="home-video__info" style="background-image:url('<?= $content['block_init_bg']['url'] ?>')">
        <video autoplay muted playsinline loop preload="true" src="<?= $content['block_init_video']['url'] ?>"></video>

        <div class="home-video__info__wrapper">
            <h2 class="home-video__info__title"><span><?= $content['block_init_title'] ?></span></h2>
            <p class="home-video__info__subtitle"><?= $content['block_init_subtitle'] ?></p>
        </div>
    </div>
</section>