@extends('admin.main')
@section('adminContent')

<div class="login-box">
    <div class="card col-md-4 col-md-offset-3">
        <div class="body ">
        	
             <div class="m-b-15"><h3>Change Password</h3></div>
            <form id="sign_in" action="{{route('update-password')}}" method="POST">
            	@csrf
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="old_pass" placeholder="Old Password" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="New Password" required>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                       
                    </div>
                    <div class="col-xs-4 col-xs-offset-4 p-t-5">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">CHANGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection