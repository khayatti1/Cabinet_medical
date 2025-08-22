<?php @session_start(); ?>
<?php
if (!empty($_SESSION["photo"])) {
    $image = $_SESSION["photo"];
} else {
    $image = "pp.png";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>Création Compte</title>

    <style>
        body {
            background-color: #ffffff;
        }

        html {
            background-color: #ffffff;
        }

        h5 {
            color: white;
            margin-right: 20px;
            margin-left: 8px;
            margin-top: 2px;
        }

        .pp {
            height: 32px;
            width: 32px;
            margin: 0px;
            padding-right: 20px;
            padding: 0px;
            object-fit: cover;
            border-radius: 100%;
        }

        .p1 {
            height: 44px;
            width: 44px;
            margin: 0px;
            padding-right: 20px;
            padding: 0px;
            object-fit: cover;
            border-radius: 100%;
        }

        .f {
            font-weight: 600;
            text-decoration: none;
        }

        #logo {
            height: 180px;
            width: 400px;
            margin-right: 0px;
            padding-top: 20px;

        }

        #log {
            height: 180px;
            width: 410px;
            margin-right: 4px;
            padding-top: 22px;
            cursor: none;
        }

        .conbutton {
            width: 84%;
            height: 40px;
            border-radius: 8px;
        }

        body {
            background-attachment: fixed;
            margin: 0;
            height: 100%;
            width: auto;
            background-position: center;
            background-size: cover;
            background-color: #e4e4ee;
        }
    </style>
</head>

