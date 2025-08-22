<?php
@session_start();
require("models/model.php");
require("session.php");
class Users
{
   public function __constract()
   {
   }

   public function start()
   {
      require('views/login.php');
   }
   public function connect($email, $mtp)
   {
      $mtp = md5($mtp);
      $res = R::find('users', "email=? AND mtp=?", [$email, $mtp]);
      if (count($res) == 0) {
         header('Location:error');
      } else {
         $info = R::findOne("users", "email=?", [$email]);
         $_SESSION['email'] = $info['email'];
         $_SESSION['nom'] = $info['nom'];
         $_SESSION['mobile'] = $info['mobile'];
         $_SESSION['prenom'] = $info['prenom'];
         $_SESSION['adresse'] = $info['adress'];
         $_SESSION['id'] = $info['id'];
         $_SESSION['photo'] = $info['photo'];
         $_SESSION['CIN'] = $info['CIN'];
         $type = type($email);
         $_SESSION['type'] = $type;
         if ($type == 'doctor') {
            header('Location:doctor');
         } elseif ($type == 'patient') {
            header('Location:patient');
         } elseif ($type == 'admin') {
            header('Location:admin');
         }
      }
   }
   public function alluser()
   {
      return R::getAll("SELECT * FROM users WHERE type <>'admin' ORDER BY nom ");
   }
   public function adduser($nom, $prenom, $mobile, $email, $mtp, $adress, $tmp, $photo, $type, $cin)
   {
      $mtp = md5($mtp);
      $exist = R::find('users', "email=?", [$email]);;
      if (count($exist) !== 0) {
         header('Location:errorins');
      } else {
         $path = 'views/profile/' . $photo;
         move_uploaded_file($tmp, $path);
         $user = R::dispense('users');
         $user->nom = $nom;
         $user->prenom = $prenom;
         $user->mobile = $mobile;
         $user->email = $email;
         $user->mtp = $mtp;
         $user->adress = $adress;
         $user->photo = $photo;
         $user->type = $type;
         $user->cin = $cin;
         $user->datecreation = Date('Y-m-d');
         R::store($user);
         header('Location:login');
      }
   }
   function prixPatient($id)
   {
      return R::getCell("SELECT SUM(prix) FROM rendez JOIN users ON rendez.email=users.email WHERE users.id= '$id' and rendez.etat='fait'");
   }
   function restPatient($id)
   {
      return R::getCell("SELECT payedprice FROM users JOIN rendez ON users.email=rendez.email WHERE users.id= '$id' and rendez.etat='fait'");
   }
   function deluser($id)
   {
      $var = R::findOne('users', 'id = ?', ["$id"]);
      R::trash($var);
   }

   function paiement()
   {
      return R::getAll("SELECT *,photo from rendez r , users s , (select email,sum(prix) from rendez group by email) a where r.email=a.email and r.email=s.email  and r.prix <> 0  group by a.email ;
      ");
   }
   function reste($id, $paiement)
   {
      $var = R::getCell("SELECT payedprice FROM users WHERE id = '$id' ");
      $var1 = ($var) + $paiement;
      $user = R::load('users', $id);
      $user->payedprice = $var1;
      R::store($user);
   }
   public function updateUser($id, $nom, $prenom, $mobile, $CIN, $email, $adress, $photo)
   {
      $usr = R::load('users', $id);
      $usr->nom = $nom;
      $usr->prenom = $prenom;
      $usr->mobile = $mobile;
      $usr->CIN = $CIN;
      $usr->email = $email;
      $usr->adress = $adress;
      $usr->photo = $photo;
      R::store($usr);
   }

   public function changePassword($email, $id, $password, $newPasword)
   {
      $exist = exist($email, $password);
      if ($exist == true) {
         $user = R::load('users', $id);
         $user->mtp = md5($newPasword);
         R::store($user);
      } else {
         header("Location:errorPassword");
      }
   }
}

class Rendez_vous
{
   function addReservation($prenom, $nom, $email, $mobile, $CIN, $drv, $trv, $age, $sang, $sexe)
   {
      $rv = R::dispense('rendez');
      $rv->nom_complet = $prenom . ' ' . $nom;
      $rv->email = $email;
      $rv->tel = $mobile;
      $rv->CIN = $CIN;
      $rv->date_rendez_vous = $drv;
      $rv->heure_rendez_vous = $trv;
      $rv->age = $age;
      $rv->sang = $sang;
      $rv->sexe = $sexe;
      $rv->date_reservation = Date('Y-m-d');
      $rv->etat = "requested";
      R::store($rv);
   }

   function countReservation($etat, $email)
   {
      return R::count('rendez', "email=? AND etat=?", [$email, $etat]);
   }

   function accRendezVous()
   {
      return R::getAll("SELECT * FROM users join rendez ON users.email=rendez.email WHERE etat='accepted' ORDER BY date_rendez_vous,heure_rendez_vous ");
   }
   function accRapport()
   {
      return R::getAll("SELECT * FROM users join rendez ON users.email=rendez.email WHERE etat='fait'ORDER BY date_rendez_vous,heure_rendez_vous ");
   }
   // =--------------------------------
   function rendezAll()
   {
      return R::getAll("SELECT * FROM users join rendez ON rendez.email=users.email ORDER BY date_rendez_vous,heure_rendez_vous");
   }
   function accRendezVoust()
   {
      $date = Date('Y-m-d');
      return R::getAll("SELECT * FROM users join rendez ON users.email=rendez.email WHERE etat='accepted' and date_rendez_vous = '$date' ORDER BY  date_rendez_vous,heure_rendez_vous");
   }
   function addDescription($id, $description, $prix)
   {
      $rendez = R::load('rendez', $id);
      $rendez->description = $description;
      $rendez->prix = $prix;
      $rendez->etat = 'fait';
      R::store($rendez);
   }



   function dcRendezVous($prenom, $nom, $email, $mobile, $CIN, $drv, $trv, $age, $sang, $sexe, $dernier_rendez)
   {
      $rv = R::dispense('rendez');
      $rv->nom_complet = $prenom . ' ' . $nom;
      $rv->email = $email;
      $rv->tel = $mobile;
      $rv->CIN = $CIN;
      $rv->date_rendez_vous = $drv;
      $rv->time_rendez_vous = $trv;
      $rv->age = $age;
      $rv->sang = $sang;
      $rv->sexe = $sexe;
      $rv->date_reservation = Date('Y-m-d');
      $rv->dernier_rendez_vous = $dernier_rendez;
      $rv->etat = "accepted";
      R::store($rv);
   }
   function suppRendez($id)
   {
      $var = R::findOne('rendez', 'id = ?', ["$id"]);
      R::trash($var);
   }
   function accepterRendez($id)
   {
      $var = R::load('rendez', $id);
      $var->etat = 'accepted';
      R::store($var);
   }

   function mesRendez($email)
   {
      $test =  R::findAll('rendez', 'email = :email', [':email' => $email]);

      return $test;
   }
}
