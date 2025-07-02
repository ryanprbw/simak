<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')




<nav class="bg-transparent fixed w-full z-20 top-0 start-0 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://simak.dukcapil.tapinkab.go.id" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('build/assets/images/apps/simak.png') }}" class="h-8" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SIMAK</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  border-b hover:bg-gray-300 ">
                <li>
                    <a href="{{ route('login') }}"
                        class="block py-2 px-3 text-gray-900 bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                        aria-current="page">Login</a>
                </li>

            </ul>
        </div>
    </div>
</nav>







<section class="hero-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="text-center mb-5 pb-2">
                    <h1 class="text-white">SIMAK</h1>

                    <p class="text-white">Sistem Informasi Manajemen Kesekretariatan</p>

                    <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Aplikasi Disdukcapil</a>
                </div>

                <div class="owl-carousel owl-theme">
                    <!-- resources/views/pegawai/index.blade.php -->

                    @foreach ($pegawai as $p)
                        <div class="owl-carousel-info-wrap item">
                            <img src="{{ $p->photo ? asset('images/' . $p->photo) : asset('images/default.jpg') }}"
                                class="owl-carousel-image img-fluid" alt="{{ $p->nama }}">

                            alt="{{ $p->nama }}">

                            <div class="owl-carousel-info">
                                <h4 class="mb-2">
                                    {{ $p->nama }}
                                    <img src="{{ asset('build/assets/images/verified.png') }}"
                                        class="owl-carousel-verified-image img-fluid" alt="">
                                </h4>

                                <span class="badge">NIP. {{ $p->nip }}</span>
                                <span class="badge">{{ $p->jenis }}</span>
                            </div>

                            <div class="social-share">
                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>

    </div>
    </div>
</section>
<section class="latest-podcast-section section-padding pb-0" id="section_2">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Aplikasi Sekretariat</h4>
                </div>
            </div>

            <div class="col-lg-6 col-12 mb-4 mb-lg-20 bg-4">
                <div class="custom-block d-flex">
                    <div class="">
                        <div class="custom-block-icon-wrap">
                            <div class="section-overlay"></div>
                            <a href="detail-page.html" class="custom-block-image-wrap">
                                <img src="{{ asset('build/assets/images/apps/bymails.png') }}"
                                    class="custom-block-image img-fluid" alt="">

                                <a href="https://bymails.dukcapil.tapinkab.go.id" class="custom-block-icon">
                                    <i class="bi-play-fill"></i>
                                </a>
                            </a>
                        </div>

                        <div class="mt-2">
                            <a href="https://bymails.dukcapil.tapinkab.go.id" class="btn custom-btn">
                                ByMails
                            </a>
                        </div>
                    </div>

                    <div class="custom-block-info">
                        <div class="custom-block-top d-flex mb-1">
                            <small class="me-4">
                                <i class="bi-clock-fill custom-icon"></i>
                                Dibuat pada tahun 2024
                            </small>
                        </div>
                        <h5 class="mb-2">
                            <a href="https://bymails.dukcapil.tapinkab.go.id">
                                ByMails
                            </a>
                        </h5>
                        <p class="mb-0">Aplikasi Penomoran Surat</p>
                    </div>

                    <div class="d-flex flex-column ms-auto">
                        <a href="#" class="badge ms-auto">
                            <i class="bi-heart"></i>
                        </a>

                        <a href="#" class="badge ms-auto">
                            <i class="bi-bookmark"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block d-flex">
                    <div class="">
                        <div class="custom-block-icon-wrap">
                            <div class="section-overlay"></div>
                            <a href="detail-page.html" class="custom-block-image-wrap">
                                <img src="{{ asset('build/assets/images/apps/siluki.png') }}"
                                    class="custom-block-image img-fluid" alt="">

                                <a href="https://siluki.dukcapil.tapinkab.go.id" class="custom-block-icon">
                                    <i class="bi-play-fill"></i>
                                </a>
                            </a>
                        </div>

                        <div class="mt-2">
                            <a href="https://siluki.dukcapil.tapinkab.go.id" class="btn custom-btn">
                                SiLuki
                            </a>
                        </div>
                    </div>

                    <div class="custom-block-info">
                        <div class="custom-block-top d-flex mb-1">
                            <small class="me-4">
                                <i class="bi-clock-fill custom-icon"></i>
                                Dibuat pada tahun 2024
                            </small>
                        </div>
                        <h5 class="mb-2">
                            <a href="https://siluki.dukcapil.tapinkab.go.id">
                                SiLuki
                            </a>
                        </h5>
                        <p class="mb-0">Evaluasi Kinerja</p>
                    </div>

                    <div class="d-flex flex-column ms-auto">
                        <a href="#" class="badge ms-auto">
                            <i class="bi-heart"></i>
                        </a>

                        <a href="#" class="badge ms-auto">
                            <i class="bi-bookmark"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block d-flex">
                    <div class="">
                        <div class="custom-block-icon-wrap">
                            <div class="section-overlay"></div>
                            <a href="detail-page.html" class="custom-block-image-wrap">
                                <img src="{{ asset('build/assets/images/apps/dfinance.png') }}"
                                    class="custom-block-image img-fluid" alt="">

                                <a href="https://dfinance.dukcapil.tapinkab.go.id" class="custom-block-icon">
                                    <i class="bi-play-fill"></i>
                                </a>
                            </a>
                        </div>

                        <div class="mt-2">
                            <a href="https://dfinance.dukcapil.tapinkab.go.id" class="btn custom-btn">
                                D-Finance
                            </a>
                        </div>
                    </div>

                    <div class="custom-block-info">
                        <div class="custom-block-top d-flex mb-1">
                            <small class="me-4">
                                <i class="bi-clock-fill custom-icon"></i>
                                Dibuat pada tahun 2024
                            </small>
                        </div>
                        <h5 class="mb-2">
                            <a href="https://dfinance.dukcapil.tapinkab.go.id">
                                D-finance
                            </a>
                        </h5>
                        <p class="mb-0">Aplikasi Keuangan</p>
                    </div>

                    <div class="d-flex flex-column ms-auto">
                        <a href="#" class="badge ms-auto">
                            <i class="bi-heart"></i>
                        </a>

                        <a href="#" class="badge ms-auto">
                            <i class="bi-bookmark"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block d-flex">
                    <div class="">
                        <div class="custom-block-icon-wrap">
                            <div class="section-overlay"></div>
                            <a href="https://wbs.dukcapil.tapinkab.go.id" class="custom-block-image-wrap">
                                <img src="{{ asset('build/assets/images/apps/wbs.png') }}"
                                    class="custom-block-image img-fluid" alt="">

                                <a href="https://wbs.dukcapil.tapinkab.go.id" class="custom-block-icon">
                                    <i class="bi-play-fill"></i>
                                </a>
                            </a>
                        </div>

                        <div class="mt-2">
                            <a href="https://wbs.dukcapil.tapinkab.go.id" class="btn custom-btn">
                                WBS
                            </a>
                        </div>
                    </div>

                    <div class="custom-block-info">
                        <div class="custom-block-top d-flex mb-1">
                            <small class="me-4">
                                <i class="bi-clock-fill custom-icon"></i>
                                Dibuat pada tahun 2024
                            </small>
                        </div>
                        <h5 class="mb-2">
                            <a href="https://wbs.dukcapil.tapinkab.go.id">
                                WBS
                            </a>
                        </h5>
                        <p class="mb-0">WhistleBlowing System</p>
                    </div>

                    <div class="d-flex flex-column ms-auto">
                        <a href="#" class="badge ms-auto">
                            <i class="bi-heart"></i>
                        </a>

                        <a href="#" class="badge ms-auto">
                            <i class="bi-bookmark"></i>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>




