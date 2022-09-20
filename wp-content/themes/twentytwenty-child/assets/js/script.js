(function($){
    $('.slides').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '60px',
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        // prevArrow: $('.prev'),
        // nextArrow: $('.<i class="far fa-chevron-circle-right"></i>'),
        arrows: true,
        adaptiveHeight: false
    });

    
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#youtubeVideo").attr('src');
    
    /* Remove iframe src attribute on page load to
    prevent autoplay in background */
    $("#youtubeVideo").attr('src', '');
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed */
    $(".slide-video-link").on('click', function(){
        var YouTubeVideoID = $(this).data("video");
        $("#youtubeVideo").attr('src', "https://www.youtube.com/embed/"+YouTubeVideoID+'?autoplay=1&mute=1');
        $(".overlay, .modal").css("display","block");
    });
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $(".close, .overlay").on('click', function(){
        $("#youtubeVideo").attr('src', '');
        $(".overlay, .modal").css("display","none");
    });


}(jQuery));