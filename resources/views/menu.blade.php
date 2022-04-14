
<div class="px-3 py-2 border-bottom mb-3" >
  <div class="container d-flex flex-wrap justify-content-center">
    <form  class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" action="userlist" method="post">
      @csrf
      <input value="{{request()->input('search')}}" type="search" class="form-control" placeholder="Search..." name="search" aria-label="Search">
      </form>


  <div class="text-end">
        <!-- <button type="submit" class="btn btn-light text-dark me-2" action="signin">Login</button> -->
        @if (session()->has('user'))
            <!-- <a type="submit"  href="/editmyuser?rid={{session()->get('user')->id}}" class="btn btn-outline-light me-2">Profile</a> -->
            <button type="button" class="btn btn-primary" onclick="window.location.href='/logout'">Log Out</button>
            @else
            <button type="button" class="btn btn-primary" onclick="window.location.href='/masuk'">Sign In / Sign Up</button>
            <!-- <a type="submit"  href="/login" class="btn btn-outline-light me-2">Login</a> -->
        @endif
        <!-- <button type="button" class="btn btn-primary" onclick="window.location.href='/masuk'">Sign In / Sign Up</button> -->

  </div>
  </div>
</div>

