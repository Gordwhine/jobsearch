<x-layout>
 <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('frontend/images/hero_1.jpg');" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                <h1 class="text-white font-weight-bold">Post A Job</h1>
                <div class="custom-breadcrumbs">
                    <a href="#">Home</a> <span class="mx-2 slash">/</span>
                    <a href="#">Job</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>Post a Job</strong></span>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">

            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Post A Job</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-12">
                    <form class="p-4 p-md-5 border rounded" action="{{route('save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}">
                            @error('email')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="job-title">Job Title</label>
                            <input type="text" class="form-control" name="jobTitle" id="jobTitle" value="{{old('jobTitle')}}">
                            @error('jobTitle')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="job-location">Location</label>
                            <input type="text" class="form-control" name="jobLocation" id="jobLocation" value="{{old('jobLocation')}}">
                            @error('jobLocation')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="job-type">Job Type</label>
                            <select class="selectpicker border rounded" name="jobType" id="jobType" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                                <option value="Partime">Part Time</option>
                                <option value="Fulltime">Full Time</option>
                            </select>
                            @error('jobType')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jobDescription">Job Description</label>
                            <textarea name="jobDescription">{{old('jobDescription')}}</textarea>
                            @error('jobDescription')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <h3 class="text-black my-5 border-bottom pb-2">Company Details</h3>
                        <div class="form-group">
                            <label for="company-name">Company Name</label>
                            <input type="text" class="form-control" name="companyName" id="companyName" value="{{old('companyName')}}">
                            @error('companyName')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="company-tagline">Tagline (Optional)</label>
                            <input type="text" class="form-control" name="tagline" id="tagline" value="{{old('tagline')}}">
                            @error('tagline')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="companyDescription">Company Description (Optional)</label>
                            <textarea name="companyDescription">{{old('companyDescription')}}</textarea>
                            @error('companyDescription')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="company-website">Website (Optional)</label>
                            <input type="text" class="form-control" name="website" id="website" placeholder="https://" value="{{old('website')}}">
                            @error('website')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="company-website-fb">Facebook Username (Optional)</label>
                            <input type="text" class="form-control" name="facebookhandle" id="companyFb" value="{{old('facebookhandle')}}">
                            @error('facebookhandle')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="company-website-tw">Twitter Username (Optional)</label>
                            <input type="text" class="form-control"  name="twitterhandle" id="companyTw" value="{{old('twitterhandle')}}">
                            @error('twitterhandle')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="company-website-tw">Linkedin Username (Optional)</label>
                            <input type="text" class="form-control" name="linkedinhandle" id="companyLi" value="{{old('linkedinhandle')}}">
                            @error('linkedinhandle')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="company-website-tw d-block">Upload Logo</label> <br>
                            <input type="file" name="logo">
                            @error('logo')
                            <span class="badge badge-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-lg-4 ml-auto">
                                <div class="row">
                                    <button type="submit" class="btn btn-block btn-primary btn-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="row align-items-center mb-5">
                <div class="col-lg-4 ml-auto">
                    <div class="row">
                    <div class="col-6">
                        <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a>
                    </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
</x-layout>

<script>
    CKEDITOR.replace( 'jobDescription' );
    CKEDITOR.replace( 'companyDescription' );
</script>