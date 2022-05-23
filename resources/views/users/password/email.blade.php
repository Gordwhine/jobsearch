<x-layout>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('frontend/images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
        <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Reset Password</h1>
            <div class="custom-breadcrumbs">
            <a href="/">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Reset Password</strong></span>
            </div>
        </div>
        </div>
    </div>
    </section>
  
    <section class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="mb-4" style="text-align: center;">Reset Password</h2>
                <form action="#" method="POST" class="p-4 border rounded">
                    {{-- {{ route('password.email') }} --}}
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Email</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}">
                            @error('email')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Password Reset Link" class="btn px-4 btn-primary text-white">
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </section>    
</x-layout>

