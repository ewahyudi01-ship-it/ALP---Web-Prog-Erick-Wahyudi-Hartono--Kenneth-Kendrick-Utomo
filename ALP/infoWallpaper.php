<?php

include("connect.php");

$id = $_GET['id'];

$query = "SELECT * FROM wallpapers WHERE wallpaper_id = $id";
$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="style.css" rel="Stylesheet">
</head>

<body class ="!bg-[rgb(25,27,27)]">

    <div id="navBar"
        class="fixed inset-x-0 items-center flex flex-row px-10 py-5 backdrop-blur-md font-bold backdrop-filter justify-between lg:justify-center top-0 gap-7 lg:gap-10 md:gap-3 text-black text-center text-sm md:text-[14px] lg:text-[16px] md:text-xs z-50">
        <li class="nav-item rounded-2xl bg-green-200 p-1 px-3"><a class="nav-link" href="index.php">Main menu</a></li>
        <li class="nav-item rounded-2xl bg-blue-300 p-1 px-3"><a class="nav-link" href="#storePage">Store</a></li>
        <li class="nav-item rounded-2xl bg-pink-200 p-1 px-3"><a class="nav-link" href="aboutUs.php">About us</a></li>
    </div>

    <h1 class=""><?php echo $data['name_wallpaper']; ?></h1>
    <img src="<?php echo $data['file_path']; ?>" class="w-auto h-[100px] md:h-[200px] lg:h-[250px]">
    <p>Price : <?php echo $data['price_wallpaper']; ?></p>
    <p><?php echo $data['description']; ?></p>


    <form action="buyWallpaper.php" method="POST">

        <input type="hidden" name="wallpaper_id" value="<?php echo $data['wallpaper_id']; ?>">

        <button type="submit">
            Buy Wallpaper
        </button>

    </form>
</body>

</html>