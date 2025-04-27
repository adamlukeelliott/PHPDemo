<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My PHP + Bootstrap Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1 p-3">Bootstrap & PHP</span>
        <span class="navbar-brand mb-0 h1 p-3">
            <?php
                echo "Date: " . date("d/m/Y");
            ?>
        </span>
    </nav>

    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4">PHP & Bootstrap Demo</h1>
            <p class="lead">This is a simple website designed to demonstrate the usage of PHP & Bootstrap CSS</p>
            <hr class="my-4">
            <p>You can view the source code on GitHub</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="https://github.com/adamlukeelliott/PHPDemo" role="button">Source Code</a>
            </p>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>