<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../public/images/icons8-reading-80.png">

    <title>
        <?php echo App::getInstance()->title; ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>

<body>

<header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="index.php" class="navbar-brand d-flex align-items-center">

            <span style="font-size: 1em; color: #69c8ff;">
                <i class="fas fa-book"></i>
            </span>
                <strong>BD_Blog</strong>
            </a>
            <?php
            // TODO Réfléchir à la solution connexion / déconnexion!
            echo $status = (isset($_SESSION['auth'])) ? "<a href='index.php?p=unsign'>Déconnexion</a>" : "<a href='index.php?p=login'>Connexion</a>";
            echo $adminPage = (isset($_SESSION['auth'])) ? "<a href='index.php?p=admin.posts.index'>Administration</a>" : "";
            ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">

</main>

<div class="container">
    <div class="starter-template" style="padding-top: 50px">
        <?= $content; ?>
    </div>

</div>


</body>
</html>
