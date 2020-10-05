@php
    $i=1;
@endphp
@extends('layouts.admin.master')
@section('title','')
@push('css')
    
@endpush

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Table</h3>
            </div>
                

          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="card-title">Car {{$car->brand}}</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                  
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Image Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($car->images as $image)
                        <tr>
                            <td>{{$i++}}</td>
                            <td><img src="{{asset('storage/car_images/'.$image->image)}}" alt="" class="img-thumbnail" style="width:20%; height:10%;"></td>
                            <td>{{$image->image}}</td>
                            
                            <td><a href="{{route('admin.car_image.edit',[$car->id,$image->id])}}" class="btn btn-warning pl-4 pr-4" ><i class="fa-lg fas fa-edit" ></a></td>
                            
                            
                            <td>
                              <form id="delete-form-{{$image->id}}" action="{{route('admin.car_image.destroy',[$car->id,$image->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger pr-4 pl-4" onclick="if(confirm('Do you want to delete {{$image->image}}?')){
                                  event.preventDefault()
                                  document.getElementById('delete-form-{{$image->id}}').submit();
                                }else{
                                  event.preventDefault()
                                }"><i class="fa-lg fas fa-trash-alt" ></i></button>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
              </table>
              <div class="row justify-content-end">
                <div class="col-12 mt-2">
                    
                      
                    
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
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
@endpush