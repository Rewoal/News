@extends('frontend.master')
@section('content')
<div class="wrapper">
	@if(count($featured) > 0)
	<div class="row">
		@foreach($featured as $key=>$f)
		@if($key == 0)
		<div class="col-md-6">
			<div class="relative">
				<a href="{{url('atricle')}}/{{$f->slug}}"><img src="{{url('posts')}}/{{$f->image}}" width="100%" />
					<span class="caption">{{$f->title}}</span>
				</a>
			</div>
		</div>
		@endif
		@endforeach
		<div class="col-md-6">
			<div class="row">
				@foreach($featured as $key=>$f)
				@if($key > 0 && $key < 3) <div class="col-md-6">
					<div class="relative">
						<a href="{{url('atricle')}}/{{$f->slug}}"><img src="{{url('posts')}}/{{$f->image}}" width="100%" />
							<span class="caption">{{$f->title}}</span>
						</a>
					</div>
			</div>
			@endif
			@endforeach
		</div>
		<div class="row" style="margin-top:30px;">
			@foreach($featured as $key=>$f)
			@if($key > 3 && $key < 6) <div class="col-md-6">
				<div class="relative">
					<a href="{{url('atricle')}}/{{$f->slug}}"><img src="{{url('posts')}}/{{$f->image}}" width="100%" />
						<span class="caption">{{$f->title}}</span>
					</a>
				</div>
		</div>
		@endif
		@endforeach
	</div>
</div>
</div>
@endif

<div class="row" style="margin-top:30px;">
	<div class="col-md-8">
		<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px;">
			<div class="col-md-12">
				<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">NEWS</span></h3>
			</div>
			<div class="col-md-6">
				@foreach($general as $key=>$g)
				@if($key == 0)
				<a href="{{url('article')}}/{{$g->slug}}"><img src="{{url('posts')}}/{{$g->image}}" width="100%" style="margin-bottom:15px;" /></a>
				<h3><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}</a></h3>
				<p align="justify">{!! substr($g->description,0,200) !!}</p>
				<br>
				<a href="{{url('article')}}/{{$g->slug}}">
					Цааш унших &raquo;
				</a>
				@endif
				@endforeach
			</div>
			<div class="col-md-6">
				@foreach($general as $key=>$g)
				@if($key > 0 && $key < 4) <div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
					<div class="col-md-4">
						<div class="row">
							<img src="{{url('posts')}}/{{$g->image}}" width="100%" />
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							<h4>
								<a href="{{url('article')}}/{{$g->slug}}">
									{{$g->title}}
								</a>
							</h4>
						</div>
					</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>

	<div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
		<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">BUSSINESS</span></h3>
		<div class="flex">
			@foreach($bussiness->take(5) as $b)
			<div>
				<a href="{{url('article')}}/{{$b->slug}}">
					<img src="{{url('posts')}}/{{$b->image}}" />
				</a>
			</div>
			@endforeach
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
				<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
					<h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span style="padding:6px 12px; background:#b952c8;">СПОРТ</span></h3>
					@foreach($sports as $key=>$s)
					@if($key == 0)
					<a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('posts')}}/{{$s->image}}" width="100%" style="margin-bottom:15px;" /></a>
					<h3><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h3>
					<p align="justify">{!! substr($s->description,0,300) !!}</p>
					<br>
					<a href="{{url('article')}}/{{$s->slug}}">
						Цааш унших &raquo;
					</a>
					@endif
					@endforeach
				</div>
				@foreach($sports as $key=>$s)
				@if($key > 0 && $key < 5) <div class="col-md-12" style="padding-bottom:10px;">
					<div class="col-md-4">
						<div class="row fashion">
							<a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('posts')}}/{{$s->image}}" width="100%" /></a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							<h4><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h4>
						</div>
					</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
			<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
				<h3 style="border-bottom:3px solid #d95757; padding-bottom:5px;"><span style="padding:6px 12px; background:#d95757;">TECHNOLOGY</span></h3>
				@foreach($technolgy as $key=>$t)
				@if($key == 0)
				<a href="{{url('article')}}/{{$t->slug}}"><img src="{{url('posts')}}/{{$t->image}}" width="100%" style="margin-bottom:15px;" /></a>
				<h3><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}</a></h3>
				<p align="justify">{!! substr($t->description,0,300) !!}</p>
				<br>
				<a href="{{url('article')}}/{{$t->slug}}">
					Цааш унших &raquo;
				</a>
				@endif
				@endforeach

			</div>
			@foreach($technolgy as $key=>$t)
			@if($key > 0 && $key < 5) <div class="col-md-12" style="padding-bottom:10px;">
				<div class="col-md-4">
					<div class="row fashion">
						<a href="{{url('article')}}/{{$t->slug}}"><img src="{{url('posts')}}/{{$t->image}}" width="100%" /></a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<h4><a href="{{url('article')}}/{{$t->slug}}">{{$s->title}}</a></h4>
					</div>
				</div>
		</div>
		@endif
		@endforeach
	</div>
