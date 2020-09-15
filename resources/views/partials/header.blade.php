<header class="header">
	<div class="header_wrap fw">
		<div class="header_items-wrap mobile-logo fw">
			<div class="header_item fw">
				<a href="{{getUrl('/')}}"><img class="lazy" data-lazy="/img/icons/logo-mobile.svg"></a>
			</div>
		</div>
		<div class="header_items-wrap fw">
			<div class="header_item mobile-hide fw" id="modal-header">
				<div id="show-modal" class="header_content" @click="showModal = true">
					<div class="header_logo">
						<p class="size red">
							<i class="fa fa-asterisk fa-lg" aria-hidden="true"></i>
						</p>
					</div>
					<div class="header_title">
						<p>{{__t('3003 невідкладна допомога')}}</p>
					</div>
				</div>
				<modal v-if="showModal" @close="showModal = false"></modal>
				<div class="header_underline"></div>
			</div>
			<div class="header_item mobile-hide fw">
				<div class="header_logo">
					<p class="size">
						<i class="fa fa-phone fa-lg" aria-hidden="true"></i>
					</p>
				</div>
				<div class="header_title">
					<p>+38 (044) 521-30-03</p>
				</div>
				<div class="header_underline"></div>
			</div>
			<div class="header_item mobile-hide fw">
				<div class="header_logo">
					<p class="size">
						<i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i>
					</p>
				</div>
				<div class="header_title">
					<p>{{__t('Записатись на прийом')}}</p>
				</div>
				<div class="header_underline"></div>
			</div>
			<div class="header_item fw">
				<div class="header_logo">
					<p class="size">
						<i class="fa fa-user-o fa-lg" aria-hidden="true"></i>
					</p>
				</div>
				<div class="header_title">
					<p>{{__t('Особистий кабінет')}}</p>
				</div>
				<div class="header_underline"></div>
			</div>
			<div class="header_item fw btn-search">
				<div class="header_logo">
					<p class="size">
						<i class="fa fa-search fa-lg" aria-hidden="true"></i>
					</p>
				</div>
				<div class="header_underline"></div>
			</div>
			<div class="header_item change-lang fw">
				<div class="header_lang">
					<div class="lang_wrap">
						<p class="lang_selected">{{$currentLanguage}}
							<span class="lang_arrow">
								<svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1.175 0L5 3.7085L8.825 0L10 1.1417L5 6L0 1.1417L1.175 0Z" fill="#999999"/>
								</svg>
							</span>
						</p>
						<ul class="lang_menu">
							@foreach($languages as $key => $language)
							<li><a href="{{geturl(\Request::fullUrl(), $key)}}">{{$language}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="header_underline"></div>
			</div>
			<div class="header_item mobile-hide bigger-fs fw">
				<div class="header_logo">
					<a href="{{getUrl('/')}}"><img class="lazy" data-lazy="/img/icons/АА.svg" ></a>
				</div>
				<div class="header_underline"></div>
			</div>
			<div class="header_item mobile-menu fw">
				<div class="header_burger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>

	</div>
</header>
