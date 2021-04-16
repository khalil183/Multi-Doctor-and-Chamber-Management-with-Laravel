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
                          <h3 class="box-title">District Table </h3>
                          <a href="{{ route('admin.district.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add District</a>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>District</th>
                                <th>Division</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($districts as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->division->name }}</td>
                                    <td>
                                        <a class="btn btn-primary disabled" href="{{ route('admin.category.edit',$item->id) }}"><i class="fa fa-edit    "></i></a>
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
