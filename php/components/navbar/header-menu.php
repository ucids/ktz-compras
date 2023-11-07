<div id="kt_app_header" class="app-header">
	<!--begin::Header primary-->
	<div class="app-header-primary" data-kt-sticky="true" data-kt-sticky-name="app-header-primary-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}">
		<!--begin::Header primary container-->
		<div class="app-container container-xxl d-flex align-items-stretch justify-content-between">
			<!--begin::Logo and search-->
			<div class="d-flex flex-grow-1 flex-lg-grow-0">
				<!--begin::Logo wrapper-->
				<div class="d-flex align-items-center me-7" id="kt_app_header_logo_wrapper">
					<!--begin::Header toggle-->
					<button class="d-lg-none btn btn-icon btn-flex btn-color-gray-600 btn-active-color-primary w-35px h-35px ms-n2 me-2" id="kt_app_header_menu_toggle">
						<i class="ki-outline ki-abstract-14 fs-2"></i>
					</button>
					<!--end::Header toggle-->
					<!--begin::Logo-->
					<a href="index.php" class="d-flex align-items-center me-lg-20 me-5">
						<!-- <img alt="Logo" src="assets/media/logos/demo-35-small.svg" class="h-20px d-sm-none d-inline" /> -->
						<img alt="Logo" src="assets/media/ktz/logo.png" class="h-25px h-lg-65px theme-light-show d-none d-sm-inline" />
						<img alt="Logo" src="assets/media/ktz/ki.png" class="h-20px h-lg-25px theme-dark-show d-none d-sm-inline" />
					</a>
					<!--end::Logo-->
				</div>
				<!--end::Logo wrapper-->
				<!--begin::Menu wrapper-->
				<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
					<!--begin::Menu-->
					<div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
							<!--begin:Menu link-->
							<span class="menu-link py-3">
								<span class="menu-title">Departamentos</span>
								<span class="menu-arrow d-lg-none"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
								<!--begin:Dashboards menu-->
								<div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
									<!--begin:Row-->
									<div class="row">
										<!--begin:Col-->
										<div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
											<!--begin:Row-->
											<div class="row">
												<!--begin:Col-->
												<div class="col-lg-6 mb-3">
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="index.php?departamento=ingenieria" class="menu-link active">
															<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																<i class="ki-outline ki-element-11 text-primary fs-1"></i>
															</span>
															<span class="d-flex flex-column">
																<span class="fs-6 fw-bold text-gray-800">Ingenieria</span>
																<span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Col-->
												<!--begin:Col-->
												<div class="col-lg-6 mb-3">
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="../../demo35/dist/dashboards/ecommerce.html" class="menu-link">
															<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																<i class="ki-outline ki-basket text-danger fs-1"></i>
															</span>
															<span class="d-flex flex-column">
																<span class="fs-6 fw-bold text-gray-800">eCommerce</span>
																<span class="fs-7 fw-semibold text-muted">Sales reports</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Col-->
												<!--begin:Col-->
												<div class="col-lg-6 mb-3">
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="../../demo35/dist/dashboards/projects.html" class="menu-link">
															<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																<i class="ki-outline ki-abstract-44 text-info fs-1"></i>
															</span>
															<span class="d-flex flex-column">
																<span class="fs-6 fw-bold text-gray-800">Projects</span>
																<span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Col-->
												<!--begin:Col-->
												<div class="col-lg-6 mb-3">
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="../../demo35/dist/dashboards/online-courses.html" class="menu-link">
															<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																<i class="ki-outline ki-color-swatch text-success fs-1"></i>
															</span>
															<span class="d-flex flex-column">
																<span class="fs-6 fw-bold text-gray-800">Online Courses</span>
																<span class="fs-7 fw-semibold text-muted">Student progress</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Col-->
												<!--begin:Col-->
												<div class="col-lg-6 mb-3">
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="../../demo35/dist/dashboards/marketing.html" class="menu-link">
															<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																<i class="ki-outline ki-chart-simple text-dark fs-1"></i>
															</span>
															<span class="d-flex flex-column">
																<span class="fs-6 fw-bold text-gray-800">Marketing</span>
																<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Col-->
												<!--begin:Col-->
												<div class="col-lg-6 mb-3">
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="../../demo35/dist/dashboards/bidding.html" class="menu-link">
															<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																<i class="ki-outline ki-switch text-warning fs-1"></i>
															</span>
															<span class="d-flex flex-column">
																<span class="fs-6 fw-bold text-gray-800">Bidding</span>
																<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Col-->
												<!--begin:Col-->
												<div class="col-lg-6 mb-3">
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="../../demo35/dist/dashboards/pos.html" class="menu-link">
															<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																<i class="ki-outline ki-abstract-42 text-danger fs-1"></i>
															</span>
															<span class="d-flex flex-column">
																<span class="fs-6 fw-bold text-gray-800">POS System</span>
																<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Col-->
												<!--begin:Col-->
												<div class="col-lg-6 mb-3">
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="../../demo35/dist/dashboards/call-center.html" class="menu-link">
															<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																<i class="ki-outline ki-call text-primary fs-1"></i>
															</span>
															<span class="d-flex flex-column">
																<span class="fs-6 fw-bold text-gray-800">Call Center</span>
																<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Col-->
											</div>
											<!--end:Row-->
											<div class="separator separator-dashed mx-5 my-5"></div>
											<!--begin:Landing-->
											<div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
												<div class="d-flex flex-column me-5">
													<div class="fs-6 fw-bold text-gray-800">Landing Page Template</div>
													<div class="fs-7 fw-semibold text-muted">Onpe page landing template with pricing & others</div>
												</div>
												<a href="../../demo35/dist/landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
											</div>
											<!--end:Landing-->
										</div>
										<!--end:Col-->
										<!--begin:Col-->
										<div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
											<!--begin:Heading-->
											<h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
											<!--end:Heading-->
											<!--begin:Menu item-->
											<div class="menu-item p-0 m-0">
												<!--begin:Menu link-->
												<a href="../../demo35/dist/dashboards/logistics.html" class="menu-link py-2">
													<span class="menu-title">Logistics</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item p-0 m-0">
												<!--begin:Menu link-->
												<a href="../../demo35/dist/dashboards/website-analytics.html" class="menu-link py-2">
													<span class="menu-title">Website Analytics</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item p-0 m-0">
												<!--begin:Menu link-->
												<a href="../../demo35/dist/dashboards/finance-performance.html" class="menu-link py-2">
													<span class="menu-title">Finance Performance</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item p-0 m-0">
												<!--begin:Menu link-->
												<a href="../../demo35/dist/dashboards/store-analytics.html" class="menu-link py-2">
													<span class="menu-title">Store Analytics</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item p-0 m-0">
												<!--begin:Menu link-->
												<a href="../../demo35/dist/dashboards/social.html" class="menu-link py-2">
													<span class="menu-title">Social</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item p-0 m-0">
												<!--begin:Menu link-->
												<a href="../../demo35/dist/dashboards/delivery.html" class="menu-link py-2">
													<span class="menu-title">Delivery</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item p-0 m-0">
												<!--begin:Menu link-->
												<a href="../../demo35/dist/dashboards/crypto.html" class="menu-link py-2">
													<span class="menu-title">Crypto</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item p-0 m-0">
												<!--begin:Menu link-->
												<a href="../../demo35/dist/dashboards/school.html" class="menu-link py-2">
													<span class="menu-title">School</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item p-0 m-0">
												<!--begin:Menu link-->
												<a href="../../demo35/dist/dashboards/podcast.html" class="menu-link py-2">
													<span class="menu-title">Podcast</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Col-->
									</div>
									<!--end:Row-->
								</div>
								<!--end:Dashboards menu-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
					</div>
					<!--end::Menu-->
				</div>
				<!--end::Menu wrapper-->
			</div>
			<!--end::Logo and search-->
			<!--begin::Navbar-->
			<div class="app-navbar flex-shrink-0">
				<!--begin::Notifications-->
				<div class="app-navbar-item">
					<!--begin::Menu- wrapper-->
					<div class="btn btn-icon btn-icon-gray-600 btn-active-color-primary" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom">
						<i class="ki-outline ki-notification-on fs-1"></i>
					</div>
					<!--begin::Menu-->
					<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
						<!--begin::Heading-->
						<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
							<!--begin::Title-->
							<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
								<span class="fs-8 opacity-75 ps-3">24 reports</span>
							</h3>
							<!--end::Title-->
							<!--begin::Tabs-->
							<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
								<li class="nav-item">
									<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
								</li>
							</ul>
							<!--end::Tabs-->
						</div>
						<!--end::Heading-->
						<!--begin::Tab content-->
						<div class="tab-content">
							<!--begin::Tab panel-->
							<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
								<!--begin::Items-->
								<div class="scroll-y mh-325px my-5 px-8">
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-primary">
													<i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="mb-0 me-2">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
												<div class="text-gray-400 fs-7">Phase 1 development</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">1 hr</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-danger">
													<i class="ki-outline ki-information fs-2 text-danger"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="mb-0 me-2">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
												<div class="text-gray-400 fs-7">Confidential staff documents</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">2 hrs</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-warning">
													<i class="ki-outline ki-briefcase fs-2 text-warning"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="mb-0 me-2">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
												<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">5 hrs</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-success">
													<i class="ki-outline ki-abstract-12 fs-2 text-success"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="mb-0 me-2">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
												<div class="text-gray-400 fs-7">New frontend admin theme</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">2 days</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-primary">
													<i class="ki-outline ki-colors-square fs-2 text-primary"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="mb-0 me-2">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
												<div class="text-gray-400 fs-7">Product launch status update</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">21 Jan</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-info">
													<i class="ki-outline ki-picture fs-2 text-info"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="mb-0 me-2">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
												<div class="text-gray-400 fs-7">Collection of banner images</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">21 Jan</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-warning">
													<i class="ki-outline ki-color-swatch fs-2 text-warning"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="mb-0 me-2">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
												<div class="text-gray-400 fs-7">Collection of SVG icons</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">20 March</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
								</div>
								<!--end::Items-->
								<!--begin::View more-->
								<div class="py-3 text-center border-top">
									<a href="../../demo35/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
										<i class="ki-outline ki-arrow-right fs-5"></i></a>
								</div>
								<!--end::View more-->
							</div>
							<!--end::Tab panel-->
							<!--begin::Tab panel-->
							<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column px-9">
									<!--begin::Section-->
									<div class="pt-10 pb-0">
										<!--begin::Title-->
										<h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
										<!--end::Text-->
										<!--begin::Action-->
										<div class="text-center mt-5 mb-9">
											<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
										</div>
										<!--end::Action-->
									</div>
									<!--end::Section-->
									<!--begin::Illustration-->
									<div class="text-center px-4">
										<img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/1.png" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Tab panel-->
							<!--begin::Tab panel-->
							<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
								<!--begin::Items-->
								<div class="scroll-y mh-325px my-5 px-8">
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-success me-4">200 OK</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Just now</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">2 hrs</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-success me-4">200 OK</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">5 hrs</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">2 days</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-success me-4">200 OK</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">1 week</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-success me-4">200 OK</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Mar 5</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">May 15</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Apr 3</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Jun 30</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Jul 10</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Sep 10</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Dec 10</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
								</div>
								<!--end::Items-->
								<!--begin::View more-->
								<div class="py-3 text-center border-top">
									<a href="../../demo35/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
										<i class="ki-outline ki-arrow-right fs-5"></i></a>
								</div>
								<!--end::View more-->
							</div>
							<!--end::Tab panel-->
						</div>
						<!--end::Tab content-->
					</div>
					<!--end::Menu-->
					<!--end::Menu wrapper-->
				</div>
				<!--end::Notifications-->
				<!--begin::Chat-->
				<div class="app-navbar-item">
					<!--begin::Menu wrapper-->
					<div class="btn btn-icon btn-icon-gray-600 btn-active-color-primary position-relative" id="kt_drawer_chat_toggle">
						<i class="ki-outline ki-message-notif fs-1"></i>
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::Chat-->
				<!--begin::User menu-->
				<div class="app-navbar-item ms-3 ms-lg-9" id="kt_header_user_menu_toggle">
					<!--begin::Menu wrapper-->
					<div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
						<!--begin:Info-->
						<div class="text-end d-none d-sm-flex flex-column justify-content-center me-3">
							<span class="text-gray-500 fs-8 fw-bold">Buenos dias</span>
							<a href="#" class="text-gray-800 text-hover-primary fs-7 fw-bold d-block">Costura</a>
						</div>
						<!--end:Info-->
						<!--begin::User-->
						<div class="cursor-pointer symbol symbol symbol-circle symbol-35px symbol-md-40px">
							<img class="" src="assets/media/ktz/cow_logo.png" alt="user" />
							<div class="position-absolute translate-middle bottom-0 mb-1 start-100 ms-n1 bg-success rounded-circle h-8px w-8px"></div>
						</div>
						<!--end::User-->
					</div>
					<!--begin::User account menu-->
					<?php
						if (isset($_SESSION['user_id'])) {

						?>
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content d-flex align-items-center px-3">
									<!--begin::Avatar-->
									<div class="symbol symbol-50px me-5">
										<img alt="Logo" src="assets/media/ktz/cow1.png	" />
									</div>
									<!--end::Avatar-->
									<!--begin::Username-->
									<div class="d-flex flex-column">
										<div class="fw-bold d-flex align-items-center fs-5"><? echo $username;?>
											<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"><? echo $rol; ?></span>
										</div>
										<a href="#" class="fw-semibold text-muted text-hover-primary fs-7"><? echo $email ?></a>
									</div>
									<!--end::Username-->
								</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator my-2"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="../../demo35/dist/account/overview.html" class="menu-link px-5">My Profile</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="../../demo35/dist/apps/projects/list.html" class="menu-link px-5">
									<span class="menu-text">My Projects</span>
									<span class="menu-badge">
										<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
									</span>
								</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
								<a href="#" class="menu-link px-5">
									<span class="menu-title">My Subscription</span>
									<span class="menu-arrow"></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo35/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo35/dist/account/billing.html" class="menu-link px-5">Billing</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo35/dist/account/statements.html" class="menu-link px-5">Payments</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo35/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
											<span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
												<i class="ki-outline ki-information-5 fs-5"></i>
											</span></a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content px-3">
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
												<span class="form-check-label text-muted fs-7">Notifications</span>
											</label>
										</div>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="../../demo35/dist/account/statements.html" class="menu-link px-5">My Statements</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator my-2"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
								<a href="#" class="menu-link px-5">
									<span class="menu-title position-relative">Mode
										<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
											<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
											<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
										</span></span>
								</a>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
											<span class="menu-icon" data-kt-element="icon">
												<i class="ki-outline ki-night-day fs-2"></i>
											</span>
											<span class="menu-title">Light</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
											<span class="menu-icon" data-kt-element="icon">
												<i class="ki-outline ki-moon fs-2"></i>
											</span>
											<span class="menu-title">Dark</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
											<span class="menu-icon" data-kt-element="icon">
												<i class="ki-outline ki-screen fs-2"></i>
											</span>
											<span class="menu-title">System</span>
										</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
								<a href="#" class="menu-link px-5">
									<span class="menu-title position-relative">Language
										<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
											<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo35/dist/account/settings.html" class="menu-link d-flex px-5 active">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
											</span>English</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo35/dist/account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
											</span>Spanish</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo35/dist/account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
											</span>German</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo35/dist/account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
											</span>Japanese</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo35/dist/account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
											</span>French</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5 my-1">
								<a href="../../demo35/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="admin/cerrar_sesion.php" class="menu-link px-5">Sign Out</a>
							</div>
							<!--end::Menu item-->
						</div>
					<? } ?>

					<!--end::User account menu-->
					<!--end::Menu wrapper-->
				</div>
				<!--end::User menu-->
				<!--begin::Header menu toggle-->
				<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
					<div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
						<i class="ki-outline ki-text-align-left fs-1"></i>
					</div>
				</div>
				<!--end::Header menu toggle-->
			</div>
			<!--end::Navbar-->
		</div>
		<!--end::Header primary container-->
	</div>
	<!--end::Header primary-->
	<!--begin::Header secondary-->
	<!--end::Header secondary-->
</div>