<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
              <form action="index.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <label class="form-label" for="firstName">First Name</label>
                      <input type="text" id="firstName" name="firstname" class="form-control form-control-lg" />
                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <label class="form-label" for="lastName">Last Name</label>
                      <input type="text" id="lastName" name="lastname" class="form-control form-control-lg" />
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline datepicker w-100">
                      <label for="birthdayDate" class="form-label">Birthday</label>
                      <input type="date" name="birthday" class="form-control form-control-lg" id="birthdayDate" />
                    </div>

                  </div>

                  <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1">Gender: </h6>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="femaleGender" value="Female" checked />
                      <label class="form-check-label" value="female" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="maleGender" value="Male" />
                      <label class="form-check-label" value="male" for="maleGender">Male</label>
                    </div>



                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <label class="form-label" for="emailAddress">Email</label>
                      <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" />
                    </div>

                  </div>
                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                      <input type="tel" id="phoneNumber" name="phone" class="form-control form-control-lg" />
                    </div>

                  </div>
                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <label class="form-label" for="phoneNumber">Password</label>
                      <input type="password" id="phoneNumber" name="password" class="form-control form-control-lg" />
                    </div>

                  </div>
                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <label class="form-label" for="phoneNumber">Photo</label>
                      <input type="file" id="phoneNumber" name="photo" class="form-control form-control-lg" />
                    </div>

                  </div>
                </div>



                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit" />
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>