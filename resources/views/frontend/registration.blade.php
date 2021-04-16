@extends('frontend.layout')
@section('frontend-section')

	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Apply For New Doctor</h2>
					<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

        <div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ url('doctor-registration') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control" required value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" name="phone" class="form-control" required value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Institute</label>
                                        <input type="text" name="institute" class="form-control" required value="{{ old('institute') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Education</label>
                                        <input type="text" name="education" class="form-control" required value="{{ old('education') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Experience</label>
                                        <input type="number" name="experience" class="form-control" required value="{{ old('experience') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <select name="category" class="form-control" id="" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" name="address" class="form-control" required value="{{ old('address') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Bio</label>
                                        <textarea name="bio" class="form-control" id="" cols="30" rows="7" required>{{ old('bio') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-success">Registration Here</button>
                                </div>
                            </div>

                        </form>
					</div>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: works -->




@endsection
