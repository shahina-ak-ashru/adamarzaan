<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!--header-->
	@include('Users.template.loginheader')
	<!--header-->
  <div class="container d-flex justify-content-center align-items-center" style="padding-top:50px">
    <div class="col-md-6">
      <form action="{{route('users.do.signup')}}" method="POST">
        @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control" name="name"/>
            <label class="form-label" for="form2Example1">User Name</label>
          </div>
          <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" name="email"/>
            <label class="form-label" for="form2Example1">Email Id</label>
          </div>
          {{-- <!-- delivery address input -->
          <div class="form-outline mb-4">
            <input type="text" id="form2Example2" class="form-control" name="delivery_address"/>
            <label class="form-label" for="form2Example2">Delivery Address</label>
          </div>
          <!-- contact number input -->
          <div class="form-outline mb-4">
            <input type="text" id="form2Example2" class="form-control" name="contact_number"/>
            <label class="form-label" for="form2Example2">Contact Number</label>
          </div> --}}
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="password"/>
            <label class="form-label" for="form2Example2">Password</label>
          </div>
          <!-- re enter password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="password Confirm"/>
            <label class="form-label" for="form2Example2">Confirm Password</label>
          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                <label class="form-check-label" for="form2Example34"> Remember me </label>
              </div>
            </div>

          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

          <!-- Register buttons -->
          <div class="text-center">
            <p>If you are a member? <a href="{{route('users.signup')}}" style="color:#0e8ce4">Sign In</a></p>
            <button type="button" class="btn btn-secondary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-secondary btn-floating mx-1">
              <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-secondary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-secondary btn-floating mx-1">
              <i class="fab fa-github"></i>
            </button>
          </div>
      </form>
    </div>
  </div>

</body>
</html>
