<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallpeak - Sign Up</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="!bg-[rgb(24,24,43)] min-h-screen flex items-center justify-center text-white font-sans px-4">

<div id="navBar"
        class="fixed inset-x-0 items-center flex flex-row px-10 py-5 backdrop-blur-md font-bold backdrop-filter justify-between lg:justify-center top-0 gap-7 lg:gap-10 md:gap-3 text-black text-center text-sm md:text-[14px] lg:text-[16px] md:text-xs z-50">
        <li class="nav-item rounded-2xl bg-green-200 p-1 px-3"><a class="nav-link" href="index.php">Main menu</a></li>
        <li class="nav-item rounded-2xl bg-blue-300 p-1 px-3"><a class="nav-link" href="#storePage">Store</a></li>
        <li class="nav-item rounded-2xl bg-pink-200 p-1 px-3"><a class="nav-link" href="aboutUs.php">About us</a></li>

    </div>

    <div class="bg-white/10 backdrop-blur-sm border border-white/20 p-8 rounded-2xl w-full max-w-md shadow-xl">
        <h3 class="text-2xl font-bold text-yellow-100 mb-2 text-center">Create Account</h3>
        <p class="text-sm text-gray-300 mb-6 text-center">Join Wallpeak today!</p>
        
        <form action="proses_register.php" method="POST" class="space-y-4">
            
            <div>
                <input 
                    type="text" 
                    name="name" 
                    placeholder="Full Name" 
                    required
                    class="w-full px-4 py-3 bg-[#2a2c4e]/60 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 text-sm"
                >
            </div>

            <div>
                <input 
                    type="email" 
                    name="email" 
                    placeholder="Your email" 
                    required
                    class="w-full px-4 py-3 bg-[#2a2c4e]/60 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 text-sm"
                >
            </div>

            <div>
                <input 
                    type="password" 
                    name="password_user" 
                    placeholder="Password" 
                    required
                    class="w-full px-4 py-3 bg-[#2a2c4e]/60 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 text-sm"
                >
            </div>

            <button 
                type="submit" 
                name="submit_register"
                class="w-full py-3 bg-purple-600 hover:bg-purple-700 active:scale-[0.98] text-white font-semibold rounded-xl transition shadow-lg mt-2 cursor-pointer"
            >
                Sign up for free
            </button>

            <p class="text-xs text-center text-gray-400 mt-4">
                Already have an account? <a href="login.php" class="text-yellow-200 underline">Login</a>
            </p>
        </form>
    </div>

</body>
</html>