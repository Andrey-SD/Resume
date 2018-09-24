@extends('layouts.main')
@section('content')

<section class="print">
	<div>
		<img src="{{URL::asset('img/photo.png')}}" alt="photo">
	</div>
	<h1>{{$info->name}} {{$info->family}}</h1>
	<p>{{$info->position}}</p>
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-6 lc">
			<div>
				<h2>Здравствуйте</h2>
				<p>Меня зовут {{$info->name}}, прошу рассмотреть мою кандидатуру на позицию {{$info->position}}.</p>
			</div>
			<div>
				<h2>Образование</h2>
				@foreach($info->education as $education)
					<p class="work_ch" style="margin-top:10px !important;">{{$education->date}}</p>
					<p class="work_tar"><span>{{$education->name}}</span></p>
					<p class="work_tar">{{$education->lesson}}</p>
				@endforeach
			</div>
			<div>
				<h2>Опыт работы</h2>
				@foreach($info->works as $work)
					<p>{{$work->date}}</p>
					<p><span>{{$work->name}}</span></p>
					<p>{{$work->position}}</p>
					<p style="border-bottom: 1px dotted #8B8B8B; margin:5mm 0mm 7mm !important;">{{$work->duties}}</p>				
				@endforeach
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6 rc">
			<div>
				<h2>Контакты</h2>
				<p><span>{{$info->сity}}</span></p>
				<p><span>тел: </span>{{$info->phone_number}} (Viber)</p>
				<p><span>e-mail: </span>{{$info->email}}</p>
				<a class="gitlink" href="https://github.com/Andrey-SD?tab=repositories" title="GitHub" target="_blank"> https://github.com/Andrey-SD</a>
				</br>
				<a class="linkedin" href="https://www.linkedin.com/in/андрей-деркач-4018a292/" title="Linkedin" target="_blank"> https://www.linkedin.com/in/андрей-деркач-4018a292/</a>
				</br>
			</div>
			<div>
				<h2>Навыки</h2>
				<dl>
					<dt>HTML</dt>
					<dt>CSS</dt>
						<ul>
							<li>Bootstrap</li>
						</ul>
					<dt>JavaScript</dt>
						<ul>
							<li>Ajax</li>
							<li>JQuery</li>
							<li>DOM</li>
						</ul>
					<dt>MYSQL</dt>
					<dt>PHP</dt>
						<ul>
							<li>Laravel</li>
						</ul>
					<dt>GitHub</dt>
				</dl>
			</div>
			<div>
				<h2>Увлечения</h2>
					@foreach($info->hobbi as $count)
					<p>{{ $count }}</p>
					@endforeach
			</div>
		</div>
	</div>
	
</section>
<div class="btnprn">
	<button id="print">Печать</button>
</div>






@endsection
