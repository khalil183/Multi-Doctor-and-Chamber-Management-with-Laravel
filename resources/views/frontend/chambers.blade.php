@extends('frontend.layout')
@section('frontend-section')

	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">AVailable Chambers</h2>
					<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

        <div class="container">
			<div class="row">
                @foreach ($chambers as $item)
                <div class="col-md-6" >
					<div class="card text-center" style="margin-top:5px ;border: 1px solid rgb(116, 102, 102) ; padding:5px">
                        <div class="card-header">
                         Name: {{ $item->name }}
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Doctor:{{ $item->doctor->name }}</h5>
                          <p class="card-text">Address: {{ $item->location }}</p>
                          <a href="{{ url('/chamber/'.$item->id) }}" class="btn btn-primary mb-4">Go to Chamber</a>
                        </div>
                        <div class="card-footer text-muted">
                          </div>
                      </div>
                </div>
                @endforeach

            </div>
		</div>
	</section>
	<!-- /Section: works -->




@endsection