</div>

<div class="col-md-12">
	<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
		<div class="col-md-12">
			<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">ЭРҮҮЛ МЭНД</span></h3>
		</div>
		<div class="col-md-6">
			@foreach($health as $key=>$h)
			@if($key > 0 && $key < 5) <div class="col-md-12" style="padding-bottom:10px;">
				<div class="col-md-4">
					<div class="row fashion">
						<a href="{{url('article')}}/{{$h->slug}}"><img src="{{url('posts')}}/{{$h->image}}" width="100%" /></a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<h4><a href="{{url('article')}}/{{$h->slug}}">{{$h->title}}</a></h4>
					</div>
				</div>
		</div>
		@endif
		@endforeach
	</div>
	<div class="col-md-6">
		@foreach($health as $key=>$h)
		@if($key > 5 && $key < 8) <div class="col-md-12" style="padding-bottom:10px;">
			<div class="col-md-4">
				<div class="row fashion">
					<a href="{{url('article')}}/{{$h->slug}}"><img src="{{url('posts')}}/{{$h->image}}" width="100%" /></a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<h4><a href="{{url('article')}}/{{$h->slug}}">{{$s->title}}</a></h4>
				</div>
			</div>
	</div>
	@endif
	@endforeach

</div>
</div>
</div>



<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
	<h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span style="padding:6px 12px; background:#b952c8;">СОЁЛ УРЛАГ</span></h3>
	<!-- <div class="flex">
		@foreach($entertaiment as $key=>$s)
		@if($key == 0)
			<a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('posts')}}/{{$s->image}}" width="100%"  /></a>
			<h3><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h3>
			<p align="justify">{!! substr($s->description,0,300) !!}</p>
			<br>
			<a href="{{url('article')}}/{{$s->slug}}">
				Цааш унших &raquo;
			</a>
		@endif
		@endforeach
	</div> -->
	<div class="col-md-6">
		@foreach($entertaiment as $key=>$g)
		@if($key > 0 && $key < 6) <div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
			<div class="col-md-4">
				<div class="row">
					<img src="{{url('posts')}}/{{$g->image}}" width="100%" />
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<h4>
						<a href="{{url('article')}}/{{$g->slug}}">
							{{$g->title}}
						</a>
					</h4>
				</div>
			</div>
	</div>
	@endif
	@endforeach
</div>
</div>


