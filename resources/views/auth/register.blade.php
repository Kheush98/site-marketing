<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Inscription
          </h4>
          <form class="form-box px-3" action="{{route('newUser')}}" method="POST">
              @if(Session::get('fail'))
                <div class="alert alert-danger">
                  {{ Session::get('fail') }}
                </div>
              @endif
              @csrf
              <div class="form-input">
                  <span><i class="fa fa-envelope-o"></i></span>
                  <input type="email" name="email" placeholder="Email" tabindex="10" required>
                  <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-input">
                  <span><i class="fa fa-user"></i></span>
                  <input type="text" name="username" placeholder="Nom d'utilisateur" tabindex="10" required>
                  <span class="text-danger">@error('username'){{ $message }} @enderror</span>
              </div>
              <div class="form-input">
                  <span><i class="fa fa-key"></i></span>
                  <input type="password" name="password" placeholder="Mot de passe" required>
                  <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>

              {{-- <div class="mb-3">
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="cb1" name="">
                      <label class="custom-control-label" for="cb1">Se souvenir de moi</label>
                  </div>
              </div> --}}

              <div class="mb-3">
                  <button type="submit" class="btn btn-block text-uppercase">
                      Créer un compte
                  </button>
              </div>

              {{-- <div class="text-right">
                  <a href="#" class="forget-link">
                    Mot de passe oublié?
                  </a>
              </div> --}}

              <div class="text-center mb-3">
                  ou s'inscrire avec
              </div>

              <div class="row mb-3">
                  <div class="col-4">
                      <a href="#" class="btn btn-block btn-social btn-facebook">
                        facebook
                      </a>
                  </div>

                  <div class="col-4">
                      <a href="#" class="btn btn-block btn-social btn-google">
                        google
                      </a>
                  </div>

                  <div class="col-4">
                      <a href="#" class="btn btn-block btn-social btn-twitter">
                        twitter
                      </a>
                  </div>
              </div>

              <hr class="my-4">

              <div class="text-center mb-2">
                  Vous avez dejà compte?
                  <a href="{{route('auth.login')}}" class="register-link">
                      Connectez-vous ici
                  </a>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>