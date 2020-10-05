@extends('layouts.admin.master')
@push('css')
    
@endpush

@section('content')
<section class="content ">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{$car->brand}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.car_image.store',$car->id)}}" id="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body ">
                    <div class="row justify-content-center">
                        <div class="col-md-8 ">
                            <div class="form-group mb-3"><label for="image"> Image</label><div class="input-group"><input value="{{old('image')}}" type="file" class="custom-file-input save"  name="image[]" id="img1" onblur="upload(1)"><label class="custom-file-label" for="exampleInputFile" id="imagem1" >Image</label></div> {{$errors->first("image")}} </div>
                            <div class="form-group mb-3"><label for="image"> Image</label><div class="input-group"><input value="{{old('image')}}" type="file" class="custom-file-input save"  name="image[]" id="img2" onblur="upload(2)"><label class="custom-file-label" for="exampleInputFile" id="imagem2" >Image</label></div> {{$errors->first("image")}} </div>
                            <div class="form-group mb-3"><label for="image"> Image</label><div class="input-group"><input value="{{old('image')}}" type="file" class="custom-file-input save"  name="image[]" id="img3" onblur="upload(3)"><label class="custom-file-label" for="exampleInputFile" id="imagem3" >Image</label></div> {{$errors->first("image")}} </div>
                            <div class="form-group mb-3"><label for="image"> Image</label><div class="input-group"><input value="{{old('image')}}" type="file" class="custom-file-input save"  name="image[]" id="img4" onblur="upload(4)"><label class="custom-file-label" for="exampleInputFile" id="imagem4" >Image</label></div> {{$errors->first("image")}} </div>
                            <input type="hidden" name="car_id" value="{{$car->id}}">
                            <button class="btn btn-primary mt-4">Submit</button>
                        </div>
                        
                        </div>
                        
                        <div class="col-md-8 ">

                        </div>

                    </div>
                  
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

     function upload(id){
        
         var img=document.getElementById(`img${id}`).value
         console.log(img)
         document.getElementById('imagem'+id).innerHTML=img

     }
 </script>
@endpush