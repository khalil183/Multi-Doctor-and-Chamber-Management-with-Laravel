@extends('doctor.layout')
@section('doctor-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-xs-8">
            <div class="box">
            <div class="box-header">
                <h3 class="box-title">Chamber Form</h3>
                <a href="{{ route('doctor.chamber.index') }}" class="btn btn-primary pull-right"><i class="fa fa-eye" aria-hidden="true"></i>All Chamber</a>
            </div><!-- /.box-header -->
            <div class="box-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif
                <form action="{{ route('doctor.chamber.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Division</label>
                        <select name="division_id" id="division_id" class="form-control" onchange="loadDistrict()">
                            <option value="">Select Division</option>
                            @foreach ($divisions as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">District</label>
                        <select name="district_id" id="district_id" class="form-control">
                            <option value="">Select District</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="">Category Name</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Chamber Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <input type="text" name="location" class="form-control" placeholder="location">
                    </div>



                    <div class="form-group">
                        <label for="">Google Map Code</label>
                        <input type="text" name="map_code" class="form-control" placeholder="Map Code ">
                    </div>
                    <div class="form-group">
                        <label for="">Start Time</label>
                        <input type="text" name="start_time" class="form-control" placeholder="2.00 PM">
                    </div>
                    <div class="form-group">
                        <label for="">End Time</label>
                        <input type="text" name="end_time" class="form-control" placeholder="7.00 PM">
                    </div>

                    <div class="form-group">
                        <label for="">Day Of Week</label>
                        <input type="text" name="day" class="form-control" placeholder="Saturday To Monday">
                    </div>

                    <button type="submit" class="btn btn-success">Add Chamber</button>
                </form>
            </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
 </div><!-- /.content-wrapper -->

 <script>
     function loadDistrict(){
         let division_id=$("#division_id").val()
         let query_string="?division_id="+division_id;
         let action="{{ route('doctor.chamber.create') }}";
         $.get(action+query_string,function(response){
             $("#district_id").html(response)
         })


     }
 </script>
@endsection
