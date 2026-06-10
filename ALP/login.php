<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WALLPEAK login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="style.css" rel="Stylesheet">

</head>

<body class="!bg-[rgb(24,24,43)]">

    <div id="navBar"
        class="fixed inset-x-0 items-center flex flex-row px-10 py-5 backdrop-blur-md font-bold backdrop-filter justify-between lg:justify-center top-0 gap-7 lg:gap-10 md:gap-3 text-black text-center text-sm md:text-[14px] lg:text-[16px] md:text-xs z-50">
        <li class="nav-item rounded-2xl bg-green-200 p-1 px-3"><a class="nav-link" href="index.php">Main menu</a></li>
        <li class="nav-item rounded-2xl bg-blue-300 p-1 px-3"><a class="nav-link" href="index.php#storePage">Store</a></li>
        <li class="nav-item rounded-2xl bg-pink-200 p-1 px-3"><a class="nav-link" href="aboutUs.php">About us</a></li>
    </div>

    <div class="relative flex flex-col justify-center text-left items-center px-10 pt-20 lg:pt-65">
        <h2 class="text-2xl md:text-4xl lg:text-7xl text-[rgb(250,179,135)] ">LOGIN TO YOUR WALLPEAK ACCOUNT</h2>


        <div
            class="bg-white/10 backdrop-blur-sm border border-white/20 p-8 mt-20 rounded-2xl w-full max-w-md text-center shadow-xl">
            <h3 class="text-xl text-yellow-100 font-bold mb-2">Welcome Back!</h3>
            <p class="text-sm text-gray-300 mb-6">Don't have an account? <a href="register.php"
                    class="text-yellow-200 underline font-semibold">Sign up!</a></p>

            <form action="proses_login.php" method="POST">
                <div class="space-y-4 text-left">
                    <input type="text" placeholder="Username or email" required name="loginNameOrEmail"
                        class="bg-[#2a2c4e]/60 border border-white/40 rounded-2xl w-full text-white p-3">
                </div>
                <br>
                <div class="space-y-4 text-left">
                    <input type="password" placeholder="Password" required name="loginPass"
                        class="bg-[#2a2c4e]/60 border border-white/40 rounded-2xl w-full text-white p-3">
                </div>
                <br>


                <button type="submit" name="submit_login"
                    class="w-full py-3 bg-purple-600 hover:bg-purple-700 active:scale-[0.98] text-white font-semibold rounded-xl transition shadow-lg mt-2 cursor-pointer">
                    Login
                </button>
            </form>

        </div>

    </div>

</body>

</html>