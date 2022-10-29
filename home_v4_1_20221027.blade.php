<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- key meta setting -->
	<meta name="description" content="멘토링, 온라인 멘토링, SKY 멘토링, 캠퍼스투어, 학종 컨설팅, 방과후, 방과후 예산, 채움, 비대면과외, 자기주도학습, 홈스쿨링, ESG"/>
{{--	<meta name="keywords" content="수파자, 서울대, 1:1 인터넷과외, 화상과외, 온라인과외, 화상수업, 멘토링, 온라인 멘토링, 서울대 멘토링, 연세대 멘토링, 고려대 멘토링, SKY 멘토링, 명문대 멘토링, 대학생 멘토링, 캠퍼스투어, 서울대 캠퍼스투어, 연세대 캠퍼스투어, 고려대 캠퍼스투어, SKY 캠퍼스투어, 명문대 캠퍼스투어, 대학생 캠퍼스투어, 학종 컨설팅, 방과후, 방과후 예산, 채움, 멘토링 프로그램, 수학여행, 현장학습, 체험학습, EBSlang, 멘토랑, 스카이캐슬, 자기소개서, 자소서, 중학생, 고등학생 국어, 영어, 수학, 과학, 물리, 미적분, 수능, 모의고사, 중간고사, 기말고사, 멘토링, 충전식, 인강, 수학과외, SKY캐슬, 왜그래풍상씨, ESG, CSR">--}}

	<!-- main URL setting -->
	<link rel="canonical" href="https://www.supaja.com" />

	<!-- mobile linker set -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="수파자 명문대 화상과외 화상수업 멘토링 캠퍼스투어"/>
	<meta name="og:description" content="멘토링, 온라인 멘토링, SKY 멘토링, 캠퍼스투어, 학종 컨설팅, 방과후, 방과후 예산, 채움, 비대면과외, 자기주도학습, 홈스쿨링, ESG"/>
	<meta property="og:image" content="{{ URL::asset('/image/home/supaja_live_web_preview.png') }}"/>
	<meta property="og:url" content="https://www.supaja.com"/>

	<meta property="al:android:url" content="https://play.google.com/store/apps/details?id=com.supaja.app">
	<meta property="al:android:app_name" content="수파자">
	<meta property="al:android:package" content="com.supaja.app">
	<meta property="al:web:url" content="https://www.supaja.com">

	<meta name="format-detection" content="telephone=no" />

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('/live/img/favicon.png') }}">

	<link rel="apple-touch-icon" href="/image/home_v3/apple-touch-icon_02.png"/>

	<title>수파자 명문대 화상과외 화상수업 멘토링 캠퍼스투어</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WP5KSX2');</script>
	<!-- End Google Tag Manager -->

	<!-- Google Tag Manager -->
	<!-- End Google Tag Manager -->

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
				'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1989762864410858');
		fbq('track', 'PageView');
	</script>
	<noscript>
		<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1989762864410858&ev=PageView&noscript=1" />
	</noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Naver Analytics Start -->
	<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
	<script type="text/javascript">
		if(!wcs_add) var wcs_add = {};
		wcs_add["wa"] = "4b30978cf73a70";
		if(window.wcs) {
			wcs_do();
		}
	</script>
	<!-- Naver Analytics End -->

	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->

	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="/tpl_v4_20221024/demo1/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/tpl_v4_20221024/demo1/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<!--  -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<script type="text/javascript">
		function search_kwd() {
			var s_kwd = $.trim($("#txt_s_kwd").val());
			if(s_kwd == "") {
				$("#txt_s_kwd").focus();
				return;
			}

			location.href = "/live/teacher/list/guest?s_kwd=" + s_kwd;
			// location.href = "https://student.supaja.com/search/" + s_kwd;
			// location.href = "https://student.supaja.com/search/" + s_kwd;
		}
	</script>


</head>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" tabindex="0" data-bs-smooth-scroll="true" class="scrollspy bg-white position-relative app-blank">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP5KSX2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;
	if (document.documentElement) {
		if (document.documentElement.hasAttribute("data-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-theme-mode");
		} else {
			if (localStorage.getItem("data-theme") !== null) {
				themeMode = localStorage.getItem("data-theme");
			} else {
				themeMode = defaultThemeMode;
			}
		}
		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}
		document.documentElement.setAttribute("data-theme", themeMode);
	}
</script>
<!--end::Theme mode setup on page load-->
<!--begin::Root-->
<!--begin::Header Section-->
<div class="mb-0">
	<!--begin::Wrapper-->
	<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom z-index-1">
		<header class="navbar navbar-expand-lg fixed-top bg-white">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img class="logo img-fluid" src="/tpl_v4_20221024/demo1/dist/assets/imgs/logo.png" alt="logo_W3" style="width: 100px;">
				</a>
				<button style="border: none;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa-solid fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav text-center fs-md-14px">

						@if((empty(Session::get('st_no')) && empty(Session::get('te_no'))) && empty($ck_auth_access_token))
							<li class="nav-item">
								<a class="nav-link pe-6" aria-current="page" href="https://live.supaja.com/guest">선생님 찾기</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link pe-6 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">로그인</a>
								<ul class="dropdown-menu fs-md-14px">
									<li><a class="dropdown-item" href="https://live.supaja.com/login/st">학생 로그인</a></li>
									<li><a class="dropdown-item" href="https://live.supaja.com/login/p">학부모 로그인</a></li>
									<li><a class="dropdown-item" href="/signin_te">선생님 로그인</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown fs-md-14px">
								<a class="nav-link pe-6 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">회원가입</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="https://live.supaja.com/signup">학생 회원가입</a></li>
									<li><a class="dropdown-item" href="/signup_te/email">선생님 회원가입</a></li>
								</ul>
							</li>
						@else
							@if(empty(Session::get('te_no')))
								<li class="nav-item">
									<a class="nav-link pe-6" aria-current="page" href="https://live.supaja.com/home">선생님 찾기</a>
								</li>
								<li class="nav-item">
									<a class="nav-link pe-6" aria-current="page" href="https://live.supaja.com/home/like">좋아요</a>
								</li>
								<li class="nav-item">
									<a class="nav-link pe-6" aria-current="page" href="https://live.supaja.com/home/apply_list">수업 신청 내역</a>
								</li>
								<li class="nav-item">
									<a class="nav-link pe-6" aria-current="page" href="https://live.supaja.com/home/demo_list">체험 수업 내역</a>
								</li>
								<li class="nav-item">
									<a class="nav-link pe-6" aria-current="page" href="/student_my_classroom_list">강의실</a>
								</li>
								<li class="nav-item">
									<a class="nav-link pe-6" aria-current="page" href="/signout_stu">로그아웃</a>
								</li>
							@else
								<li class="nav-item">
									<a class="nav-link pe-6" aria-current="page" href="/teacher_my_classroom_list">강의실</a>
								</li>
								<li class="nav-item">
									<a class="nav-link pe-6" aria-current="page" href="/signout_tea">로그아웃</a>
								</li>
							@endif
						@endif
					</ul>
				</div>
			</div>
		</header>

		<style>
			.nav-tabs.nav-line-tabs {
				border-bottom-color: rgba(0,0,0,0);
			}

			.header-2 .nav-item a {
				color: #000;
			}

			.header-2 .nav-item a:hover {
				color: #1735DB;
			}

			@media screen and (max-width: 768px) {
				.fs-md-14px {
					font-size: 14px;
				}
			}
		</style>

		<!--begin::Landing hero-->
		<div class="landing-bg mt-19">
			<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/intro1.png" alt="" style="width: 100%;">
		</div>
		<!--end::Landing hero-->
	</div>
	<!--end::Wrapper-->
