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
                          <h3 class="box-title">District Form </h3>
                          <a href="{{ route('admin.district.index') }}" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i> All District</a>
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
                            <form action="{{ route('admin.district.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Division Name</label>
                                    <select name="division_id" id="" class="form-control">
                                        <option value="">Select Division</option>
                                        @foreach ($divisions as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">District Name</label>
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