<body id="body">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info bg-gradient shadow-lg py-2">
        <div class="container-fluid ">
            <a class="navbar-brand ">Cabinet médical</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style="font-size: 20px ;">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="rendez-vous">Rendez-Vous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rapport">Rapport</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paiement">Paiement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historique">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="comptes">Comptes</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav justify-content-end ms-5">

                <li class="nav-item dropdown ms-5">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/projet/views/profile/<?= $image ?>" class="pp">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end ">
                        <li><button class="dropdown-item" type="button" data-bs-offset="10,20" data-bs-toggle="modal" data-bs-target="#profile"><svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg> Profile</button></li>
                                
                        <li><button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button" class="dropdown-item" type="button"><svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>Change password </button></li>

                        <li><a onclick="openFullscreen();" class="dropdown-item" type="button"> <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                                </svg>Full Screen </a></li>

                        <li><a href="../logout" class="dropdown-item" type="button"> <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style=""><img src="/projet/views/profile/<?= $image ?>" class="p1">
                        <h5 style="color: black;"><?php ucfirst($_SESSION['prenom']) . ' ' . strtoupper($_SESSION['nom'])  ?></h5>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3">
                    <table class="table table-striped border border-2 align-middle">
                        <tbody>
                            <tr>
                                <th>E-mail :</th>
                                <td><?= $_SESSION['email']  ?></td>
                            </tr>
                            <tr>
                                <th>Telephone :</th>
                                <td><?= $_SESSION['mobile'] ?></td>
                            </tr>
                            <tr>
                                <th>Adresse :</th>
                                <td><?= $_SESSION['adresse']  ?></td>
                            </tr>
                            <tr>
                                <th>CIN :</th>
                                <td><?php if (empty($_SESSION['CIN'])) {
                                        echo '-';
                                    } else {
                                        echo $_SESSION['CIN'];
                                    } ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light px-4">
        <div class="w-100 d-flex p-2  justify-content-end">
            <button type="button" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-outline-primary justify-content-end">ajouter</button>
        </div>
        <div class="row mx-3 my-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="test">

                            <form action="/projet/admin/delCompte" method="post">
                                <table class="text-center bg-light table table-striped border border-1 align-content-center text-center">
                                    <thead>
                                        <tr>
                                            <th class="align-content-center text-center">Photo</th>
                                            <th class="align-content-center text-center">Nom Complet</th>
                                            <th class="align-content-center text-center">CIN</th>
                                            <th class="align-content-center text-center">Telephone</th>
                                            <th class="align-content-center text-center">Adresse</th>
                                            <th class="align-content-center text-center">Email</th>
                                            <th class="align-content-center text-center">type</th>
                                            <th class="align-content-center text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($alluser as $user) { ?>
                                            <tr>
                                                <td>
                                                    <img src="/projet/views/profile/<?= ($user['photo'] == null) ?  'pp.png' :  $user['photo']; ?>" class="pp">
                                                </td>
                                                <td><?= $user['nom'] . '  ' . $user['prenom'] ?></td>
                                                <td><?= $user['cin'] ?></td>
                                                <td><?= $user['mobile'] ?></td>
                                                <td><?= $user['adress'] ?></td>
                                                <td><?= $user['email'] ?></td>
                                                <td><?= $user['type'] ?></td>
                                                <td>
                                                    <button type="button" class=" btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#update<?= $user['id'] ?>">Modifier</button>
                                                    <button type="button"  <?php if ($user['type'] == 'patient') {echo 'disabled';}?> class=" btn btn-outline-danger mx-3" data-bs-toggle="modal" data-bs-target="#delete<?= $user['id'] ?>">Supprimer</button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="delete<?= $user['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog ">
                                                    <div class="modal-content ">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-dark" id="staticBackdropLabel">Supprimer <?= $user['type'] ?> ?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger" name="delete" value="<?= $user['id'] ?>">Supprimer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <?php foreach ($alluser as $user) { ?>
                            <div class="modal fade" id="update<?= $user['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="staticBackdropLabel">Modifier Comptes </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-footer">
                                            <form method="POST" action="/projet/admin/modifierCompte" enctype="multipart/form-data">

                                                <div class="row" style="width:100%;">
                                                    <input type="hidden" name="id" value="<?= $user['id'] ?>" readonly class="form-control" autocomplete="off" required="" placeholder="prenom">
                                                    <div class="form-group form-primary py-1 col-6">
                                                        <input type="text" name="prenom" value="<?= $user['prenom'] ?>" class="form-control" autocomplete="off" required="" placeholder="prenom">
                                                        <span class="form-bar"></span>
                                                    </div>
                                                    <div class="form-group form-primary py-1 col-6">
                                                        <input type="text" name="nom" value="<?= $user['nom'] ?>" class="form-control" autocomplete="off" required="" placeholder="Nom">
                                                        <span class="form-bar"></span>
                                                    </div>
                                                </div>
                                                <div class="row" style="width:100%;">
                                                    <div class="form-group form-primary py-1 col-8 ">
                                                        <input type="telephon" name="mobile" value="<?= $user['mobile'] ?>" class="form-control" autocomplete="off" required="" pattern=".[0-9]{9,9}" placeholder="Telephone">
                                                        <span class="form-bar"></span>
                                                    </div>
                                                    <div class="form-group form-primary py-1 col-4 ">
                                                        <input type="text" name="cin" value="<?= $user['cin'] ?>" class="form-control" autocomplete="off" required="" placeholder="CIN">
                                                        <span class="form-bar"></span>
                                                    </div>
                                                </div>
                                                <div class="row" style="width:100%;">
                                                    <div class="form-group form-primary col-12 py-1 ">
                                                        <input type="text" name="email" value="<?= $user['email'] ?>" class="form-control" autocomplete="off" placeholder="Email">
                                                        <span class="form-bar"></span>
                                                    </div>
                                                    <div>
                                                        <div class="form-group form-primary py-1 ">
                                                            <textarea name="adress" cols="57" rows="4" class="form-control"><?= $user['adress'] ?></textarea>
                                                            <span class="form-bar"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-primary col-12 py-1 ">
                                                        <input type="file" name="photo" value="projet\views\profile\<?= $user['photo'] ?>" class="form-control" autocomplete="off" accept="image/*" placeholder="photo">
                                                        <span class="form-bar"></span>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary py-2" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger py-2 " name="update<?= $user['id'] ?>">Modifier</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="staticBackdropLabel">Ajouter un compte </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-footer">
                                        <form method="POST" action="ajouteCompte" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="form-group form-primary py-1 col-6">
                                                    <input type="text" name="prenom" class="form-control" autocomplete="off" required="" placeholder="prenom">
                                                    <span class="form-bar"></span>
                                                </div>
                                                <div class="form-group form-primary py-1 col-6">
                                                    <input type="text" name="nom" class="form-control" autocomplete="off" required="" placeholder="Nom">
                                                    <span class="form-bar"></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group form-primary py-1 col-6">
                                                    <input type="text" name="mobile" class="form-control" autocomplete="off" required="" placeholder="Telephone">
                                                    <span class="form-bar"></span>
                                                </div>
                                                <div class="form-group form-primary py-1 col-3">
                                                    <input type="text" name="cin" class="form-control" autocomplete="off" required="" placeholder="CIN">
                                                    <span class="form-bar"></span>
                                                </div>
                                                <div class="form-group form-primary py-1 col-3">
                                                    <select name="type" class="form-select" aria-label="Default select example" required>
                                                        <option selected disabled value="">type</option>
                                                        <option value="doctor">doctor</option>
                                                        <option value="patient">patient</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group form-primary py-1 col-12">
                                                <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Email">
                                                <span class="form-bar"></span>
                                            </div>

                                            <div class="form-group form-primary py-1 col-12">
                                                <textarea type="text" name="adresse" class="form-control" autocomplete="off" required="" placeholder="Adresse"></textarea>
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="form-group form-primary py-1 col-12">
                                                <input type="file" name="photo" class="form-control" autocomplete="off" accept="image/*" placeholder="photo">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="form-group form-primary py-1 col-12">
                                                <input type="password" name="mtp" class="form-control" autocomplete="off" required="" pattern=".{8,}" placeholder="mot de passe" id="mt">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="form-group form-primary py-1 col-12">
                                                <input type="password" name="mtp" class="form-control" autocomplete="off" required="" pattern=".{8,}" placeholder="confirmer le mot de passe" id="mp">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick="myFunction()">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                                    Afficher votre mot de passe</label>
                                            </div>
                                            <input type="hidden">
                                            <div class=" d-flex justify-content-center py-2">
                                                <button type="submit" name="loginn" class="btn btn-primary text-center conbutton">Ajouter nouveau compte</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="../ChangePassword" method="POST">
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel" style="color : black;">Change password</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body ">
                                            <div>
                                                <div>
                                                    <input type="password" class="form-control mx-auto my-2 " style="width:100%" id="old password" name="old" placeholder="Ancien mot de passe" required="">
                                                    <span class="messages"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <input type="password" class="form-control mx-auto my-2 " style="width:100%" id="new password" name="new" pattern=".{8,}" placeholder="nouveau mot de passe" required="" id="mp">
                                                        <span class="messages"></span>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <input type="password" class="form-control mx-auto my-2 " style="width:100%" id="neww password" name="neww" pattern=".{8,}" placeholder="Confirmer Nouveau mot de passe" required="" id="mt">
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <pre></pre>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Confirmer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </form>
                        <script>
                            var password = document.getElementById("mp"),
                                confirm_password = document.getElementById("mt");

                            function validatePassword() {
                                if (password.value != confirm_password.value) {
                                    confirm_password.setCustomValidity("mot invalide");
                                } else {
                                    confirm_password.setCustomValidity('');
                                }
                            }
                            password.onchange = validatePassword;
                            confirm_password.onkeyup = validatePassword;

                            function myFunction() {
                                var x = document.getElementById("mp");
                                var y = document.getElementById("mt");
                                if (x.type === "password") {
                                    x.type = "text";
                                    y.type = "text";
                                } else {
                                    x.type = "password";
                                    y.type = "password";
                                }
                            }
                        </script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>