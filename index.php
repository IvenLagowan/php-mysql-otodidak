<!DOCTYPE html>
<html lang="en">

<head>
    <title>Belajar - PHP & MySQl</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark" style="background:
            #000;">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#"><img
                src="https://scontent.fupg5-1.fna.fbcdn.net/v/t39.30808-6/274737045_660064905115640_124245152679425638_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8631f5&_nc_eui2=AeGyK87QeOJpUkiWm4MdILsAhOOInapECZmE44idqkQJmVCrOoQIlyh9nOdOrqGudcizueG9zTnlFdzF38k4IadN&_nc_ohc=GTt0H5olHiMAX9cuEaJ&_nc_ht=scontent.fupg5-1.fna&oh=00_AfBKSZ9DraA5rIrkmfvfPbM4lmX1ZqzmWr_h1R-9T6xTBg&oe=64210C7D"
                width="30px"></a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=input">Tabel Data Aggota LA N 69</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=data">Input Data</a>
            </li>
        </ul>
    </nav>

            <?php
            include 'view/input_data.php';
         
            ?>

</body>

</html>