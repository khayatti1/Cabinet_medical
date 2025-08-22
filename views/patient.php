<?php @session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Patient</title>
  <style>
    body {
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

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info bg-gradient shadow-lg py-2">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="" style="margin-left: 42px;">
          <h4>Cabinet Médical</h4>
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled"></a>
          </li>
        </ul>
        <?php
        if (!empty($_SESSION["photo"])) {
          $image = $_SESSION["photo"];
        } else {
          $image = "pp.png";
        }
        ?>
        <form class="d-flex"><img src="views/profile/<?= $image ?>" class="pp">
          <h5><?= ucfirst($_SESSION['prenom']) . ' ' . strtoupper($_SESSION['nom'])  ?></h5>
          <div class="btn-group ">
            <svg type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-gear text-light" style="margin-right:20px ;" viewBox="0 0 16 16">
              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
            </svg>
            <ul class="dropdown-menu dropdown-menu-end ">
              <li><button class="dropdown-item" type="button" data-bs-offset="10,20" data-bs-toggle="modal" data-bs-target="#profile"><svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                  </svg> Profile</button></li>

              <li><button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button" class="dropdown-item" type="button"><svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg>Change password </button></li>

              <li><a href="logout" class="dropdown-item" type="button"> <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                  </svg>Logout</a></li>
            </ul>
          </div>
        </form>
      </div>
    </div>

  </nav>
  <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style=""><img src="views/profile/<?= $image ?>" class="p1">
            <h5 style="color: black;"><?= ucfirst($_SESSION['prenom']) . ' ' . strtoupper($_SESSION['nom'])  ?></h5>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-3">
          <table class="table table-striped border border-2 align-middle">
            <tbody>
              <tr>
                <th>E-mail :</th>
                <td><?= $_SESSION['email'] ?></td>
              </tr>
              <tr>
                <th>Telephone :</th>
                <td><?= $_SESSION['mobile'] ?></td>
              </tr>
              <tr>
                <th>Adresse :</th>
                <td><?= $_SESSION['adresse'] ?></td>
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
  <div class="py-4">
    <div class="row mx-3 mt-5">
      <div class="col-3 ">
        <div class="card" style="height: 100%;">
          <div class="card-body">
            <h5 class="card-title text-center" style="color : black;">Réserver un rendez-vous</h5>
            <p class="card-text border border-primary">
            <p class="card-text mt-3 mb-1 p-2 text-center fw-bold">A partir de là, si vous désirez aller de l'avant avec le traitement, vous pourrez réserver un rendez-vous</p>
            <div class="row">
              <div class="d-flex flex-row justify-content-end mt-1">
                <button type="button" class="btn btn-primary d-flex align-items-start" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Réserver rendez-vous</button>
              </div>
            </div>
            <!-- Modal -->
            <form method="POST" action="/projet/patient/reserver">
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel" style="color : black;">réservation</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row py-3">
                        <div class="form-group form-primary col-6">
                          <input type="text" name="prenom" value="<?= $_SESSION['prenom'] ?>" class="form-control" autocomplete="off" required="" placeholder="prenom">
                          <span class="form-bar"></span>
                        </div>
                        <div class="form-group form-primary col-6">
                          <input type="text" name="nom" value="<?= $_SESSION['nom'] ?>" class="form-control" autocomplete="off" required="" placeholder="Nom">
                          <span class="form-bar"></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group form-primary col-6">
                          <input type="telephon" name="mobile" value="<?= $_SESSION['mobile'] ?>" class="form-control" autocomplete="off" required="" pattern=".[0-9]{9,9}" placeholder="Telephone">
                          <span class="form-bar"></span>
                        </div>
                        <div class="form-group form-primary col-6">
                          <input type="text" name="CIN" value="<?= $_SESSION['CIN'] ?>" class="form-control" autocomplete="off" placeholder="CIN">
                          <span class="form-bar"></span>
                        </div>
                      </div>
                      <div class="row py-3">
                        <div class="form-group form-primary col-6">
                          <input type="date" id="dt" min="<?= date('Y-m-d') ?>" name="drv" class="form-control" autocomplete="off" onchange="changeheure()">
                          <span class="form-bar"></span>
                        </div>

                        <div class="form-group form-primary col-6">
                          <div class="input-group mb-3">
                            <select class="form-select" name="trv" id="hr" disabled>


                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group form-primary col-4">
                          <select name="sexe" class="form-select" aria-label="Default select example" required>
                            <option selected disabled value="">Sexe</option>
                            <option value="Homme">Homme</option>
                            <option value="Madame">Madame</option>
                            <option value="Mademoiselle">Mademoiselle</option>
                          </select>
                        </div>
                        <div class="form-group form-primary col-4">
                          <select name="age" class="form-select" aria-label="Default select example" required>
                            <option selected disabled value=""> Age </option>
                            <option value="Adulte">Adulte</option>
                            <option value="Enfant">Enfant</option>
                          </select>
                        </div>
                        <div class="form-group form-primary col-4">
                          <select name="sang" class="form-select" aria-label="Default select example" required>
                            <option selected value="">Sang</option>
                            <option value="-">-</option>
                            <option value="O">O</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-primary">sauvegarder</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="height: 100%;">
          <div class="card-body ">
            <h5 class="card-title text-center" style="color : black; ">Etat de rendez-vous</h5>
            <p class="card-text border border-warning">
            <ol class="list-group list-group py-3">
              <li class="list-group-item d-flex  justify-content-between align-items-start py-3">
                <div class="ms-2 me-auto">
                  <div class="fw-bold"><i class="bi bi-hourglass me-2 py-2"></i> En attente</div>
                </div>
                <span class="badge bg-primary rounded-pill"><?= $reservation_Att ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start py-3">
                <div class="ms-2 me-auto">
                  <div class="fw-bold"><i class="bi bi-patch-check me-2 py-2"></i>Accepté</div>
                </div>
                <span class="badge bg-primary rounded-pill"><?= $reservation_Acc ?></span>
              </li>
            </ol>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card" style="height: 100%;">
          <div class="card-body">
            <h5 class="card-title text-center" style="color : black; ">Montant Payé</h5>
            <p class="card-text border border-success">

            <div class="container mt-3  border rounded p-4 text-center">
              <div class="input-group m-1 py-4 ">
                <input type="number" class="form-control" placeholder="" disabled value="<?= $prixPatient + 0 ?>" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">MAD</span>
              </div>
            </div>
            <div class="row">
              <div class="d-flex flex-row justify-content-end my-2">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card" style="height: 100%;">
          <div class="card-body">
            <h5 class="card-title text-center" style="color : black; ">Montant Restant</h5>
            <p class="card-text border border-danger">

            <div class="mt-3  border rounded p-4 text-center">
              <div class="input-group m-1  py-4">
                <input type="number" class="form-control" placeholder="" disabled value="<?= $prixPatient - $restPatient ?>" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">MAD</span>
              </div>
            </div>
            <div class="row">
              <div class="d-flex flex-row justify-content-end my-2">
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <div class="row mx-3">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div id="test">
            <form action="/projet/patient/option" method="post">
              <table class="table table-striped border border-2 table-hover align-middle align-content-center text-center">
                <thead>
                  <tr>
                    <th class="align-content-center text-center">Date Rendez Vous</th>
                    <th class="align-content-center text-center">Heure Rendez Vous</th>
                    <th class="align-content-center text-center">Date Reservation</th>
                    <th class="align-content-center text-center">Etat</th>
                    <th class="align-content-center text-center">Rapport</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($mesRendez as $rendez) { ?>
                    <tr>
                      <td><?= $rendez['date_rendez_vous'] ?></td>
                      <td><?= $rendez['heure_rendez_vous'] ?></td>
                      <td><?= $rendez['date_reservation'] ?></td>
                      <td><?php if ($rendez['etat'] == 'fait') {
                            echo '<i class="bi bi-check-circle"> -- Traiter </i>';
                          } elseif ($rendez['etat'] == 'requested') {
                            echo '<i class="bi bi-clock-history"> -- En attente</i>';
                          } elseif ($rendez['etat'] == 'accepted') {
                            echo '<i class="bi bi-exclamation-circle"> -- Accepté</i>';
                          }
                          ?></td>
                      <td class="d-flex justify-content-center text-center">
                        <button <?php
                                echo ($rendez['etat'] != 'fait') ? 'disabled' : "";
                                ?> type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#rpt<?= $rendez['id'] ?>"><i class="bi bi-folder-fill"></i></button>
                        <button type='submit' <?php if ($rendez['etat'] != 'requested') {
                                                echo 'disabled';
                                              } ?> class=" btn btn-danger mx-3" name='delete' value='<?= $rendez['id'] ?>'><i class="bi bi-trash3"></i></button>

                      </td>

                    </tr>
                    <form action="/projet/doctor/ajouterRV" method="post">
                      <div class="modal fade" id="rpt<?= $rendez['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel" style="color : black;">Infomation de : <?= $rendez['nom_complet'] ?></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-3">Nom :</div>
                                <div class="col-9">
                                  <div class="mb-3">
                                    <input type="text" value="<?= $rendez['nom_complet'] ?>" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-3">Prix:</div>
                                <div class="col-9">
                                  <div class="input-group mb-3">
                                    <input type="number" value="<?= $rendez['prix'] ?>" name="Prix" min="1" step="any" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">DH</span>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-3">Description:</div>
                                <div class="col-9">
                                  <textarea name="description" cols="57" rows="8" class="form-control" readonly><?= $rendez['description'] ?></textarea>
                                  <span class="form-bar"></span>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  <?php } ?>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  </div>
  </div>

  <form action="ChangePassword" method="POST">
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
    function changeheure() {
      var heure = document.getElementById("hr");
      var date = document.getElementById("dt");
      var content = '<option selected disabled>Heure</option>';
      var table = <?php echo json_encode($allRendezVous); ?>;
      var hourTable = ['09:00:00', '10:00:00', '11:00:00', '12:00:00', '14:00:00', '15:00:00', '16:00:00', '17:00:00'];
      for (var i = 0; i < Object.keys(table).length; i++) {
        if (table[i]['date_rendez_vous'] == date.value) {
          var index = hourTable.indexOf(table[i]['heure_rendez_vous']);
          if (index > -1) {
            hourTable.splice(index, 1);
          }
        }
      }
      for (var i = 0; i < hourTable.length; i++) {
        content += '<option value="' + hourTable[i] + '">' + hourTable[i].split(":")[0] + ':' + hourTable[i].split(":")[1] + '</option>';
      }

      heure.innerHTML = content
      heure.disabled = false
    }

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>