<?php
require_once 'FormHandler.php';


// Instantiate the form handler
$formHandler = new FormHandler();

// Handle the form submission


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacker Egret</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <?php
    require ('des/navbar.php');
    ?>

    <form enctype="multipart/form-data" method="POST" action="coders.php">
        <div class="m-5">
            <div class="card text-center shadow-lg">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="#">base64</a>
                        </li>

                    </ul>

                </div>

                 <div class="m-3">
                <select class="form-select" aria-label="Default select example" name="encoding_type">
                    <option selected class="required" >encoding type:</option>
                    <option value="1">URL</option>
                    <option value="2">Base64</option>
                    <option value="3">JSON</option>
                    <option value="4">ROT13</option>
                    <option value="5">UTF8</option>
                    <option value="6">HTML</option>
                    <option value="7">UUEncode</option>
                </select>
                 </div>


                <div class="card-body">
                    <input class="form-control form-control-lg" type="text" placeholder="put the data"
                        aria-label=".form-control-lg example" name="data1" required>


                    <div class="mt-5">
                        <button class="btn btn-primary" type="submit" name="action" value="enc">encode</button>
                        <button class="btn btn-primary" type="submit" name="action" value="dec">decode</button>
                    </div>
                    <?php

                    $formHandler->handleForm();
                    $formHandler->handleFormdec();

                    // Redirect to the same page to prevent form data resubmission
                    

                    ?>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>


    <?php
    require ('des/footer.php');
    ?>

</body>

</html>