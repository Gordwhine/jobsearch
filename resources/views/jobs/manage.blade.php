<x-layout >
    <section class="section-hero home-section overlay inner-page bg-image" style="background-image: url('frontend/images/hero_1.jpg');" id="home-section">
        <a href="#next" class="scroll-button smoothscroll">
          <span class=" icon-keyboard_arrow_down"></span>
        </a>
      </section>
  
      
    <section class="site-section" id="next">
        <div class="container">
            <ul class="job-listings mb-5">
                @unless($jobs->isEmpty())
                    @foreach($jobs as $job)
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <div class="job-listing-logo">
                            <img src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('frontend/images/job_logo_1.jpg') }}" alt="Image">
                        </div>
            
                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>{{ $job->title }}</h2>
                            </div>
                            <div class="job-listing-meta">
                                <a href="{{ route('edit', $job->id) }}">Edit</a>
                            </div>
                            <div class="job-listing-meta">
                                <form method="post" action="{{ route('delete', $job->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-block btn-danger btn-xs">Delete Job</button>
                                </form>
                            </div>
                        </div> 
                    </li>
                    @endforeach
                    @else
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <p>No Job Listings Found</p>
                    </div>
                    </li>
                @endunless
            </ul>
        </div>
    </section>
</x-layout>