<?php
session_start();
// Menghapus semua variabel session yang tersimpan
session_unset();
// Menghancurkan session secara total dari sistem browser
session_destroy();

echo "<script>
        window.location.href = 'index.php';
      </script>";
exit();
?>