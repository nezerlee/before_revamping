<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | ABMTC Application Portal</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom_style.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg py-3 py-lg-3 navbar-light bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Application Form</a>
    </div>
</nav>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead-custom"></header>

<!-- Page Content -->
<section class="mb-5">
    <div class="container overflow-hidden">
        <!--multisteps-form-->
        <div class="multisteps-form">
            <br>
            <!--progress bar-->
            <div class="row">
                <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
                    <?php include "progess.php";?>
                </div>
            </div>
            <!--form panels-->
            <div class="row">
                <div class="col-12 col-lg-12 m-auto">
                    <?php include "form.php"; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="js/jquery.min.js"></script>
<script src="js/custom_script.js"></script>
</body>
</html>