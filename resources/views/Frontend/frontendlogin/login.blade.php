{{-- @extends('Frontend.master') --}}

@section('user_login')
    <section id="form"><!--form-->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
          <div class="login-form"><!--login form-->
            <h2>Login to your account</h2>
   
            {!! Form::open(['url' => '/customer-registration','method' => 'post','class'=>'form-horizontal']) !!}
            <input type="text" name="customer_name" placeholder="Enter Name" />
            <input type="email" name="email" placeholder="Enter Email Address" />
           <input type="password" placeholder="Enter Password" / name="password">
              <input type="text
              " name="mobile" placeholder="Enter Mobile NUmber" />
              <span>
                <input type="checkbox" class="checkbox"> 
                Keep me signed in
              </span>
              <button type="submit" class="btn btn-default">Login</button>
            {!! Form::close() !!}
          </div><!--/login form-->
        </div>
        <div class="col-sm-1">
          <h2 class="or">OR</h2>
        </div>
        <div class="col-sm-4">
          <div class="signup-form"><!--sign up form-->
            <h2>New User Signup!</h2>
            <form action="#">
              <input type="text" placeholder="Name"/>
              <input type="email" placeholder="Email Address"/>
              <input type="password" placeholder="Password"/>
              <button type="submit" class="btn btn-default">Signup</button>
            </form>
          </div><!--/sign up form-->
        </div>
      </div>
    </div>
  </section><!--/form-->
@endsection
