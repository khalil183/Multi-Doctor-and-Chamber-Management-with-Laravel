@extends('doctor.layout')
@section('doctor-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
                <h3 class="box-title">Assistant List</h3>
                <a href="{{ route('doctor.assistant.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i>Add Assistant</a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assistants as $key=> $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>

                            <td>
                                @if ($item->status==1)
                                    <span class="badge badge-success">Active</span>
                                @else
                                <span class="badge badge-danger">In-Active</span>
                                @endif
                            </td>
                            <td>
                                <a href="" class="btn btn-success disabled"><i class="fa fa-edit "></i></a>
                                <a href="" class="btn btn-primary disabled"><i class="fa fa-eye "></i></a>


                                @if ($item->status==1)
                                        <a href="{{ route('doctor.inactive.assistant',$item->id) }}" class="btn btn-danger"> <i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                        @else
                                        <a href="{{ route('doctor.active.assistant',$item->id) }}" class="btn btn-success"> <i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                        @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
 </div><!-- /.content-wrapper -->
@endsection
