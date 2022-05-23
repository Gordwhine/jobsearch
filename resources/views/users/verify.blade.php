<x-layout>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('frontend/images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
        <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Verify Your Email Address</h1>
            <div class="custom-breadcrumbs">
            <a href="/">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Verify Your Email Address</strong></span>
            </div>
        </div>
        </div>
    </div>
    </section>
  
    <section class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="mb-4" style="text-align: center;">Verify Your Email Address</h2>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},

                <form action="#" method="POST" class="p-4 border rounded">
                    @csrf
                    {{-- {{ route('verification.resend') }} --}}

                    {{-- <input type="submit" value="click here to request another" class="btn px-4 btn-primary text-white"> --}}
                    <button type="submit" class="btn btn-primary border-width-2 d-none d-lg-inline-block">{{ __('click here to request another') }}</button>
                </form>
            </div>
          </div>
        </div>
    </section>    
</x-layout>