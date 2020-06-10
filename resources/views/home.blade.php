@if (auth()->user()->role=="Vendor")
    @include('vendor')
@elseif(auth()->user()->role=="Admin")
@include('vendor')
@else
@include('user')
@endif