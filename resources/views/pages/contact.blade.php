@extends('main') 
@section('title', '| Контакты') 
@section('content')
<div class="page-title-spacer"></div>
<div class="page-title">
	<div class="container">
		<h2>Свяжитесь с нами</h2>
		
	</div>
</div>
<div class="container">
	<div class="card-group shadow">
		<div class="card card-2">
			<div class="card-body mx-3 my-3">
				
				<p>У вас есть вопрос / жалоба/ предложение?<br>
					Обратитесь в наш национальный центр обслуживания клиентов.</p>
				<p>Sarayshyq St 7, Astana 020000, Kazakhstan<br>
					Tel +7 777 888 9221 or +7 7172 28 55 57</p>
				@include('partials._sixfishes')
			</div>
		</div>
		<div class="card card-1 ">
			<div class="card-body mx-3 my-5 ">
				
				<h4>Забота о посетителях</h4>
				<p class="font-weight-bold">+7 777 888 9221</p>
			</div>
		</div>
	</div>
</div>
@endsection