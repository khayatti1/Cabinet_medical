<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
  <title>Cabinet Médical</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="views/css/style.css">
  <style>
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

<body>
  <section class="login-block">
    <div class="container-fluid">
      <div class="row">
        <div class="auth-box card">
          <div class="text-center">
          </div>
          <div class="card-block">
            <div class="row m-b-20">
              <div class="col-md-4" style="margin-left: 0px;">
                <a href="index.php" class="btn btn-outline-primary p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                  </svg>
                </a>
              </div>
              <div class="col-md-7" style="margin-left:14px;">
                <h5 class="txt-primary">S'Inscrire</h5>
              </div>
              <pre></pre>
              <hr class=" mt-1 mb-2 mx-auto" style="width:80%">
            </div>
            <form method="POST" action="ins" enctype="multipart/form-data">
              <div class="form-group form-primary">
                <span class="form-bar"></span>
              </div>
              <div class="row">
                <div class="form-group form-primary col-6">
                  <input type="text" name="prenom" class="form-control" autocomplete="off" required="" placeholder="prenom">
                  <span class="form-bar"></span>
                </div>
                <div class="form-group form-primary col-6">
                  <input type="text" name="nom" class="form-control" autocomplete="off" required="" placeholder="Nom">
                  <span class="form-bar"></span>
                </div>
              </div>
              <div class="form-group form-primary">
                <input type="email" name="email" class="form-control" autocomplete="off" required="" placeholder="Email">
                <span class="form-bar"></span>
              </div>
              <div class="row">
                <div class="form-group form-primary col-8">
                  <input type="telephon" name="mobile" class="form-control" autocomplete="off" required="" pattern=".[0-9]{9,9}" placeholder="Telephone">
                  <span class="form-bar"></span>
                </div>
                <div class="form-group form-primary col-4">
                  <input type="text" name="CIN" class="form-control" autocomplete="off" placeholder="CIN">
                  <span class="form-bar"></span>
                </div>
              </div>
              <div class="form-group form-primary">
                <textarea type="text" name="adresse" class="form-control" autocomplete="off" required="" placeholder="Adresse"></textarea>
                <span class="form-bar"></span>
              </div>
              <div class="form-group form-primary col-12">
                <input type="file" name="photo" class="form-control" autocomplete="off" accept="image/*" placeholder="photo">
                <span class="form-bar"></span>
              </div>
              <div class="form-group form-primary">
                <input type="password" name="mtp" class="form-control" autocomplete="off" required="" pattern=".{8,}" placeholder="mot de passe" id="mp">
                <span class="form-bar"></span>
              </div>
              <div class="form-group form-primary">
                <input type="password" name="mtp" class="form-control" autocomplete="off" required="" placeholder="confirmer le mot de passe" id="mt">
                <span class="form-bar"></span>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick="myFunction()">
                <label class="form-check-label" for="flexSwitchCheckDefault">
                  Afficher votre mot de passe</label>
              </div>
              <input type="hidden" value="patient" name="type">
              <div class="row m-t-20 ">
                <div class="col-md-12 d-flex justify-content-center ">
                  <button type="submit" name="login" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-10 conbutton">Inscription</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

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