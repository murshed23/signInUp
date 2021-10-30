<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="signUp.php" method="POST">
                <h1 class="mb-3 mt-5">B-TECHNO</h1>
                <h5>Sign Up</h5>
                <input type="text" placeholder="Create Username" />
                <input type="password" placeholder="Create Password" />
                <a href="#">Autogenerate Password?</a>
                <button>Sign Up</button>
                <span class="mt-3">or sign up with</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </form>
            <div class="container text-center">
                <p class="mt-3">Already Have an Account?</p>
                <button class="btn-warning ghost" id="signIn">Sign In</button>
            </div>
        </div>
        <div class="form-container sign-in-container">
            <form action="signIn.php" method="POST">
                <h1 class="mb-3 mt-5">B-TECHNO</h1>
                <h5>Sign in</h5>
                <input type="text" placeholder="Username" />
                <input type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
                <span class="mt-3">or sign in with</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </form>
            <div class="container text-center">
                <p class="mt-3">Don't Have an Account?</p>
                <button class="btn-warning ghost" id="signUp">Sign Up</button>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay text-warning">
                <div class="overlay-panel overlay-left">
                    <h3 class="" style="font-weight: bold;">Software Analytics And Marketing Statistics</h3>
                    <b>Now is the winter of our discontent Made glorious summer by this sun of York And all the clouds that lour'd upon our house In the deep bosom of the ocean buried.</b>
                </div>
                <div class="overlay-panel overlay-right">
                    <h3 class="" style="font-weight: bold;">Technical Analysis of Software Requirement</h3>
                    <b>Now are our brows bound with victorious wreaths; Our stern alarums changed to merry meetings, Our dreadful marches to delightful measures.</b>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>