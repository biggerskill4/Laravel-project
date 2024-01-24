<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Create Your Account</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!-- css file -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <!-- favicon -->
    <link rel="icon" type="image" href="./images/favicon.png">
    <!--Stylesheet-->

</head>
<body>
    <div class="background">
        <div class="shape-1"></div>
        <div class="shape-1"></div>
    </div>
    <form>
        <h3>Create Your Account</h3>

        <label for="name">Name</label>
        <input type="text" placeholder="Name" id="name">

        <label for="gmail">Gmail</label>
        <input type="text" placeholder="Gmail" id="gmail">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">
        <p class="right-sign-in"><a href="{{url('/')}}">Login</a></p>

        <button><a href="{{url('/')}}">Create</a></button>
        <!-- <div class="social">
        <a href="#"><div class="go"><i class="fab fa-google"></i>  Google</div></a>
        <a href="#"><div class="fb"><i class="fab fa-facebook"></i>  Facebook</div></a> -->
        </div>
    </form>
</body>
</html>
