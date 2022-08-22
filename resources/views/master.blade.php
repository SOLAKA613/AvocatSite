<!DOCTYPE html>
<html lang="ar">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<title>@yield('title')</title>
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
		<!--begin::Fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700;900&display=swap" rel="stylesheet">
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/{{__('messages.cssPlAr')}}" rel="stylesheet" type="text/css" />
		<link href="assets/css/{{__('messages.cssAR')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!--begin::newCss-->
		@yield('head')
		<!--end::newCss-->
		<!--begin::newCss-->
		<link href="{{asset('css/cssGeneral/cssGeneral.css')}}" rel="stylesheet" type="text/css"/>
		<!--end::newCss-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body direction="{{__('messages.dir')}}" dir="{{__('messages.dir')}}" style="direction: {{__('messages.dir')}}" id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
					@include('Partials.navbar_partials.navbarAside')
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::header-->
						@include('Partials.navbar_partials.header')
					<!--end::header--> 
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
							<div class="post d-flex flex-column-fluid " style='margin-top: 7%;' id="kt_post">
								<!--begin::Container-->
								<div id="kt_content_container" class="container-xxl">
									@yield('content')
								</div>	
								<!--end::Container-->
							</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->  
						@include('Partials.footer')
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script> 
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Javascript for all pages-->
		<script src="{{asset('js/general/general.js')}}"></script>
		<!--end::Javascript for all pages-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		{{-- <script src="{{asset('assets/js/custom/apps/calendar/calendar.js')}}"></script> --}}
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
		<script src="{{asset('js/dropdown/dropdown.js')}}"></script>
		<script src="https://cdn.datatables.net/plug-ins/1.12.1/dataRender/datetime.js"></script>
		<script src="{{asset('js/moment-with-locales.js')}}"></script>
		<script src="{{asset('js/moment.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/locale/fr.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<!--begin::newScript-->
		@stack('scripts')
        <!--end::newScript-->
	</body>
	<!--end::Body-->
</html>