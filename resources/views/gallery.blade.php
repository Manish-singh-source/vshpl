<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Gallery - Responsive</title>
    <style>
    /* Reset & base */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }

    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background: linear-gradient(135deg, rgba(84, 181, 173, 0.3), rgba(63, 89, 158, 0.3)), url(http://127.0.0.1:8000/assets/players/background.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    /* TITLE */
    .title {
        color: #ffffff;
        font-size: 48px;
        margin-bottom: 20px;
        text-align: center;
        /* letter-spacing: 2px; */
    }

    /* FILTER BUTTONS */
    .buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin-bottom: 25px;
    }

    button {
        padding: 10px 20px;
        border: none;
        border-radius: 25px;
        background: rgb(6 3 3);
        color: rgb(255 255 255);
        backdrop-filter: blur(10px);
        cursor: pointer;
        transition: 0.3s;
        font-weight: bold;
    }

    button:hover {
        background: white;
        color: #764ba2;
    }

    /* GALLERY GRID */
    .gallery {
        width: 100%;
        max-width: 1200px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .image-box {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        cursor: pointer;
        transition: 0.3s ease;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .image-box img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: 0.3s ease;
    }

    .image-box video {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: 0.3s ease;
        background: #000;
    }

    .image-box:hover video {
        transform: scale(1.05);
    }

    /* Hide video controls in gallery thumbnails */
    .image-box video::-webkit-media-controls {
        display: none !important;
    }
    .image-box video::-moz-media-controls {
        display: none !important;
    }
    .image-box video::-webkit-media-controls-enclosure {
        display: none !important;
    }

    .video-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 50px;
        color: white;
        opacity: 0.8;
        z-index: 10;
        pointer-events: none;
    }

    .image-box::after {
        content: "View";
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
        font-size: 16px;
        opacity: 0;
        transition: 0.3s;
    }

    .image-box:hover img {
        transform: scale(1.05);
    }

    .image-box:hover::after {
        opacity: 1;
    }

    .hide {
        display: none;
    }

    /* LIGHTBOX */
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        padding: 10px;
    }

    .lightbox img {
        max-width: 90%;
        max-height: 70%;
        border-radius: 10px;
    }

    .close {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 35px;
        color: white;
        cursor: pointer;
    }

    .nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 40px;
        background: none;
        border: none;
        color: white;
        cursor: pointer;
        padding: 10px;
    }

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
    }

    /* RESPONSIVE */
    @media (max-width: 1024px) {
        .image-box img {
            height: 220px;
        }

        .image-box video {
            height: 220px;
        }

        .title {
            font-size: 32px;
        }

        button {
            font-size: 13px;
            padding: 8px 16px;
        }
    }

    @media (max-width: 768px) {
        .gallery {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }

        .image-box img {
            height: 180px;
        }

        .image-box video {
            height: 180px;
        }

        button {
            font-size: 12px;
            padding: 7px 14px;
        }

        .nav {
            font-size: 35px;
        }

        .close {
            font-size: 30px;
        }
    }

    @media (max-width: 600px) {
        body {
            padding: 15px;
        }

        .gallery {
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
        }

        .image-box img {
            height: 150px;
        }

        .image-box video {
            height: 150px;
        }

        .title {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
            margin-bottom: 15px;
        }

        button {
            font-size: 14px;
            padding: 10px 12px;            
        }

        .nav {
            font-size: 28px;
            padding: 8px;
        }

        .close {
            font-size: 26px;
            top: 15px;
            right: 15px;
        }

        .lightbox img {
            max-width: 95%;
            max-height: 60%;
        }
    }

    @media (max-width: 480px) {
        body {
            padding: 10px;
        }

        /* Gallery: 2 images per row */
        .gallery {
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
        }

        .image-box img {
            height: 120px;
        }

        /* Title */
        .title {
            font-size: 24px;
        }

        /* Buttons: 2 per row */
        .buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 6px;
        }

        button {
            font-size: 12px;
            padding: 8px 10px;            
            text-align: center;
        }

        /* Lightbox adjustments */
        .nav {
            font-size: 24px;
            padding: 6px;
        }

        .close {
            font-size: 24px;
        }

        .lightbox img {
            max-width: 95%;
            max-height: 50%;
        }
        
    }

    /* Touch-friendly improvements */
    @media (hover: none) and (pointer: coarse) {
        button {
            min-height: 44px;
            min-width: 44px;
        }

        .image-box {
            cursor: zoom-in;
        }

        .nav, .close {
            min-width: 44px;
            min-height: 44px;
        }
    }
    </style>
