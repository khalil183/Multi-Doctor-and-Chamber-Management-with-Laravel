@extends('admin.layout')
@section('admin-content')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Doctor Table </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>email</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td><img width="80px" src="{{ url($item->image) }}" alt=""></td>
                                    <td>
                                        @if ($item->status==1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                        <span class="badge badge-danger">In-Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('admin.category.edit',$item->id) }}"><i class="fa fa-edit    "></i></a>
                                        @if ($item->status==1)
                                        <a href="{{ route('admin.doctor.inactive',$item->id) }}" class="btn btn-danger"> <i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                        @else
                                        <a href="{{ route('admin.doctor.active',$item->id) }}" class="btn btn-success"> <i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                        @endif

                                    </td>
                                  </tr>
                                @endforeach


                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </section><!-- /.content -->
              </div><!-- /.content-wrapper -->
@endsection
