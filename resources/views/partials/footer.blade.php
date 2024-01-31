<?php
$pageLinks = [
    [
        'title' => 'dc comics',
        'links' => [
            ['name' => 'Characters', 'link' => '#'],
            ['name' => 'Comics', 'link' => '#'],
            ['name' => 'Movies', 'link' => '#'],
            ['name' => 'TV', 'link' => '#'],
            ['name' => 'Games', 'link' => '#'],
            ['name' => 'Videos', 'link' => '#'],
            ['name' => 'News', 'link' => '#'],
        ]
    ],
    [
        'title' => 'shop',
        'links' => [
            ['name' => 'Shop DC', 'link' => '#'],
            ['name' => 'Shop DC Collectibles', 'link' => '#']
        ]
    ]
];

$aboutUs = [
    'title' => 'dc',
    'links' => [
        ['name' => 'Terms Of Use', 'link' => '#'],
        ['name' => 'Privacy policy (New)', 'link' => '#'],
        ['name' => 'Ad Choices', 'link' => '#'],
        ['name' => 'Advertising', 'link' => '#'],
        ['name' => 'Jobs', 'link' => '#'],
        ['name' => 'Subscriptions', 'link' => '#'],
        ['name' => 'Talent Workshops', 'link' => '#'],
        ['name' => 'CPSC Certificates', 'link' => '#'],
        ['name' => 'Ratings', 'link' => '#'],
        ['name' => 'Shop Help', 'link' => '#'],
        ['name' => 'Contact Us', 'link' => '#'],
    ]
];

$referralLink = [
    'title' => 'sites',
    'links' => [
        ['name' => 'DC', 'link' => '#'],
        ['name' => 'MAD Magazine', 'link' => '#'],
        ['name' => 'DC Kids', 'link' => '#'],
        ['name' => 'DC Universe', 'link' => '#'],
        ['name' => 'DC Power Visa', 'link' => '#'],
    ]
];

$socialsLink = [
    ['name' => 'facebook', 'path' => 'footer-facebook.png', 'link' => '#'],
    ['name' => 'twitter', 'path' => 'footer-twitter.png', 'link' => '#'],
    ['name' => 'youtube', 'path' => 'footer-youtube.png', 'link' => '#'],
    ['name' => 'pinterest', 'path' => 'footer-pinterest.png', 'link' => '#'],
    ['name' => 'periscope', 'path' => 'footer-periscope.png', 'link' => '#'],
];
?>

<footer>
    <section class="upper-footer">
        <div class="wrapper">
            <nav>
                <div>
                    @foreach ($pageLinks as $linkGroup)
                        <ul>
                            <h2 class="text-uppercase text-white">{{ $linkGroup['title'] }}</h2>
                            @foreach ($linkGroup['links'] as $link)
                                <li>
                                    <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
                <ul>
                    <h2>{{ $aboutUs['title'] }}</h2>
                    @foreach ($aboutUs['links'] as $link)
                        <li>
                            <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <ul>
                    <h2>{{ $referralLink['title'] }}</h2>
                    @foreach ($referralLink['links'] as $link)
                        <li>
                            <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <div class="bg-logo">
            </div>
        </div>
    </section>
    <section class="down-footer">
        <div class="container d-flex justify-content-between py-5">
            <button class="text-uppercase border border-1 border-primary text-white fw-bolder px-4">sign-up now!</button>
            <nav class="navbar">
                <button class="text-uppercase my-accent border-0 fw-bolder px-4">follow us</button>
                <ul class="navbar-nav flex-row">
                    @foreach ($socialsLink as $social)
                        <li class="nav-item mx-1">
                            <a href="{{ $social['link'] }}">
                                <img src="{{ Vite::asset('resources/assets/img/'.$social['path']) }}" alt="{{ $social['name'] }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </section>
</footer>

