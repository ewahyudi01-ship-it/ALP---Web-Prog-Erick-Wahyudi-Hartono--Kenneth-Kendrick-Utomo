<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WALLPEAK LANDING PAGE</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <link href="style.css" rel="Stylesheet">


</head>

<body class="bg-[rgb(0,204,255)]">

    <div class="absolute top-[200px] lg:top-[300px] flex-row justify-center items-center text-center left-1/2 -translate-x-1/2 z-0">
        <p id="trans1" class="text-white text-sm md:text-base lg:text-2xl font-light tracking-wide mb-3 lg:mb-13 z-30">
            Search all your epic wallpapers with </p>

        <h1 id="judul" class="text-5xl md:text-7xl lg:text-[180px] font-black uppercase tracking-wider leading-[0.8]">
            <span class="text-[rgb(255,130,255)]">W</span><span class="text-[rgb(255,252,68)]">ALLPEAK</span>
        </h1>
    </div>

    <div class="relative flex items-center justify-center -right-8 lg:-right-30 pt-[250px] lg:pt-[350px]">
        <img src="https://lh3.googleusercontent.com/d/1L4jOA80r8ys0RUbMZ3JThnTuUUCRQo0C"
            class="w-full h-auto object-contain lg:w-[50%] md:w-[400px] mx-auto z-20">
    </div>



    <div id="navBar"
        class="fixed inset-x-0 items-center flex flex-row px-10 py-5 bg-black/60 backdrop-blur-md font-bold backdrop-filter justify-between lg:justify-center top-0 gap-7 lg:gap-10 md:gap-3 text-white text-center text-sm md:text-[14px] lg:text-[16px] md:text-xs z-50">
        <?php
        session_start();

        if (isset($_SESSION['username'])) {

            // JIKA USER ADALAH OWNER
            if (isset($_SESSION['role']) && $_SESSION['role'] === 'owner') {
                echo '<li class="nav-item rounded-2xl bg-orange-200 text-black p-1 px-3"><a class="nav-link" href="index.php">Profile</a></li>';
            } 
        } else {
            echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
        }
        
        ?>
        <li class="nav-item"><a class="nav-link" href="#storePage">Store</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutUs.php">About us</a></li> 

        <?php
        
        if (isset($_SESSION['username'])) {
            //jika user sudah login
            echo '<li class="nav-item rounded-2xl bg-red-500 text-white p-1 px-3 hover:bg-red-600 transition"><a class="nav-link" href="logout.php">Log Out</a></li>';
        }
        ?>
    </div>


    <div class="absolute inset-x-0 w-screen h-50 bg-gradient-to-t from-[rgb(25,27,27)] to-transparent"></div>


    <div id="storePage" class="absolute inset-x-0 h-auto bg-[rgb(25,27,27)] mt-50">

        <div class="sticky inset-x-0 flex items-center felx-row justify-center top-14 bg-[rgb(25,27,27)] py-5 text-white z-40 overflow-x-auto overflow-y-hidden whitespace-nowrap px-4 py-4 scrollbar-none">
            <div class = "w-full md:w-auto lg:w-auto">
            
        <ul class="flex flex-row flex-nowrap w-full text-[10px] lg:text-[14px] gap-2 md:gap-4 lg:gap-6">
            <li>
                <a href="categories.php?name=Most liked"
                    class="px-5 py-2 bg-[rgb(255,80,20)] hover:bg-[rgb(255,120,20)] text-white rounded-full transition">
                    Most liked
                </a>
            </li>
            <li>
                <a href="categories.php?name=Light"
                    class="px-5 py-2 bg-white/20 hover:bg-white/40 text-white rounded-full transition">
                    Light
                </a>
            </li>
            <li>
                <a href="categories.php?name=Dark" class="px-5 py-2 bg-white/20 hover:bg-white/40 text-white rounded-full transition">
                    Dark
                </a>
            </li>
            <li>
                <a href="categories.php?name=Minimalist" class="px-5 py-2 bg-white/20 hover:bg-white/40 text-white rounded-full transition">
                    Minimalist
                </a>
            </li>
            <li>
                <a href="categories.php?name=Horror" class="px-5 py-2 bg-white/20 hover:bg-white/40 text-white rounded-full transition">
                    Horror
                </a>
            </li>
            <li>
                <a href="categories.php?name=Mobile wallpaper" class="px-5 py-2 bg-white/20 hover:bg-white/40 text-white rounded-full transition">
                    Mobile Wallpaper
                </a>
            </li>
            <li>
                <a href="categories.php?name=Desktop wallpaper" class="px-5 py-2 bg-white/20 hover:bg-white/40 text-white rounded-full transition">
                    Desktop Wallpaper
                </a>
            </li>
        </ul>
        </div>
    </div>


        <div class="relative w-full h-full lg:py-10 overflow-hidden">
                <h2 class="text-1xl md:text-2xl lg:text-5xl text-white text-center">Check out the most Liked</h2>
                <a href="galeri.html">
                    <h4 class="text-sm text-white text-center">Click to find out more ></h4>
                </a>
        </div>




    <div class="relative flex flex-wrap max-w-fit gap-4">

        <div class="overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1QgKMd5UIYfqgxZi35PdvEhWUUvML6tYz" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1vwdlyuU1J5veJDOvzdI_Y7lfis8K_hRR" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1OdoWqLi64fNEpgz1AF4TJGLGvgeW1SAl" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/15FGTaeau9PwbxL_67uHMs8_k6p6nglYi" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1X7Xhv9jNvw_1T6ea1uiqGr6gpF7y_JIH" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1Lhh-FwL1HGmYuJxrUKS6BKdy1MLJyhrE" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1XA4mMwtHk5z3948sXtgydjbD_W9m8Khy" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1alY4dqTx-EvqD_1bV9asLwKDV9-mwk49" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1ye5PoixESwxuEQbehR7DWx2F6E4Omn0P" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1aZ3IMhnzcGLlo-qqxvrs-Q35e2_t5DcB" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1hVo_LZReWcI12OmOeVRAUt07ubpq_IMi" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1RrcTphHC30zm1VLnfnyc04mXD0FEd7fh" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1H7uw-2p8xk3NqhQBWq9iEXGgfIRKEOif" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/14dWu3QYheepkDXvKtbjea5FN67Spz8sL" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1eX7-FQtkynveYxVoqCZx14qSxmvra7sN" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1KcKOn5ERUSumfb1stkr56jHT6JjdIf3n" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

         <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1exdsgAFc7P902EHOwkR7FrYJETjQ14Or" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

         <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1DHurBvmVHer0s7iW7_UIy4uWSxD0bEA3" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

         <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1LFBGWzQas4yksnP755bQmDgVoZIrHiLS" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

         <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1ZfJ8j4F8GYSn1h6GxIZgnP2thX8F2VR9" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/18Yq1g0ikpXMOIm0b02V1zbJyX9jeJ1a_" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1TtmWvvubzH357l2zOXI404JuhsKtvpG1" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>
        
        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1rfMxeB82Q3jCNCREduiheos55T6XiJq1" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1rQi7rm1Udd1tAjN5m38PiU9ySb3JSRef" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1pkxKWQlTaQYH2uWvJOpnjW_0RkK6XdSH" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1lf2u-OQ3w-Ec8cO6131vdh6XnyDUMsvn" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1jhNieyAGtt4iLtcyUngSAjSU1B8-Rahr" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1fBE58FNE6AE5z4DNV5mDm2EZMt-NeypJ" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1b3VjgiNHiJz8E5xNbCDWia_muM7S90lL" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1_kslm9QGcWKsPx3GOK2Qq3vpkI2_1J0_" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1PoyyMXIRueZLhyvBjxEkgl0DRVdrXHd5" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1PO95HI9wzeOBm0CaLEsjj96kqKQXzcBR" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1LJgjzHb4T3EVfNj99bhtZyRyP0BxYnNm" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1G30YZxykkc9f8YtN8C20zTSZNkMFOIoa" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/1FPoMfF1jRzbvVnu_gVdLy5wDR1Npwp6b" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

        <div class=" overflow-hidden rounded-xl shadow-lg hover:scale-[1.02] transition duration-300">
            <img src="https://lh3.googleusercontent.com/d/14sZKyeC2x-XNSmFgFfsn46-KSFXh_8Ww" class="w-auto h-[100px] md:h-[200px] lg:h-[250px] object-cover rounded lg:rounded-2xl">
        </div>

            </div>

            <div class="relative pt-50 lg:px-30 lg:pt-120">
                
            </div>

<div class="h-2 w-full bg-gradient-to-r from-purple-300 via-green-200 to-blue-300 to-orange-300 shadow-lg"></div>



    <script>
        gsap.from("#judul", {
            y: 900,
            opacity: 100,
            duration: 1.7
        });

        gsap.from("#navBar", {
            y: -50,
            opacity: 100,
            duration: 1.4
        });

        gsap.from("#trans1", {
            y: 25,
            opacity: 0,
            duration: 1.5
        });
    </script>


</body>

</html>