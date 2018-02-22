@extends('layouts.main')
@section('content')
	<div class="projects_div ">
		<div class="row row-flex">
			<div class="col-md-9">
				<div class="resume_row row-flex">
				
					<div class="resum_title">
						<p>Обо мне</p>
					</div>
					<div class="resume_description">
						<p class="work_ch">{{$info->about}}</p>
					</div>
				</div>
				<div class="resume_row row-flex">
					<div class="resum_title">
						<p>Опыт работы</p>
					</div>
					<div class="resume_description">
						@foreach($info->works as $work)
							<p class="work_ch" style="margin-top:10px !important;">{{$work->date}}</p>
							<p class="work_tar">Место работы:</p>
							<p class="work_ch">{{$work->name}}</p>
							<p class="work_tar">Должность:</p>
							<p class="work_ch">{{$work->position}}</p>
							<p class="work_tar">Обязанности:</p>
							<p class="work_ch" style="border-bottom: 1px solid #8B8B8B;">{{$work->duties}}</p>
							
						@endforeach
						
					</div>
				</div>
				<div class="resume_row row-flex">
					<div class="resum_title">
						<p>Образование</p>
					</div>
					<div class="resume_description">
						@foreach($info->education as $education)
							<p class="work_ch" style="margin-top:10px !important;">{{$education->date}}</p>
							<p class="work_tar">Место учебы:</p>
							<p class="work_ch">{{$education->name}}</p>
							<p class="work_tar">Специальность:</p>
							<p class="work_ch">{{$education->lesson}}</p>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<div class="skills">
					<svg width="45px" height="45px" viewBox="0 0 155.739 155.739" style="enable-background:new 0 0 155.739 155.739;" xml:space="preserve">
						<g>
							<g>
								<path d="M93.192,25.738c8.326,0,15.073,6.752,15.073,15.081c0,8.325-6.747,15.078-15.073,15.078    c-8.33,0-15.079-6.753-15.079-15.078C78.113,32.49,84.862,25.738,93.192,25.738z" fill="#61d0d4"/>
								<path d="M101.102,73.074c5.354,0,9.692,4.339,9.692,9.691c0,5.356-4.338,9.697-9.692,9.697c-5.356,0-9.693-4.341-9.693-9.697    C91.409,77.413,95.746,73.074,101.102,73.074z" fill="#61d0d4"/>
								<path d="M52.781,155.739h86.949c0,0-25.232-20.279-24.701-42.513c0.317-12.388,24.701-28.158,24.58-62.58    c-0.076-17.311-16.865-46.088-45.371-49.675C65.724-2.62,44.386,3.656,35.062,21.235c-9.335,17.57-10.042,32.999-9.325,35.861    c0.726,2.876,3.769,8.255,3.769,8.255S15.16,87.405,16.049,90.988c0.908,3.596,10.748,5.527,10.748,5.527s0.892,2.497-0.906,7.335    c-1.795,4.846,3.338,10.468,4.88,12.43c1.519,1.954-2.158,8.062-0.908,11.476c1.253,3.398,7.176,7.523,13.986,6.632    c6.819-0.902,15.566-2.504,18.604-3.054C69.312,147.479,52.781,155.739,52.781,155.739z M117.141,90.021l-2.947,4.525    l-2.867-1.883c-1.315,1.353-2.919,2.452-4.714,3.207l0.708,3.371l-5.276,1.1l-0.706-3.364c-1.97,0.032-3.864-0.335-5.602-1.051    l-1.883,2.872l-4.527-2.955l1.877-2.872c-1.346-1.312-2.451-2.912-3.199-4.706l-3.376,0.705l-1.11-5.285l3.38-0.701    c-0.027-1.952,0.333-3.852,1.045-5.598l-2.871-1.882l2.952-4.522l2.876,1.879c1.312-1.36,2.908-2.458,4.711-3.212l-0.708-3.368    l5.28-1.111l0.708,3.374c1.952-0.033,3.853,0.338,5.599,1.048l1.882-2.875l4.52,2.949l-1.878,2.878    c1.351,1.313,2.456,2.905,3.208,4.711l3.357-0.7l1.111,5.28l-3.365,0.7c0.032,1.958-0.338,3.857-1.051,5.604L117.141,90.021z     M67.762,30.636l5.218,1.207c1.188-2.685,2.925-5.145,5.157-7.213L75.3,20.086l7.115-4.449l2.84,4.545    c2.835-1.095,5.807-1.581,8.739-1.475l1.2-5.204l8.189,1.883l-1.204,5.203c2.682,1.196,5.128,2.931,7.204,5.158l4.539-2.838    l4.454,7.122l-4.547,2.829c1.097,2.837,1.576,5.811,1.479,8.741l5.202,1.207l-1.888,8.181l-5.215-1.207    c-1.182,2.679-2.917,5.146-5.149,7.212l2.842,4.54l-7.124,4.448l-2.831-4.539c-2.846,1.1-5.817,1.587-8.748,1.475l-1.206,5.204    l-8.178-1.888l1.195-5.204c-2.676-1.186-5.135-2.925-7.194-5.155l-4.55,2.841l-4.45-7.122l4.55-2.834    c-1.1-2.843-1.581-5.806-1.48-8.736l-5.211-1.204L67.762,30.636z" fill="#61d0d4"/>
							</g>
						</g>
					</svg>
					<h4>Навыки</h4>
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
				<div class="skills">
					<svg viewBox="0 0 277.58 277.58" style="enable-background:new 0 0 277.58 277.58;" xml:space="preserve" width="45px" height="45px">
						<g transform="matrix(0.976285 0 0 0.976285 3.29142 3.29142)">
							<g>
								<path d="M138.46,164.287c-38.628,0-69.925-37.519-69.925-83.767C68.535,34.277,99.832,0,138.46,0   c38.634,0,69.957,34.277,69.957,80.52C208.417,126.768,177.093,164.287,138.46,164.287z M29.689,277.528   c0,0-14.832,0.979-21.365-8.023c-3.53-4.863-1.071-14.718,1.343-20.217l5.912-13.473c0,0,16.35-36.567,34.962-57.757   c11.433-12.994,25.031-10.035,33.826-5.809c5.417,2.6,11.542,10.176,16.018,14.191c6.168,5.532,17.057,11.819,34.859,12.173h10.922   c17.791-0.354,28.68-6.641,34.843-12.173c4.471-4.014,10.427-11.825,15.795-14.511c8.072-4.041,20.358-6.527,31.492,6.13   c18.618,21.191,33.363,58.421,33.363,58.421l6.059,13.212c2.507,5.461,5.075,15.267,1.643,20.195   c-6.124,8.811-19.874,7.642-19.874,7.642S29.689,277.528,29.689,277.528z" data-original="#458A49" class="active-path" data-old_color="#458A49" fill="#61D0D4"/>
							</g>
						</g> 
					</svg>
					<h4>Личные качества</h4>
					@foreach($info->personal_qualities as $count)
					<div class="progress">
					  <div class="progress-bar progress-bar-striped active" role="progressbar"
					  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:{{ $count->value }}%; background-color: #E83556;">
						<p>{{ $count->qual }}</p>
					  </div>
					</div>
					@endforeach
				
					
				</div>
				<div class="skills">
					<svg width="45px" height="45px" viewBox="0 0 476.264 476.265" style="enable-background:new 0 0 476.264 476.265;" xml:space="preserve">
						<g>
							<g>
								<path d="M416.995,88.482l-7.742-31.418c-1.379-5.596-7.254-8.965-13.117-7.52c-2.123,0.525-3.935,1.617-5.338,3.048V0H80.613    v49.536c-5.833-1.391-11.647,1.961-13.024,7.536L59.81,88.654l-0.854-0.261c0,0-25.603,97.198-13.655,137.587    c11.948,40.395,83.741,111.495,83.741,111.495l27.751,127.98c0,0,44.371,10.809,81.345,10.809    c36.977,0,81.347-10.809,81.347-10.809l27.747-127.98c0,0,71.793-71.101,83.731-111.495    c11.942-40.389-13.646-137.587-13.646-137.587L416.995,88.482z M392.02,78.558c-0.4,0-0.813-0.016-1.223,0.03v-4.991    L392.02,78.558z M327.821,22.654h18.635v22.251l-4.821,40.916h-8.86l-4.937-40.916V22.654H327.821z M346.035,92.9v17.208h-17.801    V92.9H346.035z M238.94,29.917c6.628-6.831,16.21-10.239,28.761-10.239c12.539,0,22.117,3.417,28.749,10.239    c8.845,8.053,13.276,20.122,13.276,36.197c0,15.759-4.432,27.822-13.276,36.201c-6.624,6.827-16.21,10.235-28.749,10.235    c-12.551,0-22.125-3.417-28.761-10.235c-8.887-8.379-13.337-20.442-13.337-36.201C225.604,50.039,230.054,37.97,238.94,29.917z     M141.55,32.949c7.816-8.566,18.158-12.852,31.014-12.852c11.155,0,20.113,2.825,26.884,8.486    c6.764,5.658,10.644,12.707,11.642,21.163h-18.043c-1.389-5.987-4.781-10.181-10.181-12.562    c-3.013-1.311-6.368-1.961-10.062-1.961c-7.069,0-12.868,2.663-17.415,7.999c-4.546,5.318-6.811,13.341-6.811,24.031    c0,10.78,2.457,18.396,7.378,22.869c4.921,4.474,10.52,6.72,16.783,6.72c6.155,0,11.197-1.767,15.12-5.298    c3.925-3.527,6.352-8.157,7.261-13.872h-20.302V63.013h36.55V110.1h-12.143l-1.837-10.95c-3.534,4.148-6.704,7.075-9.521,8.771    c-4.845,2.965-10.794,4.442-17.859,4.442c-11.629,0-21.159-4.03-28.575-12.075c-7.74-8.093-11.612-19.164-11.612-33.2    C129.82,52.898,133.729,41.521,141.55,32.949z M366.689,220.282c-19.656,22.323-128.558,67.244-128.558,67.244    s-108.894-44.921-128.558-67.244c-17.318-19.665-21.745-51.576-21.995-77.876h301.097    C388.446,168.714,384.005,200.618,366.689,220.282z" fill="#61d0d4"/>
								<path d="M238.139,158.514c29.959,0,54.241,24.283,54.241,54.238c0,29.958-24.281,54.236-54.241,54.236    c-29.954,0-54.236-24.279-54.236-54.236C183.902,182.796,208.185,158.514,238.139,158.514z" fill="#61d0d4"/>
								<path d="M267.702,97.005c7.249,0,13.016-2.675,17.292-8.037c4.264-5.356,6.396-12.976,6.396-22.862    c0-9.844-2.132-17.448-6.396-22.826c-4.276-5.378-10.043-8.073-17.292-8.073c-7.27,0-13.064,2.679-17.389,8.039    c-4.323,5.354-6.489,12.978-6.489,22.86c0,9.886,2.166,17.498,6.489,22.862C254.637,94.331,260.432,97.005,267.702,97.005z" fill="#61d0d4"/>
							</g>
						</g>
					</svg>
					<h4>Хобби</h4>
					<dl>
					    @foreach($info->hobbi as $count)
						<dt>{{ $count }}</dt>
						@endforeach
					</dl>
				</div>
			</div>

		</div>

	</div>

@endsection