<!doctype html>
<html lang="en">

<head>
  <title>Sign Up - Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favi_icon_signup.png" type="image/x-icon">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="signup.css">

  <script src="https://kit.fontawesome.com/617fd3ad50.js" crossorigin="anonymous"></script>

  <style>
        .password-container {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>

</head>

<body>
  
    <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
    <main>
        <main class="form-s m-auto">
            <form class="form-custom content" action="register.php" method="post">
              <!-- animation start  -->
              <span class="loader">Hello World! </span>

              
              <h1 class="h3 mb-3 fw-bold account">Create Account</h1>
          
              <div class="form-floating">
                <input type="text" name="name" class="form-control" id="floatingname" placeholder="Name">
                <label for="floatingPassword">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingUsername" placeholder="Username" oninput="enforceLowerCase(this)">
                <label for="floatingPassword">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="Email address">
                <label for="floatingPassword">Email address</label>
              </div>
              <div class="form-floating">
                <input type="number" name="mobilenumber" class="form-control" id="floatingNumber" placeholder="Mobile Number">
                <label for="floatingPassword">Mobile Number</label>
              </div>
              <div class="form-floating password-container">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <i class="fa-solid fa-lock password-toggle" onclick="togglePasswordVisibility()"></i>
                    <label for="floatingPassword">Password</label>
                </div>

             <div class="form text-start my-1">
                <label class="label">
                Already have an account? <a href="../Log-In/login.php">Log In</a>
                </label>
              </div>
          
              
              <button class="buttonon" name="register">
                <span>Register</span>
              </button>
            </form>
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script>
        function enforceLowerCase(input) {
            input.value = input.value.charAt(0).toLowerCase() + input.value.slice(1);
        }
    </script>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('floatingPassword');
            var icon = document.querySelector('.password-toggle');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-lock');
                icon.classList.add('fa-lock-open');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-lock-open');
                icon.classList.add('fa-lock');
            }
        }
    </script>

</body>

</html>