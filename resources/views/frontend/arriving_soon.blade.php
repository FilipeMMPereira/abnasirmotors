@extends('layout.master')
@section('title','ARRIVING SOON')

@section('content')


        <section class="car_photos cushycms">
            <div class="container">
                <h2 class="card-title_cars_section_name mb-3 mt-5 font-weight-bold">ARRIVING SOON
                </h2>
                <div class="sub_section">
                    
                        
                        @foreach ($provinces as $province)
                            <div class="row"> 
                            
                                @foreach ($province->cars()->paginate(20) as $car)
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
                                                <i class="fas fa-thumbtack"></i> {{$car->province->province}}
                                            </div>
                                            </div>
                                            <a href="{{route('inicio.car',['car'=>$car->brand,'id'=>$car->id])}}" class="btn btn-primary mt-3">view details</a>
                                        </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row justify-content-end mt-4">

                                {{$province->cars()->paginate(20)->links()}}
                            </div>
                        @endforeach
                        
            
            
                    

            
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