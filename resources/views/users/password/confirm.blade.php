<x-layout>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('frontend/images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
        <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Confirm Password</h1>
            <div class="custom-breadcrumbs">
            <a href="/">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Confirm Password</strong></span>
            </div>
        </div>
        </div>
    </div>
    </section>
  
    <section class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="mb-4" style="text-align: center;">Confirm Password</h2>
                <form action="#" method="POST" class="p-4 border rounded">
                    {{-- {{ route('password.confirm') }} --}}
                    @csrf

                    <div class="row form-group mb-4">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Password</label>
                            <input type="password" id="password" name="password" class="form-control" value="{{old('password')}}">
                            @error('password')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group mb-4 d-flex align-items-center justify-content-between">
                        <div class="col-md-12">
                            <input type="submit" value="Confirm Password" class="btn px-4 btn-primary text-white">
                            
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
            </div>
          </div>
        </div>
    </section>    
</x-layout>