<footer class="site-footer">
    <div class="container">
        <div class="row">



            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                <h6 class="site-footer-title mb-3">Contact</h6>

                <p class="mb-2"><strong class="d-inline me-2">Phone:</strong> +62857-1119-1178</p>

                <p>
                    <strong class="d-inline me-2">Email:</strong>
                    <a href="#">disdukcapiltapin@gmail.com</a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <h6 class="site-footer-title mb-3">Download Mobile</h6>

                <div class="site-footer-thumb mb-4 pb-2">
                    <div class="d-flex flex-wrap">
                        <a href="#">
                            <img src="images/app-store.png" class="me-3 mb-2 mb-lg-0 img-fluid" alt="">
                        </a>

                        <a href="#">
                            <img src="images/play-store.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <h6 class="site-footer-title mb-3">Social</h6>

                <ul class="social-icon">
                    <li class="social-icon-item">
                        <a href="https://www.instagram.com/disdukcapiltapin?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            class="social-icon-link bi-instagram"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-twitter"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://wa.me/6285711191178" class="social-icon-link bi-whatsapp"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container pt-5">
        <div class="row align-items-center">

            <div class="col-lg-2 col-md-3 col-12">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('build/assets/images/apps/simak.png') }}" class="logo-image img-fluid"
                        alt="templatemo pod talk">
                </a>
            </div>

            <div class="col-lg-7 col-md-9 col-12">
                <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Homepage</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Browse episodes</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Help Center</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-12">
                <p class="copyright-text mb-0">Copyright <span
                        class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a
                            href="https://instagram.com/ryanprbw" class="hover: animate-pulse">19960702
                            202421 1
                            003™</a>.
                        RyanPrbw.</span>
                    <br><br>
                    Design: RyanPrbw
                </p>
            </div>
        </div>
    </div>
</footer>



</html>

@include('layouts.javasc')
