@extends('layouts.default')

@section('seo_tags')
	@include('partials.seo')
@stop

@section('main')
	<div class="main-container">
		<div class="content-container mobile-reverse">

			@include('partials.breadcrumbs', ['page' => $page])

			<div class="about-section about-content">
				<div class="about-text">
					<h1 class="green">{{__t('Універсальна клініка «Оберіг»')}}</h1>
					<div class="about">
						{!! $page->t('description') !!}
					</div>
				</div>
				<!-- tabs -->
				<div class="tabs">
					<ul class="tab-header">
						@foreach($page->blocks as $block)
						<li class="tab-header__item tab-trigger {{$loop->index == 0 ? 'active' : ''}}" data-tab="tab{{$block->id}}">{{$block->t('title')}}</li>
						@endforeach
					</ul>
					<ul class="tab-content">
						@foreach($page->blocks as $block)
						<li class="tab-content__item tab-content {{$loop->index == 0 ? 'active' : ''}}" data-tab="tab{{$block->id}}">
							<div class="details-width">
								{!! $block->t('description') !!}
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		@include('partials.seo_text')
	</div>
@stop