</div>

<style>
	.drop-shadow {
		text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
	}
</style>
<!--end::Header Section-->

<!--begin::How It Works Section-->
<div class="mt-lg-20 mt-10 pt-10 pt-lg-20 mb-20">
	<!--begin::Container-->
	<div class="container">
		<!--begin::Heading-->
		<div class="text-start">
			<div class="row">
				<div class="col-lg-6 col-12 text-center text-lg-start">
					<div class="d-flex flex-column justify-content-center h-100">
						<!--begin::Text-->
						<div class="fs-5 fs-lg-3 fw-medium text-dark mb-2">
							지금 이런 고민이 있다면
						</div>
						<!--begin::Title-->
						<div class="fw-bolder fs-2hx text-dark mb-10 mb-lg-0">
							수파자를 강력 추천합니다.
						</div>
						<!--end::Title-->
						<!--end::Text-->
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<!--begin::List-->
					<div class="d-flex flex-column align-items-center align-items-lg-start">
						<div>
							<div class="d-flex fs-6 mb-5">
								<i class="fs-2 fa-solid fa-circle-check text-dark me-3"></i>
								<div class="my-auto">
									성적뿐 아니라, 인생을 바꿀 수 있는 <span class="text-primary fw-bold">인생 멘토</span>를 만나고 싶어요.
								</div>
							</div>
							<div class="d-flex fs-6 mb-5">
								<i class="fs-2 fa-solid fa-circle-check text-dark me-3"></i>
								<div class="my-auto">
									소소한 학습 고민조차 <span class="text-primary fw-bold">자유롭게 질문</span>하고 싶어요.
								</div>
							</div>
							<div class="d-flex fs-6 mb-5">
								<i class="fs-2 fa-solid fa-circle-check text-dark me-3"></i>
								<div class="my-auto">
									<span class="text-primary fw-bold">지방</span>이라 과외 선생님을 만나기 어려워요.
								</div>
							</div>
							<div class="d-flex fs-6 mb-5">
								<i class="fs-2 fa-solid fa-circle-check text-dark me-3"></i>
								<div class="my-auto">
									학원 진도 따라가기 보다 <span class="text-primary fw-bold">1:1 밀착 수업</span>이 필요해요.
								</div>
							</div>
						</div>

					</div>
					<!--end::List-->
				</div>
			</div>
			<!--end::Heading-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::How It Works Section-->

	<!--begin::thirdList Section-->
	<div class="mt-lg-20 mt-10 py-10">
		<!--begin::Container-->
		<div class="container container-mw-auto">
			<!--begin::Heading-->
			<div class="text-center mt-xl-20 mt-lg-10 mt-0 mb-17">
				<!--begin::Title-->
				<h3 class="fw-bolder fs-2hx text-dark mb-5">비교할수록 현명한 4가지 이유</h3>
				<!--end::Title-->
			</div>
			<!--end::Heading-->
			<!--begin::Row-->
			<div class="text-center d-flex align-items-center flex-column w-100 gy-10 mb-md-20">
				<div class="d-flex flex-column flex-xl-row justify-content-xl-between align-items-start w-xl-100 w-fit">
					<!--begin::Col-->
					<div class="ps-0">
						<!--begin::Story-->
						<div class="d-flex">
							<!--begin::Illustration-->
							<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/Section1_1.png" class="h-81px mb-9" alt="" />
							<!--end::Illustration-->
							<!--begin::Heading-->
							<div class="mb-5 ms-5">
								<!--begin::Title-->
								<div class="fs-5 fs-lg-3 fw-semibold text-dark text-start">
									<span class="fw-bolder fs-lg-1 fs-2">{{ number_format($teacher_cnt) }}명 </span> <br> 검증된 명문대 선생님
								</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="mt-1 fs-8 text-start">수업 기록을 통해 엄선된 선생님</div>
								<!--end::Description-->
							</div>
							<!--end::Heading-->
						</div>
						<!--end::Story-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="px-xl-5 px-0">
						<!--begin::Story-->
						<div class="d-flex">
							<!--begin::Illustration-->
							<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/Section1_2.png" class="h-81px mb-9" alt="" />
							<!--end::Illustration-->
							<!--begin::Heading-->
							<div class="mb-5 ms-5 text-start">
								<!--begin::Title-->
								<div class="fs-5 fs-lg-3 fw-semibold text-dark">
									<span class="fw-bolder fs-lg-1 fs-2">92% </span> <br> 재수강률
								</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="mt-1 fs-8 text-start">학생들이 증명하는 수파자</div>
								<!--end::Description-->
							</div>
							<!--end::Heading-->
						</div>
						<!--end::Story-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="px-xl-5 px-0">
						<!--begin::Story-->
						<div class="d-flex">
							<!--begin::Illustration-->
							<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/Section1_3.png" class="h-81px mb-9" alt="" />
							<!--end::Illustration-->
							<!--begin::Heading-->
							<div class="mb-5 ms-5">
								<!--begin::Title-->
								<div class="fs-5 fs-lg-3 fw-semibold text-dark text-start">
									<span class="fw-bolder fs-lg-1 fs-2">7년 </span> <br> 신뢰할 수 있는 업력
								</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="mt-1 fs-8 text-start">믿을 수 있는 수업 퀄리티</div>
								<!--end::Description-->
							</div>
							<!--end::Heading-->
						</div>
						<!--end::Story-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="px-xl-5 px-0">
						<!--begin::Story-->
						<div class="d-flex">
							<!--begin::Illustration-->
							<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/section1_4.png" class="h-81px mb-9" alt="" />
							<!--end::Illustration-->
							<!--begin::Heading-->
							<div class="ms-5 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fs-lg-3 fw-semibold text-dark text-start">
									<span class="fw-bolder fs-lg-1 fs-2">착한 기업 </span> <br> 업계 유일의 비콥 인증 획득
								</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="mt-1 fs-8 text-start">사회적 책임을 실천하는 수파자</div>
								<!--end::Description-->
							</div>
							<!--end::Heading-->
						</div>
						<!--end::Story-->
					</div>
					<!--end::Col-->
				</div>

			</div>
			<!--end::Row-->
		</div>
		<!--end::Container-->
	</div>

	<style>
		.h-81px {
			height: 81px;
		}

		.w-fit {
			width: fit-content;
		}

		@media screen and (max-width: 768px) {
			.h-81px {
				height: 70px;
			}
		}
	</style>
	<!--end::thirdList Section-->

	<!--begin::Landing hero-->
	<div class="landing-white-bg" style="background-image: url('/tpl_v4_20221024/demo1/dist/assets/imgs/intro2.png'); background-repeat: no-repeat; background-size: cover;">
		<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
			<!--begin::Heading-->
			<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
				<!--begin::Title-->
				<h1 class="text-white fw-bolder fs-3x mb-3">인생 멘토를 만나는 곳, 수파자</h1>
				<div class="fs-2 fs-lg-1 fw-medium text-white">
					언제 어디서든, 최고의 인생 멘토를 만나 <br> 인생의 변화를 경험하세요.
				</div>
				<!--end::Title-->
				<!--begin::Action-->
				<div class="d-flex flex-center mt-15" style="width: 100vw;">
					<a href="https://live.supaja.com/guest" class="btn btn-primary">
						<div class="mx-md-15 mx-auto fw-semibold fs-4 text-white">인생 멘토를 만나러 갈 시간</div>
						<div>
							<div class="mb-0 fs-2 fw-bolder text-white">
								선생님 찾기
								<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/fa-right.png" class="ms-3 mb-1" style="width: 10px;" alt="">
							</div>
						</div>
					</a>
				</div>
				<!--end::Action-->
			</div>
			<!--end::Heading-->
		</div>
	</div>
	<!--end::Landing hero-->

	<!--begin::Detail-Sections start-->
	<div class="container">
		<!--begin::Detail-Section1 start-->
		<div class="pt-xl-20 pt-10">
			<div class="border-start border-primary border-3 ps-3 mb-1 mt-xl-20 mt-10" style="color: #1735DB;">학력, 강의력, 태도까지 3단계로!</div>
			<h1 class="lh-base fw-bold fs-2x">철저하게 검증된, <br class="d-block d-sm-none">실시간으로 선생님 관리가 가능한 수파자만의 검증 시스템</h1>
		</div>
		<div class="row mt-10 mb-10">
			<div class="col-lg-4 col-12 fs-4 fw-semibold">
{{--				<div class="p-6 rounded border border-primary box-shadow" style="width: 70%;">--}}
				<div class="p-6 rounded border border-primary box-shadow w-md-75 w-100">
					<span class="fw-bolder text-primary me-3">1단계.</span> 서류 평가 및 테스트
				</div>
{{--				<div class="p-6 mt-7 border border-primary rounded box-shadow" style="width: 70%;">--}}
				<div class="p-6 mt-7 border border-primary rounded box-shadow w-md-75 w-100">
					<span class="fw-bolder text-primary me-3">2단계.</span> 시범 수업
				</div>
{{--				<div class="p-6 mt-7 border border-primary rounded box-shadow" style="width: 70%;">--}}
				<div class="p-6 mt-7 border border-primary rounded box-shadow w-md-75 w-100">
					<span class="fw-bolder text-primary me-3">3단계.</span> 지속적인 선생님 관리
				</div>
			</div>
			<div class="col-lg-8 col-12 mt-lg-0 mt-10">
				<div class="fs-3">검증된 선생님</div>
				<div class="fs-3x fs-md-4x fw-bold mb-md-8 mb-3 mb-md-15">
					<span data-kt-countup="true" data-kt-countup-prefix="" data-kt-initialized="1000" data-kt-countup-value="{{$teacher_cnt}}">0</span>
					<span>명</span>
				</div>
				<div class="d-md-flex d-block">
					<div class="me-md-10 me-0">
						<div class="fs-3">지금 활동 중인 국가</div>
						<div class="fs-3x fs-md-4x fw-bold mb-md-8 mb-3">
							<span data-kt-countup="true" data-kt-countup-prefix="" data-kt-countup-initialized="1000" data-kt-countup-value="{{$cntry_cnt}}">{{ number_format($cntry_cnt) }}</span>
							<span>개국</span>
						</div>
					</div>
					<div class="ms-md-10 me-0">
						<div class="fs-3">지금 수업 중인 도시</div>
						<div class="fs-3x fs-md-4x fw-bold mb-md-8 mb-3">
							<span data-kt-countup="true" data-kt-countup-prefix="" data-kt-countup-initialized="100" data-kt-countup-value="{{$city_cnt}}">{{ number_format($city_cnt) }}</span>
							<span>개 도시</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end::Detail-Section1 -->
		<!--begin::Detail-Section2 start-->
		<div class="contents-section pt-xl-10 pt-5">
			<div class="border-start border-primary border-3 ps-3 mt-10 mb-1" style="color: #1735DB;">해보지 않고서는 모르니까</div>
			<h1 class="lh-base fw-bold fs-2x">100% 무료 체험 수업 후, <br class="d-block d-sm-none"> 선생님을 직접 선택해보세요.</h1>
		</div>

		<div class="mt-10 mb-10">
			<div class="row">
				<div class="col-lg-4 col-12">
					<div class="d-flex pb-10">
						<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/section2_1.png" alt="" class="w-md-70px w-60px">
						<div class="texts ms-5">
							<div class="fw-bold fs-3">수업기록을 바탕으로</div>
							<div>기존 수업 데이터로 <br> 증명된 선생님</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="d-flex pb-10">
						<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/Section2_2.png" alt="" class="w-md-70px w-60px">
						<div class="texts ms-5">
							<div class="fw-bold fs-3">맞춤형 선생님을 직접</div>
							<div>전공, 성별, 수업스타일<br> 모두 학생이 선택</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="d-flex">
						<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/Section2_3.png" alt="" class="w-md-70px w-60px">
						<div class="texts ms-5">
							<div class="fw-bold fs-3">놀라울 정도로 생생한 수업</div>
							<div>집에서 화상으로 만나는 <br> 나만의 명문대 선생님</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end::Detail-Section2 -->
		<!--begin::Detail-Section3 start-->
		<div class="contents-section pt-xl-10 pt-5">
			<div class="border-start border-primary border-3 ps-3 mt-10 mb-1" style="color: #1735DB;">가격은 낮추고, 수업 퀄리티는 최대로!</div>
			<h1 class="lh-base fw-bold fs-2x">학생과 선생님 모두가 만족하는 수파자.</h1>
			<!--begin::Nav group-->
			<div class="d-flex justify-content-center me-md-20 pe-md-20 me-0 pe-0 mb-10">
				<div class="d-inline-flex mt-7 mb-5" data-kt-buttons="true">
					<button class="btn btn-active btn-active-primary px-6 py-3 me-2 active" data-kt-plan="student" id="student">학생</button>
					<button class="btn btn-color-gray-600 btn-active btn-active-primary px-6 py-3" data-kt-plan="teacher" id="teacher">선생님</button>
				</div>
			</div>
			<!--end::Nav group-->
			<div id="student-data" class="show">
				<div class="row">
					<div class="col-12 col-sm-7 order-md-1 order-2">
						<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/teacher_graph.png" alt="" class="w-md-65">
					</div>
					<div class="col-12 col-sm-5 order-sm-2 order-1 mb-sm-0 mb-5">
						<div class="position-relative h-100 ps-6" style="overflow: hidden">
							<div class="fs-1 mt-lg-20 mt-0">합리적인 가격</div>
							<div class="fs-2x fw-bolder">명문대 선생님 과외가</div>
							<div class="fs-5x fw-bolder text-primary">2만원 대</div>
							<p class="p-bottom d-none d-sm-block">* 본 통계자료는 1시간당 평균 수업료입니다. <br>
								학생 학년 및 수업 내용에 따라 평균 수업료는 상이할 수 있습니다.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div id="teacher-data" class="">
				<div class="row">
					<div class="col-12 col-lg-7 order-2">
						<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/student_graph.png" alt="" class="w-md-65">
					</div>
					<div class="col-12 col-lg-5 order-1 mb-sm-0 mb-5 text-md-end text-start">
						<div class="position-relative h-100 ps-6" style="overflow: hidden; width: fit-content; left: 0;">
							<div class="fs-1 mt-lg-20 mt-0">최고의 선생님만 있는 이유</div>
							<div class="fs-2x fw-bolder">업계 최저 수수료</div>
							<div class="fs-5x fw-bolder text-primary">10%</div>
							<p class="p-bottom p-right d-none d-sm-block">*본 통계자료의 ‘수수료’는 <br>
								2022년 10월 기준의 자료입니다.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<style>
			.box-shadow {
				box-shadow: 2px 4px 8px rgba(232, 232, 232, 0.75);
			}

			.p-bottom {
				position: absolute;
				bottom: 0px;
			}

			.p-right {
				right: 0px;
			}

			.w-md-65 {
				width: 65%;
			}

			@media screen and (max-width: 768px) {
				.w-md-65 {
					width: 80%;
				}
			}

			#student-data {
				display: none;
			}

			#student-data.show {
				display: block;
			}

			#teacher-data {
				display: none;
			}

			#teacher-data.show {
				display: block;
			}
		</style>
		<script>
			const studentBtn = document.getElementById('student')
			const teacherBtn = document.getElementById('teacher')

			const studentData = document.getElementById('student-data')
			const teacherData = document.getElementById('teacher-data')

			teacherBtn.addEventListener('click', () => {
				studentData.classList.remove('show')
				teacherData.classList.add('show')
			})

			studentBtn.addEventListener('click', () => {
				teacherData.classList.remove('show')
				studentData.classList.add('show')
			})
		</script>
		<!--end::Detail-Section3 -->
	</div>
	<!--end::Detail-Sections -->

	<!--begin::thirdList Section-->
	<div class="mt-20">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Heading-->
			<div class="text-center mb-17">
				<!--begin::Title-->
				<h3 class="fs-3x fw-bolder text-dark mb-5 text-start" data-kt-scroll-offset="{default: 100, lg: 150}">
					수파자는 어떻게 이용할까요?</h3>
				<!--end::Title-->
			</div>
			<!--end::Heading-->
			<div class="mt-10 mb-10">
				<div class="d-md-flex justify-content-between d-block">
					<div class="">
						<div class="d-flex pb-10">
							<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/section3_1.png" alt="" class="w-md-70px w-60px">
							<div class="texts ms-5">
								<div class="fw-bold fs-2 fs-lg-3 mb-2">나에게 딱 맞는 선생님 검색</div>
								<div>과목, 학교 등을 검색하여 <br> 내게 맞는 선생님을 찾아보세요.</div>
							</div>
						</div>
					</div>
					<div class="">
						<div class="d-flex pb-10">
							<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/section3_2.png" alt="" class="w-md-70px w-60px">
							<div class="texts ms-5">
								<div class="fw-bold fs-2 fs-lg-3 mb-2">수업 신청 및 확정</div>
								<div>선생님과 논의하여<br> 수업 시간을 확정하세요.</div>
							</div>
						</div>
					</div>
					<div class="">
						<div class="d-flex">
							<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/Section3_3.png" alt="" class="w-md-70px w-60px">
							<div class="texts ms-5">
								<div class="fw-bold fs-2 fs-lg-3 mb-2">체험 수업 진행하기</div>
								<div>100% 무료로<br> 선생님과 첫 수업 후, 결정하세요.</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--begin::Action-->
			<div class="d-flex flex-center mt-10 mb-lg-20 mb-10 pb-lg-20 pb-10" style="width: 100%;">
				<a href="https://live.supaja.com/signup">
					<div class="btn btn-primary fw-bold text-white fs-2"><div style="padding: 6px 20px;">무료체험수업 받기</div></div>
				</a>
			</div>
			<!--end::Action-->
		</div>
		<!--end::Container-->
	</div>

	<style>
		@media screen and (min-width: 768px) {
			.w-md-70px.w-60px {
				width: 70px !important;
			}
		}

		@media screen and (max-width: 576px) {
			img.how-to-icon {
				width: 80px;
			}
		}
		img.how-to-icon {
			width: 85px;
			height: auto;
			object-fit: cover;
		}
	</style>
	<!--end::thirdList Section-->

	<!--begin::Review start-->
	<div class="review-section bg-gray-100 pt-20 mt-lg-20 mt-10">
		<div class="container">
			<section class="student">
				<h1 class="fw-bolder fs-3x mb-15" id="review" data-kt-scroll-offset="{default: 100, lg: 150}">인생 멘토를 만난 <br class="d-block d-sm-none">
					학생들의 이야기
				</h1>
				<div class="studentContainer">
					<iframe src="https://www.youtube.com/embed/zP9Wgs5Ia3c?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<style>
					.studentContainer {
						position: relative;
						padding-top: 50%;
						width: 86%;
						height: 0;
					}

					.studentContainer>iframe {
						position: absolute;
						top: 0;
						left: 0;
						width: 100%;
						height: 100%;
					}

					@media screen and (max-width: 768px) {
						.studentContainer {
							width: 100%;
							padding-top: 56%;
						}
					}
				</style>
				<!--begin::mobileSlider-->
				<div class="w-lg-1000px w-auto mt-10">
					<!--begin::Product slider-->
					<div class="tns tns-default">
						<!--begin::Slider-->
						<div data-tns="true" data-tns-swipe-angle="true" data-tns-speed="1000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-items="1" data-tns-controls="true" data-tns-nav="false" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1" data-tns-responsive="{992: {items: 3}, 768: {items: 2}, 0: {items: 1}}">
							<!--begin::Item-->
							<div class="text-center pt-5">
								<!--begin::Photo-->
								<div class="mx-auto w-250px h-200px border-white rounded-3 bg-white p-5">
									<div class="fs-3 fs-lg-4 fw-bolder text-dark text-start mb-5">
										이천시 고2 학부모님
									</div>
									<div class="fw-normal text-muted fs-8 text-start">매달 2번만 외출이 허용되는 기숙형 외국어 고등학교 생활로 인해 월 2회 정도만 수업이 가능했어요. 정기적인 수업이 불가능했지만 선생님께 숙제 검사 및 문제 풀이 등 맞춤형 수업을 받아서 정말 좋았어요. 평소에도 틈을 내서 문제를 풀어주시는 선생님에게 항상 감사드리고 있어요.</div>
								</div>
								<!--end::Photo-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center pt-5">
								<!--begin::Photo-->
								<div class="mx-auto w-250px h-200px border-white rounded-3 bg-white p-5">
									<div class="fs-3 fs-lg-4 fw-bolder text-dark text-start mb-5">
										순천시 고1 학부모님
									</div>
									<div class="fw-normal text-muted fs-8 text-start">남편이 지방 순환 근무가 많아서 서울에서 순천, 대전 등으로 이사를 자주 다녔어요. 지방에서 학원을 다녔지만 서울과 진도 차이가 많이 나고 특히 아이가 기숙사 생활을 했기 때문에 정말 수업이 필요한 시간에는 수업을 받기 어려웠죠. 수파자 수업을 알게되고 만족도가 높아 전과목을 수강했고 지금은 동생까지 수업을 듣게 했어요.</div>
								</div>
								<!--end::Photo-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center pt-5">
								<!--begin::Photo-->
								<div class="mx-auto w-250px h-200px border-white rounded-3 bg-white p-5">
									<div class="fs-3 fs-lg-4 fw-bolder text-dark text-start mb-5">
										안동시 고1 학생
									</div>
									<div class="fw-normal text-muted fs-8 text-start">겨울 방학 동안 예비고 1학년 과정 선행 위주로 학습을 시작했습니다. 방학기간 수강 후 개학으로 인해 수업 잠시 휴강 후 다음 여름 방학에 다시 수강 신청할 수 있어서 좋았어요.</div>
								</div>
								<!--end::Photo-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center pt-5">
								<!--begin::Photo-->
								<div class="mx-auto w-250px h-200px border-white rounded-3 bg-white p-5">
									<div class="fs-3 fs-lg-4 fw-bolder text-dark text-start mb-5">
										성남시 고2 학부모님
									</div>
									<div class="fw-normal text-muted fs-8 text-start">저는 방과후 교사를 하는 사람입니다. 그런데도 제 자녀 교육에 어려움을 느끼던 중에 수파자 수업을 신청하게 되었고, 수업의 질에 만족감이 높아 방과후 수업에서 성적 향상을 고민하는 학생들에게 수파자를 추천해주고 있습니다.</div>
								</div>
								<!--end::Photo-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Slider-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Slider button-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Slider button-->
					</div>
					<!--end::Product slider-->
				</div>
				<!--end::mobileSlider-->

				<section class="teacher">
					<div class="fw-bolder fs-3x mb-15 mt-20">크리에이터와 함께하는 <br class="d-block d-sm-none"> 생생한 수업</div>
					<div class="d-block d-md-flex pb-20">
						<div class="teacherContainer me-md-20 mb-10 mb-md-0">
							<div id="videoContent1" class="videoContainer show">
								<iframe src="https://www.youtube.com/embed/w2X5_s4_pFI?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div id="videoContent2" class="videoContainer">
								<iframe src="https://www.youtube.com/embed/0SIwOsYw35w?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div id="videoContent3" class="videoContainer">
								<iframe src="https://www.youtube.com/embed/FrTwH9Av4RU?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<div class="my-md-3 my-0 nav-group d-flex flex-column align-items-center justify-content-between" data-kt-buttons="true">
							<div id="videoBtn1" class="mb-5 videoBtn d-block btn btn-shadow btn-light-shadow btn-color-gray-800 btn-active btn-active-primary active">
								<div class="d-flex px-8 position-relative my-2">
									<div class="fs-2 text-ellipsis me-3">
										[미미미누] 선생님 나이가 왜 그래요? 과외 학생의 의심을 받고 있습니다.
									</div>
									<i class="fa-solid fa-play my-auto fs-1 p-right text-secondary"></i>
								</div>
							</div>
							<div id="videoBtn2" class="mb-5 videoBtn d-block btn btn-shadow btn-light-shadow btn-color-gray-800 btn-active btn-active-primary">
								<div class="d-flex px-8 position-relative my-2">
									<div class="fs-2 text-ellipsis me-3">
										[스튜디오 샤] 비대면으로 과외해봤습니다 (feat. 수파자)
									</div>
									<i class="fa-solid fa-play my-auto fs-1 p-right text-secondary"></i>
								</div>
							</div>
							<div id="videoBtn3" class="videoBtn d-block btn btn-shadow btn-light-shadow btn-color-gray-800 btn-active btn-active-primary">
								<div class="d-flex px-8 position-relative my-2">
									<div class="fs-2 text-ellipsis me-3">
										[찬이야모하니] 07년생 드디어 첫 기말고사😱공부 브이로그📚학생선수 공부법(feat.수파자)
									</div>
									<i class="fa-solid fa-play my-auto fs-1 p-right text-secondary"></i>
								</div>
							</div>
						</div>
					</div>

					<style>
						.p-right {
							position: absolute;
							right: 0px;
						}

						.text-ellipsis {
							width: 170px;
							overflow: hidden;
							text-overflow: ellipsis;
							white-space:nowrap;
						}

						.teacherContainer {
							width: 40%;
						}

						.videoBtn {
							width: 300px;
							height: auto;
						}

						.btn.btn-light-shadow {
							color: #5b5d72;
							border-color: #fff;
							background-color: #fff;
							border-radius: 10px;
						}

						.btn.btn-shadow {
							box-shadow: 2px 4px 8px rgba(173, 173, 173, 0.25);
						}

						.videoContainer {
							position: relative;
							padding-top: 56%;
							width: 100%;
							height: 0;
						}

						.videoContainer>iframe {
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
						}

						.videoContainer {
							display: none;
						}

						.videoContainer.show {
							display: block;
						}

						@media screen and (max-width: 768px) {
							.teacherContainer {
								width: 100%;
							}
						}

						@media screen and (max-width: 310px) {
							.videoBtn {
								width: 100%;
							}
						}

					</style>
					<script>
						const videoBtn1 = document.getElementById('videoBtn1')
						const videoBtn2 = document.getElementById('videoBtn2')
						const videoBtn3 = document.getElementById('videoBtn3')

						const videoContent1 = document.getElementById('videoContent1')
						const videoContent2 = document.getElementById('videoContent2')
						const videoContent3 = document.getElementById('videoContent3')

						function videoshow() {
							if (videoBtn1.classList.contains('active')) {
								videoContent2.classList.add('show')
								videoContent1.classList.remove('show')
								videoContent3.classList.remove('show')
							}
							if (videoBtn2.classList.contains('active')) {
								videoContent3.classList.add('show')
								videoContent1.classList.remove('show')
								videoContent2.classList.remove('show')
							}
							if (videoBtn3.classList.contains('active')) {
								videoContent1.classList.add('show')
								videoContent2.classList.remove('show')
								videoContent3.classList.remove('show')
							}
						}

						videoBtn1.addEventListener('click', () => {
							videoshow()
						})
						videoBtn2.addEventListener('click', () => {
							videoshow()
						})
						videoBtn3.addEventListener('click', () => {
							videoshow()
						})
					</script>

				</section>
		</div>
	</div>
	<!--end::Review -->

	<!--begin::Landing hero-->
	<div class="landing-white-bg mt-20" style="background-image: url('/tpl_v4_20221024/demo1/dist/assets/imgs/intro3.png'); background-repeat: no-repeat; background-size: cover;">
		<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
			<!--begin::Heading-->
			<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
				<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/Bcorp_Logo.png" alt="" class="w-md-100px w-70px">
				<!--begin::Title-->
				<div class="text-white fw-bolder fs-3x my-3">업계 유일 비콥인증 <br> 검증된 사회적 기업, 수파자</div>
				<div class="fs-5 fs-md-3 fw-medium text-white text-center mx-5 md-ellipsis">
					1960년, 선명고등공민학교를 설립하신 이흥운 교장선생님과 이옥자 사모님 <br class="only-PC"> (수파자 이명호 대표의 父母)의 “모두에게 공정한 교육 기회를 제공하자”는 <br class="only-PC">
					교육이념을 이어받아, 교육과 기술의 힘으로 교육 불평등 없는 세상을 만드는데 <br class="only-PC">앞장서고 있습니다.
				</div>
				<!--end::Title-->
				<!--begin::Action-->
				<div class="d-flex flex-center mt-15" style="width: 100vw;">
					<a href="https://csr.supaja.com/" class="btn btn-white fw-bold px-15">
						<div class="fs-2">자세히 보기</div>
					</a>
				</div>
				<!--end::Action-->
			</div>
			<!--end::Heading-->
		</div>
	</div>

	<style>
		@media screen and (max-width: 768px) {
			.md-ellipsis {
				text-overflow: ellipsis;
				overflow: hidden;
				width: auto;
				display: -webkit-box;
				-webkit-line-clamp: 2;
				-webkit-box-orient: vertical;
			}
		}
	</style>
	<!--end::Landing hero-->

	<!--begin::thirdList Section-->
	<div class="mt-20">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Heading-->
			<div class="text-center mb-17">
				<!--begin::Title-->
				<h3 class="fs-3x fw-bolder text-dark mb-5 text-start" data-kt-scroll-offset="{default: 100, lg: 150}">
					수파자와 일하기</h3>
				<!--end::Title-->
				<!--begin::Description-->
				<div class="d-none d-sm-block fw-semibold fs-6 fs-lg-4 text-muted text-start">원하는 시간에, 편안한 공간에서 진행하는 비대면 수업 <br>
					수파자는 활동하시는 선생님께 다음과 같은 이점을 제공합니다</div>
				<!--end::Description-->
			</div>
			<!--end::Heading-->
			<div class="mt-10 mb-10">
				<div class="d-md-flex d-block justify-content-between">
					<div class="">
						<div class="d-flex pb-10">
							<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/Section4_1.png" alt="" class="w-md-70px w-60px">
							<div class="texts ms-5">
								<div class="fw-bold fs-2 fs-lg-3 mb-2">새로운 학생 찾기</div>
								<div>수업이 필요한 학생을 <br> 선생님과 연결시켜 드립니다.</div>
							</div>
						</div>
					</div>
					<div class="">
						<div class="d-flex pb-10">
							<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/Section4_2.png" alt="" class="w-md-70px w-60px">
							<div class="texts ms-5">
								<div class="fw-bold fs-2 fs-lg-3 mb-2">비대면 온라인 강의실 제공</div>
								<div>교육에 특화된 온라인 강의실에서<br> 생생한 수업을 경험해보세요.</div>
							</div>
						</div>
					</div>
					<div class="">
						<div class="d-flex">
							<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/Section4_3.png" alt="" class="w-md-70px w-60px">
							<div class="texts ms-5">
								<div class="fw-bold fs-2 fs-lg-3 mb-2">업계 최고 시급 제공</div>
								<div>업계 최고 시급으로<br> 선생님에게 보상을 제공합니다.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--begin::Action-->
			<div class="d-flex flex-center mt-20 mb-lg-20 mb-10" style="width: 100%;">
				<a href="/signup_te/email">
					<div class="btn btn-primary fw-bold text-white fs-2"><div style="padding: 6px 20px;">수파자 선생님 되기</div></div>
				</a>
			</div>
			<!--end::Action-->
		</div>
		<!--end::Container-->
	</div>

	<style>
		@media screen and (max-width: 576px) {
			img.how-to-icon {
				width: 80px;
			}
		}
		img.how-to-icon {
			max-width: 125px;
			height: auto;
			object-fit: cover;
		}
	</style>
	<!--end::thirdList Section-->

	<!--begin::CSR-->
	<div class="pt-20 pb-20">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Heading-->
			<div class="text-center mt-20">
				<!--begin::Title-->
				<h3 class="fs-3x fw-bolder text-dark mb-5 text-start" data-kt-scroll-offset="{default: 100, lg: 150}">미래를 꿈꿀 수 있는<br class="d-block d-sm-none">
					교육의 기회를 선물하며</h3>
				<!--end::Title-->
				<!--begin::Description-->
				<div class="fw-semibold fs-6 fs-lg-4 text-muted text-start">수파자는 교육과 기술을 통해 교육이 닿기 어려운 곳에 교육의 기회를 선물합니다.</div>
				<!--end::Description-->
			</div>
			<!--end::Heading-->
			<div id="carouselExampleControls" class="carousel slide w-lg-1000px w-auto mt-10" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/csr1.png" class="d-block w-100" alt="...">
						<!--begin::Slider-detail -->
						<div class="fs-5 fs-lg-3 fw-bold text-dark text-start mt-8">
							포스코 드림캠프
						</div>
{{--						<div class="fw-semibold fs-6 fs-lg-4 text-muted text-start mt-3">--}}
						<div class="fw-semibold fs-4 text-muted text-start mt-3">
{{--							학생 수 총 120명<br>--}}
							포스코 1%나눔재단과 수파자가 함께 포항•광양 지역의 취약계층 청소년들에게
							<br class="only-PC"> 명문대 멘토 선생님들과의 1:1 온라인 학습멘토링 프로그램 지원</div>
						<!--end::Slider-detail -->
					</div>
					<div class="carousel-item">
						<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/csr2.png" class="d-block w-100" alt="...">
						<!--begin::Slider-detail -->
						<div class="fs-5 fs-lg-3 fw-bold text-dark text-start mt-8">
							용인시 다문화 센터
						</div>
{{--						<div class="fw-semibold fs-6 fs-lg-4 text-muted text-start mt-3">--}}
						<div class="fw-semibold fs-4 text-muted text-start mt-3">
							<br>
							용인시에 거주하고 있는 다문화 가정 자녀들에게 1:1 온라인 멘토링을 <br class="only-PC">
							통한 한국어 수업 및 기초학력 보충 수업 제공

						</div>
						<!--end::Slider-detail -->
					</div>
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::CSR-->
	<!--begin::companies  -->
	<div class="mt-0">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Slider-->
			<div class="tns tns-slider" style="max-width: 1000px;">
				<!--begin::Wrapper-->
				<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="1000" data-tns-autoplay="true" data-tns-autoplay-timeout="20000" data-tns-controls="false" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 5}, 992: {items: 4}, 768: {items: 3}, 445: {items: 2}, 0: {items: 2}}">
					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Photo-->
						<div class="mx-auto mb-5 w-200px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/tpl_v4_20221024/demo1/dist/assets/imgs/afilliate/ebs_logo.jpeg'); max-width: 150px;"></div>
						<!--end::Photo-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Photo-->
						<div class="mx-auto mb-5 w-200px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/tpl_v4_20221024/demo1/dist/assets/imgs/afilliate/daol_investment_logo.jpeg'); max-width: 150px;"></div>
						<!--end::Photo-->
					</div>
					<!--end::Item-->

					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Photo-->
						<div class="mx-auto mb-5 w-200px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/tpl_v4_20221024/demo1/dist/assets/imgs/afilliate/greenUmb_logo.jpeg'); max-width: 150px;"></div>
						<!--end::Photo-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Photo-->
						<div class="mx-auto mb-5 w-200px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/tpl_v4_20221024/demo1/dist/assets/imgs/afilliate/multicampus_logo.png'); max-width: 150px;"></div>
						<!--end::Photo-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Photo-->
						<div class="mx-auto mb-5 w-200px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/tpl_v4_20221024/demo1/dist/assets/imgs/afilliate/jasengh_logo.jpeg'); max-width: 150px;"></div>
						<!--end::Photo-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Photo-->
						<div class="mx-auto mb-5 w-200px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/tpl_v4_20221024/demo1/dist/assets/imgs/afilliate/posco_logo.jpeg'); max-width: 150px;"></div>
						<!--end::Photo-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Photo-->
						<div class="mx-auto mb-5 w-200px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/tpl_v4_20221024/demo1/dist/assets/imgs/afilliate/thewellsinvestment_logo.png'); max-width: 150px;"></div>
						<!--end::Photo-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Photo-->
						<div class="mx-auto mb-5 w-200px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/tpl_v4_20221024/demo1/dist/assets/imgs/afilliate/worldYMCA_logo.png'); max-width: 150px;"></div>
						<!--end::Photo-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Slider-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::companies  -->
	<!--begin:: footer -->
	<div class="footer text-white pt-lg-20 pb-lg-20 pt-10 pb-10" style="background-color: #000D60;">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="mt-3 fw-bold">
						고객센터 <a href="tel:02-2135-9632" style="color:white;text-decoration: none;">02-2135-9632</a> <span class="fw-normal">(월~토 10~17시, 일/공휴일 미운영)</span><br>
						이메일 문의 <a href="mailto:help@supaja.com" style="color:white;text-decoration: none;">help@supaja.com</a>
					</div>
				</div>
				<div class="col-6">
					<div class="mt-3 fw-bold">
						수파자 주식회사 | 대표이사 이명호 <br>
						사업자등록번호 : <span class="fw-normal">361-86-01077</span> | 통신판매번호 : <span class="fw-normal">2018-서울강남-00930
              <br>
              서울특별시 강남구 강남대로 382, 메리츠타워 17층</span> <br>
						<a href="/terms?type=t" target="_blank" style="color:white;text-decoration: none;">이용약관</a>
						|
						<a href="/terms?type=p" target="_blank" style="color:white;text-decoration: none;">개인정보처리방침</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end:: footer -->
	<!--begin:: side-sticky -->
	<div class="side-sticky position-fixed"
		 style="width: 150px; height: 300px; right: 14px; bottom: 218px;">
		<div class="d-flex flex-column align-content-center text-center">
			<a href="http://pf.kakao.com/_EFDTM/chat" target="_blank" style="font-style: none; color: #000;">
				<div class="fs-4 fw-bold px-0 py-10" style="background-color: #ffde33; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 4px;">
					<i class="fa-sharp fa-solid fa-comments text-dark fs-2x"></i>
					<div class="mt-3 fw-bold">카카오톡 문의</div>
				</div>
			</a>
			<div class="text-light bg-black mt-3 px-5 py-10" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 4px;">
				<div class="fw-bolder fs-5">빠른 전화 문의 <br> 02) <a href="tel:02-2135-9632" style="color:white;text-decoration: none;">02-2135-9632</a></div>
				<div class="fw-bolder fs-8 mt-5">월 ~ 토 10~17시 <br> (공휴일 제외)</div>
			</div>
		</div>
	</div>
	<!-- begin:: Mobile -->
	<div class="kakaotalk">
		<a href="http://pf.kakao.com/_EFDTM/chat" target="_blank">
			<img src="/tpl_v4_20221024/demo1/dist/assets/imgs/kakaotalk-cs.png">
		</a>
	</div>

	<style>
		.kakaotalk {
			position: fixed;
			right: 10px;
			display: none;
		}

		.kakaotalk img {
			width: 54px;
		}

		@media screen and (max-width: 768px) {
			.side-sticky {
				display: none;
			}

			.kakaotalk {
				width: 56px;
				display: block;
				bottom: 40px;
			}
		}
	</style>
	<!-- begin:: Mobile -->
	<!--end:: side-sticky -->

	<style>
		@import url("https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.5/dist/web/static/pretendard.css");

		body {
			font-family: 'Pretendard' !important;
		}

		:root {
			--kt-primary-light: #DFE0FF !important;
			--kt-primary: #1735DB !important;
			--bs-primary: #1735DB !important;
			--bs-primary-rgb: 23,53,219 !important;
			--kt-primary-rgb: 23,53,219 !important;
			--kt-text-primary: #1735DB !important;
			--kt-secondary: #E3E1EC !important;
		}

		.container {
			max-width: 1200px !important;
			padding-left: calc(var(--bs-gutter-x) * 1.2);
			padding-right: calc(var(--bs-gutter-x) * 1.2);
		}

		.container.container-mw-auto {
			max-width: 1300px !important;
		}

		.only-PC {
			display: block;
		}

		@media screen and (max-width: 768px) {
			.only-PC {
				display: none;
			}
		}
	</style>
	<!--end:: pretendard font -->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "/tpl_v4_20221024/demo1/dist/assets/";
	</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="/tpl_v4_20221024/demo1/dist/assets/plugins/global/plugins.bundle.js"></script>
	<script src="/tpl_v4_20221024/demo1/dist/assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used by this page)-->
	<script src="/tpl_v4_20221024/demo1/dist/assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
	<script src="/tpl_v4_20221024/demo1/dist/assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used by this page)-->
	<script src="/tpl_v4_20221024/demo1/dist/assets/js/custom/landing.js"></script>
	<script src="/tpl_v4_20221024/demo1/dist/assets/js/custom/pages/pricing/general.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
<!--end::Body-->