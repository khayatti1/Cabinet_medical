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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css
">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Historique des dossier</title>
    <style>
        body {
            background-color: #EDEEEE;
        }

        html {
            background-color: #EDEEEE;
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
                        <a class="nav-link active" href="historique">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comptes">Comptes</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav justify-content-end ms-5">

                <li class="nav-item dropdown ms-5">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/projet/views/profile/<?= $image ?>" class="pp"></a>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-3 my-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="test">
                        <form action="/projet/patient/option" method="post">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Nom Complet</th>
                                        <th>CIN</th>
                                        <th>telephone</th>
                                        <th>Date Rendez-Vous</th>
                                        <th>prix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($allRendezVous as $rendez) { ?>
                                        <tr>
                                            <td>
                                                <img src="/projet/views/profile/<?= ($rendez['photo'] == null) ?  'pp.png' :  $rendez['photo']; ?>" class="pp">
                                            </td>
                                            <td><?= $rendez['nom_complet'] ?></td>
                                            <td><?= $rendez['cin'] ?></td>
                                            <td><?= $rendez['tel'] ?></td>
                                            <td>
                                                <?php
                                                $date = date_create($rendez['date_rendez_vous'] . '  ' . $rendez['heure_rendez_vous']);
                                                echo date_format($date, "Y/m/d H:i");
                                                ?>
                                            </td>
                                            <td><?= $rendez['prix'] ?></td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </form>
                    </div>
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
                                    <input type="password" class="form-control mx-auto my-2 " style="width:100%" id="new password" name="new" pattern=".{8,}" placeholder="nouveau mot de passe" required="">
                                    <span class="messages"></span>
                                </div>
                                <div>
                                    <div>
                                        <input type="password" class="form-control mx-auto my-2 " style="width:100%" id="neww password" name="neww" pattern=".{8,}" placeholder="Confirmer Nouveau mot de passe" required="">
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
        function openFullscreen() {
            if (body.requestFullscreen) {
                body.requestFullscreen();
            } else if (body.webkitRequestFullscreen) {
                /* Safari */
                body.webkitRequestFullscreen();
            } else if (body.msRequestFullscreen) {
                /* IE11 */
                body.msRequestFullscreen();
            }


        }

        if (document.getElementById("flexSwitchCheckDefault").checked == true) {
            today.style.display = "block";
            alldays.style.display = "none";
        } else {
            today.style.display = "none";
            alldays.style.display = "block";
        }
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        function reserver() {
            var target = document.getElementById("test");
            if (target.style.display == "none") {
                target.style.display = "block";
            } else {
                target.style.display = "none";
            }
        }

        var password = document.getElementById("new password"),
            confirm_password = document.getElementById("neww password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("mot invalide");
            } else {
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                info: false,
                paging: false,
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>