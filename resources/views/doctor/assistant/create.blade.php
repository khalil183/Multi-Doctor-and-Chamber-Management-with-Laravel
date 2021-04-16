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
                <h3 class="box-title">Assistant Form</h3>
                <a href="{{ route('doctor.assistant.index') }}" class="btn btn-primary pull-right"><i class="fa fa-eye" aria-hidden="true"></i>All Assistant</a>
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
                <form action="{{ route('doctor.assistant.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Chamber</label>
                        <select name="chamber_id" id="" class="form-control">
                            <option value="">Select Chamber</option>
                            @foreach ($chambers as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="name">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="phone">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="address">
                    </div>
                    <button type="submit" class="btn btn-success">Add Assistant</button>
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