<!-- <div class="col-md-12">
	<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px;">
		<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">HEALTH</span></h3>
		<div class="row" style="margin-bottom:30px;">
			<div class="col-md-4">
				<img src="{{url('images/vehicle-193213_1280-800x445.jpg')}}" width="100%" />
			</div>
			<div class="col-md-4">
				<img src="{{url('images/vehicle-193213_1280-800x445.jpg')}}" width="100%" />
			</div>
			<div class="col-md-4">
				<img src="{{url('images/vehicle-193213_1280-800x445.jpg')}}" width="100%" />
			</div>
		</div>
		<div class="row" style="margin-bottom:30px;">
			<div class="col-md-4">
				<img src="{{url('images/vehicle-193213_1280-800x445.jpg')}}" width="100%" />
			</div>
			<div class="col-md-4">
				<img src="{{url('images/vehicle-193213_1280-800x445.jpg')}}" width="100%" />
			</div>
			<div class="col-md-4">
				<img src="{{url('images/vehicle-193213_1280-800x445.jpg')}}" width="100%" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="{{url('images/vehicle-193213_1280-800x445.jpg')}}" width="100%" />
			</div>
			<div class="col-md-4">
				<img src="{{url('images/vehicle-193213_1280-800x445.jpg')}}" width="100%" />
			</div>
			<div class="col-md-4">
				<img src="{{url('images/vehicle-193213_1280-800x445.jpg')}}" width="100%" />
			</div>
		</div>
	</div>
</div> -->
</div>
</div>


<div class="col-md-4">
	<div class="col-md-12" style="border:1px solid #ccc; padding:15px;">
		<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">ТРЕНД МЭДЭЭ</span></h3>
		@foreach($politics->take(7) as $p)
		<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
			<div class="col-md-4">
				<div class="row">
					<a href="{{url('article')}}/{{$p->slug}}">
						<img src="{{url('posts')}}/{{$p->image}}" width="100%" style="margin-left:-15px;" /></a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row" style="padding-left:10px;">
					<h4><a href="{{url('article')}}/{{$p->slug}}">{{$p->title}}</a></h4>
				</div>
			</div>
		</div>
		@endforeach
	</div>

	<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 60px 15px; margin-top:30px;">
		<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:0px 10px 20px 10px; margin-bottom:10px;">
			<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">CRYPTO</span></h3>
			@foreach($crypto as $key=>$c)
			@if($key == 0)
			<a href="{{url('article')}}/{{$c->slug}}"><img src="{{url('posts')}}/{{$c->image}}" width="100%" style="margin-bottom:15px;" /></a>
			<h4><a href="{{url('article')}}/{{$p->slug}}">{{$c->title}}</a></h4>
			<a href="{{url('article')}}/{{$c->slug}}"></a>
			@endif
			@endforeach
		</div>
		@foreach($crypto as $key=>$c)
		@if($key > 0 && $key < 5)
			<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
				<div class="col-md-4">
					<a href="{{url('article')}}/{{$c->slug}}"><img src="{{url('posts')}}/{{$c->image}}" width="100%" style="margin-left: -15px;" /></a>
				</div>
				<div class="col-md-8">
					<div class="row" style="padding-left:0px;">
						<h4><a href="{{url('article')}}/{{$c->slug}}">{{$c->title}}</a></h4>
					</div>
				</div>
			</div>
		@endif
		@endforeach
	</div>

	<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px;">
		<div class="col-md-12">
			<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">AD</span></h3>
		</div>
		<div class="col-md-6">
			<img src="{{asset('images/ads2.png')}}" width="100%" />
		</div>
		<div class="col-md-6">
			<img src="{{asset('images/ads2.png')}}" width="100%" />
		</div>
	</div>

	<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 7px 15px; margin-top:30px;">
		<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:0px 10px 20px 10px; margin-bottom:10px;">
			<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">Бусад мэдээ </span></h3>
			@foreach($general as $key=>$g)
			@if($key == 0)
			<a href="{{url('article')}}/{{$g->slug}}"><img src="{{url('posts')}}/{{$g->image}}" width="100%" style="margin-left: -15px;" /></a>
			<p align="justify">{!! substr($g->description,0,500) !!}.</p>Read more <a href="#"><span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
			@endif
			@endforeach
		</div>
		@foreach($general as $key=>$g)
		@if($key > 0 && $key < 5)
		<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
			<div class="col-md-4">
				<div class="row">
					<a href="{{url('article')}}/{{$g->slug}}"><img src="{{url('posts')}}/{{$g->image}}" width="100%" style="margin-left: -15px;" /></a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row" style="padding-left:0px;">
					<h4><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}</a></h4>
				</div>
			</div>
		</div>
		@endif
		@endforeach
		
	</div>

</div>
</div>
</div>

@stop