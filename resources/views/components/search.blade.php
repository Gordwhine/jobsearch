@props(['tagsCsv'])

@php    
    $tags = explode(',', $tagsCsv)
@endphp
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
                {{-- <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                        <option>Anywhere</option>
                        <option>San Francisco</option>
                        <option>Palo Alto</option>
                        <option>New York</option>
                        <option>Manhattan</option>
                        <option>Ontario</option>
                        <option>Toronto</option>
                        <option>Kansas</option>
                        <option>Mountain View</option>
                    </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                        <option>Part Time</option>
                        <option>Full Time</option>
                    </select>
                </div> --}}
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 popular-keywords">
                <h3>Trending Keywords:</h3>
                <ul class="keywords list-unstyled m-0 p-0">
                    @foreach($tags as $tag)
                    <li><a href="/?tag={{$tag}}" class="">{{$tag}} </a></li>
                    @endforeach
                </ul>
                </div>
            </div>
        </form>
    </div>
</div>