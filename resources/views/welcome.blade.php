{{-- @extends('partials.layout')

@section('content') --}}
<x-layout >
    <section class="home-section section-hero overlay bg-image" style="background-image: url('frontend/images/hero_1.jpg');" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                        <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
                    </div>
                    <form action="/" class="search-jobs-form">
                        @csrf
                        <div class="row mb-5">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-9 mb-4 mb-lg-0">
                            <input type="text" name="search" class="form-control form-control-lg" placeholder="Job title, Company...">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-12 popular-keywords">
                            <h3>Trending Keywords:</h3>
                            <ul class="keywords list-unstyled m-0 p-0">
                                @unless (count($jobs) == 0)
                                    @foreach ($jobs as $job)
                                        @php    
                                            $tags = explode(',', $job->tags)
                                        @endphp
                                        @foreach($tags as $tag)
                                        <li><a href="/?tag={{$tag}}" class="">{{$tag}} </a></li>
                                        @endforeach
                                    @endforeach
                                @endunless
                            </ul>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
        <a href="#next" class="scroll-button smoothscroll">
            <span class=" icon-keyboard_arrow_down"></span>
        </a>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('frontend/images/hero_1.jpg');">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
                    <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
                </div>
            </div>
            <div class="row pb-0 block__19738 section-counter">
                <div class="col-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number">{{$totalUsers}}</strong>
                    </div>
                    <span class="caption">Candidates</span>
                </div>

                <div class="col-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number">{{$totals->totalJobPosted}}</strong>
                    </div>
                    <span class="caption">Jobs Posted</span>
                </div>

                {{-- <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="120">0</strong>
                    </div>
                    <span class="caption">Jobs Filled</span>
                </div> --}}

                <div class="col-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number">{{$totals->totalCompany}}</strong>
                    </div>
                    <span class="caption">Companies</span>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2">{{$jobs->total()}} Job Listed</h2>
                </div>
            </div>
            @unless (count($jobs) == 0)
                @foreach ($jobs as $job)
                <x-jobs-listed :job="$job" />
                @endforeach
                @else 
                <p>No Job found</p>
            @endunless
            <div class="row pagination-wrap">
                <div class="col-md-6 text-center text-md-right">
                    {{$jobs->links()}}
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('frontend/images/hero_1.jpg');">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="text-white">Looking For A Job?</h2>
                <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
            </div>
            <div class="col-md-3 ml-auto">
                <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
            </div>
            </div>
        </div>
    </section>

    <section class="site-section py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center mt-4 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <h2 class="section-title mb-2">Company We've Helped</h2>
                            <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="{{ asset('frontend/images/logo_mailchimp.svg') }}" alt="Image" class="img-fluid logo-1">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="{{ asset('frontend/images/logo_paypal.svg') }}" alt="Image" class="img-fluid logo-2">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="{{ asset('frontend/images/logo_stripe.svg') }}" alt="Image" class="img-fluid logo-3">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="{{ asset('frontend/images/logo_visa.svg') }}" alt="Image" class="img-fluid logo-4">
                </div>

                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="{{ asset('frontend/images/logo_apple.svg') }}" alt="Image" class="img-fluid logo-5">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="{{ asset('frontend/images/logo_tinder.svg') }}" alt="Image" class="img-fluid logo-6">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="{{ asset('frontend/images/logo_sony.svg') }}" alt="Image" class="img-fluid logo-7">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="{{ asset('frontend/images/logo_airbnb.svg') }}" alt="Image" class="img-fluid logo-8">
                </div>
            </div>
        </div>
    </section>

    

    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
                    <h2 class="text-white">Get The Mobile Apps</h2>
                    <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
                    <p class="mb-0">
                    <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
                    <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
                    </p>
                </div>
                <div class="col-md-6 ml-auto align-self-end">
                    <img src="{{ asset('frontend/images/apps.png') }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</x-layout>
{{-- @endsection --}}