@php
    use App\Province;
    $city=Province::all();
@endphp
<div class=top-menu>
  <div class="container">
    <div class=row>
      <div class="col-md-12 to_content_right">
        <span class="top_header pr-3"><i class="fab fa-whatsapp"></i> +258 84 345 0786</span>
        <span class="top_header"><i class="fas fa-envelope-square"></i> sales@abnasirmotors.com</span>
      </div>
    </div>
  </div>
</div>
<nav class="navbar fixed-top navbar-expand-md navbar-light" data-toggle="sticky-onscroll">
    <div class="container">
      <a class="navbar-brand" href="{{route('inicio')}}"><img src="{{asset('frontend/img/abnasir_logo.jpg')}}" alt=""></a>
      <button class="navbar-toggler compressed" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{Request::is('/')?'active':''}}" href="{{route('inicio')}}">home</a>
          </li>
          <li class=" nav-item dropdown dropbtn">
            <a class="nav-link {{Request::is('search_stock*')?'active':''}}" href="#">search stock <span class="nav_arrow_down"><i
                  class="fas fa-caret-down"></i></span></a>
            <div class="dropdown-content">
              @foreach ($city as $item)
                @if ($item->slug!='arriving-soon')
                  <a href="{{route('inicio.province',$item->slug)}}" class="active">{{$item->province}}</a>
                @endif
              @endforeach

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('arriving_soon')?'active':''}}" href="{{route('inicio.arriving_soon')}}">arriving soon</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('contact')?'active':''}}" href="{{route('inicio.contact')}}">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>