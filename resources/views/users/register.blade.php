<x-layout>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('frontend/images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
        <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Sign Up</h1>
            <div class="custom-breadcrumbs">
            <a href="/">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Sign up</strong></span>
            </div>
        </div>
        </div>
    </div>
    </section>
  
    <section class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <h2 class="mb-4" style="text-align: center;">Sign Up To JobBoard</h2>
              <form action="{{ route('store') }}" method="POST" class="p-4 border rounded">
                @csrf
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="username">Name</label>
                        <input type="text" id="username" name="username" class="form-control" value="{{old('username')}}">
                        @error('username')
                        <span class="badge badge-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
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
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}">
                        @error('password')
                        <span class="badge badge-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group mb-4">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="password_confirmation">Re-Type Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Re-type Password">
                        @error('password_confirmation')
                        <span class="badge badge-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
  
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>    
</x-layout>