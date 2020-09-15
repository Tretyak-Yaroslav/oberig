<nav class="right-menu">
	@foreach ($menu as $menuOne)
		<a href="{{$menuOne->getUrl()}}" class="right-menu_item">
			<div class="right-menu_item-title">
				{{$menuOne->t('title')}}
			</div>
			<img data-lazy="{{$menuOne->getImgPath(351, 111)}}" class="right-menu_item-bg lazy">
		</a>
	@endforeach
	@include('layouts.img-svg.tree-img')
</nav>
