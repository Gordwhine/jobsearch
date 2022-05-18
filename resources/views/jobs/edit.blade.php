<x-layout>
    <!-- HOME -->
       <section class="section-hero overlay inner-page bg-image" style="background-image: url('frontend/images/hero_1.jpg');" id="home-section">
           <div class="container">
               <div class="row">
                   <div class="col-md-7">
                   <h1 class="text-white font-weight-bold">Edit Job</h1>
                   <div class="custom-breadcrumbs">
                       <a href="#">Home</a> <span class="mx-2 slash">/</span>
                       <a href="#">Job</a> <span class="mx-2 slash">/</span>
                       <span class="text-white"><strong>Edit Job</strong></span>
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
                               <h2>Edit: {{ $job->title }}</h2>
                           </div>
                       </div>
                   </div>
               </div>
   
               <div class="row mb-5">
                   <div class="col-lg-12">
                       <form class="p-4 p-md-5 border rounded" action="{{ route('update', $job->id) }}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                       <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>
                       <div class="form-group">
                           <label for="email">Email</label>
                           <input type="text" class="form-control" name="email" id="email" value="{{$job->email}}">
                           @error('email')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
                       <div class="form-group">
                           <label for="job-title">Job Title</label>
                           <input type="text" class="form-control" name="jobTitle" id="jobTitle" value="{{$job->title}}">
                           @error('jobTitle')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
                       <div class="form-group">
                           <label for="job-location">Location</label>
                           <input type="text" class="form-control" name="jobLocation" id="jobLocation" value="{{$job->location}}">
                           @error('jobLocation')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
   
                       <div class="form-group">
                           <label for="job-type">Job Type</label>
                           <select class="selectpicker border rounded" name="jobType" id="jobType" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                                <option {{old('jobType', $job->job_type) =="Parttime" ? 'selected' : ''}} value="Parttime">Part Time</option>
                                <option {{old('jobType', $job->job_type) =="Fulltime" ? 'selected' : ''}} value="Fulltime">Full Time</option>
                           </select>
                           @error('jobType')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
   
                       <div class="form-group">
                           <label for="jobDescription">Job Description</label>
                           <textarea name="jobDescription">{{$job->job_description}}</textarea>
                           @error('jobDescription')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
   
                       <h3 class="text-black my-5 border-bottom pb-2">Company Details</h3>
                       <div class="form-group">
                           <label for="company-name">Company Name</label>
                           <input type="text" class="form-control" name="companyName" id="companyName" value="{{$job->company_name}}">
                           @error('companyName')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
   
                       <div class="form-group">
                           <label for="company-tagline">Tagline (Optional)</label>
                           <input type="text" class="form-control" name="tagline[]" id="tagline" value="{{$job->tags}}">
                           @error('tagline')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
   
                       <div class="form-group">
                           <label for="companyDescription">Company Description (Optional)</label>
                           <textarea name="companyDescription">{{$job->company_description}}</textarea>
                           @error('companyDescription')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
                       
                       <div class="form-group">
                           <label for="company-website">Website (Optional)</label>
                           <input type="text" class="form-control" name="website" id="website" placeholder="https://" value="{{$job->website}}">
                           @error('website')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
   
                       <div class="form-group">
                           <label for="company-website-fb">Facebook Username (Optional)</label>
                           <input type="text" class="form-control" name="facebookhandle" id="companyFb" value="{{$job->facebook}}">
                           @error('facebookhandle')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
   
                       <div class="form-group">
                           <label for="company-website-tw">Twitter Username (Optional)</label>
                           <input type="text" class="form-control"  name="twitterhandle" id="companyTw" value="{{$job->twitter}}">
                           @error('twitterhandle')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
                       <div class="form-group">
                           <label for="company-website-tw">Linkedin Username (Optional)</label>
                           <input type="text" class="form-control" name="linkedinhandle" id="companyLi" value="{{$job->linkedin}}">
                           @error('linkedinhandle')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
   
                       <div class="form-group">
                           <label for="company-website-tw d-block">Upload Logo</label> <br>
                           <input type="file" name="logo">
                           <img src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('frontend/images/job_logo_1.jpg') }}" alt="Image">
                           @error('logo')
                           <span class="badge badge-danger">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                       </div>
                       <div class="row align-items-center mb-5">
                           <div class="col-lg-4 ml-auto">
                               <div class="row">
                                   <button type="submit" class="btn btn-block btn-info btn-md">Update</button>
                               </div>
                           </div>
                       </div>
                       
                       </form>
                   </div>
               </div>
              
           </div>
       </section>
   </x-layout>
   
   <script>
       CKEDITOR.replace( 'jobDescription' );
       CKEDITOR.replace( 'companyDescription' );
   </script>