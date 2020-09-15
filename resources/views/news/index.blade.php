@extends('layouts.default')

@section('seo_tags')
	@include('partials.seo')
@stop

@section('main')
	<div class="main-container">
		<div class="content-container">

			@include('partials.breadcrumbs', ['page' => $page])

			@include('partials.search')

			<div class="blog-section">
				<div class="destop-hide mb-2">
					<h1>{{$page->t('title')}}</h1>
				</div>
				<div class="background mobile-hide">
					<div class="background-one"></div>
					<div class="background-two"></div>
				</div>
			</div>
			@foreach($categories as $category)
				<div class="blog-article" id="blog-article-{{$loop->index}}">
					<articles
							link_all="{{$category->getUrl()}}"
							title="{{$category->t('title')}}"
							background="{{$loop->odd ? 'grey' : 'white'}}"
							:articles='{!! $category->newsJson() !!}'/>
				</div>
			@endforeach

			@include('partials.seo_text')
		</div>
	</div>
@stop