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
                          <h3 class="box-title">Division Form </h3>
                          <a href="{{ route('admin.division.index') }}" class="btn btn-primary pull-right"><i class="fa fa-eye" aria-hidden="true"></i> All Division</a>
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
                            <form action="{{ route('admin.division.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Division Name</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Add New</button>
                            </form>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </section><!-- /.content -->
              </div><!-- /.content-wrapper -->
@endsection
