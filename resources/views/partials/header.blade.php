<?php 

$links = [
    [
    'title'=> 'characters',
    'link'=> '#',
    'isActive'=> false
    ],
    [
    'title'=> 'comics',
    'link'=> '#',
    'isActive'=> true
    ],
    [
    'title'=> 'movies',
    'link'=> '#',
    'isActive'=> false
    ],
    [
    'title'=> 'tv',
    'link'=> '#',
    'isActive'=> false
    ],
    [
    'title'=> 'games',
    'link'=> '#',
    'isActive'=> false
    ],
    [
    'title'=> 'collectibles',
    'link'=> '#',
    'isActive'=> false
    ],
    [
    'title'=> 'videos',
    'link'=> '#',
    'isActive'=> false
    ],
    [
    'title'=> 'fans',
    'link'=> '#',
    'isActive'=> false
    ],
    [
    'title'=> 'news',
    'link'=> '#',
    'isActive'=> false
    ],
    [
        'title' => 'shop',
        'link' => '#',
        'isActive' => false,
        'dropdown' => [
            ['title' => 'shop1', 'link' => '#'],
            ['title' => 'shop2', 'link' => '#'],
            ['title' => 'shop3', 'link' => '#'],
        ],
    ],
]
?>

<header>
  <nav class="navbar container navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand me-5 pe-5" href="#">
        <img src="{{Vite::asset('resources/assets/img/dc-logo.png')}}" alt="Dc logo">
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @foreach ($links as $link)
          @if(!isset($link['dropdown']))
          <li class="nav-item text-uppercase fw-bolder">
            <a class="nav-link active" aria-current="page" href="">{{$link['title']}}</a>
          </li>
          @else
            <li class="nav-item text-uppercase fw-bolder dropdown">
             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{$link['title']}}</a>
             <ul class="dropdown-menu">
               @foreach ($link['dropdown'] as $dropdown)
               <li><a class="dropdown-item" href="{{$dropdown['link']}}">{{$dropdown['title']}}</a></li>
               @endforeach
              </ul>
            </li>
          @endif
          @endforeach
        </ul>
      </div>
      <form class="d-flex me-0" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

