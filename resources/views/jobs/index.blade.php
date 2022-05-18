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
                <a href="{{ route('login') }}" class="btn btn-warning btn-block btn-lg">Sign Up</a>
            </div>
            </div>
        </div>
    </section>
</x-layout>
{{-- @endsection --}}