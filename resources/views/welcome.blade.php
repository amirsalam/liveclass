<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Document</title>
</head>
<body>
  @if (Route::has('login'))
  
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <span class="navbar-brand" id="logo-margin" href="#">LOGO</span>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
              
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  
                    <li class="nav-item active">
                      
                        <a class="nav-link" href="{{ url('/home') }}">ACCUEIL</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="#">COMMENT CA MARCHE  ?</a>
                    </li>
                    
                </ul>
                @auth
                <div>
                  @else
                    <a type="button" class="btn btn-light border-btn" href="{{ route('login') }}">SE CONNECTER</a>
                    @if (Route::has('register'))
                    <a type="button"  class="btn btn-light border-btn" href="{{ route('register') }}">S'INSCRIRE</a>
                    @endif
                    @endauth
                    
                </div>
                @endif
            </div>
        </nav>
        <section>
            <h1 id="live-class">Live<br>Classes</h1>
            <p id="para-class">Cours de soutien scolaire 100% marocain Sans déplacement<br> ni frais supplémentaire Accéder depuis n'importe où vous êtes<br> Paiement sécurisé et sans engagementApprendre par des<br> professeurs expérimentés</p>
            <img src="imag/class.png"  alt="class"  id="img-class">
            <div id="marging">
              <a type="button" class="btn btn-light border-btn" href="{{ route('login') }}">SE CONNECTER</a>
              <a type="button"  class="btn btn-light border-btn" href="{{ route('register') }}">S'INSCRIRE</a>
            </div>
        </section>
        <section>
          <div class="container container-etude">
            <h2 class="text-center padding-class">Pour vos études à distance,<br>Nous rendons les conditions meilleures.</h2>
            <p class="text-center padding-class">Poursuivre ses études à distance et de manière interactive, est aujourd'hui<br>possible avec laclasse.ma. Simple, efficace et original, ce site est conçu<br>pour vous, étudiants et enseignants, afin de vous accompagner<br>où que vous soyez et quand vous le souhaitez.</p>
                <div class="text-center padding-class">
                    <button type="button"  class="btn btn-light border-btn">LIRE LA SUITE</button>
    
                </div>
                </div>
        </section>
        <section>
            <h3 class="text-center padding-comment mt-4 mb-2 ">Comment ça marche ?</h3>
            <div class="row">
              <div class="col-xs-1-12">
                <div class="card card-description" id="caree-compte">
                  <div class="card-body">
                    <span><i class="fa fa-cog" aria-hidden="true"></i></span>
                    <h3 class="card-title">Créer un compte
                    </h3>
                    <p class="card-text">Première visite ? Créez votre<br>compte. en un clic .
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xs-1-12">
                <div class="card card-description container-etude" id="caree-class">
                  
                  <div class="card-body white">
                    <span><i class="fa fa-users" aria-hidden="true"></i></span>
                    <h3 class="card-title">Créer une classe
                    </h3>
                    <p class="card-text">Invitez vos étudiants et regroupez-<br>les dans des groupes séparés<br>comme dans une simple classe
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xs-1-12">
                <div class="card card-description" id="caree-cours">
                  <div class="card-body">
                    <span><i class="fa fa-book" aria-hidden="true"></i></span>
                    <h3 class="card-title">Programmer des<br>cours
                    </h3>
                    <p class="card-text">Organisez-vous et anticipez<br>vos cours.
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <section>
            

    <!-- Card -->
    <div class="card mb-4">
        <div class="jumbotron">
          <div class="container">
          <div class="row text-center card-icon white mx-5">
            <span></span><i class="fa fa-video-camera" aria-hidden="true"></i></span>
            <h3 class="text-center">Réunions</h3>
            <p class="lead text-center">
              Réunions en ligne, formations et<br> assistance technique</p>
          </div>
          <div class="row text-center card-icon white mx-5">
            <span><i class="fa fa-gg-circle" aria-hidden="true"></i></span>
            <h3 class="text-center">Webinaire vidéo</h3>
            <p class="lead text-center">Grands événements et<br> assemblées Voir la video / en <br>savoir plus</p>
          </div>
          <div class="row text-center card-icon white mx-5">
            <span><i class="fa fa-microchip" aria-hidden="true"></i></span>
            <h3 class="text-center">Salles de conférence</h3>
            <p class="lead text-center">Salles de conférence permettant<br> la collaboration intégrée</p>
         </div>
        </div>
        </div>
        </div>
    
        </section>
        <footer>
          <span>équipe Devosoft</span>
        </footer>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>