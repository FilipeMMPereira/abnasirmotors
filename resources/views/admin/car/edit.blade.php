@extends('layouts.admin.master')
@section('title','Post')

@push('css')

@endpush

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Car {{$car->brand}}</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('car.update',$car->id)}}" method="post" enctype="multipart/form-data">
                @csrf
              @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="brand">Brand</label>

                                <input value="{{old('brand')??$car->brand}}" type="text" class="form-control" id="brand" placeholder="Titulo" name="brand" style="background-image:url('');">
                                <p class="text-danger">{{$errors->first('brand')}}</p>
                            </div>
                            <div class="form-group">
                              <label for="">Province</label>
                              <select name="province_id" id="" class="form-control">
                                @foreach ($provinces as $province)
                                <option value="{{$province->id}}" {{$province->id==$car->province_id?'selected':''}}>{{$province->province}}</option>
                                @endforeach
                              </select>
                              <p class="text-danger">{{$errors->first('province_id')}}</p>
                            </div>
                            <div class="form-group">
                              <label for="body">Body</label>
                              <input value="{{old('body')??$car->body}}" type="text" class="form-control" id="slug" placeholder="Body" name="body">
                              <p class="text-danger">{{$errors->first('body')}}</p>
                            </div>
                            <div class="form-group">
                              <label for="fuel_type">Fuel Type</label>
                              <input value="{{old('fuel_type')?? $car->fuel_type}}" type="text" class="form-control" id="slug" placeholder="Fuel Type" name="fuel_type">
                              <p class="text-danger">{{$errors->first('fuel_type')}}</p>
                            </div>
                            <div class="form-group">
                              <label for="engine">Engine</label>
                              <input value="{{old('engine')??$car->engine}}" step="any" type="number" class="form-control" id="slug" placeholder="Engine" name="engine">
                              <p class="text-danger">{{$errors->first('engine')}}</p>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                              <div class="form-group">
                                <label for="seats">Seats</label>
                                <input value="{{old('seats')??$car->seats}}" type="number" class="form-control" id="slug" placeholder="Seats" name="seats">
                                <p class="text-danger">{{$errors->first('seats')}}</p>
                              </div>
                              <div class="form-group">
                                <label for="date">Year</label>
                                <input value="{{old('date')??$car->date}}" type="number" class="form-control" id="slug" placeholder="Date" name="date">
                                <p class="text-danger">{{$errors->first('date')}}</p>
                              </div>
                              <div class="form-group">
                                <label for="dor">Dor</label>
                                <input value="{{old('dor')??$car->dor}}" type="number" class="form-control" id="slug" placeholder="Dor" name="dor">
                                <p class="text-danger">{{$errors->first('dor')}}</p>
                              </div>
                              <div class="form-group">
                                <label for="mileage">Mileage</label>
                                <input value="{{old('mileage')??$car->mileage}}" step="any" type="number" class="form-control" id="slug" placeholder="Mileage" name="mileage">
                                <p class="text-danger">{{$errors->first('mileage')}}</p>
                              </div>
                              <div class="form-group">
                                <label for="price">Price</label>
                                <input value="{{old('price')??$car->price}}" step="any" type="number" class="form-control" id="slug" placeholder="Price" name="price">
                                <p class="text-danger">{{$errors->first('price')}}</p>
                              </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                  <label for="image">Image</label>
                                  <div class="input-group">
                                  
                                    <input value="{{old('image')}}" type="file" class="custom-file-input" id="image" name="image" onblur="upload()">
                                    <label class="custom-file-label" for="exampleInputFile" id="imagem" >{{$car->image}}</label>
                                    
                                  </div>

                                
                                {{$errors->first('image')}}
                            </div>
                        </div>

                    </div>
                  
                </div>

            
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
    </div>

</section>  
@endsection

@push('script')
<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
{{-- <script src="{{asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('backend/plugins/summernote/summernote-bs4.min.j')}}s"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
    <script>
       //console.log( document.getElementById('imagem'))
        function upload(){
            var img=document.getElementById('image').value
            document.getElementById('imagem').innerHTML=img

        }
        // document.getElementById('imagem').innerHTML=''+imagem
    </script>

    <script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>

    <script>
      $(document).ready(function(){
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })

      })
    </script>

    <script>
       CKEDITOR.replace( 'editor1' );
    </script>
@endpush