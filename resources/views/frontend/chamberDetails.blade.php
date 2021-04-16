@extends('frontend.layout')
@section('frontend-section')

	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Chamber Details</h2>
					<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

        <div class="container">
			<div class="row">
                <div class="col-md-5">
                    {!! $chamber->map_code !!}
                </div>
                <div class="col-md-7">
                    <table class="table table-bordered">
                        <tr>
                            <td>Chamber Name</td>
                            <td>{{ $chamber->name }}</td>
                        </tr>
                        <tr>
                            <td>Doctor</td>
                            <td>{{ $chamber->doctor->name }}</td>
                        </tr>

                        <tr>
                            <td>Phone</td>
                            <td>{{ $chamber->doctor->phone }}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{ $chamber->category->name }}</td>
                        </tr>
                        <tr>
                            <td>Disctrict</td>
                            <td>{{ $chamber->district->name }}</td>
                        </tr>
                        <tr>
                            <td>Division</td>
                            <td>{{ $chamber->division->name }}</td>
                        </tr>
                        <tr>
                            <td>Visit Time</td>
                            <td>{{ $chamber->start_time.'-'.$chamber->end_time }}</td>
                        </tr>
                        <tr>
                            <td>Days</td>
                            <td>{{ $chamber->day }}</td>
                        </tr>
                        <tr>
                            <td>Serial For</td>
                            <td>{{ @$chamber->assistant->phone }}</td>
                        </tr>
                    </table>
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(Session::has('serialSuccess'))
                            <p class="alert alert-success">{{ Session::get('serialSuccess') }}</p>
                        @endif
                    <form action="{{ url('create-appoinment') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control">
                                    <input type="hidden" name="chamber_id" value="{{ $chamber->id }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>

                        </div>
                        <button class="btn btn-success">Apply For Appoinment</button>
                    </form>

                </div>
            </div>
		</div>
	</section>
	<!-- /Section: works -->




@endsection
