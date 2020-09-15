<div id="left-menu">
	<!-- vue component left-menu.vue -->
	<!-- Example: <left_menu :menu='Array'/> -->
	<left_menu
			:menu='{!! $menu !!}'
			facebook-link='{{setting('ssylka-feisbuk')}}'
			instagram-link='{{setting('ssylka-instagram')}}'
			telegram-link='{{setting('ssylka-telegram')}}'
			youtube-link='{{setting('ssylka-youtube')}}'
	/>
</div>