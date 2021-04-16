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
                          <h3 class="box-title">Category Table </h3>
                          <a href="{{ route('admin.category.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add Cateogry</a>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('admin.category.edit',$item->id) }}"><i class="fa fa-edit    "></i></a>
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
