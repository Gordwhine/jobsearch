<x-layout>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('frontend/images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
        <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Login</h1>
            <div class="custom-breadcrumbs">
            <a href="/">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Login</strong></span>
            </div>
        </div>
        </div>
    </div>
    </section>
  
    <section class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="mb-4" style="text-align: center;">Log In To JobBoard</h2>
                <form action="{{ route('authenticate') }}" method="POST" class="p-4 border rounded">
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
    
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Login" class="btn px-4 btn-primary text-white">
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </section>    
</x-layout>