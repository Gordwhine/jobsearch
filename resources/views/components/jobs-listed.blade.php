@props(['job'])
<ul class="job-listings mb-5">
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
        <a href="{{ route('show', $job) }}"></a>
        <div class="job-listing-logo">
            <img src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('frontend/images/job_logo_1.jpg') }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
        </div>

        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>{{$job->title}}</h2>
                <strong>{{$job->tags}}</strong>
            </div>
            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> {{$job->location}}
            </div>
            <div class="job-listing-meta">
                @if($job->job_type == 'Fulltime')
                <span class="badge badge-success">{{$job->job_type}}</span>
                @else
                <span class="badge badge-danger">{{$job->job_type}}</span>
                @endif
            </div>
        </div>
    </li>
</ul>