</head>

<body>

    <h1 class="title">Game of Champions</h1>

    <div class="buttons">
        <button onclick="filterImages('all')">All</button>
        <button onclick="filterImages('children')">Children Team</button>
        <button onclick="filterImages('younger')">Younger Team</button>
        <button onclick="filterImages('winner')">Winner Team</button>
        <button onclick="filterImages('video')">Videos</button>
    </div>

    <div class="gallery">
        <div class="image-box children" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/c1.png') }}">
        </div>
        <div class="image-box children" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/c2.png') }}">
        </div>
        <div class="image-box children" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/c3.png') }}">
        </div>
        <div class="image-box children" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/c4.png') }}">
        </div>
        <div class="image-box children" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/c5.png') }}">
        </div>
        <div class="image-box children" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/c6.png') }}">
        </div>
        <div class="image-box children" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/c7.png') }}">
        </div>
        <div class="image-box children" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/c8.png') }}">
        </div>
        <div class="image-box children" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/c9.png') }}">
        </div>
        <div class="image-box children" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/c10.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y1.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y2.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y3.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y4.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y5.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y6.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y7.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y8.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y9.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y10.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y11.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y12.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y13.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y14.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y15.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y16.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y17.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y18.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y19.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y20.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y21.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y23.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y24.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y25.png') }}">
        </div>
        <div class="image-box younger" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/y26.png') }}">
        </div>
        <div class="image-box winner" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/w1.png') }}">
        </div>
        <div class="image-box winner" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/w2.png') }}">
        </div>
        <div class="image-box winner" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/w3.png') }}">
        </div>
        <div class="image-box winner" onclick="openLightbox(this)">
            <img src="{{ asset('/assets/players/w4.png') }}">
        </div>
        
        <!-- Video Gallery Items -->
        <div class="image-box video" onclick="openLightbox(this)">
            <span class="video-icon">▶</span>
            <video >
                <source src="{{ asset('/assets/players/cv1.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="image-box video" onclick="openLightbox(this)">
            <span class="video-icon">▶</span>
            <video >
                <source src="{{ asset('/assets/players/cv2.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="image-box video" onclick="openLightbox(this)">
            <span class="video-icon">▶</span>
            <video >
                <source src="{{ asset('/assets/players/yv1.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="image-box video" onclick="openLightbox(this)">
            <span class="video-icon">▶</span>
            <video >
                <source src="{{ asset('/assets/players/yv2.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="image-box video" onclick="openLightbox(this)">
            <span class="video-icon">▶</span>
            <video >
                <source src="{{ asset('/assets/players/yv3.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="image-box video" onclick="openLightbox(this)">
            <span class="video-icon">▶</span>
            <video >
                <source src="{{ asset('/assets/players/yv4.mp4') }}" type="video/mp4">
            </video>
        </div>
         <div class="image-box video" onclick="openLightbox(this)">
            <span class="video-icon">▶</span>
            <video >
                <source src="{{ asset('/assets/players/yv5.mp4') }}" type="video/mp4">
            </video>
        </div>
         <div class="image-box video" onclick="openLightbox(this)">
            <span class="video-icon">▶</span>
            <video >
                <source src="{{ asset('/assets/players/yv6.mp4') }}" type="video/mp4">
            </video>
        </div>
         <div class="image-box video" onclick="openLightbox(this)">
            <span class="video-icon">▶</span>
            <video >
                <source src="{{ asset('/assets/players/yv7.mp4') }}" type="video/mp4">
            </video>
        </div>

    </div>

    <!-- LIGHTBOX -->
    <div class="lightbox" id="lightbox">
        <span class="close" onclick="closeLightbox()">×</span>
        <button class="nav prev" onclick="prevImage()">❮</button>
        <img id="lightbox-img">
        <video id="lightbox-video" controls style="display:none; max-width:90%; max-height:70%;"></video>
        <button class="nav next" onclick="nextImage()">❯</button>
    </div>

    <script>
    let currentVisibleIndex = 0;
    let currentCategory = 'all';
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxVideo = document.getElementById('lightbox-video');

    function filterImages(category) {
        currentCategory = category;
        const images = document.querySelectorAll('.image-box');
        images.forEach(img => {
            if (category === 'all') {
                img.classList.remove('hide');
            } else if (img.classList.contains(category)) {
                img.classList.remove('hide');
            } else {
                img.classList.add('hide');
            }
        });
    }

    function showAll() {
        document.querySelectorAll('.image-box').forEach(img => img.classList.remove('hide'));
    }

    /* LIGHTBOX */
    function openLightbox(element) {
        // Get all visible image boxes
        const allVisibleBoxes = Array.from(document.querySelectorAll('.image-box:not(.hide)'));
        
        // Find the index of the clicked element among visible items
        const clickedBox = element.closest('.image-box');
        currentVisibleIndex = allVisibleBoxes.indexOf(clickedBox);
        
        document.getElementById("lightbox").style.display = "flex";
        showMedia();
    }

    function showMedia() {
        // Get all visible media items (images and videos)
        const allVisibleBoxes = Array.from(document.querySelectorAll('.image-box:not(.hide)'));
        let currentMedia = null;
        let currentMediaIndex = 0;
        
        // Find the media at currentVisibleIndex
        for (let box of allVisibleBoxes) {
            const img = box.querySelector('img');
            const video = box.querySelector('video');
            
            if (img) {
                if (currentMediaIndex === currentVisibleIndex) {
                    currentMedia = img;
                    break;
                }
                currentMediaIndex++;
            }
            if (video) {
                if (currentMediaIndex === currentVisibleIndex) {
                    currentMedia = video;
                    break;
                }
                currentMediaIndex++;
            }
        }
        
        if (currentMedia && currentMedia.tagName === 'VIDEO') {
            lightboxImg.style.display = 'none';
            lightboxVideo.style.display = 'block';
            lightboxVideo.src = currentMedia.querySelector('source').src;
            lightboxVideo.load();
            lightboxVideo.play();
        } else if (currentMedia) {
            lightboxVideo.pause();
            lightboxVideo.style.display = 'none';
            lightboxImg.style.display = 'block';
            lightboxImg.src = currentMedia.src;
        }
    }

    function closeLightbox() {
        lightboxVideo.pause();
        document.getElementById("lightbox").style.display = "none";
    }

    function nextImage() {
        const allVisibleBoxes = Array.from(document.querySelectorAll('.image-box:not(.hide)'));
        let totalMedia = 0;
        allVisibleBoxes.forEach(box => {
            if (box.querySelector('img') || box.querySelector('video')) {
                totalMedia++;
            }
        });
        
        currentVisibleIndex++;
        if (currentVisibleIndex >= totalMedia) currentVisibleIndex = 0;
        showMedia();
    }

    function prevImage() {
        const allVisibleBoxes = Array.from(document.querySelectorAll('.image-box:not(.hide)'));
        let totalMedia = 0;
        allVisibleBoxes.forEach(box => {
            if (box.querySelector('img') || box.querySelector('video')) {
                totalMedia++;
            }
        });
        
        currentVisibleIndex--;
        if (currentVisibleIndex < 0) currentVisibleIndex = totalMedia - 1;
        showMedia();
    }
    
    // Close lightbox when clicking outside the image/video
    document.getElementById('lightbox').addEventListener('click', function(e) {
        if (e.target === this) {
            closeLightbox();
        }
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (document.getElementById("lightbox").style.display === "flex") {
            if (e.key === 'ArrowLeft') prevImage();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'Escape') closeLightbox();
        }
    });
    </script>
            <!-- closeLightbox();
        }
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (document.getElementById("lightbox").style.display === "flex") {
            if (e.key === 'ArrowLeft') prevImage();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'Escape') closeLightbox();
        }
    });
    </script> -->

</body>

</html>