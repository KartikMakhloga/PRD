<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
				<span class="text-muted font-weight-bold mr-4">#XRS-45670</span>
				<a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a>
				<!--end::Actions-->
			</div>
			<!--end::Info-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Actions-->
				<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Today</a>
				<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Month</a>
				<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Year</a>
				<!--end::Actions-->
				<!--begin::Daterange-->
				<a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker"
					data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
					<span class="text-muted font-size-base font-weight-bold mr-2"
						id="kt_dashboard_daterangepicker_title">Today</span>
					<span class="text-primary font-size-base font-weight-bolder"
						id="kt_dashboard_daterangepicker_date">Aug 16</span>
				</a>
				<!--end::Daterange-->
				<!--begin::Dropdowns-->
				<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
					<a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						<span class="svg-icon svg-icon-success svg-icon-lg">
							<!--begin::Svg Icon | path:<?= base_url(); ?>assets/media/svg/icons/Files/File-plus.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path
										d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
										fill="#000000" fill-rule="nonzero" opacity="0.3" />
									<path
										d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
										fill="#000000" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</a>
					<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3">
						<!--begin::Navigation-->
						<ul class="navi navi-hover py-5">
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-drop"></i>
									</span>
									<span class="navi-text">New Group</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-list-3"></i>
									</span>
									<span class="navi-text">Contacts</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-rocket-1"></i>
									</span>
									<span class="navi-text">Groups</span>
									<span class="navi-link-badge">
										<span class="label label-light-primary label-inline font-weight-bold">new</span>
									</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-bell-2"></i>
									</span>
									<span class="navi-text">Calls</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-gear"></i>
									</span>
									<span class="navi-text">Settings</span>
								</a>
							</li>
							<li class="navi-separator my-3"></li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-magnifier-tool"></i>
									</span>
									<span class="navi-text">Help</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-bell-2"></i>
									</span>
									<span class="navi-text">Privacy</span>
									<span class="navi-link-badge">
										<span class="label label-light-danger label-rounded font-weight-bold">5</span>
									</span>
								</a>
							</li>
						</ul>
						<!--end::Navigation-->
					</div>
				</div>
				<!--end::Dropdowns-->
			</div>
			<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			<!--begin::Row-->
			<div class="row">
				<div class="col-lg-6 col-xxl-4">
					<!--begin::Mixed Widget 1-->
					<div class="card card-custom bg-gray-100 card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 bg-danger py-5">
							<h3 class="card-title font-weight-bolder text-white">Sales Stat</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#"
										class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>
									<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header pb-1">
												<span
													class="text-primary text-uppercase font-weight-bold font-size-sm">Add
													new:</span>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-shopping-cart-1"></i>
													</span>
													<span class="navi-text">Order</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-calendar-8"></i>
													</span>
													<span class="navi-text">Event</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-graph-1"></i>
													</span>
													<span class="navi-text">Report</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Post</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-writing"></i>
													</span>
													<span class="navi-text">File</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0 position-relative overflow-hidden">
							<!--begin::Chart-->
							<div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger"
								style="height: 200px"></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-spacer mt-n25">
								<!--begin::Row-->
								<div class="row m-0">
									<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
										<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
											<!--begin::Svg Icon | path:<?= base_url(); ?>assets/media/svg/icons/Media/Equalizer.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
														height="16" rx="1.5" />
													<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
													<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
													<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="#" class="text-warning font-weight-bold font-size-h6">Weekly Sales</a>
									</div>
									<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
										<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
											<!--begin::Svg Icon | path:<?= base_url(); ?>assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path
														d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
														fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path
														d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
														fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">New
											Users</a>
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row m-0">
									<div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
										<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
											<!--begin::Svg Icon | path:<?= base_url(); ?>assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path
														d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
														fill="#000000" fill-rule="nonzero" />
													<path
														d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
														fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Item
											Orders</a>
									</div>
									<div class="col bg-light-success px-6 py-8 rounded-xl">
										<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
											<!--begin::Svg Icon | path:<?= base_url(); ?>assets/media/svg/icons/Communication/Urgent-mail.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
														fill="#000000" opacity="0.3" />
													<path
														d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
														fill="#000000" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Bug
											Reports</a>
									</div>
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 1-->
				</div>
				<div class="col-lg-6 col-xxl-4">
					<!--begin::List Widget 9-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header align-items-center border-0 mt-4">
							<h3 class="card-title align-items-start flex-column">
								<span class="font-weight-bolder text-dark">My Activity</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
							</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted"
													data-toggle="tooltip" data-placement="right"
													title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-4">
							<!--begin::Timeline-->
							<div class="timeline timeline-6 mt-3">
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-warning icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">
										Outlines keep you honest. And keep structure</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-success icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Content-->
									<div class="timeline-content d-flex">
										<span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL
											meeting</span>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make
										deposit
										<a href="#" class="text-primary">USD 700</a>. to ESL
									</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-primary icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
										Indulging in poorly driving and keep structure keep great</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New
										order placed
										<a href="#" class="text-primary">#XF-2356</a>.
									</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-info icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
										Outlines keep and you honest. Indulging in poorly driving</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-primary icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
										Indulging in poorly driving and keep structure keep great</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">New
										order placed
										<a href="#" class="text-primary">#XF-2356</a>.
									</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Timeline-->
						</div>
						<!--end: Card Body-->
					</div>
					<!--end: List Widget 9-->
				</div>
				<div class="col-lg-6 col-xxl-4">
					<!--begin::Stats Widget 11-->
					<div class="card card-custom card-stretch card-stretch-half gutter-b">
						<!--begin::Body-->
						<div class="card-body p-0">
							<div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
								<span class="symbol symbol-50 symbol-light-success mr-2">
									<span class="symbol-label">
										<span class="svg-icon svg-icon-xl svg-icon-success">
											<!--begin::Svg Icon | path:<?= base_url(); ?>assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path
														d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
														fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
								</span>
								<div class="d-flex flex-column text-right">
									<span class="text-dark-75 font-weight-bolder font-size-h3">750$</span>
									<span class="text-muted font-weight-bold mt-2">Weekly Income</span>
								</div>
							</div>
							<div id="kt_stats_widget_11_chart" class="card-rounded-bottom" data-color="success"
								style="height: 150px"></div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Stats Widget 11-->
					<!--begin::Stats Widget 12-->
					<div class="card card-custom card-stretch card-stretch-half gutter-b">
						<!--begin::Body-->
						<div class="card-body p-0">
							<div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
								<span class="symbol symbol-50 symbol-light-primary mr-2">
									<span class="symbol-label">
										<span class="svg-icon svg-icon-xl svg-icon-primary">
											<!--begin::Svg Icon | path:<?= base_url(); ?>assets/media/svg/icons/Communication/Group.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path
														d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
														fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path
														d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
														fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
								</span>
								<div class="d-flex flex-column text-right">
									<span class="text-dark-75 font-weight-bolder font-size-h3">+6,5K</span>
									<span class="text-muted font-weight-bold mt-2">New Users</span>
								</div>
							</div>
							<div id="kt_stats_widget_12_chart" class="card-rounded-bottom" data-color="primary"
								style="height: 150px"></div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Stats Widget 12-->
				</div>

				<?php if ($this->session->userdata('role_name') == 'district'): ?>
					<div class="col-xxl-12 order-2 order-xxl-1">
						<!--begin::Advance Table Widget 2-->
						<div class="card card-custom card-stretch gutter-b">
							<!--begin::Header-->

							<!--end::Header-->
							<!--begin::Body-->
							<div class="content d-flex flex-column flex-column-fluid " id="kt_content">
								
								<!--begin::Entry-->
								<div class="d-flex flex-column-fluid">
									<!--begin::Container-->
									<div class="container">
										<!--begin::Card-->
										<div class="card card-custom">
											<!--begin::Header-->
											<div class="card-header flex-wrap border-0 pt-6 pb-0">
												<div class="card-title">
													<h3 class="card-label">Jawans Details
														<!-- <span class="d-block text-muted pt-2 font-size-sm">User management made easy</span> -->
													</h3>
												</div>

												<div class="card-toolbar">
													<div class="dropdown dropdown-inline">
														<select
															class="form-select form-select-sm form-control form-control-sm"
															id="kt_datatable_search_status">
															<option value="" selected disabled>Select Block</option>
															<?php if (!empty($blocks)): ?>
																<option value="0">All</option>
																<?php foreach ($blocks as $block): ?>
																	<option value="<?= htmlspecialchars($block->id) ?>">
																		<?= htmlspecialchars($block->name) ?>
																	</option>
																<?php endforeach; ?>
															<?php else: ?>
																<option value="">No blocks available</option>
															<?php endif; ?>
														</select>
													</div>
												</div>



											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin: Datatable-->
												<div class="datatable datatable-bordered datatable-head-custom"
													id="kt_datatable">

												</div>
												<!--end: Datatable-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Container-->
								</div>
								<!--end::Entry-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Advance Table Widget 2-->
					</div>
				<?php endif; ?>
				<?php if ($this->session->userdata('role_name') == 'admin'): ?>
					<div class="col-xxl-12 order-2 order-xxl-1">
						<!--begin::Advance Table Widget 2-->
						<div class="card card-custom card-stretch gutter-b">
							<!--begin::Header-->

							<!--end::Header-->
							<!--begin::Body-->
							<div class="content d-flex flex-column flex-column-fluid " id="kt_content">
							
								<!--begin::Entry-->
								<div class="d-flex flex-column-fluid">
									<!--begin::Container-->
									<div class="container">
										<!--begin::Card-->
										<div class="card card-custom">
											<!--begin::Header-->
											<div class="card-header flex-wrap border-0 pt-6 pb-0">
												<div class="card-title">
													<h3 class="card-label">Jawans Details
														<!-- <span class="d-block text-muted pt-2 font-size-sm">User management made easy</span> -->
													</h3>
												</div>

												<div class="card-toolbar">
													<div class="dropdown dropdown-inline">
														<select
															class="form-select form-select-sm form-control form-control-sm"
															id="kt_datatable_search_status">
															<option value="" selected disabled>Select District</option>
															<?php if (!empty($districts)): ?>
																<!-- <option value="0">All</option> -->
																<?php foreach ($districts as $district): ?>
																	<option value="<?= htmlspecialchars($district->id) ?>">
																		<?= htmlspecialchars($district->name) ?>
																	</option>
																<?php endforeach; ?>
															<?php else: ?>
																<option value="">No districts available</option>
															<?php endif; ?>
														</select>
													</div>
												</div>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline">
														<select
															class="form-select form-select-sm form-control form-control-sm"
															id="kt_datatable_search_statuss">
															<option value="" selected disabled>Selected District first
															</option>
															<?php if (!empty($blocks)): ?>
																<!-- <?php foreach ($blocks as $block): ?>
																	<option value="<?= htmlspecialchars($block->id) ?>">
																		<?= htmlspecialchars($block->name) ?>
																	</option>
																<?php endforeach; ?> -->
															<?php else: ?>
																<option value="">No blocks available</option>
															<?php endif; ?>
														</select>
													</div>
												</div>



											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin: Datatable-->
												<div class="datatable datatable-bordered datatable-head-custom"
													id="kt_datatable">

												</div>
												<!--end: Datatable-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Container-->
								</div>
								<!--end::Entry-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Advance Table Widget 2-->
					</div>
				<?php endif; ?>
				<div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
					<!--begin::List Widget 3-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0">
							<h3 class="card-title font-weight-bolder text-dark">Authors</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#" class="btn btn-light-primary btn-sm font-weight-bolder dropdown-toggle"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">August</a>
									<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header pb-1">
												<span
													class="text-primary text-uppercase font-weight-bold font-size-sm">Add
													new:</span>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-shopping-cart-1"></i>
													</span>
													<span class="navi-text">Order</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-calendar-8"></i>
													</span>
													<span class="navi-text">Event</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-graph-1"></i>
													</span>
													<span class="navi-text">Report</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Post</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-writing"></i>
													</span>
													<span class="navi-text">File</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-2">
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-10">
								<!--begin::Symbol-->
								<div class="symbol symbol-40 symbol-light-success mr-5">
									<span class="symbol-label">
										<img src="<?= base_url(); ?>assets/media/svg/avatars/009-boy-4.svg"
											class="h-75 align-self-end" alt="" />
									</span>
								</div>
								<!--end::Symbol-->
								<!--begin::Text-->
								<div class="d-flex flex-column flex-grow-1 font-weight-bold">
									<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>
									<span class="text-muted">PHP, SQLite, Artisan CLI</span>
								</div>
								<!--end::Text-->
								<!--begin::Dropdown-->
								<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
									data-placement="left">
									<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted"
													data-toggle="tooltip" data-placement="right"
													title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-10">
								<!--begin::Symbol-->
								<div class="symbol symbol-40 symbol-light-success mr-5">
									<span class="symbol-label">
										<img src="<?= base_url(); ?>assets/media/svg/avatars/006-girl-3.svg"
											class="h-75 align-self-end" alt="" />
									</span>
								</div>
								<!--end::Symbol-->
								<!--begin::Text-->
								<div class="d-flex flex-column flex-grow-1 font-weight-bold">
									<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Anne Clarc</a>
									<span class="text-muted">PHP, SQLite, Artisan CLI</span>
								</div>
								<!--end::Text-->
								<!--begin::Dropdown-->
								<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
									data-placement="left">
									<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted"
													data-toggle="tooltip" data-placement="right"
													title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-10">
								<!--begin::Symbol-->
								<div class="symbol symbol-40 symbol-light-success mr-5">
									<span class="symbol-label">
										<img src="<?= base_url(); ?>assets/media/svg/avatars/011-boy-5.svg"
											class="h-75 align-self-end" alt="" />
									</span>
								</div>
								<!--end::Symbol-->
								<!--begin::Text-->
								<div class="d-flex flex-column flex-grow-1 font-weight-bold">
									<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Kristaps
										Zumman</a>
									<span class="text-muted">PHP, SQLite, Artisan CLI</span>
								</div>
								<!--end::Text-->
								<!--begin::Dropdown-->
								<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
									data-placement="left">
									<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted"
													data-toggle="tooltip" data-placement="right"
													title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end:Dropdown-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-10">
								<!--begin::Symbol-->
								<div class="symbol symbol-40 symbol-light-success mr-5">
									<span class="symbol-label">
										<img src="<?= base_url(); ?>assets/media/svg/avatars/015-boy-6.svg"
											class="h-75 align-self-end" alt="" />
									</span>
								</div>
								<!--end::Symbol-->
								<!--begin::Text-->
								<div class="d-flex flex-column flex-grow-1 font-weight-bold">
									<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>
									<span class="text-muted">PHP, SQLite, Artisan CLI</span>
								</div>
								<!--end::Text-->
								<!--begin::Dropdown-->
								<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
									data-placement="left">
									<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted"
													data-toggle="tooltip" data-placement="right"
													title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40 symbol-light-success mr-5">
									<span class="symbol-label">
										<img src="<?= base_url(); ?>assets/media/svg/avatars/016-boy-7.svg"
											class="h-75 align-self-end" alt="" />
									</span>
								</div>
								<!--end::Symbol-->
								<!--begin::Text-->
								<div class="d-flex flex-column flex-grow-1 font-weight-bold">
									<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Carles Puyol</a>
									<span class="text-muted">PHP, SQLite, Artisan CLI</span>
								</div>
								<!--end::Text-->
								<!--begin::Dropdown-->
								<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
									data-placement="left">
									<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted"
													data-toggle="tooltip" data-placement="right"
													title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::List Widget 3-->
				</div>
				<div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
					<!--begin::List Widget 4-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0">
							<h3 class="card-title font-weight-bolder text-dark">Todo</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#"
										class="btn btn-light btn-sm font-size-sm font-weight-bolder dropdown-toggle text-dark-75"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
									<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header pb-1">
												<span
													class="text-primary text-uppercase font-weight-bold font-size-sm">Add
													new:</span>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-shopping-cart-1"></i>
													</span>
													<span class="navi-text">Order</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-calendar-8"></i>
													</span>
													<span class="navi-text">Event</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-graph-1"></i>
													</span>
													<span class="navi-text">Report</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Post</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-writing"></i>
													</span>
													<span class="navi-text">File</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-2">
							<!--begin::Item-->
							<div class="d-flex align-items-center">
								<!--begin::Bullet-->
								<span class="bullet bullet-bar bg-success align-self-stretch"></span>
								<!--end::Bullet-->
								<!--begin::Checkbox-->
								<label
									class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
									<input type="checkbox" name="select" value="1" />
									<span></span>
								</label>
								<!--end::Checkbox-->
								<!--begin::Text-->
								<div class="d-flex flex-column flex-grow-1">
									<a href="#"
										class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Create
										FireStone Logo</a>
									<span class="text-muted font-weight-bold">Due in 2 Days</span>
								</div>
								<!--end::Text-->
								<!--begin::Dropdown-->
								<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
									data-placement="left">
									<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted"
													data-toggle="tooltip" data-placement="right"
													title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end:Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mt-10">
								<!--begin::Bullet-->
								<span class="bullet bullet-bar bg-primary align-self-stretch"></span>
								<!--end::Bullet-->
								<!--begin::Checkbox-->
								<label
									class="checkbox checkbox-lg checkbox-light-primary checkbox-inline flex-shrink-0 m-0 mx-4">
									<input type="checkbox" value="1" />
									<span></span>
								</label>
								<!--end::Checkbox-->
								<!--begin::Text-->
								<div class="d-flex flex-column flex-grow-1">
									<a href="#"
										class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Stakeholder
										Meeting</a>
									<span class="text-muted font-weight-bold">Due in 3 Days</span>
								</div>
								<!--end::Text-->
								<!--begin::Dropdown-->
								<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
									data-placement="left">
									<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted"
													data-toggle="tooltip" data-placement="right"
													title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mt-10">
								<!--begin::Bullet-->
								<span class="bullet bullet-bar bg-warning align-self-stretch"></span>
								<!--end::Bullet-->
								<!--begin::Checkbox-->
								<label
									class="checkbox checkbox-lg checkbox-light-warning checkbox-inline flex-shrink-0 m-0 mx-4">
									<input type="checkbox" value="1" />
									<span></span>
								</label>
								<!--end::Checkbox-->
								<!--begin::Text-->
								<div class="d-flex flex-column flex-grow-1">
									<a href="#"
										class="text-dark-75 text-hover-primary font-size-sm font-weight-bold font-size-lg mb-1">Scoping
										&amp; Estimations</a>
									<span class="text-muted font-weight-bold">Due in 5 Days</span>
								</div>
								<!--end::Text-->
								<!--begin: Dropdown-->
								<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
									data-placement="left">
									<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted"
													data-toggle="tooltip" data-placement="right"
													title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mt-10">
								<!--begin::Bullet-->
								<span class="bullet bullet-bar bg-info align-self-stretch"></span>
								<!--end::Bullet-->
								<!--begin::Checkbox-->
								<label
									class="checkbox checkbox-lg checkbox-light-info checkbox-inline flex-shrink-0 m-0 mx-4">
									<input type="checkbox" value="1" />
									<span></span>
								</label>
								<!--end::Checkbox-->
								<!--begin::Text-->
								<div class="d-flex flex-column flex-grow-1">
									<a href="#"
										class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Sprint
										Showcase</a>
									<span class="text-muted font-weight-bold">Due in 1 Day</span>
								</div>
								<!--end::Text-->
								<!--begin::Dropdown-->
								<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
									data-placement="left">
									<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span>
													<span class="navi-text">New Group</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-list-3"></i>
													</span>
													<span class="navi-text">Contacts</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Groups</span>
													<span class="navi-link-badge">
														<span
															class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Calls</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
													<span class="navi-text">Settings</span>
												</a>
											</li>
											<li class="navi-separator my-3"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-magnifier-tool"></i>
													</span>
													<span class="navi-text">Help</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Privacy</span>
													<span class="navi-link-badge">
														<span
															class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mt-10">
								<!--begin::Bullet-->
								<span class="bullet bullet-bar bg-danger align-self-stretch"></span>
								<!--end::Bullet-->
								<!--begin::Checkbox-->
								<label
									class="checkbox checkbox-lg checkbox-light-danger checkbox-inline flex-shrink-0 m-0 mx-4">
									<input type="checkbox" value="1" />
									<span></span>
								</label>
								<!--end::Checkbox:-->
								<!--begin::Title-->
								<div class="d-flex flex-column flex-grow-1">
									<a href="#"
										class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Project
										Retro</a>
									<span class="text-muted font-weight-bold">Due in 12 Days</span>
								</div>
								<!--end::Text-->
								<!--begin: Dropdown-->
								<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
									data-placement="left">
									<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted"
													data-toggle="tooltip" data-placement="right"
													title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span
															class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Body-->
					</div>
					<!--end:List Widget 4-->
				</div>
				<div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
					<!--begin::List Widget 8-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0">
							<h3 class="card-title font-weight-bolder text-dark">Trends</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-ver"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header pb-1">
												<span
													class="text-primary text-uppercase font-weight-bold font-size-sm">Add
													new:</span>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-shopping-cart-1"></i>
													</span>
													<span class="navi-text">Order</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-calendar-8"></i>
													</span>
													<span class="navi-text">Event</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-graph-1"></i>
													</span>
													<span class="navi-text">Report</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Post</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-writing"></i>
													</span>
													<span class="navi-text">File</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-0">
							<!--begin::Item-->
							<div class="mb-10">
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-45 symbol-light mr-5">
										<span class="symbol-label">
											<img src="<?= base_url(); ?>assets/media/svg/misc/006-plurk.svg"
												class="h-50 align-self-center" alt="" />
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Text-->
									<div class="d-flex flex-column flex-grow-1">
										<a href="#"
											class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Top
											Authors</a>
										<span class="text-muted font-weight-bold">5 day ago</span>
									</div>
									<!--end::Text-->
								</div>
								<!--end::Section-->
								<!--begin::Desc-->
								<p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the top
									Authors that fits within this section</p>
								<!--end::Desc-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="mb-10">
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-45 symbol-light mr-5">
										<span class="symbol-label">
											<img src="<?= base_url(); ?>assets/media/svg/misc/015-telegram.svg"
												class="h-50 align-self-center" alt="" />
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Text-->
									<div class="d-flex flex-column flex-grow-1">
										<a href="#"
											class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Popular
											Authors</a>
										<span class="text-muted font-weight-bold">5 day ago</span>
									</div>
									<!--end::Text-->
								</div>
								<!--end::Section-->
								<!--begin::Desc-->
								<p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the Popular
									Authors that fits within this section</p>
								<!--end::Desc-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="">
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-45 symbol-light mr-5">
										<span class="symbol-label">
											<img src="<?= base_url(); ?>assets/media/svg/misc/014-kickstarter.svg"
												class="h-50 align-self-center" alt="" />
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Text-->
									<div class="d-flex flex-column flex-grow-1">
										<a href="#"
											class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">New
											Users</a>
										<span class="text-muted font-weight-bold">5 day ago</span>
									</div>
									<!--end::Text-->
								</div>
								<!--end::Section-->
								<!--begin::Desc-->
								<p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the New Users
									that fits within this section</p>
								<!--end::Desc-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Body-->
					</div>
					<!--end: Card-->
					<!--end::List Widget 8-->
				</div>
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row">
				<div class="col-lg-4">
					<!--begin::Mixed Widget 14-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<h3 class="card-title font-weight-bolder">Action Needed</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span>
													<span class="navi-text">New Group</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-list-3"></i>
													</span>
													<span class="navi-text">Contacts</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Groups</span>
													<span class="navi-link-badge">
														<span
															class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Calls</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
													<span class="navi-text">Settings</span>
												</a>
											</li>
											<li class="navi-separator my-3"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-magnifier-tool"></i>
													</span>
													<span class="navi-text">Help</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Privacy</span>
													<span class="navi-link-badge">
														<span
															class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<div class="flex-grow-1">
								<div id="kt_mixed_widget_14_chart" style="height: 200px"></div>
							</div>
							<div class="pt-5">
								<p class="text-center font-weight-normal font-size-lg pb-7">Notes: Current sprint
									requires stakeholders
									<br />to approve newly amended policies
								</p>
								<a href="#"
									class="btn btn-success btn-shadow-hover font-weight-bolder w-100 py-3">Generate
									Report</a>
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 14-->
				</div>
				<div class="col-lg-8">
					<!--begin::Advance Table Widget 4-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label font-weight-bolder text-dark">Agents Stats</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new
									members</span>
							</h3>
							<div class="card-toolbar">
								<a href="#" class="btn btn-info font-weight-bolder font-size-sm mr-3">New Report</a>
								<a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Create</a>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-0 pb-3">
							<div class="tab-content">
								<!--begin::Table-->
								<div class="table-responsive">
									<table
										class="table table-head-custom table-head-bg table-borderless table-vertical-center">
										<thead>
											<tr class="text-left text-uppercase">
												<th style="min-width: 250px" class="pl-7">
													<span class="text-dark-75">products</span>
												</th>
												<th style="min-width: 100px">earnings</th>
												<th style="min-width: 100px">comission</th>
												<th style="min-width: 100px">company</th>
												<th style="min-width: 130px">rating</th>
												<th style="min-width: 80px"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="pl-0 py-8">
													<div class="d-flex align-items-center">
														<div class="symbol symbol-50 symbol-light mr-4">
															<span class="symbol-label">
																<img src="<?= base_url(); ?>assets/media/svg/avatars/001-boy.svg"
																	class="h-75 align-self-end" alt="" />
															</span>
														</div>
														<div>
															<a href="#"
																class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad
																Simmons</a>
															<span class="text-muted font-weight-bold d-block">HTML, JS,
																ReactJS</span>
														</div>
													</div>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">$8,000,000</span>
													<span class="text-muted font-weight-bold">In Proccess</span>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
													<span class="text-muted font-weight-bold">Paid</span>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
													<span class="text-muted font-weight-bold">Web, UI/UX Design</span>
												</td>
												<td>
													<img src="<?= base_url(); ?>assets/media/logos/stars.png"
														alt="image" style="width: 5.5rem" />
													<span class="text-muted font-weight-bold d-block font-size-sm">Best
														Rated</span>
												</td>
												<td class="pr-0 text-right">
													<a href="#"
														class="btn btn-light-success font-weight-bolder font-size-sm">View
														Offer</a>
												</td>
											</tr>
											<tr>
												<td class="pl-0 py-0">
													<div class="d-flex align-items-center">
														<div class="symbol symbol-50 symbol-light mr-4">
															<span class="symbol-label">
																<img src="<?= base_url(); ?>assets/media/svg/avatars/018-girl-9.svg"
																	class="h-75 align-self-end" alt="" />
															</span>
														</div>
														<div>
															<a href="#"
																class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie
																Clarcson</a>
															<span class="text-muted font-weight-bold d-block">C#,
																ASP.NET, MS SQL</span>
														</div>
													</div>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">$23,000,000</span>
													<span class="text-muted font-weight-bold">Pending</span>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">$1,600</span>
													<span class="text-muted font-weight-bold">Rejected</span>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">Agoda</span>
													<span class="text-muted font-weight-bold">Houses &amp; Hotels</span>
												</td>
												<td>
													<img src="<?= base_url(); ?>assets/media/logos/stars.png"
														alt="image" style="width: 5.5rem" />
													<span class="text-muted font-weight-bold d-block font-size-sm">Above
														Avarage</span>
												</td>
												<td class="pr-0 text-right">
													<a href="#"
														class="btn btn-light-success font-weight-bolder font-size-sm">View
														Offer</a>
												</td>
											</tr>
											<tr>
												<td class="pl-0 py-8">
													<div class="d-flex align-items-center">
														<div class="symbol symbol-50 symbol-light mr-4">
															<span class="symbol-label">
																<img src="<?= base_url(); ?>assets/media/svg/avatars/047-girl-25.svg"
																	class="h-75 align-self-end" alt="" />
															</span>
														</div>
														<div>
															<a href="#"
																class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron
																Wayde</a>
															<span class="text-muted font-weight-bold d-block">PHP,
																Laravel, VueJS</span>
														</div>
													</div>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">$34,000,000</span>
													<span class="text-muted font-weight-bold">Paid</span>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">$6,700</span>
													<span class="text-muted font-weight-bold">Paid</span>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">RoadGee</span>
													<span class="text-muted font-weight-bold">Paid</span>
												</td>
												<td>
													<img src="<?= base_url(); ?>assets/media/logos/stars.png"
														alt="image" style="width: 5.5rem" />
													<span class="text-muted font-weight-bold d-block font-size-sm">Best
														Rated</span>
												</td>
												<td class="pr-0 text-right">
													<a href="#"
														class="btn btn-light-success font-weight-bolder font-size-sm">View
														Offer</a>
												</td>
											</tr>
											<tr>
												<td class="pl-0 py-0">
													<div class="d-flex align-items-center">
														<div class="symbol symbol-50 symbol-light mr-4">
															<span class="symbol-label">
																<img src="<?= base_url(); ?>assets/media/svg/avatars/014-girl-7.svg"
																	class="h-75 align-self-end" alt="" />
															</span>
														</div>
														<div>
															<a href="#"
																class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali
																Trump</a>
															<span class="text-muted font-weight-bold d-block">Python,
																PostgreSQL, ReactJS</span>
														</div>
													</div>
												</td>
												<td class="text-left pr-0">
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,600,000</span>
													<span class="text-muted font-weight-bold">Paid</span>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">$14,000</span>
													<span class="text-muted font-weight-bold">Pending</span>
												</td>
												<td>
													<span
														class="text-dark-75 font-weight-bolder d-block font-size-lg">The
														Hill</span>
													<span class="text-muted font-weight-bold">Insurance</span>
												</td>
												<td>
													<img src="<?= base_url(); ?>assets/media/logos/stars.png"
														style="width: 5.5rem" alt="" />
													<span
														class="text-muted font-weight-bold d-block font-size-sm">Avarage</span>
												</td>
												<td class="pr-0 text-right">
													<a href="#"
														class="btn btn-light-success font-weight-bolder font-size-sm"
														style="width: 7rem">View Offer</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--end::Table-->
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Advance Table Widget 4-->
				</div>
			</div>
			<!--end::Row-->
			<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->

