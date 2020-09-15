@if (isset($page))
	<div class="blog-section">
		<div class="blog-footer mobile-hide">
			{!! $page->seo->t('seo_text') !!}
		</div>
	</div>
@endif