<?php
@session_start();
require('controller/action.php');
$oldEmail = '';
$user = new Users();
$rendez_vous = new Rendez_vous();
$accRendezVousToday = $rendez_vous->accRendezVoust();
$accRendezVous = $rendez_vous->accRendezVous();
$allRendezVous = $rendez_vous->rendezAll();
$accRapport = $rendez_vous->accRapport();
$alluser = $user->alluser();
$paiement = $user->paiement();

if (!empty($_SESSION)) {
    $reservation_Acc = $rendez_vous->countReservation("accepted", $_SESSION['email']);
    $reservation_Att = $rendez_vous->countReservation("requested", $_SESSION['email']);
    $mesRendez = $rendez_vous->mesRendez($_SESSION['email']);
    $prixPatient =  $user->prixPatient($_SESSION['id']);
    $restPatient =  $user->restPatient($_SESSION['id']);

}
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        require('views/login.php');
    } elseif ($_GET['action'] == 'valide') {
        $oldEmail = $_POST['email'];
        $user->connect($_POST['email'], $_POST['mtp']);
    } elseif ($_GET['action'] == 'doctor') {
        $oldEmail = '';
        testSession("doctor");
        require('views/doctor.php');
    } elseif ($_GET['action'] == 'doctor/reserver') {
        testSession("doctor");
        $rendez_vous->dcRendezVous($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['mobile'], $_POST['CIN'], $_POST['drv'], $_POST['trv'], $_POST['age'], $_POST['sang'], $_POST['sexe'], $_POST['dernier']);
        header("location:/projet/doctor");
    } elseif ($_GET['action'] == 'patient') {
        $oldEmail = '';
        testSession("patient");
        require('views/patient.php');
    } elseif ($_GET['action'] == 'patient/reserver') {
        testSession("patient");
        $rendez_vous->addReservation($_POST['prenom'], $_POST['nom'], $_SESSION['email'], $_POST['mobile'], $_POST['CIN'], $_POST['drv'], $_POST['trv'], $_POST['age'], $_POST['sang'], $_POST['sexe']);
        header('Location:/projet/patient');
    } elseif ($_GET['action'] == 'doctor/ajouterRV') {
        testSession("doctor");
        $rendez_vous->addDescription($_POST['id'], $_POST['Description'], $_POST['Prix']);
        header("location:/projet/doctor");
    } elseif ($_GET['action'] == 'inscription') {
        require('views/inscription.php');
    } elseif ($_GET['action'] == 'ins') {
        $user->adduser($_POST['nom'], $_POST['prenom'], $_POST['mobile'], $_POST['email'], $_POST['mtp'], $_POST['adresse'], $_FILES['photo']['tmp_name'], $_FILES['photo']['name'], $_POST['type'], $_POST['CIN']);
        $patt->addpatient($_POST['email'], $_POST['CIN']);
    } elseif ($_GET['action'] == 'error') {
        require('views/login.php');
        include('views/error.php');
    } elseif ($_GET['action'] == 'errorins') {
        require('views/inscription.php');
        include('views/errorins.php');
    } elseif ($_GET['action'] == 'ChangePassword') {
        $user->changePassword($_SESSION['email'], $_SESSION['id'], $_POST['old'], $_POST['new']);
        include('views/login.php');
    } elseif ($_GET['action'] == 'errorPassword') {
        include('views/errorPassword.php');
        if ($_SESSION['type'] == 'patient') {
            include('views/patient.php');
        } elseif ($_SESSION['type'] == 'doctor') {
            include('views/doctor.php');
        } else {
            include('views/admin.php');
        }
    } elseif ($_GET['action'] == 'logout') {
        delSession();
        header('Location:home');
    } elseif ($_GET['action'] == 'home') {
        include('views/home.php');
    } elseif ($_GET['action'] == 'error404') {
        include('views/404.php');
    } elseif ($_GET['action'] == 'patient/option') {
        $rendez_vous->suppRendez($_POST['delete']);
        header("location:/projet/patient");
} elseif ($_GET['action'] == 'admin/paiement/reste') { 
    $user->reste($_POST['id'],$_POST['paiement'.$_POST['id']]);
    header("location:/projet/admin/paiement");
     }
     elseif ($_GET['action'] == 'admin/option') {
        if (isset($_POST['delete'])) {
            $rendez_vous->suppRendez($_POST['delete']);
        } elseif (isset($_POST['accept'])) {
            $rendez_vous->accepterRendez($_POST['accept']);
        }
        header("location:/projet/admin/rendez-vous");
    } elseif ($_GET['action'] == 'admin/rendez-vous') {
        testSession("admin");
        include('views/admin-rendez.php');
    } elseif ($_GET['action'] == 'admin/paiement') {
        testSession("admin");
        include('views/admin-prix.php');
    } elseif ($_GET['action'] == 'admin/historique') {
        testSession("admin");
        include('views/admin-historique.php');
    } elseif ($_GET['action'] == 'admin/rapport') {
        testSession("admin");
        include('views/admin-rapport.php');
    } elseif ($_GET['action'] == 'admin/delCompte') {
        $user->deluser($_POST['delete']);
        header("location:/projet/admin/comptes");
    } elseif ($_GET['action'] == 'admin/ajouteCompte') {
        $user->adduser($_POST['nom'], $_POST['prenom'], $_POST['mobile'], $_POST['email'], $_POST['mtp'], $_POST['adresse'], $_FILES['photo']['tmp_name'], $_FILES['photo']['name'], $_POST['type'], $_POST['cin']);
        header("location:/projet/admin/comptes");
    }
    elseif ($_GET['action'] == 'admin/modifierCompte') {
        $user->updateUser($_POST['id'],$_POST['nom'], $_POST['prenom'], $_POST['mobile'], $_POST['cin'], $_POST['email'], $_POST['adress'],$_FILES['photo']['name']);
        header("location:/projet/admin/comptes");
    }
    elseif ($_GET['action'] == 'admin/comptes') {
        testSession("admin");
        include('views/admin-compte.php');
    } elseif ($_GET['action'] == 'admin') {
        header('Location:admin/rendez-vous');
    } elseif ($_GET['action'] == 'test') {
        header('Content-type:Application/json');
        print json_encode($allRendezVous);
    } else {
        header('Location:error404');
    }
} else {
    header('Location:home');
}
