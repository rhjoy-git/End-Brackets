<section class="video-section">
    <!-- Wave Background -->
    <div class="wave-overlay">
        <img src="{{asset('resources/images/videoSec/wave left.png')}}" class="wave-left" alt="Wave Left">
        <img src="{{asset('resources/images/videoSec/wave right.png')}}" class="wave-right" alt="Wave Right">
    </div>

    <!-- Video Container -->
    <div class="video-container">
        <div class="video-frame">
            <!-- Video -->
            <video id="video" width="100%" controls>
                <source src="{{asset('resources/images/videoSec/video.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>



{{-- <section class="video-section">
    <!-- Wave Background -->
    <div class="wave-overlay">
        <img src="{{asset('resources/images/videoSec/wave-left.png')}}" class="wave-left" alt="Wave Left">
        <img src="{{asset('resources/images/videoSec/wave-right.png')}}" class="wave-right" alt="Wave Right">
    </div>

    <!-- Video Container -->
    <div class="video-container">
        <div class="video-frame">
            <!-- Video -->
            <video id="video" width="100%">
                <source src="{{asset('resources/images/videoSec/video.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Play Button -->
            <div class="play-button" id="play-button">
                <i class="fa fa-play"></i>
            </div>
        </div>
    </div>
</section> --}}
