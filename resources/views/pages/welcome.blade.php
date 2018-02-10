@extends('main') 
@section('title', '| Homepage') 
@section('slider')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="/img/slide-2.jpg" alt="First slide">
			<div class="carousel-caption d-none d-md-block carousel-custom-caption">
				<h2 class="h-slider">Наслаждайся месяцем каникул!</h2>
				<a class="btn bg-white btn-square btn-lg" href="/menu" role="button">Меню</a>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="/img/slide-1.jpg" alt="Second slide">
			<div class="carousel-caption d-none d-md-block carousel-custom-caption">
				<h2 class="h-slider">Морепродукты в одном шаге!</h2>
				<a class="btn bg-white btn-square btn-lg" href="/restaurants" role="button">Найти Ресторан</a>
			</div>
		</div>

	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection
@section('content')

<div class="card-group" style="margin-top: -35px">
	<div class="card">
		<div class="card white-text">
			<img class="card-img" src="/img/welcome-blue.jpg" alt="Card image">
			<div class="card-img-overlay  d-flex align-items-center justify-content-center">
				<div class="col-md-11">
					<h2>Найти ресторан</h2>
					<p>Укажите ваш регион и нажмите поиск</p>
					<div class="input-group mb-3 ">
						<input type="text" class="form-control no-radius" placeholder="Наберите город" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append ">
							<button class="btn white-text btn-square btn-color" type="button">Поиск</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<a href="/menu">
				<img class="card-img" src="/img/welcome.jpg" alt="Card image">
				<div class="card-img-overlay  d-flex align-items-end">
					<div class="col-md-11 waves-move white-text" >
						<p style="float: left;"><img class="deco-waves-small mr-3" src="/img/wawes.png"  border="1px"></p>

						<h2>Меню</h2>
						<p>Посмотрите наше меню</p>
					</div>


				</div>
			</a>
		</div>
	</div>
	
	<div class="card card-1">
		<div class="card-body mx-3 my-3">
			@include('partials._fishes')
			<h2 class="card-title" style="color: #57a2b3">Самый любимый ресторан морепродуктов</h2>
			<p class="card-text">Ocean Basket является любимой сетью ресторанов морепродуктов в Южной Африке. Один из которых всегда рядом. В Ocean Basket вы найдете дружелюбных людей, ощущение домашнего тепла и отличное предложение для ваших с трудом заработанных долларов (денег). Некоторые рестораны Ocean Basket также имеют лавки свежих морепродуктов. А еще вы можете поесть у нас или заказать на вынос - все, что вы предпочитаете.</p>
			<a href="#" class="btn  btn-square white-text btn-color">Наша история</a>
		</div>

	</div>
	

</div>


<!-- End of .row -->

@endsection
