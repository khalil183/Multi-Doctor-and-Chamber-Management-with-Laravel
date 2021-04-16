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
                <h3 class="box-title">Today's Appoinments</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Serial</th>
                    <th>Date</th>
                    <th>Chamber</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appoinments as $key=> $item)
                    @if ($item->chamber->doctor->id==Auth::guard('doctor')->user()->id)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->serial_number }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->chamber->name }}</td>
                        <td>
                            @if ($item->status==1)
                                <span class="badge badge-success">Approved</span>
                            @else
                            <span class="badge badge-danger">Pending</span>
                            @endif
                        </td>

                        </tr>
                        @endif
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
