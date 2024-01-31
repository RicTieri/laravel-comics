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
'title'=> 'shop',
'link'=> '#',
'isActive'=> false
],
]
?>
<header>
  <nav class="navbar bg-body-tertiary navbar-expand-lg">
    <div class="container justify-content-between">
      <a class="navbar-brand" href="#">
        <img src="{{Vite::asset('resources/assets/img/dc-logo.png')}}" alt="Dc logo">
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @foreach ($links as $link)
          <li class="nav-item text-uppercase fw-bolder">
            <a class="nav-link active" aria-current="page" href="#">{{$link['title']}}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </nav>

</header>
