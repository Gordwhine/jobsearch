@if(session()->has('success'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <p><span class="badge badge-success">{{session('message')}}</span></p>
    </div>
@endif

@if(session()->has('error'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <p><span class="badge badge-danger">{{session('message')}}</span></p>
    </div>
@endif