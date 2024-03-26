<?php
require_once "db/db.php";

$query = "SELECT * FROM links";
$result = $mysqli->query($query);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="uk-UA">

<head>
    <title>Links</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/minilinkico.png" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style.css">
</head>

<body data-bs-theme="dark" id="l-body">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="assets/minilink.png" class="navbar-brand ico">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Creator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Links</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            About
                        </span>
                    </li>
                </ul>
                <form class="d-flex" method="post" action="link_req.php">
                    <input class="form-control me-2" type="search" placeholder="Search link" aria-label="Search" name="sel">
                    <button class="btn btn-outline-info" type="submit" id="searcher"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <!-- table -->

    <div class="container table-handler">
        <table class="table table-hover">
            <thead>
                <tr id="titles">
                    <th scope="col">ID</th>
                    <th scope="col">User</th>
                    <th scope="col">Long</th>
                    <th scope="col">Mini</th>
                    <th scope="col">Note</th>
                    <th scope="col">Pop</th>
                </tr>
            </thead>
            <tbody>
                <!-- showing -->
                <?php 
                foreach($data as $action){
                ?>
                <tr class="record">
                    <th scope="row">
                        <?= $action['id']; ?>
                    </th>
                    <td>
                        <?= $action['user']; ?>
                    </td>
                    <td>
                        <?= $action['long_url']; ?>
                    </td>
                    <td>
                        <?= $action['short_url']; ?>
                    </td>
                    <td>
                        <?= $action['note']; ?>
                    </td>
                    <td>
                        <?= $action['attendance']; ?>
                    </td>
                </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>

    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Info :)</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row"><span>Authors: </span>
                        <p>Boretskyi Vlad, Iosif Vlad, Pavliuk Bogdan</p>
                    </div>
                    <div class="row"><span>Alma mater: </span>
                        <p>VNTU, 3KN23-B</p>
                    </div>
                    <div class="row"><span>Hello from:</span>
                        <p>24-03-2024</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/script.js"></script>
</body>

</html>