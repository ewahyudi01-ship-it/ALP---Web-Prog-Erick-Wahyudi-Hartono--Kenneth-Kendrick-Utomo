<?php
include 'connect.php';

if(isset($_POST['submit_wallpaper']))
{
    $name = $_POST['name_wallpaper'];
    $price = $_POST['price_wallpaper'];
    $file_path = $_POST['file_path'];
    $description = $_POST['description'];

    $query = "
    INSERT INTO wallpapers
    (name_wallpaper, price_wallpaper, file_path, date_publish, description)
    VALUES
    ('$name', '$price', '$file_path', NOW(), '$description')
    ";

    if(mysqli_query($conn, $query))
    {
        echo "
        <script>
            alert('Wallpaper berhasil ditambahkan');
            window.location.href='dashboard.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Create Wallpaper</title>
</head>

<body class="bg-[rgb(25,27,27)]">

    <div id="navBar"
        class="fixed inset-x-0 items-center flex flex-row px-10 py-5 backdrop-blur-md font-bold backdrop-filter justify-between lg:justify-center top-0 gap-7 lg:gap-10 md:gap-3 text-white text-center text-sm md:text-[14px] lg:text-[16px] md:text-xs z-50">
        <?php
        session_start();

        if (isset($_SESSION['username'])) {

            // JIKA USER ADALAH OWNER
            if (isset($_SESSION['role']) && $_SESSION['role'] === 'owner') {
                echo '<li class="nav-item rounded-2xl bg-orange-200 text-black p-1 px-3"><a class="nav-link" href="dashboard.php">Dashboard</a></li>';
            } 
        } else {
            echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
        }
        ?>
        <li class="nav-item rounded-2xl bg-green-200 p-1 px-3 text-black"><a class="nav-link" href="index.php">Main menu</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#storePage">Store</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutUs.php">About us</a></li> 

        <?php
        
        if (isset($_SESSION['username'])) {
            //jika user sudah login
            echo '<li class="nav-item rounded-2xl bg-red-500 text-white p-1 px-3 hover:bg-red-600 transition"><a class="nav-link" href="logout.php">Log Out</a></li>';
        }
        ?>
    </div>


<div class="max-w-2xl mx-auto mt-20 p-6 rounded-2xl">

    <h1 class="text-[rgb(249,176,137)] text-3xl font-bold mb-6">
        Create Wallpaper
    </h1>

    <form method="POST">

        <div class="mb-4">
            <label class="text-white block mb-2">
                Wallpaper Name
            </label>

            <input
                type="text"
                name="name_wallpaper"
                required
                class="w-full p-3 rounded-xl bg-[rgb(38,41,41)] text-white">
        </div>

        <div class="mb-4">
            <label class="text-white block mb-2">
                Price
            </label>

            <input
                type="number"
                name="price_wallpaper"
                required
                class="w-full p-3 rounded-xl bg-[rgb(38,41,41)] text-white">
        </div>

        <div class="mb-4">
            <label class="text-white block mb-2">
                Image URL
            </label>

            <input
                type="text"
                name="file_path"
                required
                class="w-full p-3 rounded-xl bg-[rgb(38,41,41)] text-white">
        </div>

        <div class="mb-4">
            <label class="text-white block mb-2">
                Description
            </label>

            <textarea
                name="description"
                rows="5"
                class="w-full p-3 rounded-xl bg-[rgb(38,41,41)] text-white"></textarea>
        </div>

        <button
            type="submit"
            name="submit_wallpaper"
            class="bg-blue-500 text-white px-5 py-3 rounded-xl justify-center">

            Create Wallpaper

        </button>

    </form>

</div>

</body>
</html>