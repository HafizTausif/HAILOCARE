@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="me-auto d-none d-lg-block">
						<h3 class="text-black font-w600">Welcome to HailoCare!</h3>
						<p class="mb-0 fs-18">Hospital Admin Dashboard </p>
					</div>
					
					<div class="input-group search-area ms-auto d-inline-flex">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
						</div>
					</div>
				</div>
				<div class="row">	
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card gradient-bx text-white bg-danger">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Total Clients</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 me-3">{{$Clientcount}}</h2>
											<div>	
												<svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.56244 9.25C6.35869 11.6256 2.26214 16.0091 0.999939 17.5H26.4374V1L16.8124 13.375L8.56244 9.25Z" fill="url(#paint0_linear4)"/>
													<path d="M0.999939 17.5C2.26214 16.0091 6.35869 11.6256 8.56244 9.25L16.8124 13.375L26.4374 1" stroke="white" stroke-width="2"/>
													<defs>
													<linearGradient id="paint0_linear4" x1="13.7187" y1="3.0625" x2="14.7499" y2="17.5" gradientUnits="userSpaceOnUse">
													<stop stop-color="white" stop-opacity="0.73" offset="0.1"/>
													<stop offset="1" stop-color="white" stop-opacity="0"/>
													</linearGradient>
													</defs>
												</svg>
												<div class="fs-14">+{{ round($Clientcount * 0.1) }}%</div>
											</div>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M23.6667 0.333311C21.1963 0.264777 18.7993 1.17744 17 2.87164C15.2008 1.17744 12.8038 0.264777 10.3334 0.333311C8.9341 0.337244 7.55292 0.649469 6.28803 1.24778C5.02315 1.84608 3.90564 2.71577 3.01502 3.79498C-0.039984 7.45998 -0.261651 13.3333 1.19668 17.5966C1.21002 17.6266 1.22002 17.6566 1.23335 17.6866C3.91168 25.3333 15.2717 33.6666 17 33.6666C18.6983 33.6666 30.025 25.5166 32.7667 17.6866C32.78 17.6566 32.79 17.6266 32.8034 17.5966C34.2417 13.4016 34.0867 7.51498 30.985 3.79498C30.0944 2.71577 28.9769 1.84608 27.712 1.24778C26.4471 0.649469 25.0659 0.337244 23.6667 0.333311ZM17 30.03C14.6817 28.5233 8.23168 24 5.30335 18.6666H12C12.2743 18.6667 12.5444 18.599 12.7863 18.4696C13.0282 18.3403 13.2344 18.1532 13.3867 17.925L14.83 15.7583L17.0867 22.525C17.1854 22.8207 17.3651 23.0829 17.6054 23.2816C17.8456 23.4803 18.1368 23.6076 18.4458 23.6491C18.7548 23.6906 19.0693 23.6446 19.3535 23.5163C19.6376 23.388 19.8801 23.1825 20.0533 22.9233L22.8917 18.6666H28.6984C25.7684 24 19.3183 28.5233 17 30.03ZM29.975 15.3333H22C21.7257 15.3333 21.4556 15.4009 21.2137 15.5303C20.9718 15.6597 20.7656 15.8468 20.6133 16.075L19.17 18.2416L16.9133 11.475C16.8146 11.1792 16.6349 10.9171 16.3947 10.7184C16.1544 10.5196 15.8632 10.3923 15.5542 10.3508C15.2452 10.3093 14.9307 10.3553 14.6466 10.4837C14.3624 10.612 14.1199 10.8174 13.9467 11.0766L11.1084 15.3333H4.02502C3.35835 12.1816 3.50502 8.41164 5.57668 5.92831C6.151 5.22081 6.87614 4.65057 7.69911 4.25927C8.52209 3.86797 9.42209 3.6655 10.3334 3.66664C15.445 3.66664 14.9117 7.16664 16.9817 7.18664H17C19.0733 7.18664 18.5483 3.66664 23.6667 3.66664C24.5785 3.665 25.4792 3.86723 26.3027 4.25855C27.1263 4.64987 27.852 5.22037 28.4267 5.92831C30.4867 8.40331 30.6467 12.1666 29.975 15.3333Z" fill="white"/>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
				<div class="col-xl-3 col-xxl-3 col-sm-6">
    <div class="card gradient-bx text-white bg-success">	
        <div class="card-body">
            <div class="media align-items-center">
                <div class="media-body">
                    <p class="mb-1">Caretakers</p>
                    <div class="d-flex flex-wrap">
                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">{{ $caregiverCount }}</h2>
                        <div>	
                            <svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.875 9.25C21.0787 11.6256 25.1753 16.0091 26.4375 17.5H1V1L10.625 13.375L18.875 9.25Z" fill="url(#paint0_linear1)"/>
                                <path d="M26.4375 17.5C25.1753 16.0091 21.0787 11.6256 18.875 9.25L10.625 13.375L1 1" stroke="white" stroke-width="2"/>
                                <defs>
                                <linearGradient id="paint0_linear1" x1="13.7188" y1="3.0625" x2="12.6875" y2="17.5" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0.73" offset="0.1"/>
                                <stop offset="1" stop-color="white" stop-opacity="0"/>
                                </linearGradient>
                                </defs>
                            </svg>
                            <div class="fs-14">+{{ round($caregiverCount * 0.1) }}%</div> <!-- Example growth percentage -->
                        </div>
                    </div>
                </div>
                <span class="border rounded-circle p-4">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.5047 20.3571H24.4948V23.5551H21.2968V26.565H24.4948V29.763H27.5047V26.565H30.7027V23.5551H27.5047V20.3571Z" fill="#04A547"/>
                        <path d="M25.9998 14.7053C20.2948 14.7053 15.6533 19.3504 15.6533 25.0601C15.6533 30.7698 20.2948 35.4149 25.9998 35.4149C31.7048 35.4149 36.3463 30.7698 36.3463 25.0601C36.3463 19.3504 31.7048 14.7053 25.9998 14.7053ZM25.9998 32.405C21.9544 32.405 18.6632 29.11 18.6632 25.0601C18.6632 21.0101 21.9544 17.7151 25.9998 17.7151C30.0452 17.7151 33.3364 21.0101 33.3364 25.0601C33.3364 29.11 30.0452 32.405 25.9998 32.405Z" fill="#CFE9DA"/>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card gradient-bx text-white bg-info">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Appointment</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 me-3">76</h2>
											<div>	
												<svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M18.875 9.25C21.0787 11.6256 25.1753 16.0091 26.4375 17.5H1V1L10.625 13.375L18.875 9.25Z" fill="url(#paint0_linear2)"/>
													<path d="M26.4375 17.5C25.1753 16.0091 21.0787 11.6256 18.875 9.25L10.625 13.375L1 1" stroke="white" stroke-width="2"/>
													<defs>
													<linearGradient id="paint0_linear2" x1="13.7188" y1="3.0625" x2="12.6875" y2="17.5" gradientUnits="userSpaceOnUse">
													<stop stop-color="white" stop-opacity="0.73" offset="0.1"/>
													<stop offset="1" stop-color="white" stop-opacity="0"/>
													</linearGradient>
													</defs>
												</svg>
												<div class="fs-14">-4%</div>
											</div>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0)">
											<path d="M35 5H33.3333C33.3333 3.67392 32.8065 2.40215 31.8689 1.46447C30.9312 0.526784 29.6594 0 28.3333 0C27.0072 0 25.7355 0.526784 24.7978 1.46447C23.8601 2.40215 23.3333 3.67392 23.3333 5H16.6667C16.6667 3.67392 16.1399 2.40215 15.2022 1.46447C14.2645 0.526784 12.9927 7.45058e-08 11.6667 7.45058e-08C10.3406 7.45058e-08 9.06881 0.526784 8.13113 1.46447C7.19345 2.40215 6.66667 3.67392 6.66667 5H5C3.67392 5 2.40215 5.52678 1.46447 6.46447C0.526784 7.40215 0 8.67392 0 10L0 35C0 36.3261 0.526784 37.5979 1.46447 38.5355C2.40215 39.4732 3.67392 40 5 40H35C36.3261 40 37.5979 39.4732 38.5355 38.5355C39.4732 37.5979 40 36.3261 40 35V10C40 8.67392 39.4732 7.40215 38.5355 6.46447C37.5979 5.52678 36.3261 5 35 5ZM5 8.33333H6.66667C6.66667 9.65942 7.19345 10.9312 8.13113 11.8689C9.06881 12.8065 10.3406 13.3333 11.6667 13.3333C12.1087 13.3333 12.5326 13.1577 12.8452 12.8452C13.1577 12.5326 13.3333 12.1087 13.3333 11.6667C13.3333 11.2246 13.1577 10.8007 12.8452 10.4882C12.5326 10.1756 12.1087 10 11.6667 10C11.2246 10 10.8007 9.8244 10.4882 9.51184C10.1756 9.19928 10 8.77536 10 8.33333V5C10 4.55797 10.1756 4.13405 10.4882 3.82149C10.8007 3.50893 11.2246 3.33333 11.6667 3.33333C12.1087 3.33333 12.5326 3.50893 12.8452 3.82149C13.1577 4.13405 13.3333 4.55797 13.3333 5V6.66667C13.3333 7.10869 13.5089 7.53262 13.8215 7.84518C14.134 8.15774 14.558 8.33333 15 8.33333H23.3333C23.3333 9.65942 23.8601 10.9312 24.7978 11.8689C25.7355 12.8065 27.0072 13.3333 28.3333 13.3333C28.7754 13.3333 29.1993 13.1577 29.5118 12.8452C29.8244 12.5326 30 12.1087 30 11.6667C30 11.2246 29.8244 10.8007 29.5118 10.4882C29.1993 10.1756 28.7754 10 28.3333 10C27.8913 10 27.4674 9.8244 27.1548 9.51184C26.8423 9.19928 26.6667 8.77536 26.6667 8.33333V5C26.6667 4.55797 26.8423 4.13405 27.1548 3.82149C27.4674 3.50893 27.8913 3.33333 28.3333 3.33333C28.7754 3.33333 29.1993 3.50893 29.5118 3.82149C29.8244 4.13405 30 4.55797 30 5V6.66667C30 7.10869 30.1756 7.53262 30.4882 7.84518C30.8007 8.15774 31.2246 8.33333 31.6667 8.33333H35C35.442 8.33333 35.866 8.50893 36.1785 8.82149C36.4911 9.13405 36.6667 9.55797 36.6667 10V16.6667H3.33333V10C3.33333 9.55797 3.50893 9.13405 3.82149 8.82149C4.13405 8.50893 4.55797 8.33333 5 8.33333ZM35 36.6667H5C4.55797 36.6667 4.13405 36.4911 3.82149 36.1785C3.50893 35.866 3.33333 35.442 3.33333 35V20H36.6667V35C36.6667 35.442 36.4911 35.866 36.1785 36.1785C35.866 36.4911 35.442 36.6667 35 36.6667Z" fill="white"/>
											<path d="M20 26.6667C20.9205 26.6667 21.6667 25.9205 21.6667 25C21.6667 24.0795 20.9205 23.3333 20 23.3333C19.0795 23.3333 18.3333 24.0795 18.3333 25C18.3333 25.9205 19.0795 26.6667 20 26.6667Z" fill="white"/>
											<path d="M30 26.6667C30.9205 26.6667 31.6667 25.9205 31.6667 25C31.6667 24.0795 30.9205 23.3333 30 23.3333C29.0796 23.3333 28.3334 24.0795 28.3334 25C28.3334 25.9205 29.0796 26.6667 30 26.6667Z" fill="white"/>
											<path d="M9.99995 26.6667C10.9204 26.6667 11.6666 25.9205 11.6666 25C11.6666 24.0795 10.9204 23.3333 9.99995 23.3333C9.07947 23.3333 8.33328 24.0795 8.33328 25C8.33328 25.9205 9.07947 26.6667 9.99995 26.6667Z" fill="white"/>
											<path d="M20 33.3334C20.9205 33.3334 21.6667 32.5872 21.6667 31.6667C21.6667 30.7462 20.9205 30 20 30C19.0795 30 18.3333 30.7462 18.3333 31.6667C18.3333 32.5872 19.0795 33.3334 20 33.3334Z" fill="white"/>
											<path d="M30 33.3334C30.9205 33.3334 31.6667 32.5872 31.6667 31.6667C31.6667 30.7462 30.9205 30 30 30C29.0796 30 28.3334 30.7462 28.3334 31.6667C28.3334 32.5872 29.0796 33.3334 30 33.3334Z" fill="white"/>
											<path d="M9.99995 33.3334C10.9204 33.3334 11.6666 32.5872 11.6666 31.6667C11.6666 30.7462 10.9204 30 9.99995 30C9.07947 30 8.33328 30.7462 8.33328 31.6667C8.33328 32.5872 9.07947 33.3334 9.99995 33.3334Z" fill="white"/>
											</g>
											<defs>
											<clipPath id="clip0">
											<rect width="40" height="40" fill="white"/>
											</clipPath>
											</defs>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card gradient-bx text-white bg-secondary">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Hospital Earning</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 me-3">$56k</h2>
											<div>	
												<svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.56244 9.25C6.35869 11.6256 2.26214 16.0091 0.999939 17.5H26.4374V1L16.8124 13.375L8.56244 9.25Z" fill="url(#paint0_linear3)"/>
													<path d="M0.999939 17.5C2.26214 16.0091 6.35869 11.6256 8.56244 9.25L16.8124 13.375L26.4374 1" stroke="white" stroke-width="2"/>
													<defs>
													<linearGradient id="paint0_linear3" x1="13.7187" y1="3.0625" x2="14.7499" y2="17.5" gradientUnits="userSpaceOnUse">
													<stop stop-color="white" stop-opacity="0.73" offset="0.1"/>
													<stop offset="1" stop-color="white" stop-opacity="0"/>
													</linearGradient>
													</defs>
												</svg>
												<div class="fs-14">+4%</div>
											</div>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 21 35" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.21864 35H11.6667V31.7747C17.7104 31.496 21.0001 27.7133 21.0001 23.413C21.0001 17.2412 15.7596 16.0865 11.6667 14.8919V8.72014C12.7378 9.11832 13.4645 10.0341 13.6175 11.5074H20.6175C20.2733 6.45051 16.9072 3.66325 11.6667 3.22526V0H9.21864V3.22526C4.01645 3.58362 6.10352e-05 6.53015 6.10352e-05 11.5074C6.10352e-05 17.7588 5.12574 18.9534 9.21864 20.0683V26.3595C7.91809 25.9215 7.15307 24.9261 7.00006 23.2935H0.0383124C0.229569 28.43 4.01645 31.2571 9.21864 31.7349V35ZM14.1531 23.6519C14.1531 25.1251 13.1968 26.2002 11.6667 26.479V20.8248C13.1585 21.4221 14.1531 22.2184 14.1531 23.6519ZM6.92356 11.1889C6.92356 9.63595 7.80334 8.75995 9.21864 8.52105V14.0557C7.84159 13.4187 6.92356 12.5825 6.92356 11.1889Z" fill="white"/>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-20 mb-0 text-black">Revenue</h3>
								<select class="default-select style-1">
									<option>2022</option>
									<option>2021</option>
									<option>2020</option>
								</select>
							</div>
							<div class="card-body px-2 pt-3 pb-2">
								<div class="px-4">
									<span class="text-info fs-24 font-w600 me-3">$41,512k</span>
									<span class="text-secondary fs-18 font-w400">$25,612k</span>
								</div>
								<div id="line-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8 col-lg-8">
						<div class="card">	
							<div class="card-header d-sm-flex d-block border-0 pb-0">
								<h3 class="fs-20 mb-3 mb-sm-0 text-black">Patient Statistic</h3>
								<div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mt-sm-0">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">
												Monthly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#weekly" role="tab">
												Weekly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#today" role="tab">
												Today
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body ps-2 pe-3 pb-2">
								<div class="tab-content">
									<div class="tab-pane fade show active" id="monthly">
										<div id="chartBar"></div>
									</div>	
									<div class="tab-pane fade" id="weekly">
										<div id="chartBar1"></div>
									</div>
									<div class="tab-pane fade" id="today">
										<div id="chartBar2"></div>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8 col-lg-7">

    <div class="card">    
        <div class="card-header border-0 pb-0">
            <h3 class="fs-20 mb-0 text-black">Our Caretakers</h3>
            <a href="{{ route('admin.caregivers.index') }}" class="text-primary font-w500">View all >></a>
        </div>
        <div class="card-body">
            <div class="assigned-doctor owl-carousel">
                @foreach($caregivers as $caregiver)
                <div class="items">
                    <div class="text-center">
                        @if($caregiver->profile_picture)
                        <img src="{{ asset('storage/'.$caregiver->profile_picture) }}" 
                             alt="{{ $caregiver->name }}" 
                             class="rounded-circle" 
                             width="120">
                        @else
                        <img src="{{ asset('images/default-profile.png') }}" 
                             alt="{{ $caregiver->name }}" 
                             class="rounded-circle" 
                             width="120">
                        @endif
                        <h5 class="fs-16 mb-1 font-w600">
                            <a class="text-black" href="{{ route('admin.caregivers.show', $caregiver->caregiver->id ?? $caregiver->id) }}">
                                {{ $caregiver->name }}
                            </a>
                        </h5>
                        <span class="text-primary mb-2 d-block">
                            {{ $caregiver->caregiver->specialization ?? 'Senior Care' }}
                        </span>
                        <p class="fs-12">
                            {{ $caregiver->caregiver->experience ?? 'Experienced caregiver' }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
					<div class="col-xl-3 col-xxl-4 col-lg-5">
    <div class="card border-0 pb-0">
        <div class="card-header flex-wrap border-0 pb-0">
            <h3 class="fs-20 mb-0 text-black">Recent Clients</h3>
            <a href="{{ route('admin.clients.index') }}" class="text-primary font-w500">View more >></a>
        </div>
        <div class="card-body recent-patient px-0"> 
            <div id="DZ_W_Todo2" class="widget-media px-4 dz-scroll height320">
                <ul class="timeline">
                    @foreach($recentClients as $client)
                    <li>
                        <div class="timeline-panel flex-wrap">
                            <div class="media me-3">
                                @if($client->user->profile_picture)
                                <img class="rounded-circle" alt="{{ $client->user->name }}" width="50" src="{{ asset('storage/'.$client->user->profile_picture) }}">
                                @else
                                <img class="rounded-circle" alt="{{ $client->user->name }}" width="50" src="{{ asset('images/default-profile.png') }}">
                                @endif
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1"><a class="text-black" href="{{ route('admin.clients.show', $client->id) }}">{{ $client->user->name }}</a></h5>
                                <span class="fs-14">
                                    {{ $client->user->date_of_birth ? \Carbon\Carbon::parse($client->user->date_of_birth)->age.' Years' : 'Age not specified' }}
                                </span>
                            </div>
                            <span class="mt-2">
                                {{ $client->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
            </div>
        </div>

@endsection