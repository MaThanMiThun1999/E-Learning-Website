<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favi_icon_loginform.png" type="image/x-icon">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css">

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
            <form class="form-custom content" action="login_process.php" method="post">

                <!-- animation -->

                <div class="loader">
                    <span>W</span>
                    <span>E</span>
                    <span>L</span>
                    <span>C</span>
                    <span>O</span>
                    <span>M</span>
                    <span>E</span>
                </div>

                <img src="./IMG_20231022_032332.png" height="180px" width="250px" oncontextmenu="return false">

                <h1 class="h3 mb-1 fw-bold account">Login Here</h1>

                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="floatingUsername"
                        placeholder="Username" oninput="enforceLowerCase(this)">
                    <label for="floatingPassword">Username</label>
                </div>
                <div class="form-floating password-container">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <i class="fa-solid fa-lock password-toggle" onclick="togglePasswordVisibility()"></i>
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form text-start my-1">
                    <label class="label">
                        Don't have an account? <a href="../Sign-Up/signup.php">Sign Up</a>
                    </label>
                </div>

                <div class="form text-start my-1">
                    <label class="label">
                    <i class="fa-solid fa-key"></i> <a
                            href="mailto:tamilcodelab@gmail.com?&subject=Forget%20Password...!&body=Hello%20TamilCodeLab,%0D%0A%0D%0D%0A%0DI%20forget%20my%20password,%20send%20my%20password%20back%20to%20me....">Forget
                            Password</a>
                    </label>
                </div>

                <button class="buttonon">
                    <span>Log in</span>
                </button>
            </form>
        </main>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>

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
