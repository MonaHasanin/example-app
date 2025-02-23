<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave Cafe HTML Template by Tooplate</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="{{ asset('css/tooplate-wave-cafe.css') }}">
    <!--
Tooplate 2121 Wave Cafe
https://www.tooplate.com/view/2121-wave-cafe
-->
</head>

<body>
    <div class="tm-container">
        <div class="tm-row">
            <!-- Site Header -->
            <div class="tm-left">
                <div class="tm-left-inner">
                    <div class="tm-site-header">
                        <i class="fas fa-coffee fa-3x tm-site-logo"></i>
                        <h1 class="tm-site-name">Wave Cafe</h1>
                    </div>
                    <nav class="tm-site-nav">
                        <ul class="tm-site-nav-ul">
                            <li class="tm-page-nav-item">
                                <a href="#drink" class="tm-page-link active">
                                    <i class="fas fa-mug-hot tm-page-link-icon"></i>
                                    <span>Drink Menu</span>
                                </a>
                            </li>
                            <li class="tm-page-nav-item">
                                <a href="#about" class="tm-page-link">
                                    <i class="fas fa-users tm-page-link-icon"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="tm-page-nav-item">
                                <a href="#special" class="tm-page-link">
                                    <i class="fas fa-glass-martini tm-page-link-icon"></i>
                                    <span>Special Items</span>
                                </a>
                            </li>
                            <li class="tm-page-nav-item">
                                <a href="#contact" class="tm-page-link">
                                    <i class="fas fa-comments tm-page-link-icon"></i>
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="tm-right">
                <main class="tm-main">
                    <div id="drink" class="tm-page-content">
                        <!-- Drink Menu Page -->
                        <nav class="tm-black-bg tm-drinks-nav">
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="#{{$category->id}}" class="tm-tab-link active" data-id="{{$category->id}}"">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                        @foreach ($categories as $category)
                            <div id="{{ $category->id }}" class="tm-tab-content">
                                <div class="tm-list">
                                    @foreach ($category->beverages as $beverage)
                                        <div class="tm-list-item">
                                            <img src="{{ 'assets/images/' . $beverage->image }}" alt="Image"
                                                class="tm-list-item-img">
                                            <div class="tm-black-bg tm-list-item-text">
                                                <h3 class="tm-list-item-name">{{ $beverage->title }}<span
                                                        class="tm-list-item-price">${{ $beverage->price }}</span></h3>
                                                <p class="tm-list-item-description">{{ $beverage->content }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        <!-- end Drink Menu Page -->
                    </div>

                    <!-- About Us Page -->
                    <div id="about" class="tm-page-content">
                        <div class="tm-black-bg tm-mb-20 tm-about-box-1">
                            <h2 class="tm-text-primary tm-about-header">About Wave Cafe</h2>
                            <div class="tm-list-item tm-list-item-2">
                                <img src="{{ asset('img/about-1.png') }}" alt="Image"
                                    class="tm-list-item-img tm-list-item-img-big">
                                <div class="tm-list-item-text-2">
                                    <p>Wave Cafe is a one-page video background HTML CSS template from Tooplate. You can
                                        use
                                        this
                                        for your business websites.</p>
                                    <p>You can also use this for your client websites which you get paid for your
                                        website
                                        services.
                                        Please tell your friends about us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tm-black-bg tm-mb-20 tm-about-box-2">
                            <div class="tm-list-item tm-list-item-2">
                                <div class="tm-list-item-text-2">
                                    <h2 class="tm-text-primary">How we began</h2>
                                    <p>If you wish to support us, please contact Tooplate. Thank you. Duis bibendum erat
                                        nec
                                        ipsum
                                        consectetur sodales.</p>
                                </div>
                                <img src="{{ asset('img/about-2.png') }}" alt="Image"
                                    class="tm-list-item-img tm-list-item-img-big tm-img-right">
                            </div>
                            <p>Donec non urna elit. Quisque ut magna in dui mattis iaculis eu finibus metus. Suspendisse
                                vel mi
                                a
                                lacus finibus vehicula vel ut diam. Nam pellentesque, mi quis ullamcorper.</p>
                        </div>
                    </div>
                    <!-- end About Us Page -->

                    <!-- Special Items Page -->
                    <div id="special" class="tm-tab-content">
                        <div class="tm-list">
                            @foreach ($beveragesSpecial as $beverage)
                                <div class="tm-list-item">
                                    <img src="{{ 'assets/images/' . $beverage->image }}" alt="Image"
                                        class="tm-list-item-img">
                                    <div class="tm-black-bg tm-list-item-text">
                                        <h3 class="tm-list-item-name">{{ $beverage->title }}<span
                                                class="tm-list-item-price">${{ $beverage->price }}</span></h3>
                                        <p class="tm-list-item-description">{{ $beverage->content }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- end Special Items Page -->

                    <!-- Contact Page -->
                    <div id="contact" class="tm-page-content">
                        <div class="tm-black-bg tm-contact-text-container">
                            <h2 class="tm-text-primary">Contact Wave</h2>
                            <p>Wave Cafe Template has a video background. You can use this layout for your websites.
                                Please
                                contact
                                Tooplate's Facebook page. Tell your friends about our website.</p>
                        </div>
                        <div class="tm-black-bg tm-contact-form-container tm-align-right">
                            <form action="{{ route('contact') }}" method="POST" id="contact-form">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-danger">{{ session('success') }}</div>
                                @endif
                                <div class="tm-form-group">
                                    <input type="text" name="name" class="tm-form-control" placeholder="Name"
                                        required />
                                </div>
                                <div class="tm-form-group">
                                    <input type="email" name="email" class="tm-form-control" placeholder="Email"
                                        required />
                                </div>
                                <div class="tm-form-group tm-mb-30">
                                    <textarea rows="6" name="message" class="tm-form-control" placeholder="Message" required></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="tm-btn-primary tm-align-right">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- end Contact Page -->
                </main>
            </div>
        </div>
        <footer class="tm-site-footer">
            <p class="tm-black-bg tm-footer-text">Copyright 2020 Wave Cafe

                | Design: <a href="https://www.tooplate.com" class="tm-footer-link" rel="sponsored"
                    target="_parent">Tooplate</a> and laravel by &copy; Mona Galal</p>
        </footer>
    </div>

    <!-- Background video -->
    <div class="tm-video-wrapper">
        <i id="tm-video-control-button" class="fas fa-pause"></i>
        <video autoplay muted loop id="tm-video">
            <source src="{{ asset('video/wave-cafe-video-bg.mp4') }}" type="video/mp4">
        </video>
    </div>

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script>
        function setVideoSize() {
            const vidWidth = 1920;
            const vidHeight = 1080;
            const windowWidth = window.innerWidth;
            const windowHeight = window.innerHeight;
            const tempVidWidth = windowHeight * vidWidth / vidHeight;
            const tempVidHeight = windowWidth * vidHeight / vidWidth;
            const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
            const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
            const tmVideo = $('#tm-video');

            tmVideo.css('width', newVidWidth);
            tmVideo.css('height', newVidHeight);
        }

        function openTab(evt, id) {
            $('.tm-tab-content').hide();
            $('#' + id).show();
            $('.tm-tab-link').removeClass('active');
            $(evt.currentTarget).addClass('active');
        }

        function initPage() {
            let pageId = location.hash;

            if (pageId) {
                highlightMenu($(`.tm-page-link[href^="${pageId}"]`));
                showPage($(pageId));
            } else {
                pageId = $('.tm-page-link.active').attr('href');
                showPage($(pageId));
            }
        }

        function highlightMenu(menuItem) {
            $('.tm-page-link').removeClass('active');
            menuItem.addClass('active');
        }

        function showPage(page) {
            $('.tm-page-content').hide();
            page.show();
        }

        $(document).ready(function() {

            /***************** Pages *****************/

            initPage();

            $('.tm-page-link').click(function(event) {

                if (window.innerWidth > 991) {
                    event.preventDefault();
                }

                highlightMenu($(event.currentTarget));
                showPage($(event.currentTarget.hash));
            });


            /***************** Tabs *******************/

            $('.tm-tab-link').on('click', e => {
                e.preventDefault();
                openTab(e, $(e.target).data('id'));
            });

            $('.tm-tab-link.active').click(); // Open default tab


            /************** Video background *********/

            setVideoSize();

            // Set video background size based on window size
            let timeout;
            window.onresize = function() {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

            // Play/Pause button for video background
            const btn = $("#tm-video-control-button");

            btn.on("click", function(e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
        });
    </script>
</body>

</html>
