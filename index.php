<?php
/* ======Warning!======
Service using OSPanel and phpMyAdmin DBMS. You should create your own DB 
for correct working. You should have basic knowledge of OSPanel for usage.

Database: Minilink
Table: links
    id: varchar 64, UNIQUE, A.I.
    user: varchar 64
    long_url: varchar 1000
    short_url: varchar 256
    note: varchar 100
    attendance: int

    INSERT YOUR LONG LINK AND GET SHORT LINK. FOR GETTING LONG FROM SHORT YOU
    SHOULD INSERT SHORT LINKS IN LINKS PAGE INTO A SEARCHER
*/

require_once "db/db.php";
$query = "SELECT * FROM links"
?>
<!DOCTYPE html>
<html lang="uk-UA">

<head>
    <title>Mini Link</title>
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

<body data-bs-theme="dark" id="i-body">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="assets/minilink.png" class="navbar-brand ico">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Creator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="links.php">Links</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            About
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div id="form" class="row">
            <div class="col-4">
                <img src="assets/poster.jpg">
            </div>
            <form class="col-8" action="index_ins.php" method="post" id='ins'>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="user" placeholder="Enter your Email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">URL</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="long_url"
                        placeholder="Enter your Link" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Note</label>
                    <input type="text" class="form-control" id="exampleInputPassword2" name="note"
                        placeholder="Write a description" required>
                </div>
                <div class="row justify-content-center">
                    <div class="sub">
                        <button type="submit" class="btn btn-outline-info">Submit <i class="fa-brands fa-space-awesome"
                                style="margin-left: 3px;"></i></button>
                    </div>
                </div>
            </form>

        </div>
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

    <!-- scr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/script.js"></script>
</body>

</html>