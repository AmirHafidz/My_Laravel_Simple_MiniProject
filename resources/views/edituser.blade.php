{{View::make('title')}}
<!-- <div class="container">
<form action="useredit?rid={{Request::get('rid')}}" method="post">
@csrf
<div>
    <label for="exampleInputName1">Full Name</label>
    <input maxlength="100" value="{{ $users->name}}" type="text" name="fullname" id="exampleInputName1">
</div>
<div>
    <label for="exampleInputEmail1">Email Address</label>
    <input maxlength="100" value="{{ $users->email}}" type="email" name="email" id="exampleInputEmail1">
</div>
<div>
    <label for="exampleInputPassword1">Password</label>
    <input maxlength="50" value="{{ $users->password}}" type="text" name="password" id="exampleInputPassword1">
</div>
<button type="submit">Update</button>
<button type="button" onclick="javascript:history.back()">Cancel</button>
</form>
</div> -->







    <form action="useredit?rid={{Request::get('rid')}}" method="post">
    @csrf
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">{{ $users->name}}</span><span class="text-black-50">{{ $users->email}}</span><span> </span></div>
            </div>
            <!-- {{ session()->get('user')->name}} -->
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <!-- <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                    </div> -->
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels" for="fname">Full Name</label>
                            <input maxlenght="100" type="text" class="form-control" placeholder="enter your fullname" value="{{ $users->name}}" name="fullname" id="fname"></div>
                        <div class="col-md-12"><label class="labels" for="mail">Email Address</label>
                            <input maxlength="100" type="email" class="form-control" placeholder="enter your email address" value="{{ $users->email}}" name="email" id="mail"></div>
                        <div class="col-md-12"><label class="labels" for="pass">New Password</label>
                            <input maxlength="50" type="text" class="form-control" placeholder="enter your new password" value="{{ $users->password}}" name="password" id="pass"></div>
                        <!-- <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                        <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                        <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                        <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div> -->
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                    </div> -->
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </div>
            <!-- <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div> -->
        </div>
    </div>
    </div>
    </div>
    </body>
    </html>
</form>
