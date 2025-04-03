<!doctype html>
<html lang="en-US">

<head>
    <title>
        {{ $user->userData->fullname }} - {{ $user->userData->profession }}
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="true">
    <meta name="author" content="beshleyua" />
    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%7CSorts+Mill+Goudy&#038;display=swap"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto"
        type="text/css" media="all" />
    <!-- CSS STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/magnific-popup.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/splitting.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/animate.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" type="text/css" media="all" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-125314689-11');
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.getElementById("cform").action = '{{ route('contact.sent', [$user->id]) }}';
            document.getElementById("cform").submit();
        }
    </script>
</head>

<body class="home page light-skin">
    <div class="container-page ">
        <!-- Preloader -->
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner-logo">
                        {{-- <img src="assets/images/ober_logo.png" alt="" /> --}}
                        <h5>{{ $user->userData->fullname }}</h5>
                        <div class="spinner-dot"></div>
                        <div class="spinner spinner-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header -->
        <header class="header">
            <div class="header__builder">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <!-- logo -->
                        <div class="logo">
                            <a href="{{ url('/' . $user->username) }}">
                                <h5>{{ $user->userData->fullname }}</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 align-right">
                        <!-- switcher btn -->
                        <a class="px-3 mt-2" href="{{ route('qr', [$user->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-qrcode"
                                width="34" height="34" viewBox="0 0 24 24" stroke-width="1" stroke="#00d19d"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                <path d="M7 17l0 .01" />
                                <path
                                    d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                <path d="M7 7l0 .01" />
                                <path
                                    d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                <path d="M17 7l0 .01" />
                                <path d="M14 14l3 0" />
                                <path d="M20 14l0 .01" />
                                <path d="M14 14l0 3" />
                                <path d="M14 20l3 0" />
                                <path d="M17 17l3 0" />
                                <path d="M20 17l0 3" />
                            </svg>
                        </a>
                        <a href="#" class="switcher-btn">
                            <span class="sw-before">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22.22" height="22.313"
                                    viewBox="0 0 22.22 22.313">
                                    <path fill="#fff"
                                        d="M1752.49,105.511a5.589,5.589,0,0,0-3.94-1.655,5.466,5.466,0,0,0-3.94,1.655,5.61,5.61,0,0,0,3.94,9.566,5.473,5.473,0,0,0,3.94-1.653,5.643,5.643,0,0,0,1.65-3.957A5.516,5.516,0,0,0,1752.49,105.511Zm-1.06,6.85a4.1,4.1,0,0,1-5.76,0,4.164,4.164,0,0,1,0-5.788A4.083,4.083,0,0,1,1751.43,112.361Zm7.47-3.662h-2.27a0.768,0.768,0,0,0,0,1.536h2.27A0.768,0.768,0,0,0,1758.9,108.7Zm-10.35,8.12a0.777,0.777,0,0,0-.76.769v2.274a0.777,0.777,0,0,0,.76.767,0.786,0.786,0,0,0,.77-0.767v-2.274A0.786,0.786,0,0,0,1748.55,116.819Zm7.85-.531-1.62-1.624a0.745,0.745,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.625a0.747,0.747,0,0,0,1.06,0A0.759,0.759,0,0,0,1756.4,116.288ZM1748.55,98.3a0.777,0.777,0,0,0-.76.768v2.273a0.778,0.778,0,0,0,.76.768,0.787,0.787,0,0,0,.77-0.768V99.073A0.786,0.786,0,0,0,1748.55,98.3Zm7.88,3.278a0.744,0.744,0,0,0-1.06,0l-1.62,1.624a0.758,0.758,0,0,0,0,1.063,0.745,0.745,0,0,0,1.06,0l1.62-1.624A0.758,0.758,0,0,0,1756.43,101.583Zm-15.96,7.116h-2.26a0.78,0.78,0,0,0-.77.768,0.76,0.76,0,0,0,.77.768h2.26A0.768,0.768,0,0,0,1740.47,108.7Zm2.88,5.965a0.745,0.745,0,0,0-1.06,0l-1.62,1.624a0.759,0.759,0,0,0,0,1.064,0.747,0.747,0,0,0,1.06,0l1.62-1.625A0.758,0.758,0,0,0,1743.35,114.664Zm0-11.457-1.62-1.624a0.744,0.744,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.624a0.745,0.745,0,0,0,1.06,0A0.758,0.758,0,0,0,1743.35,103.207Z"
                                        transform="translate(-1737.44 -98.313)" />
                                </svg>
                            </span>
                            <span class="sw-after">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                    viewBox="0 0 23 23">
                                    <path fill="#fff"
                                        d="M1759.46,111.076a0.819,0.819,0,0,0-.68.147,8.553,8.553,0,0,1-2.62,1.537,8.167,8.167,0,0,1-2.96.531,8.655,8.655,0,0,1-8.65-8.682,9.247,9.247,0,0,1,.47-2.864,8.038,8.038,0,0,1,1.42-2.54,0.764,0.764,0,0,0-.12-1.063,0.813,0.813,0,0,0-.68-0.148,11.856,11.856,0,0,0-6.23,4.193,11.724,11.724,0,0,0,1,15.387,11.63,11.63,0,0,0,19.55-5.553A0.707,0.707,0,0,0,1759.46,111.076Zm-4.5,6.172a10.137,10.137,0,0,1-14.29-14.145,10.245,10.245,0,0,1,3.38-2.836c-0.14.327-.29,0.651-0.41,1.006a9.908,9.908,0,0,0-.56,3.365,10.162,10.162,0,0,0,10.15,10.189,9.776,9.776,0,0,0,3.49-.62,11.659,11.659,0,0,0,1.12-.473A10.858,10.858,0,0,1,1754.96,117.248Z"
                                        transform="translate(-1737 -98)" />
                                </svg>
                            </span>
                        </a>
                        <!-- menu btn -->
                        <a href="#" class="menu-btn"><span></span></a>
                    </div>
                </div>
            </div>
            <!-- Menu Full Overlay -->
            <div class="menu-full-overlay">
                <div class="menu-full-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-1">
                                <!-- menu full -->
                                <div class="menu-full">
                                    <ul class="menu-full">
                                        <li class="menu-item">
                                            <a class="splitting-text-anim-2" data-splitting="chars"
                                                href="#about-section">About</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="splitting-text-anim-2" data-splitting="chars"
                                                href="#resume-section">Resume</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="splitting-text-anim-2" data-splitting="chars"
                                                href="#contact-section">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- social -->
                <div class="menu-social-links">
                    @foreach ($user->userSocial as $social)
                        <a target="_blank" rel="nofollow" href="{{ $social->link }}">
                            <img src="{{ asset('storage/' . $social->icon) }}" width="25" alt="Twitter" />
                        </a>
                    @endforeach
                </div>
            </div>
        </header>
        <!-- Wrapper -->
        <div class="wrapper">
            <!-- Section -->
            <section class="section section-started">
                <div class="container">
                    <!-- Hero Started -->
                    <div class="hero-started">
                        <div class="slide scrolla-element-anim-1 scroll-animate" data-animate="active">
                            <img src="{{ asset('storage/' . optional($user->userData)->profile_picture) }}"
                                alt="" />
                            <span class="circle circle-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="749px" height="375px">
                                    <path fill-rule="evenodd" fill="#ff8059"
                                        d="M749.000,0.000 C749.000,206.786 581.459,374.514 374.608,374.514 C167.758,374.514 -0.000,206.786 -0.000,0.000 " />
                                </svg>
                            </span>
                            <span class="circle circle-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="416px" height="209px">
                                    <path fill-rule="evenodd" fill="#3aafc9"
                                        d="M-0.000,209.000 C-0.000,94.252 93.051,0.745 207.835,0.745 C322.619,0.745 416.000,94.252 416.000,209.000 " />
                                </svg>
                            </span>
                            <span class="circle circle-3">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="416px" height="209px">
                                    <path fill-rule="evenodd" fill="#b9d1e4"
                                        d="M-0.000,209.000 C-0.000,94.252 93.051,0.745 207.835,0.745 C322.619,0.745 416.000,94.252 416.000,209.000 " />
                                </svg>
                            </span>
                            <span class="circle circle-4">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="121px" height="241px">
                                    <path fill-rule="evenodd" fill="#676cdb"
                                        d="M0.000,0.000 C66.624,0.000 120.402,54.096 120.402,120.733 C120.402,187.371 66.624,241.000 0.000,241.000 " />
                                </svg>
                            </span>
                            <span class="circle circle-5">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="232px" height="117px">
                                    <path fill-rule="evenodd" fill="rgb(255, 208, 65)"
                                        d="M232.000,0.000 C232.000,64.151 180.376,116.580 116.238,116.580 C52.100,116.580 0.000,64.151 0.000,0.000 " />
                                </svg>
                            </span>
                        </div>
                        <div class="content">
                            <div class="titles">
                                <div class="subtitle splitting-text-anim-2 scroll-animate" data-splitting="chars"
                                    data-animate="active">
                                    {{ optional($user->userData)->profession }}
                                </div>
                                <h2 class="title splitting-text-anim-1 scroll-animate" data-splitting="chars"
                                    data-animate="active">
                                    {{ optional($user->userData)->fullname }}
                                </h2>
                                @if($user->id == 3)
                                <h4>LLM, MBA, CRA,IMCM</h4>
                                @endif
                            </div>
                            <div class="description scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <p>
                                    {{ optional($user->userData)->introduction }}
                                </p>
                                <div class="social-links">
                                    @foreach ($user->userSocial as $social)
                                        <a target="_blank" rel="nofollow" href="{{ $social->link }}">
                                            <img 
                                            style="@media prefers-color-scheme: dark {filter: invert(1);} "
                                            src="{{ asset('storage/' . $social->icon) }}" width="25"
                                                alt="Twitter" />
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="info-list">
                            <ul>
                                <li class="scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    Born in <strong>
                                        {{ optional($user->userData)->born_in }}
                                    </strong>
                                </li>
                                <li class="scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    Experience <strong>{{ optional($user->userData)->experience }}</strong>
                                </li>
                                <!--<li class="scrolla-element-anim-1 scroll-animate" data-animate="active">-->
                                <!--    Date of Birth <strong>{{ optional($user->userData)->date_of_birth }}</strong>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-bg section-parallax-1" id="about-section">
                <div class="container">
                    <!-- Section Heading -->
                    <div class="m-titles">
                        <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="chars"
                            data-animate="active">
                            About Me
                        </h2>
                    </div>
                    <div class="row row-custom">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 align-right">
                            <!-- Section numbers -->
                            <div class="numbers-items">
                                @foreach ($user->userAbout as $about)
                                    <div class="numbers-item scrolla-element-anim-1 scroll-animate"
                                        data-animate="active">
                                        <div class="icon">
                                            <image src="{{ asset('storage/' . $about->icon) }}" width="60"
                                                alt="" />
                                        </div>
                                        <div class="num">
                                            {{ $about->item }}
                                        </div>
                                        <div class="title">
                                            {{ $about->title }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 vertical-line">
                            <!-- Section Profile -->
                            <div class="profile-box">
                                <div class="text scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    {!! optional($user->userData)->about_me !!}
                                    <a href="#contact-section" class="btn scrolla-element-anim-1 scroll-animate"
                                        data-animate="active">Contact Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-parallax-2" id="resume-section">
                <div class="container">
                    <!-- Section Heading -->
                    <div class="m-titles">
                        <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="chars"
                            data-animate="active">
                            My Resume
                        </h2>
                    </div>
                    <div class="row row-custom">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 vertical-line">
                            <!-- Description -->
                            <div class="text scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <p>
                                    {!! optional($user->userResume)->resume_content !!}
                                </p>
                            </div>
                            <!-- Skills -->
                            <div class="skills-items">
                                <div class="p-title scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    SKILLS</div>
                                @foreach ($user->userResumeSkills as $skill)
                                    <div class="skills-item scrolla-element-anim-1 scroll-animate"
                                        data-animate="active">
                                        <div class="name">
                                            {{ $skill->skill_name }}
                                        </div>
                                        <div class="dots dots-{{ $skill->skill_level }}">
                                            <div class="dots-row">
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                            </div>
                                        </div>
                                        <div class="value"><span class="num">{{ $skill->skill_level }}%</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Services -->
                            @if($user->userResumeServices->count() > 0)
                            <div class="p-title scrolla-element-anim-1 scroll-animate" data-animate="active">SERVICES
                            </div>
                            @endif
                            <div class="services-items">
                                @foreach ($user->userResumeServices as $services)
                                    <div class="services-col">
                                        <div class="services-item scrolla-element-anim-1 scroll-animate"
                                            data-animate="active">
                                            <div class="icon">
                                                <img src="{{ asset('storage/' . $services->icon) }}" alt=""
                                                    width="40" />
                                            </div>
                                            <div class="title">
                                                {{ $services->title }}
                                            </div>
                                            <div class="text">
                                                <p>
                                                    {{ $services->description }}
                                                </p>
                                            </div>
                                            @if ($services->link)
                                                <a href="{{ $services->link }}" target="_blank" class="lnk">
                                                    Learn More
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- History -->
                            <div class="history-left">
                                <div class="history-items">
                                    <div class="p-title scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        EDUCATION</div>
                                    @foreach ($user->userResumeEducations as $education)
                                        <div class="history-item scrolla-element-anim-1 scroll-animate"
                                            data-animate="active">
                                            @if ($education->education_end_date)
                                                <div class="date">{{ $education->education_start_date }} -
                                                    {{ $education->education_end_date }}</div>
                                            @endif
                                            <div class="name">{{ $education->degree }}</div>
                                            <div class="subname">{{ $education->school }}</div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="history-items">
                                    <div class="p-title scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        Certifications</div>
                                    @foreach ($user->userResumeCertifications as $certification)
                                        <div class="history-item scrolla-element-anim-1 scroll-animate"
                                            data-animate="active">
                                            <div class="date">{{ $certification->receive_date }} </div>
                                            <div class="name">
                                                {{ $certification->certification_name }}
                                            </div>
                                            <div class="text">
                                                <p>
                                                    {{ $certification->description }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @if ($user->userResumeExperiences->count() > 0)
                                <div class="history-right">
                                    <div class="history-items">
                                        <div class="p-title scrolla-element-anim-1 scroll-animate"
                                            data-animate="active">
                                            EXPERIENCE</div>
                                        @foreach ($user->userResumeExperiences as $experience)
                                            <div class="history-item scrolla-element-anim-1 scroll-animate"
                                                data-animate="active">
                                                <div class="date">{{ $experience->start_date }} -
                                                    {{ $experience->end_date }}</div>
                                                <div class="name">{{ $experience->company_name }}</div>
                                                <div class="subname">{{ $experience->job_title }}</div>
                                                <div class="text">
                                                    <p>
                                                        {!! $experience->description !!}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            <div class="clear"></div>
                            <!-- Button CV -->
                            @if($user->userResume->resume_file_cv)
                            <a target="_blank" download="{{ optional($user->userData)->fullname }}-Resume.pdf"
                                href="{{ asset('storage/' . optional($user->userResume)->resume_file_cv) }}"
                                class="btn scrolla-element-anim-1 scroll-animate" data-animate="active">Download
                                CV</a>
                                @endif
                        </div>
                    </div>
                </div>
            </section>
            @if($user->username == "henryezeribe")
            <section class="section" id="pricing-section">
  <div class="container">

    <!-- Section Heading -->
    <div class="m-titles">
      <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
        Pricing Plans
      </h2>
    </div>

    <div class="row row-custom">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 vertical-line">

        <!-- Description -->
        <div class="text scrolla-element-anim-1 scroll-animate" data-animate="active">
          <p>Interested in working with me? Here’s our price list for immigration consultations. Let’s discuss your specific needs!</p>
        </div>

      </div>
    </div>

    <!-- Pricing -->
    <div class="pricing-items row">

      <div class="pricing-col col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="pricing-item scrolla-element-anim-1 scroll-animate" data-animate="active">
          <div class="title">Basic Consultation</div>
          <div class="subtitle">General immigration advice</div>
          <div class="price">€100</div>
          <div class="text">
            <ul>
              <li>General immigration advice</li>
              <li>Visa options</li>
              <li>Eligibility assessment</li>
            </ul>
          </div>
          <a href="#contact-section" class="btn">Get Started</a>
        </div>
      </div>

      <div class="pricing-col col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="pricing-item scrolla-element-anim-1 scroll-animate" data-animate="active">
          <div class="title">Comprehensive Consultation</div>
          <div class="subtitle">In-depth immigration assessment</div>
          <div class="price">€200</div>
          <div class="text">
            <ul>
              <li>In-depth assessment of goals</li>
              <li>Long-term strategies</li>
              <li>Potential legal challenges</li>
              <li>Personalized options</li>
            </ul>
          </div>
          <a href="#contact-section" class="btn">Get Started</a>
        </div>
      </div>

      <div class="pricing-col col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="pricing-item scrolla-element-anim-1 scroll-animate" data-animate="active">
          <div class="title">VIP Consultation/Retainer</div>
          <div class="subtitle">Exclusive and personalized support</div>
          <div class="price">€400</div>
          <div class="text">
            <ul>
              <li>Ongoing immigration planning</li>
              <li>Fast-tracked services</li>
              <li>Exclusive client support</li>
              <li>Tailored to high-net-worth individuals or businesses</li>
            </ul>
          </div>
          <a href="#contact-section" class="btn">Get Started</a>
        </div>
      </div>

    </div>

  </div>
</section>
            @endif
            {{-- <section class="section section-bg section-parallax-5" id="works-section">
                <div class="container">
                    <!-- Section Heading -->
                    <div class="m-titles">
                        <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="chars"
                            data-animate="active">
                            My Services
                        </h2>
                    </div>
                    <div class="row row-custom">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 vertical-line">
                            <!-- Description -->
                            <div class="text scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <p>Some of the services I offer to my clients. I am always ready to help you with your.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Works -->
                    <div class="works-box">
                        <div class="filter-links scrolla-element-anim-1 scroll-animate" data-animate="active">
                            <a href="#" class="active" data-href=".works-col">All</a>
                            @foreach ($user->userServiceCategory as $category)
                                @if ($category->user_services->count() > 0)
                                    <a href="#"
                                        data-href=".sorting-{{ Str::slug($category->service_category_name) }}">{{ $category->service_category_name }}</a>
                                @endif
                            @endforeach
                        </div>
                        <div class="works-items works-list-items row">
                            @php
                                // Organizing user services by their category
                                $userServicesByCategory = [];
                                foreach ($user->userServices as $userService) {
                                    $category = $userService->user_service_category->service_category_name;
                                    $userServicesByCategory[$category][] = $userService;
                                }
                            @endphp

                            @foreach ($userServiceCategory as $service)
                                @if (isset($userServicesByCategory[$service]))
                                    @foreach ($userServicesByCategory[$service] as $userService)
                                        <div
                                            class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-{{ Str::slug($service) }} sorting-photo">
                                            <div class="works-item">
                                                <a href="work-single.html">
                                                    <span class="image scrolla-element-anim-1 scroll-animate"
                                                        data-animate="active">
                                                        <span class="img">
                                                            <img src="{{ asset('storage/' . $userService->service_cover) }}"
                                                                alt="{{ $userService->service_name }}" />
                                                            <span class="overlay"></span>
                                                        </span>
                                                    </span>
                                                    <span class="desc">
                                                        <span class="name splitting-text-anim-1 scroll-animate"
                                                            data-splitting="chars" data-animate="active">
                                                            {{ $userService->service_name }}
                                                        </span>
                                                        <span class="category scrolla-element-anim-1 scroll-animate"
                                                            data-animate="active">
                                                            {{ $service }}
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </section> --}}
            {{-- <section class="section section-parallax-4">
                <div class="container">
                    <!-- Testimonials -->
                    <div class="m-testimonials">
                        <div class="swiper-container js-testimonials">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonials-item scrolla-element-anim-1 scroll-animate"
                                        data-animate="active">
                                        <div class="text">
                                            <div class="icon">
                                                <svg width="58" height="44" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="0 0 58 44">
                                                    <defs></defs>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M24.15697,5.25606c-5.87975,2.24304 -9.65698,8.89397 -9.65698,14.29844h9.62551v24.44363h-24.12552v-18.06641c0,-13.94272 9.05766,-23.39363 21.74995,-25.93231zM57.98788,5.25606c-5.87734,2.24304 -9.65458,8.89397 -9.65458,14.29844h9.6666v24.44363h-24.12552v-18.06641c0,-13.94272 9.01657,-23.39363 21.70887,-25.93231zM54.21305,2.82419c-11.10706,2.9459 -17.92202,11.65104 -17.92202,23.10753v15.62309h19.29222v-19.55605h-9.6666v-2.44427c0,-5.29194 3.09334,-12.05826 8.87878,-15.45906zM20.37974,2.82133v0l0.58239,1.27411c-5.78556,3.4008 -8.8789,10.16712 -8.8789,15.45906v2.44427v0h9.62563v0v19.55605v0h-19.29222v0v-15.62309c0,-11.45458 6.83189,-20.15972 17.9631,-23.11039"
                                                                fill="#ffffff" fill-opacity="1"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <p>Sed vel mattis dolor. Vestibulum gravida, dolor vel dapibus bibendum,
                                                velit enim finibus mauris, in volutpat arcu magna ac metus. Sed
                                                condimentum, erat vel sodales pharetra, ligula massa maximus dolor</p>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/team3.jpg" alt="Jennifer Smith" />
                                        </div>
                                        <div class="info">
                                            <h3 class="name">Jennifer Smith</h3>
                                            <div class="author">CEO &amp; Founder</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-item scrolla-element-anim-1 scroll-animate"
                                        data-animate="active">
                                        <div class="text">
                                            <div class="icon">
                                                <svg width="58" height="44" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="0 0 58 44">
                                                    <defs></defs>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M24.15697,5.25606c-5.87975,2.24304 -9.65698,8.89397 -9.65698,14.29844h9.62551v24.44363h-24.12552v-18.06641c0,-13.94272 9.05766,-23.39363 21.74995,-25.93231zM57.98788,5.25606c-5.87734,2.24304 -9.65458,8.89397 -9.65458,14.29844h9.6666v24.44363h-24.12552v-18.06641c0,-13.94272 9.01657,-23.39363 21.70887,-25.93231zM54.21305,2.82419c-11.10706,2.9459 -17.92202,11.65104 -17.92202,23.10753v15.62309h19.29222v-19.55605h-9.6666v-2.44427c0,-5.29194 3.09334,-12.05826 8.87878,-15.45906zM20.37974,2.82133v0l0.58239,1.27411c-5.78556,3.4008 -8.8789,10.16712 -8.8789,15.45906v2.44427v0h9.62563v0v19.55605v0h-19.29222v0v-15.62309c0,-11.45458 6.83189,-20.15972 17.9631,-23.11039"
                                                                fill="#ffffff" fill-opacity="1"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <p>Sed vel mattis dolor. Vestibulum gravida, dolor vel dapibus bibendum,
                                                velit enim finibus mauris, in volutpat arcu magna ac metus. Sed
                                                condimentum, erat vel sodales pharetra, ligula massa maximus dolor</p>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/team3.jpg" alt="Jennifer Smith" />
                                        </div>
                                        <div class="info">
                                            <h3 class="name">Jennifer Smith</h3>
                                            <div class="author">CEO &amp; Founder</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-item scrolla-element-anim-1 scroll-animate"
                                        data-animate="active">
                                        <div class="text">
                                            <div class="icon">
                                                <svg width="58" height="44" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="0 0 58 44">
                                                    <defs></defs>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M24.15697,5.25606c-5.87975,2.24304 -9.65698,8.89397 -9.65698,14.29844h9.62551v24.44363h-24.12552v-18.06641c0,-13.94272 9.05766,-23.39363 21.74995,-25.93231zM57.98788,5.25606c-5.87734,2.24304 -9.65458,8.89397 -9.65458,14.29844h9.6666v24.44363h-24.12552v-18.06641c0,-13.94272 9.01657,-23.39363 21.70887,-25.93231zM54.21305,2.82419c-11.10706,2.9459 -17.92202,11.65104 -17.92202,23.10753v15.62309h19.29222v-19.55605h-9.6666v-2.44427c0,-5.29194 3.09334,-12.05826 8.87878,-15.45906zM20.37974,2.82133v0l0.58239,1.27411c-5.78556,3.4008 -8.8789,10.16712 -8.8789,15.45906v2.44427v0h9.62563v0v19.55605v0h-19.29222v0v-15.62309c0,-11.45458 6.83189,-20.15972 17.9631,-23.11039"
                                                                fill="#ffffff" fill-opacity="1"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <p>Sed vel mattis dolor. Vestibulum gravida, dolor vel dapibus bibendum,
                                                velit enim finibus mauris, in volutpat arcu magna ac metus. Sed
                                                condimentum, erat vel sodales pharetra, ligula massa maximus dolor</p>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/team3.jpg" alt="Jennifer Smith" />
                                        </div>
                                        <div class="info">
                                            <h3 class="name">Jennifer Smith</h3>
                                            <div class="author">CEO &amp; Founder</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev scrolla-element-anim-1 scroll-animate"
                                data-animate="active">
                                <svg width="13" height="25" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 13 25">
                                    <defs></defs>
                                    <g>
                                        <g>
                                            <path
                                                d="M0.27409,11.8138l11.13338,-11.53183c0.36484,-0.37766 0.95535,-0.37766 1.3195,0.00191c0.36392,0.37861 0.36301,0.99277 -0.00183,1.37043l-10.47066,10.84518v0l10.471,10.84423c0.36484,0.37861 0.36575,0.99087 0.00195,1.37043c-0.18253,0.18883 -0.42171,0.28515 -0.6609,0.28515c-0.23849,0 -0.47676,-0.09537 -0.65895,-0.28229l-11.1335,-11.53183c-0.17567,-0.18215 -0.2742,-0.4282 -0.2742,-0.68569c0,-0.25749 0.09888,-0.50449 0.2742,-0.68569z"
                                                fill="#ffffff" fill-opacity="1"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="swiper-button-next scrolla-element-anim-1 scroll-animate"
                                data-animate="active">
                                <svg width="13" height="25" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 13 25">
                                    <defs></defs>
                                    <g>
                                        <g>
                                            <path
                                                d="M0.27409,11.8138l11.13338,-11.53183c0.36484,-0.37766 0.95535,-0.37766 1.3195,0.00191c0.36392,0.37861 0.36301,0.99277 -0.00183,1.37043l-10.47066,10.84518v0l10.471,10.84423c0.36484,0.37861 0.36575,0.99087 0.00195,1.37043c-0.18253,0.18883 -0.42171,0.28515 -0.6609,0.28515c-0.23849,0 -0.47676,-0.09537 -0.65895,-0.28229l-11.1335,-11.53183c-0.17567,-0.18215 -0.2742,-0.4282 -0.2742,-0.68569c0,-0.25749 0.09888,-0.50449 0.2742,-0.68569z"
                                                fill="#ffffff" fill-opacity="1"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <section class="section section-bg section-parallax-2" id="contact-section">
                <div class="container">
                    <!-- Section Heading -->
                    <div class="m-titles">
                        <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="chars"
                            data-animate="active">Contact Me</h2>
                    </div>
                    <div class="row row-custom">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 align-right">
                            <!-- Section numbers -->
                            <div class="numbers-items contacts-items">
                                <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    <div class="icon">
                                        <i aria-hidden="true" class="fas fa-phone"></i>
                                    </div>
                                    <div class="num">
                                        {{ optional($user->userData)->phone_number }}
                                    </div>
                                </div>
                                <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    <div class="icon">
                                        <i aria-hidden="true" class="fas fa-at"></i>
                                    </div>
                                    <div class="num" style="text-overflow: clip">
                                        {{ optional($user->userData)->email }}
                                    </div>
                                </div>
                                <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    <div class="icon">
                                        <i aria-hidden="true" class="fas fa-location-arrow"></i>
                                    </div>
                                    <div class="num">
                                        {{ optional($user->userData)->address }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 vertical-line">
                            <!-- contact form -->
                            <div class="contacts-form scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <form id="cform" method="post">
                                    @csrf
                                    <label>
                                        Name
                                        <input type="text" name="name" placeholder="Enter your full name" />
                                    </label>
                                    <label>
                                        Email Address
                                        <input type="email" name="email"
                                            placeholder="Enter your email address" />
                                    </label>
                                    <label>
                                        Message
                                        <textarea name="message" placeholder="Enter your message here"></textarea>
                                    </label>
                                    <button class="g-recaptcha btn"
                                        data-sitekey="6LcLYGEqAAAAAI7Rw2SoqwOEAB09xxoyfHON9fjo"
                                        data-callback="onSubmit">Submit</a>
                                </form>
                            </div>
                            <div class="alert-success" style="display: none;">
                                <p>Thanks, your message is sent successfully.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer -->
        <div class="footer">
            <div class="footer__builder">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-left">
                            <!-- social -->
                            <div class="social-links scrolla-element-anim-1 scroll-animate" data-animate="active">
                                @foreach ($user->userSocial as $social)
                                    <a target="_blank" rel="nofollow" href="{{ $social->link }}">
                                        <img src="{{ asset('storage/' . $social->icon) }}" width="25"
                                            alt="Twitter" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center">
                            <div class="copyright-text scrolla-element-anim-1 scroll-animate" data-animate="active">©
                                {{ date('Y') }} Hetdynamic. All Rights Reserved</div>
                        </div>
                        {{-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-right">
                            <div class="copyright-text scrolla-element-anim-1 scroll-animate" data-animate="active">
                                Developed by <a href="https://instagram.com/veedsify" target="_blank"
                                    class="fw-bold">Veedsify</strong></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cursor -->
    <div class="cursor"></div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/splitting.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrolla.js') }}"></script>
    <script src="{{ asset('assets/js/skrollr.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <!-- bslthemes.com buttons assets begin -->
    <link rel="stylesheet" href="https://bslthemes.com/bslthms-advanced-btns/assets/style.css">
    <script src="https://bslthemes.com/bslthms-advanced-btns/assets/script.js"></script>

    @if (session('success'))
        <script>
            swal({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success",
                button: "OK",
            })
        </script>
    @endif
    <!-- bslthemes.com buttons assets end -->
</body>

</html>
