@extends('frontend.layout')
@section('frontend-section')

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Medicio medical group</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list">
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
						</ul>

						</div>
						</div>


					</div>
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Search Doctors</h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="{{ url('chambers') }}">
                                        @csrf
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Category</label>
													<select name="category" id="" class="form-control">
                                                        <option value="">Select Category</option>
                                                        @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Division</label>
													<select name="division" id="" class="form-control">
                                                        <option value="">Select Division</option>
                                                        @foreach ($divisions as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>District</label>
													<select name="district" id="" class="form-control">
                                                        <option value="">Select District</option>
                                                        @foreach ($districts as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
												</div>
											</div>
										</div>

										<input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">

										<p class="lead-footer">* We'll contact you by phone & email later</p>

									</form>
								</div>
							</div>

						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!-- /Section: intro -->

	<!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">

							<i class="fa fa-check fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Make an appoinment</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">

							<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Choose your package</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							<i class="fa fa-user-md fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Help by specialist</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">

							<i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Get diagnostic report</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- /Section: boxes -->



	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Doctors</h2>
					<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">

            <div id="filters-container" class="cbp-l-filters-alignLeft">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>
                @foreach ($categories as $item)
                <div data-filter=".{{ $item->id }}" class="cbp-filter-item">{{ $item->name }} (<div class="cbp-filter-counter"></div>)</div>
                @endforeach

            </div>

            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
                    @foreach ($doctors as $item)
                    <li class="cbp-item {{ $item->category_id }}">
                        <a href="{{ url('doctor-details/'.$item->id) }}" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset($item->image) }}" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ url('doctor-details/'.$item->id) }}" class="cbp-singlePage cbp-l-grid-team-name">{{ $item->name }}</a>
                        <div class="cbp-l-grid-team-position">{{ $item->category->name }}</div>
                    </li>

                    @endforeach

                </ul>
            </div>
			</div>
			</div>
		</div>

	</section>
	<!-- /Section: team -->
@endsection