<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
<?php if ($this->session->userdata('role_name') == 'district'): ?>
	<script>
		"use strict";

		var KTAppsUsersListDatatable = function () {
			var datatable;
			var baseUrl = "<?php echo base_url(); ?>";
			var districtId = "<?php echo $this->session->userdata('user_id'); ?>";

			var _init = function () {
				datatable = $('#kt_datatable').KTDatatable({
					data: {
						type: 'remote',
						source: {
							read: {
								url: baseUrl + 'district/getJawansByDistrict/' + districtId,
								method: 'GET',
							},
						},
						pageSize: 5,
						serverPaging: true,
						serverFiltering: true,
						serverSorting: true,
					},
					layout: {
						scroll: false,
						footer: false,
					},
					sortable: true,
					pagination: true,
					columns: [
						{
							field: 'id',
							title: '#',
							sortable: 'asc',
							width: 50,
							type: 'number',
							selector: false,
							textAlign: 'left',
						},
						{
							field: 'block_id',
							title: 'Block'
						},
						{
							field: 'name',
							title: 'Name',
						},
						{
							field: 'father_name',
							title: 'Father Name',
						},
						{
							field: 'residential_address',
							title: 'Residence Address',
						},
						{
							field: 'permanent_address',
							title: 'Permanent Address',
						},
						{
                        field: 'height',
                        title: 'Height',
                    },
                    {
                        field: 'weight',
                        title: 'Weight',
                    },
						{
							field: "birth_mark",
							title: "Birth Mark",
						},
						{
							field: "aadhar",
							title: "Aadhar",
						},
						{
							field: "pan",
							title: "PAN",
						},
						{
							field: "mobile_number",
							title: "Mobile Number",
						},
						{
							field: "alternative_number",
							title: "Alternate Number",
						},
						{
                        field: 'blood_group',
                        title: 'Blood Group',
                    },
						{
							field: "training",
							title: "Training",
						},
						{
							field: "skills",
							title: "Skills",
						},
						{
							field: "bank_name",
							title: "Bank Name",
						},
						{
							field: "account_number",
							title: "Bank Account Number",
						},
						{
							field: "ifsc_code",
							title: "IFSC Code",
						},
						{
							field: "created_at",
							title: "Created At",
						},
					],
				});

				$('#kt_datatable_search_status').on('change', function () {
					var blockId = $(this).val();
					if (blockId && blockId == 0) {
						var newUrl = baseUrl + 'district/getJawansByDistrict/' + districtId;

						// Set the URL directly in the datatable config if possible
						datatable.options.data.source.read.url = newUrl;
						datatable.reload(); // Make sure this triggers
					} else if (blockId) {
						var newUrl = baseUrl + 'district/getJawansByBlock/' + blockId;

						// Set the URL directly in the datatable config if possible
						datatable.options.data.source.read.url = newUrl;
						datatable.reload(); // Make sure this triggers
					}
				});



			};

			return {
				init: function () {
					_init();
				},
			};
		}();

		jQuery(document).ready(function () {
			KTAppsUsersListDatatable.init();
		});
	</script>
