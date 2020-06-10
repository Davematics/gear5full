@if (auth()->user()->role=="Vendor")
    @include('user.vendor')
@else
@include('user.user')
@endif