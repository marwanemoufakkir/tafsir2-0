
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head><base href="../../">
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<style>

			.select2-container--bootstrap5 .select2-selection--single .select2-selection__rendered {
				display: block;
				padding-left: 0;
				padding-right: 0;
				overflow: hidden;
				text-overflow: ellipsis;
				font-weight: 900;
				white-space: nowrap;
				color: black;
			}
		</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-column flex-column-fluid">
				<!--begin::Header-->
				<div id="kt_header" class="header align-items-stretch">
					<!--begin::Container-->
					<div class="container-xxl d-flex align-items-stretch justify-content-between">
						<!--begin::Brand-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 w-lg-225px me-5">
							<!--begin::Aside mobile toggle-->
							<div class="btn btn-icon btn-active-icon-primary ms-n2 me-2 d-flex d-lg-none" id="kt_aside_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Logo-->
							<a href="../../demo5/dist/index.html">
								<img alt="Logo" src="assets/media/logos/logo-demo5-dark.svg" class="d-none d-lg-inline h-30px" />
								<img alt="Logo" src="assets/media/logos/logo-demo5-dark-mobile.svg" class="d-lg-none h-25px" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Brand-->
						<!--begin::Wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
							<!--begin::Navbar-->
							<div class="d-flex align-items-stretch" id="kt_header_nav">
								<!--begin::Menu wrapper-->
								<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
									<!--begin::Menu-->
									<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
										<div class="menu-item me-lg-1">
											<a class="menu-link active  py-3" href="#">
												<span class="menu-title">Home</span>
											</a>
										</div>
                                        <div class="menu-item me-lg-1">
											<a class="menu-link  py-3" href="#">
												<span class="menu-title">Browse</span>
											</a>
										</div>
                                        <div class="menu-item me-lg-1">
											<a class="menu-link  py-3" href="#">
												<span class="menu-title">About</span>
											</a>
										</div>
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Menu wrapper-->
							</div>
							<!--end::Navbar-->

						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Container-->
				<div id="kt_content_container" class="d-flex flex-column-fluid align-items-stretch container-xxl">

					<!--begin::Wrapper-->
					<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
						<!--begin::Content-->
						<div class="content flex-column-fluid" id="kt_content">
							<!--begin::Toolbar-->
							<div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column py-1">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center my-1">
										<span class="text-dark fw-bolder fs-1">Search</span>
									</h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Post-->
							<div class="post" id="kt_post">
								<!--begin::Form-->
								<form action="#">
									<!--begin::Card-->
									<div class="card mb-7">
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Compact form-->
											<div class="d-flex align-items-center">
												<div class="position-relative w-md-200px me-md-2">
                                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
                                                        <option value="default" selected="selected">default</option>
                                                        <option value="exact">exact</option>
                                                        <option value="synonym" >synonym</option>
                                                        <option value="similarity">similarity</option>
                                                    </select>
                                                </div>
												<!--begin::Input group-->
												<div class="position-relative w-md-600px me-md-2">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
												</div>

												<!--end::Input group-->
												<!--begin:Action-->
												<div class="d-flex align-items-center">
													<button type="submit" class="btn btn-primary me-5">Search</button>
													<a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse" href="#kt_advanced_search_form">Advanced Search</a>
												</div>
												<!--end:Action-->
											</div>
											<!--end::Compact form-->
											<!--begin::Advance form-->
											<div class="collapse" id="kt_advanced_search_form">
												<!--begin::Separator-->
												<div class="separator separator-dashed mt-9 mb-6"></div>
												<!--end::Separator-->
												<!--begin::Row-->
												<div class="row g-8 mb-8">
                                                        <!--begin::Repeater-->
                                                        <div id="kt_docs_repeater_advanced">
                                                            <!--begin::Form group-->
                                                            <div class="form-group">
                                                                <div data-repeater-list="kt_docs_repeater_advanced">
                                                                    <div data-repeater-item>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Select Surah:</label>
                                                                                <select id="surah" class="form-select form-select-solid" data-kt-repeater="select2" data-placeholder="Select Surah">
																					<option value=""></option>
																					@foreach (\App\Models\Surah::get() as $surah)
																					<option value="{{ $surah->id }}">{{ $surah->arabic }}</option>
																					@endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="form-label">Select ayah:</label>
                                                                                <select id="ayah" class="form-select form-select-solid" data-kt-repeater="select2" data-placeholder="Select ayah" disabled>
																					<option value=""></option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form-label">Select topic:</label>
                                                                                <select id="topic" class="form-select form-select-solid" data-kt-repeater="select2" data-placeholder="Select topic" disabled>
																					<option value=""></option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-9">
                                                                                    <i class="la la-trash-o fs-3"></i>Delete
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Form group-->

                                                            <!--begin::Form group-->
                                                            <div class="form-group">
                                                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                                    <i class="la la-plus"></i>Add
                                                                </a>
                                                            </div>
                                                            <!--end::Form group-->
                                                        </div>
                                                        <!--end::Repeater-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Advance form-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</form>
								<!--end::Form-->

								<!--begin::Tab Content-->
								<div class="tab-content">
									<!--begin::Tab pane-->
									<div id="kt_project_users_card_pane" class="tab-pane fade show active">
										<!--begin::Row-->
										<div class="row g-6 g-xl-9">

										</div>
										<!--end::Row-->

									</div>
									<!--end::Tab pane-->
								</div>
								<!--end::Tab Content-->
							</div>
							<!--end::Post-->
						</div>
						<!--end::Content-->

					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/pages/search/horizontal.js"></script>
		<script src="assets/js/custom/pages/projects/users/users.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/modals/create-app.js"></script>
		<script src="assets/js/custom/modals/upgrade-plan.js"></script>
        <script src="assets/plugins/custom/formrepeater/jquery.repeater.min.js"></script>
        <script type="text/javascript">
			$('#kt_docs_repeater_advanced').repeater({
				initEmpty: false,

				defaultValues: {
					'text-input': 'foo'
				},

				show: function () {
					$(this).slideDown();

					// Re-init select2
					$(this).find('[data-kt-repeater="select2"]').select2();

					// Re-init flatpickr
					$(this).find('[data-kt-repeater="datepicker"]').flatpickr();

					// Re-init tagify
					new Tagify(this.querySelector('[data-kt-repeater="tagify"]'));
				},

				hide: function (deleteElement) {
					$(this).slideUp(deleteElement);
				},

				ready: function(){
					// Init select2
					$('[data-kt-repeater="select2"]').select2();

					// Init flatpickr
					$('[data-kt-repeater="datepicker"]').flatpickr();

					// Init Tagify
					new Tagify(document.querySelector('[data-kt-repeater="tagify"]'));
				}
			});
			$(document).ready(function () {
				$('#surah').on('change', function () {
					var idSurah = this.value;
					
					$.ajax({
						url: "{{url('api/fetch-ayah')}}",
						type: "POST",
						data: {
							surah_id: idSurah,
							_token: '{{csrf_token()}}'
						},
						dataType: 'json',
						success: function (result) {
						
							$.each(result, function (key, value) {
								$("#ayah").prop("disabled", false); // are now enabled.
								$("#ayah").append('<option value="' + value._source.ayah.ayahNumber + '">' + value._source.ayah.title + '</option>');
								
								
							});
							
							
						}
					});
				});
				$('#ayah').on('change', function () {
					var idAyah = this.value;
					$("#topic").html('');
					let topic=[];
					$.ajax({
						url: "{{url('api/fetch-topic')}}",
						type: "POST",
						data: {
							ayah_id: idAyah,
							_token: '{{csrf_token()}}'
						},
						dataType: 'json',
						success: function (result) {
						
							$.each(result, function (key, value) {
								
								
								value._source.paraghraphe.forEach(function(element) {
									
									var mytopic=element.topic.split(" ");
									mytopic.forEach(function(item) {
										if (topic.indexOf(item) === -1) topic.push(item);
									});
									
								});
								
								$("#topic").prop("disabled", false); // are now enabled.
								
							});
							topic.forEach(function(element) {
								$("#topic").append('<option value="' + element + '">' + element + '</option>');
							});
							

						}
					});
				});
				
		});
        </script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>