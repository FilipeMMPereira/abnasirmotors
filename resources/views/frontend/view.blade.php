@extends('layout.master')

@section('title','car')

@section('content')
<section class="car_details_all section_space justify-content-center cushycms">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <h5 class="card-title_cars_section_name">{{$car->brand}}
                </h5>
                <a href="{{asset('storage/car/'.$car->image)}}" class="mybox"> <img
                        src="{{asset('storage/car/'.$car->image)}}" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    @foreach ($car->images as $image)
                        <div class="col-md-4 mb-3 box_car_detais">
                            <a href="{{asset('storage/car_images/'.$image->image)}}" class="mybox"> <img
                                    src="{{asset('storage/car_images/'.$image->image)}}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="final_price">
                    <span class="price_number">car price: {{number_format($car->price,2,',',',')}} MT</span>
                </div>
                <a href="https://api.whatsapp.com/send?phone=+258843450786&amp;text=Hi%20we%20need%20help%20regarding%20something"
                    target="_blank" class="btn car_detais_whatapp ml-0 mt-3"> contact us today !</a>
            </div>
            <div class="col-md-6">
                <h5 class="card-title_cars_section">car details</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p> <span class="detail_of_car"><i class="fas fa-car-side"></i> body</span>{{$car->body}}
                        </p>
                        <p> <span class="detail_of_car"><i class="fas fa-gas-pump"></i> fuel type</span> {{$car->fuel_type}}
                        </p>
                        <p> <span class="detail_of_car"><i class="fas fa-chair"></i> seats</span> {{$car->seats}}</p>
                        <p> <span class="detail_of_car"><i class="fas fa-location-arrow"></i> city</span> {{$car->province->province}}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p> <span class="detail_of_car"><i class="fas fa-calendar-alt"></i> year</span> {{$car->date}}</p>
                        <p> <span class="detail_of_car"><i class="fas fa-door-closed"></i> door</span> 4</p>

                        <p> <span class="detail_of_car"><i class="fas fa-road"></i> Mileage</span> {{number_format($car->mileage)}} km
                        </p>
                        <p> <span class="detail_of_car"><i class="fas fa-road"></i> Engine</span> {{number_format($car->engine)}} CC
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="{{asset('frontend/bootstrap/js/bootstrap.min.js')}}" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/fontawesome/js/fontawesome.js')}}"></script>
    <script src="{{asset('frontend/fontawesome/js/brands.js')}}"></script>
    <script src="{{asset('frontend/fontawesome/js/solid.js')}}"></script>
@endpush