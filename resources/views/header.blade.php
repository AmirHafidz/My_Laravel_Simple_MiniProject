

<div class="container">
@if(session()->has('user'))
    @extends('logininterface')
@else
    @yield('login')
@endif
</div>



