<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
		@include('section.head.meta') {{-- The meta tags section --}}
		@include('section.head.css')  {{-- The link tags section --}}

		@section('css')
		@show {{-- The custom css --}}


		<script src="{{ asset('common/GoogleNexusWebsiteMenu/js/modernizr.custom.js') }}"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li>
									<a class="gn-icon gn-icon-download">Downloads</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
										<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
									</ul>
								</li>
								<li><a class="gn-icon gn-icon-cog">Settings</a></li>
								<li><a class="gn-icon gn-icon-help">Help</a></li>
								<li>
									<a class="gn-icon gn-icon-archive">Archives</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Articles</a></li>
										<li><a class="gn-icon gn-icon-pictures">Images</a></li>
										<li><a class="gn-icon gn-icon-videos">Videos</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li></li>
				<li></li>
				
			</ul>
			@section('body')

			
			@show {{-- The custom body --}}

		@include('section.body.script') {{-- The application main scripts --}}    

		@section('scripts')
		@show {{-- The custom scripts --}}

		</div><!-- /container -->
		<script src="{{ asset('common/GoogleNexusWebsiteMenu/js/classie.js') }}"></script>
		<script src="{{ asset('common/GoogleNexusWebsiteMenu/js/gnmenu.js') }}"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
			
		</script>
	</body>
</html>