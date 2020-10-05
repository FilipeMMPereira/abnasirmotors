@php
    $i=0;
@endphp
@extends('layout.master')

@section('title','Abnasir Motors, Lda. | Japan Used Cars | Import Vehicles from Japan')

@section('content')
<section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="hero-caption_one">
            <span class="hero_top">we don't sell cars</span>
            <h1 class="digital-title">we sell dreams!</h1>
            <a class="btn hero_btn" href="sendemail.html">contact us now!</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>


{{-- carros em stock --}}
<section class="car_photos cushycms mt-5">
    <div class="container">
      <h5 class="in_stock_cars_title">in stock cars</h5>
      <div class="sub_section">
      </div>
    </div>
  </section>
    {{-- Lista de carros --}}
    @foreach($provinces as $province)
        @if($province->province!='Arriving Soon')

                <section class="car_photos cushycms">
                    <div class="container">
                        <div class="sub_section">
                            <div class="row">
                                
                                @foreach ($province->cars as $car)
                                        @if($i++<8)
                                            <div class="col-md-3 mt-2 mb-2">
                                                <div class="card" style="width: 18rem;">
                                                <a href="{{route('inicio.car',['car'=>$car->brand,'id'=>$car->id])}}"> <img src="{{asset('storage/car/'.$car->image)}}"
                                                    class="card-img-top" alt="Nissan Juke"></a>
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$car->brand}}</h5>
                                                    <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <i class="fas fa-road"></i> {{number_format($car->mileage)}} km
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <i class="fas fa-thumbtack"></i> {{$province->province}}
                                                    </div>
                                                    </div>
                                                    <a href="{{route('inicio.car',['car'=>$car->brand,'id'=>$car->id])}}" class="btn btn-primary mt-3">view details</a>
                                                </div>
                                                </div>
                                            </div>
                                        @else
                                            @php
                                                break;
                                            @endphp
                                        @endif
                                @endforeach

                    
                    
                            </div>
                    
                        </div>
                    </div>
                </section>
                @php
                    $i=0;
                @endphp
            
        @endif
    @endforeach
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="{{asset('frontend/bootstrap/js/bootstrap.min.js')}}" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/fontawesome/js/fontawesome.js')}}"></script>
    <script src="{{asset('frontend/fontawesome/js/brands.js')}}"></script>
    <script src="{{asset('frontend/fontawesome/js/solid.js')}}"></script>
@endpush