<?php endif; ?>

<?php if ($this->session->userdata('role_name') == 'admin'): ?>
	<script>
		"use strict";

		var KTAppsUsersListDatatable = function () {
			var datatable;
			var baseUrl = "<?php echo base_url(); ?>";
			var districtId = "<?php echo $this->session->userdata('user_id'); ?>";

			var _init = function () {
				datatable = $('#kt_datatable').KTDatatable({
					data: {
						type: 'remote',
						source: {
							read: {
								url: baseUrl + 'jawans',
								method: 'GET',
							},
						},
						pageSize: 5,
						serverPaging: true,
						serverFiltering: true,
						serverSorting: true,
					},
					layout: {
						scroll: false,
						footer: false,
					},
					sortable: true,
					pagination: true,
					columns: [
						{
							field: 'id',
							title: '#',
							sortable: 'asc',
							width: 50,
							type: 'number',
							selector: false,
							textAlign: 'left',
						},
						{
							field: 'block_id',
							title: 'Block'
						},
						{
							field: 'name',
							title: 'Name',
						},
						{
							field: 'father_name',
							title: 'Father Name',
						},
						{
							field: 'residential_address',
							title: 'Residence Address',
						},
						{
							field: 'permanent_address',
							title: 'Permanent Address',
						},
						{
                        field: 'height',
                        title: 'Height',
                    },
                    {
                        field: 'weight',
                        title: 'Weight',
                    },
						{
							field: "birth_mark",
							title: "Birth Mark",
						},
						{
							field: "aadhar",
							title: "Aadhar",
						},
						{
							field: "pan",
							title: "PAN",
						},
						{
							field: "mobile_number",
							title: "Mobile Number",
						},
						{
							field: "alternative_number",
							title: "Alternate Number",
						},
						{
							field: "training",
							title: "Training",
						},
						{
                            field: 'blood_group',
							title: 'Blood Group',
						},
						{
							field: "skills",
							title: "Skills",
						},
						{
							field: "bank_name",
							title: "Bank Name",
						},
						{
							field: "account_number",
							title: "Bank Account Number",
						},
						{
							field: "ifsc_code",
							title: "IFSC Code",
						},
						{
							field: "created_at",
							title: "Created At",
						},
					],
				});


				// District selection changed
				$('#kt_datatable_search_status').on('change', function () {
					var districtId = $(this).val();
					if (districtId) {
						// Fetch Blocks based on selected District
						$.ajax({
							url: baseUrl + 'getBlockByDistrictId/' + districtId,
							type: 'GET',
							success: function (data) {
								// Assuming data is a list of blocks
								var blocksDropdown = $('#kt_datatable_search_statuss');
								blocksDropdown.empty();
								blocksDropdown.append($('<option>', {
									value: '0',
									text: 'All',
									'data-district': districtId
								}));
								data.forEach(function (block) {
									blocksDropdown.append(new Option(block.name, block.id));
								});
							}
						});
						// Update the datatable data source
						var newUrl = baseUrl + 'admin/getJawansByDistrict/' + districtId;

						datatable.options.data.source.read.url = newUrl;
						datatable.reload(); // Make sure this triggers

					}
					else if (districtId == 0) {
						// show "select district first"
						$('#kt_datatable_search_statuss').empty();
						$('#kt_datatable_search_statuss').append(new Option('Select District First', 0));


					}
				});

				// Block selection changed
				$('#kt_datatable_search_statuss').on('change', function () {
					var selectedOption = $(this).find('option:selected');
					var blockId = $(this).val();
					var districtId = selectedOption.data('district'); // This will be undefined if 'All' is selected after a district

					if (blockId == '0' && districtId) {
						var newUrl = baseUrl + 'admin/getJawansByDistrict/' + districtId;
						datatable.options.data.source.read.url = newUrl;
						datatable.reload();
					} else if (blockId) {
						var newUrl = baseUrl + 'admin/getJawansByBlock/' + blockId;
						datatable.options.data.source.read.url = newUrl;
						datatable.reload();
					}
				});


			};

			return {
				init: function () {
					_init();
				},
			};
		}();

		jQuery(document).ready(function () {
			KTAppsUsersListDatatable.init();
		});
	</script>
<?php endif; ?>