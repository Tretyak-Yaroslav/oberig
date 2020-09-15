@extends('layouts.default')

@section('seo_tags')
	@include('partials.seo')
@stop

@section('main')
	<div class="main-container">
		<div class="content-container">

			@include('partials.breadcrumbs', ['page' => $page])

			<div class="blog-section main-content">
				<div class="row blog-article_padding">
					<div class="width-40">
						<div class="blog-title">
							<h1>{{$page->t('title')}}</h1>
						</div>
						<div class="blog-time">
							<p class="blog-gray">
								<i aria-hidden="true" class="fa fa-calendar"></i>
								{{$page->humanDate('created_at')}}
							</p>
						</div>

						<img class="lazy blog__main-image mobile" data-lazy="{{$page->getImgPath(571, 571)}}" alt="{{$page->title}}">

						<div class="background blog-header mobile-hide">
							<div class="background-one"></div>
							<div class="background-two"></div>
						</div>

						<ul class="menu-mb">
							@foreach($page->blocks as $block)
							<li class="blog-li">
								<a class="blog" href="#{{$block->getSlug()}}">{{$block->t('title')}}</a>
							</li>
							@endforeach
						</ul>
						<button class="btn share" href="#">
							{{__t('Поділитися')}}
							<img data-lazy="/img/blog/share.png" class="lazy" alt="share">
						</button>
					</div>
					<div class="width-60 blog__main-image-container">
						<img class="lazy blog__main-image" data-lazy="{{$page->getImgPath(571, 571)}}" alt="{{$page->title}}">
					</div>
				</div>
			</div>
			<div class="blog-body">
				@foreach($page->blocks as $block)
					<div id="{{$block->getSlug()}}" class="description  @if($block->picture) flex-container @endif">
						<div @if($block->picture) class="left-content" @endif>
							<h3>
								{{$block->t('title')}}
							</h3>
							<div class="content">{!! $block->t('description') !!}</div>
							@if ($block->t('file_name'))
							<div class="blog-dowload mb">
								<a class="btn-dowload" href="{{$block->t('file')}}" download="#">
									<img class="lazy dowload" data-lazy="/img/blog/dowload.png" alt="dowload">
									{{$block->t('file_name')}}
								</a>
							</div>
							@endif
						</div>

						@if ($block->picture)
							<div class="picture">
								{!! $block->getImg(452, 452) !!}
							</div>
						@endif

					</div>
				@endforeach
			</div>
			@include('news.partials.author')
			@include('news.partials.tags')
			@include('news.partials.comments')

			<div class="blog-article" id="blog-article-2">
				<div class="background mobile-hide">
					<div class="background-one"></div>
					<div class="background-two"></div>
				</div>
				<articles link_all="#" title="Вас також можуть зацікавити інші статті розділу" background="white" />
			</div>

			@include('partials.seo_text')
		</div>

@stop

