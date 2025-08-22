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
        <div class="col-sm-12">
          <div class="auth-box card">
            <div class="text-center">
              <img src="views/image/oo.gif" id="log">
            </div>
            <div class="card-block">
              <div class="row m-b-20">
                <div class="col-md-12">
                  <h5 class="text-center txt-primary">S'identifier</h5>
                </div>

              </div>
              <form method="POST" action="valide">
                <div class="form-group form-primary">
                  <span class="form-bar"></span>
                </div>
                <div class="form-group form-primary">
                  <input type="email" name="email" class="form-control" required="" value="<?= $oldEmail ?>" autocomplete="off" placeholder="Email">
                  <span class="form-bar"></span>
                </div>
                <div class="form-group form-primary">
                  <input type="password" name="mtp" class="form-control" required="" autocomplete="off" placeholder="Password" id="mp">
                  <span class="form-bar"></span>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick="myFunction()">
                  <label class="form-check-label" for="flexSwitchCheckDefault">
                    Afficher votre mot de passe</label>
                </div>
                <div class="row m-t-30 ">
                  <div class="col-md-12 d-flex justify-content-center ">
                    <button type="submit" name="login" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-10 conbutton">Connexion</button>
                  </div>
                </div>
                <div class="row m-t-10 text-left">
                  <div class="col-16">
                  <div class="col-md-12 d-flex justify-content-center ">
                    <a href="inscription" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-10 conbutton">Inscription</a>
                  </div>
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
    function myFunction() {
      var x = document.getElementById("mp");
      if (x.type === "password") {
        x.type = "text";
        document.getElementById("mp").focus();
      } else {
        x.type = "password";
        document.getElementById("mp").focus();
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>