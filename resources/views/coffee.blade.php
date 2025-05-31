<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- Meta Character Set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Coffee</title>

    <!-- Google Fonts -->
    {{--
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap"
        rel="stylesheet"> --}}
    <!-- Font Awesome for Star Ratings -->
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    --}}
    <!-- CSS Files -->
    @vite(['resources/css/app.css',
    'resources/js/app.js',
    'resources/css/linearicons.css',
    'resources/css/bootstrap.css',
    'resources/css/magnific-popup.css',
    'resources/css/nice-select.css',
    'resources/css/main.css',
    'resources/js/hoverIntent.js',
    'resources/js/main.js'])

    <!-- Card-specific CSS -->
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .card-design h2 {
            padding: 20px;
            color: #fff;
            font-size: 2.5rem;
            text-align: center;
        }

        /* Main container - allows wrapping */
        .card-container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            /* Cards wrap to next line if needed */
            justify-content: center;
            /* Centers cards horizontally */
            gap: 30px;
            /* Spacing between cards */
            padding: 20px;
        }

        /* Individual card container - fixed size */
        .card-container .container {
            flex: 0 0 auto;
            /* Prevents growing/shrinking */
            width: 360px;
            /* Fixed width */
        }

        /* Card styling */
        .card-container .container .card {
            position: relative;
            width: 100%;
            /* Takes full width of its container (320px) */
            height: 440px;
            box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
                inset -5px -5px 15px rgba(255, 255, 255, 0.1),
                5px 5px 15px rgba(0, 0, 0, 0.3),
                -5px -5px 15px rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            transition: 0.5s;
        }

        /* Image styling */
        .card-container .container img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .card-container .container .card .box {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #454546;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: 0.5s;
        }

        .card-container .container .card .box .content {
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card-container .container .card .box .content h3 {
            font-size: 1.8rem;
            color: #fff;
            z-index: 1;
            transition: 0.5s;
            margin-bottom: 15px;
            text-align: left;
            padding-left: 10px;
        }

        .card-container .container .card .box .content p {
            padding-left: 10px;
            text-align: start;
            font-size: 1rem;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.9);
            z-index: 1;
            transition: 0.5s;
            flex-grow: 1;
        }

        .card-container .container .card .box .content a {
            position: relative;
            display: inline-block;
            padding: 8px 20px;
            background: #2196f3;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            margin: 10px 5px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
        }

        .card-container .container .card .box .content a:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
            background: #fff;
            color: #000;
        }

        .card-container .container .card .box .content .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            overflow: auto;
        }

        .card-container .container .card .box .content .modal .dailog-content {
            background: #fff;
            margin: 5% auto;
            padding: 20px;
            border-radius: 8px;
            width: 700px;
            max-width: 90%;
            position: relative;
        }

        .card-container .container .card .box .content .modal .dailog-content .dailog-span {
            position: absolute;
            top: 10px;
            right: 15px;
            cursor: pointer;
            font-size: 20px;
        }

        .card-container .container .card .box .content .modal .dailog-content h4 {
            color: #000;
            font-size: 1.3rem;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .card-container .container .card .box .content .modal .dailog-content h3 {
            font-size: 1.2rem;
            color: #000;
            margin: 10px 0 5px;
        }

        .card-container .container .card .box .content .modal .dailog-content p {
            color: #000;
            padding-bottom: 10px;
            text-align: left;
        }

        .rating {
            display: flex;
            justify-content: center;
            margin: 10px 0;
            padding: 5px;
        }

        .rating .fa-star {
            font-size: 20px;
            color: #ccc;
            margin: 0 2px;
            cursor: pointer;
            transition: color 0.2s;
        }

        .rating .fa-star.checked {
            color: #ff9800;
        }

        .rating .fa-star:hover {
            color: #ffb84d;
        }

        .comment-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
        }

        .submit-comment-btn {
            background-color: #2196f3;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .comments-container p {
            color: #000;
            margin: 5px 0;
        }

        .comments-container .font-medium {
            color: #000;
            font-weight: 500;
        }

        .text-title {
            color: #B68834;
        }

        /* Coffee Modal Design */
        .coffee-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
        }

        .modal-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
        }

        .modal-container {
            position: relative;
            width: 85%;
            max-width: 900px;
            max-height: 90vh;
            margin: 5vh auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: modalFadeIn 0.3s ease-out;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            cursor: pointer;
            z-index: 10;
        }

        .close-btn svg {
            fill: #6F4E37;
            transition: transform 0.2s;
        }

        .close-btn:hover svg {
            transform: rotate(90deg);
        }

        .modal-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            height: 100%;
        }

        .modal-image {
            position: relative;
            background: #f5f5f5;
        }

        .coffee-hero {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .price-tag {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #6F4E37;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 1.1rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .modal-content {
            padding: 30px;
            overflow-y: auto;
            max-height: 80vh;
        }

        .coffee-header {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .coffee-header h2 {
            color: #333;
            margin: 0 0 10px 0;
            font-size: 1.8rem;
        }

        .origin-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: #f0f0f0;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: #555;
        }

        .origin-badge svg {
            fill: #6F4E37;
        }

        .specs-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 25px;
        }

        .spec-item {
            margin-bottom: 15px;
        }

        .spec-item.full-width {
            grid-column: span 2;
        }

        .spec-label {
            display: block;
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .spec-value {
            font-weight: 500;
            color: #333;
            font-size: 1.1rem;
        }

        .roast-indicator {
            display: flex;
            gap: 5px;
        }

        .roast-indicator span {
            width: 20px;
            height: 6px;
            border-radius: 3px;
            background: #ddd;
        }

        .roast-light span:nth-child(1),
        .roast-medium span:nth-child(-n+2),
        .roast-dark span {
            background: #6F4E37;
        }

        .flavor-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .flavor-tag {
            background: #f0e6dd;
            color: #6F4E37;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
        }

        .spec-description {
            color: #555;
            line-height: 1.6;
            margin: 5px 0 0 0;
        }

        .brew-tips {
            background: #f9f5f2;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .brew-tips h3 {
            margin-top: 0;
            color: #6F4E37;
            font-size: 1.1rem;
        }

        .brew-tips ul {
            padding-left: 20px;
            margin-bottom: 0;
        }

        .brew-tips li {
            color: #555;
            margin-bottom: 5px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .modal-grid {
                grid-template-columns: 1fr;
            }

            .modal-image {
                height: 200px;
            }

            .modal-content {
                max-height: 60vh;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    @include('layouts.nav')

    <!-- Start Coffee Menu Area -->
    <section id="coffee-menu">
        <!-- Black Coffee -->
        <div class="card-design">
            <h2>Black Coffee</h2>
            <div class="card-container">
                @foreach ($coffees as $coffee)
                <div class="container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="coffee-item">
                                    <img src="{{ asset($coffee->url_image ?: 'assets/img/mokapot.jpg') }}"
                                        alt="{{ $coffee->name }}" class="profile-img">
                                    <h3 class="text-title" style="color: #B68834">{{ $coffee->name }}</h3>
                                    <div style="max-height: 100px; overflow: hidden;">
                                        <p
                                            style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff;">
                                            {{ $coffee->detail->short_description ?? 'No description available.' }}
                                        </p>
                                    </div>

                                    <a href="#detailsDialog{{ $coffee->id }}" onclick="showDialog({{ $coffee->id }})"
                                        style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #fffefe">Details</a>
                                    <a href="#commentDialog{{ $coffee->id }}"
                                        onclick="showCommentDialog({{ $coffee->id }})"
                                        style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">Comment</a>
                                    <div class="rating"
                                        data-rating="{{ round($coffee->ratings->avg('rating_number') ?? 0) }}"
                                        data-coffee-id="{{ $coffee->id }}">
                                        @for($i = 1; $i <= 5; $i++) <span
                                            class="fa fa-star{{ $i <= ($coffee->ratings->avg('rating_number') ?? 0) ? ' checked' : '' }}"
                                            data-value="{{ $i }}"></span>
                                            @endfor
                                    </div>

                                    {{--
                                    <!-- Modal dialogs remain here (same as your current code) -->
                                    <div id="detailsDialog{{ $coffee->id }}" class="modal">
                                        <!-- ... existing dialog content ... -->
                                    </div> --}}
                                    <!-- ===== PLACE YOUR DETAIL DIALOG HERE ===== -->
                                    {{-- <div id="detailsDialog{{ $coffee->id }}" class="modal">
                                        <div class="dailog-content">
                                            <span onclick="closeDialog({{ $coffee->id }})" class="dailog-span">❌</span>
                                            <h4
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                {{ $coffee->name }} Details</h4>
                                            <h3
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                Name Menu</h3>
                                            <p
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                {{ $coffee->name }}</p>
                                            <h3
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                Type of Coffee</h3>
                                            <p
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                {{ $coffee->detail->root_level ?? 'N/A' }}</p>
                                            <h3
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                Description</h3>
                                            <p
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                {{ $coffee->detail->short_description ?? 'No description available.' }}
                                            </p>
                                            <h3
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                Origin Country</h3>
                                            <p
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                {{ $coffee->detail->origin ?? 'N/A' }}</p>
                                            <h3
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                Processing Method</h3>
                                            <p
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                {{ $coffee->detail->processing_method ?? 'N/A' }}</p>
                                            <h3
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                Roast Level</h3>
                                            <p
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                {{ $coffee->detail->root_level ?? 'N/A' }}</p>
                                            <h3
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                Pricing per Pound</h3>
                                            <p
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                                ${{ number_format((float)($coffee->detail->price ?? 0)) }} per pound</p>
                                        </div>
                                    </div> --}}


                                    <!-- ===== PLACE YOUR COMMENT DIALOG HERE ===== -->
                                    <div id="commentDialog{{ $coffee->id }}" class="modal">
                                        <div class="dailog-content">
                                            <span onclick="closeCommentDialog({{ $coffee->id }})"
                                                class="dailog-span">❌</span>
                                            <h4
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">
                                                Add Your Comment</h4>
                                            <div id="comments-container{{ $coffee->id }}" class="comments-container">
                                                @foreach($coffee->comments as $comment)
                                                <p><span class="font-medium">{{ $comment->user->username ?? 'Guest'
                                                        }}:</span>
                                                    {{ $comment->content }}</p>
                                                @endforeach
                                            </div>
                                            <textarea id="comment-input{{ $coffee->id }}" class="comment-input"
                                                placeholder="Type a comment..." rows="3"></textarea>
                                            <button id="submit-comment-btn{{ $coffee->id }}" class="submit-comment-btn"
                                                onclick="submitComment({{ $coffee->id }})"
                                                style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">
                                                Add Comment
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="detailsDialog{{ $coffee->id }}" class="coffee-modal">
                        <div class="modal-overlay" onclick="closeDialog({{ $coffee->id }})"></div>
                        <div class="modal-container">
                            <button class="close-btn" onclick="closeDialog({{ $coffee->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                                </svg>
                            </button>

                            <div class="modal-grid">
                                <!-- Left Column - Coffee Image -->
                                <div class="modal-image">
                                    <img src="{{ asset($coffee->url_image ?: 'assets/img/mokapot.jpg') }}"
                                        alt="{{ $coffee->name }}" class="coffee-hero">
                                    <div class="price-tag">
                                        ${{ number_format((float)($coffee->detail->price ?? 0), 2) }} / lb
                                    </div>
                                    <p class="spec-description" style="padding: 16px">
                                        {{ $coffee->detail->short_description ?? 'No description available.' }}
                                        @if($coffee->detail->long_description)
                                        {{ $coffee->detail->long_description }}
                                        @endif
                                    </p>
                                </div>

                                <!-- Right Column - Details -->
                                <div class="modal-content">
                                    <div class="coffee-header">
                                        <h2 style="color: #B68834">{{ $coffee->name }}</h2>
                                        <div class="origin-badge">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                            </svg>
                                            {{ $coffee->detail->origin ?? 'Origin not specified' }}
                                        </div>
                                    </div>

                                    <div class="specs-grid">
                                        <div class="spec-item">
                                            <span class="spec-label">Roast Level</span>
                                            <div
                                                class="roast-indicator roast-{{ strtolower(str_replace(' ', '-', $coffee->detail->root_level ?? 'medium')) }}">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>

                                        <div class="spec-item">
                                            <span class="spec-label">Processing</span>
                                            <span class="spec-value">{{ $coffee->detail->processing_method ?? 'N/A'
                                                }}</span>
                                        </div>

                                        <div class="spec-item">
                                            <span class="spec-label">Flavor Notes</span>
                                            <div class="flavor-tags">
                                                @if($coffee->detail->flavor_notes)
                                                @foreach(explode(',', $coffee->detail->flavor_notes) as $flavor)
                                                <span class="flavor-tag">{{ trim($flavor) }}</span>
                                                @endforeach
                                                @else
                                                <span class="flavor-tag">Rich</span>
                                                <span class="flavor-tag">Balanced</span>
                                                @endif
                                            </div>
                                        </div>

                                        {{-- <div class="spec-item full-width">
                                            <span class="spec-label">Description</span>
                                            <p class="spec-description">
                                                {{ $coffee->detail->short_description ?? 'No description available.' }}
                                                @if($coffee->detail->long_description)
                                                {{ $coffee->detail->long_description }}
                                                @endif
                                            </p>
                                        </div> --}}
                                    </div>

                                    <div class="brew-tips">
                                        <h3>Brewing Tips</h3>
                                        <ul>
                                            <li>Use 1-2 tablespoons per 6oz of water</li>
                                            <li>Optimal water temperature: 195°F-205°F</li>
                                            <li>Brew time: 3-4 minutes</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Coffee Menu Area -->

    <!-- Start Footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p
                            style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">
                            Brewing the finest coffee with passion and care for every cup.
                        </p>
                        <p class="footer-text">
                            Copyright ©<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p
                            style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">
                            Stay updated with our latest
                        </p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required
                                    type="email"
                                    style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #000000">
                                {{-- <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                        aria-hidden="true" style="color: #ffffff"></i></button> --}}
                                <img src="{{asset ('public/assets/img/arrow-right.svg')}}" alt="">
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>
                                <div class="info pt-20"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p
                            style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">
                            Let us be social
                        </p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script>
        // Star Rating Functionality
        document.querySelectorAll(".rating").forEach(function (rating, index) {
            const stars = rating.querySelectorAll(".fa-star");
            if (stars.length !== 5) {
                console.warn(`Rating system for card ${index + 1} is missing stars. Found ${stars.length} stars.`);
                return;
            }
            function setRating(r) {
                stars.forEach((star, i) => {
                    star.classList.toggle("checked", i < r);
                });
                rating.setAttribute("data-rating", r);
            }
            stars.forEach((star) => {
                star.addEventListener("click", function () {
                    const value = parseInt(this.getAttribute("data-value"));
                    if (value >= 1 && value <= 5) {
                        setRating(value);
                    } else {
                        console.warn(`Invalid rating value: ${value} for card ${index + 1}`);
                    }
                });
            });
            const initialRating = parseInt(rating.getAttribute("data-rating")) || 1;
            setRating(initialRating);
        });

        // Dialog Functionality
        function showDialog(id) {
            const dialog = document.getElementById(`detailsDialog${id}`);
            if (dialog) {
                dialog.style.display = "block";
            } else {
                console.warn(`Details dialog ${id} not found`);
            }
        }

        function closeDialog(id) {
            const dialog = document.getElementById(`detailsDialog${id}`);
            if (dialog) {
                dialog.style.display = "none";
            } else {
                console.warn(`Details dialog ${id} not found`);
            }
        }

        function showCommentDialog(id) {
            const dialog = document.getElementById(`commentDialog${id}`);
            if (dialog) {
                dialog.style.display = "block";
            } else {
                console.warn(`Comment dialog ${id} not found`);
            }
        }

        function closeCommentDialog(id) {
            const dialog = document.getElementById(`commentDialog${id}`);
            if (dialog) {
                dialog.style.display = "none";
            } else {
                console.warn(`Comment dialog ${id} not found`);
            }
        }

        // Close modals when clicking outside
        window.addEventListener("click", (event) => {
            for (let i = 1; i <= 16; i++) {
                const detailsDialog = document.getElementById(`detailsDialog${i}`);
                const commentDialog = document.getElementById(`commentDialog${i}`);
                if (event.target === detailsDialog) {
                    detailsDialog.style.display = "none";
                }
                if (event.target === commentDialog) {
                    commentDialog.style.display = "none";
                }
            }
        });

        // Comment Section Functionality
        for (let i = 1; i <= 16; i++) {
            const commentInput = document.getElementById(`comment-input${i}`);
            const submitCommentBtn = document.getElementById(`submit-comment-btn${i}`);
            const commentsContainer = document.getElementById(`comments-container${i}`);

            if (commentInput && submitCommentBtn && commentsContainer) {
                function addComment() {
                    const commentText = commentInput.value.trim();
                    if (commentText) {
                        const newComment = document.createElement("p");
                        newComment.innerHTML = `<span class="font-medium">You:</span> ${commentText}`;
                        commentsContainer.prepend(newComment);
                        commentInput.value = "";
                    } else {
                        console.log(`Comment cannot be empty for card ${i}`);
                    }
                }

                submitCommentBtn.addEventListener("click", addComment);
                commentInput.addEventListener("keydown", (event) => {
                    if (event.key === "Enter" && !event.shiftKey) {
                        event.preventDefault();
                        addComment();
                    }
                });
            } else {
                console.warn(`Comment elements missing for card ${i}`);
            }
        }

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>