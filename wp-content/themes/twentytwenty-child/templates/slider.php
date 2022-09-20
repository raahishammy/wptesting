      
<div class="container">
<?php if( $slides ) { ?>
    <div class="slides">
        <?php foreach( $slides as $index=>$slide ) { ?>
            <?php $image = $slide['slider_thumbnail']; ?>
            <div class="slide-content-container">
                <div class="slide-thumbnail-container">
                    <a href="javascript:;" data-video="<?=$slide['slider_video_link']?>" class="slide-video-link">
                        <div class="play-icon"><?=wp_get_attachment_image( $slide['video_play_button'], 'thumbnail' )?></div>
                    </a>
                    <div class="slide-thumbnail"><?=wp_get_attachment_image( $image, 'full' )?></div>
                </div>

                <div class="slide-content">
                    <div class="slide-title"><?=$slide['slider_title']?></div>
                    <p class="slide-description"><?=$slide['slider_description']?></p>
                </div>                
            </div>
        <?php } ?>
    </div>

    <div class="overlay"></div>
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            
            <div class="embed-responsive embed-responsive-16by9">
                <iframe id="youtubeVideo" class="embed-responsive-item" width="560" height="315" src="//www.youtube.com/embed/YE7VzlLtp-4?autoplay=1" allowfullscreen></iframe>
            </div>
        </div>
    </div>

<?php } ?>
</div>