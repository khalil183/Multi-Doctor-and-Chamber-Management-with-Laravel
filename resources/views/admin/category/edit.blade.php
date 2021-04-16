@extends('admin.layout')
@section('admin-content')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Category Form </h3>
                          <a href="{{ route('admin.category.update',$category->id) }}" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add Cateogry</a>
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
                            <form action="{{ route('admin.category.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Category Name</label>
                                    <input name="name" type="text" class="form-control" value="{{ $category->name }}">
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </section><!-- /.content -->
              </div><!-- /.content-wrapper -->
@endsection
