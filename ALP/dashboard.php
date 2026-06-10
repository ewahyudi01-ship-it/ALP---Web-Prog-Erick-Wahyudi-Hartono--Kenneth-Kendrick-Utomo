<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Dashboard | Wallpeak</title>
</head>

<body class=" bg-[rgb(15,17,17)]">

    <div id="navBar"
        class="fixed inset-x-0 items-center flex flex-row px-10 py-5 bg-black/20 backdrop-blur-md font-bold backdrop-filter justify-between lg:justify-center top-0 gap-7 lg:gap-10 md:gap-3 text-white text-center text-sm md:text-[14px] lg:text-[16px] md:text-xs z-50">

        <li class="nav-item rounded-2xl bg-green-200 p-1 px-3 text-black"><a class="nav-link" href="index.php">Main
                menu</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#storePage">Store</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutUs.php">About us</a></li>

        <?php
        session_start();
        include 'connect.php';


        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // tunjukin semua wallpaper
        $query = "SELECT * FROM wallpapers";
        $result = mysqli_query($conn, $query);


        if (isset($_SESSION['username'])) {
            //jika user sudah login
            echo '<li class="nav-item rounded-2xl bg-red-500 text-white p-1 px-3 hover:bg-red-600 transition"><a class="nav-link" href="logout.php">Log Out</a></li>';
        }
        ?>
    </div>

    <!-- balok/menu utama -->
    <div class="relative flex flex-col rounded-2xl mx-30 pt-50 max-w-full gap-5">

        <!-- baris pertama -->
        <div class="flex flex-row gap-5">
            <div class=" bg-[rgb(33,37,41)] rounded-xl max-w-fit px-5 py-8 flex flex-row items-center gap-3">
                <p class="text-[16px] font-bold text-white">Total sold</p>
                <div class="bg-[rgb(0,132,255)] px-3 py-2 rounded-xl max-w-fit h-auto">
                    <?php

                    $sql = "SELECT COUNT(*) AS total_sell FROM transactions";

                    $result = mysqli_query($conn, $sql);
                    $queryTotalTerjual = $result;

                    $data = mysqli_fetch_assoc($queryTotalTerjual);

                    echo '<div class="text-white font-bold text-sm">' . $data["total_sell"] . '</div>';
                    ?>
                </div>
            </div>
            <!-- kolom kedua -->
            <div class=" bg-[rgb(33,37,41)] rounded-xl max-w-fit px-5 py-8 flex flex-row items-center gap-3">
                <p class="text-[16px] font-bold text-white">Your balance </p>
                <div class="bg-[rgb(79,165,79)] px-3 py-2 rounded-xl max-w-fit h-auto">
                    <?php

                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    include 'connect.php';
                    $sql = "SELECT balance_user AS balance_user FROM users";

                    $result = mysqli_query($conn, $sql);
                    $queryTotalTerjual = $result;

                    $data = mysqli_fetch_assoc($queryTotalTerjual);

                    echo '<div class="text-white font-bold text-sm">' . "Rp. " . $data["balance_user"] . '</div>';
                    ?>
                </div>
            </div>
            <!-- kolom ketiga -->
            <div class=" bg-[rgb(33,37,41)] rounded-xl max-w-fit px-5 py-8 flex flex-row items-center gap-3">
                <p class="text-[16px] font-bold text-white">Total wallpapers created</p>
                <div class="bg-[rgb(242,125,0)] px-3 py-2 rounded-xl max-w-fit h-auto">
                    <?php

                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    include 'connect.php';
                    $sql = "SELECT COUNT(*) AS total_wallpaper FROM wallpapers";

                    $result = mysqli_query($conn, $sql);
                    $queryTotalTerjual = $result;

                    $data = mysqli_fetch_assoc($queryTotalTerjual);

                    echo '<div class="text-white font-bold text-sm">' . $data["total_wallpaper"] . '</div>';
                    ?>
                </div>
            </div>


        </div>
        <!-- baris kedua -->
        <a href="create.php">
            <div class="flex flex-row gap-5">
                <div class=" bg-[rgb(33,37,41)] rounded-xl max-w-fit px-5 py-8 flex flex-row items-center gap-3">

                    <p class="text-[16px] font-bold text-white">Create new wallpaper!</p>
                    <div class="bg-[rgb(115,79,225)] px-3 py-2 rounded-xl max-w-fit h-auto">
                        <p class="font-bold text-[15px] text-white">+</p>
                    </div>
                </div>
        </a>
    </div>

    <!-- tunjukin semua wallpaper dari database -->
    <div class="relative flex flex-wrap max-w-fit gap-4">
        <?php
        $query = "SELECT * FROM wallpapers";
        $result = mysqli_query($conn, $query);
        ?>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="bg-[rgb(45,47,47)] p-3 rounded-xl">
                <img src="<?php echo $row['file_path']; ?>" class="h-40 rounded">

                <p class="text-white font-bold">
                    <?php echo $row['name_wallpaper']; ?>
                </p>

                <a href="delete.php?id=<?php echo $row['wallpaper_id']; ?>" onclick="return confirm('Delete wallpaper?')"
                    class="bg-red-400 text-xs font-bold text-white px-3 py-2 rounded-xl gap-2">
                    Delete
                </a>
            </div>
            <?php
        }
        ?>
    </div>



    </div>


</body>

</html>