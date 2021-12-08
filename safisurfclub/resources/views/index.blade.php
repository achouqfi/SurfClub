<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Safi Surf Club</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:surfsafi@gmail.com">surfsafi@gmail.com</a>
        <i class="icofont-phone"></i> <a href="https://wa.me/0671815570">0671815570</a> 
        <i class="icofont-google-map"></i> Plage de Safi Maroc 
      </div>
      <div class="social-links">
        <a href="" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/safisurfclub/" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="/"> <img src="./assets/img/logo.png" alt="" width="50px" >Safi Surf Club</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Accueil</a></li>
          <li><a href="#about">À propos</a></li>
          <li><a href="#services">Packages</a></li>
          <li><a href="#departments">Services</a></li>
          <li><a href="#testimonials">Témoignages</a></li>
          <li><a href="#gallery">Galerie</a></li>
          <li><a href="#contact">Contact</a></li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach (Config::get('languages') as $lang => $language)
                  @if ($lang != App::getLocale())
                          <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                  @endif
              @endforeach
            </div>
          </li> --}}
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#appointment" class="appointment-btn scrollto">Reserve maintenant</a>


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Bienvenue au Safi surf Club</h1>
      <h2>Une pure joie de Surfer à Safi</h2> 
      <a href="#about" class="btn-get-started scrollto">Voir plus</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Safi surf club?</h3>
              <p>
                Safi Surf Club vous accueille toute l’année dans un lieu de vie chaleureux sur la plage de Safi, 
                un vrai Club Sportif et Éducatif où l’on se retrouve pour partager les vraies valeurs du Surf et la joie des plaisirs de la mer… 
                 </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-beach-bed "></i>
                    <h4 class="mt-3">                    
                      Nos Cours & Stages 
                    </h4>
                    <p>Notre variété de formules vous permet de surfer au mieux à la plage de Safi, en fonction de vos impératifs et de découvrir le surf à votre rythme.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-team"></i>
                    <h4 class="mt-3">
                      NOS OBJECTIFS
                    </h4>
                    <p> Notre école de surf  vous accueille pour découvrir ou perfectionner votre niveau de Surf, Body-Board et Stand Up Paddle-board
                      </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-sun-rise"></i>
                  </i>
                    <h4 class="mt-3">
                      NOS ACTIVITÉS
                    </h4>
                    <p>Safi Surf Club vous propose des cours de Surf sur la plage de Safi mondialement réputée pour la qualité de ses vagues .</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>À propos Safi surf club</h3>
            <p>
              Notre équipe vous propose les Cours et stages de surf pour tous âges et en groupe de niveaux. surfez au meilleurs moment de la journée avec notre équipe de moniteurs passionnés
              Notre variété de formules vous permet de surfer au mieux à la plage de Safi, en fonction de vos impératifs et de découvrir le surf à votre rythme. <br> <br>

              NOUS PROPOSONS DES COURS COLLECTIFS OU PARICULIERS, POUR DÉBUTANTS OU CONFIRMÉS, POUR ENFANTS OU ADULTES, EN GROUPE OU CADRES ET EMPLOYÉS D’ENTREPRISE… <br> <br>

              L’équipe du Safi Surf Club
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <img src="./assets/img/logo FRMSurf_2.png" alt="" width="180px" >
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <img src="./assets/img/logo-riad.png" alt="" width="105px" >
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <img src="./assets/img/surf-logo.jpg" alt="" width="70px" >
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <img src="./assets/img/gotchaLogo.jpg" alt="" width="100px" >
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Packages</h2>
          <p>Safi Surf Club vous propose des cours de Surf sur la plage de Safi mondialement réputée pour la qualité de ses vagues. </p>
        </div>
          <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3 ">
              @foreach ($Packages as $package)
                <div class="col">
                    <div class="card h-140 shadow-sm img-card mb-5"> <img src="{{ asset($package->principalPhoto) }}" class="card-img-top"  alt="img">
                        <div class="label-top shadow-sm">{{ $package->titre }}</div>
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge ">{{ $package->price }}</span> </div>
                            <p class="card-title">{!! $package->description !!}</p>
                            <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span> </div>
                        </div>
                    </div>
                </div>   
                @endforeach 
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Réservez votre session de surf</h2>
          <p>Réservez maintenant votre créneau surf sur Safi. Précisez le jour dans les commentaires, nous vous rappellerons pour vous confirmer la réservation et pour vous donner un horaire précis. </p>
        </div>

        <form action="{{ url('reservation') }}" method="POST" enctype="multipart/form-data" role="form" class="formInsert">
          @csrf
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email" required>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Votre Téléphone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="date" name="date" id="datePickerId" class="form-control "  >
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="package_id" id="department" class="form-control">
                <option value="" required>Sélectionnez le forfait</option>
                    @foreach ($Packages as $package)
                      <option value="{{ $package->titre }}">{{ $package->titre }}</option>
                    @endforeach 
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="number" name="Nperson" placeholder="Nombre de personne" class="form-control"  required>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" required>Message (Optional)</textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
          </div>
          <div class="text-center"><button type="submit">Reserve maintenant</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Autres services</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae animi, nesciunt fugiat sint possimus deserunt! Culpa magnam quos voluptas facere, neque unde eos totam asperiores iure dolores cum officiis voluptatibus!</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Location du materiel de Surf</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Ecole de Surf</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Café</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Yoga & Fitness</a>
              </li>
            </ul>
          </div>
          
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Location du materiel de Surf</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/shop.jpeg" alt=""  class="img-fluid mt-5">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Ecole de Surf</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/couverture.jpeg" alt="" class="img-fluid mt-5">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Café</h3>
                    <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/coffe.jpeg" alt="" class="img-fluid mt-5">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Yoga & Fitness</h3>
                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/yoga.jpg" alt="" class="img-fluid mt-3">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Team Section ======= -->
    <section id="faq" class="faq section-bg">
   <div class="container">

        <div class="section-title">
          <h2>Événement</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut expedita excepturi dolorem, aspernatur nesciunt totam consequuntur eaque quaerat atque optio, minus, dolores vero soluta quam vel nisi fugiat. Illum, alias!</p>
        </div>

        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
          <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3 ">
            @foreach ($Events as $Event)
              <div class="col">
                  <div class="card h-140 shadow-sm img-card mb-5"> <img src="{{ asset($Event->path) }}" class="card-img-top"  alt="img">
                      <div class="label-top shadow-sm">{{ $Event->title}}</div>
                      <div class="card-body">
                          <div class="clearfix mb-3"> <span class="float-start badge ">{{ $Event->date}}</span> </div>
                          <p class="card-title">{{ $Event->description}}</p>
                          <a href="mailto:surfsafi@gmail.com" class="my-card-btn">Plus d'information</a>
                        </div>
                  </div>
              </div>   
              @endforeach 
          </div>
        </div>
 
        
      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials " >
      <div class="container">

        <div class="section-title">
          <h2>Terification</h2>
        </div>
        <div class="container gallery-container">
          <div class="tz-gallery">
              <div class="row">
                  <div class="col-sm-12 col-md-6">
                      <a class="lightbox" href="./assets/img/tarif1.jpeg">
                          <img src="./assets/img/tarif1.jpeg" alt="Bridge">
                      </a>
                  </div>
                  <div class="col-sm-6 col-md-6">
                      <a class="lightbox" href="./assets/img/tarif2.jpeg">
                          <img src="./assets/img/tarif2.jpeg" alt="Park">
                      </a>
                  </div>
              </div>

          </div>
      
      </div>
        <div class="owl-carousel testimonials-carousel">
        </div>
      </div>

      
    </section><!-- End Testimonials Section -->
   

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Galerie</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
          @foreach ($Gallery as $photo)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="{{ asset($photo->path) }}" alt="" width="400px" height="300px">
              </a>
            </div>
          </div>
          @endforeach 
        </div>
      </div>

    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3371.8490837076224!2d-9.252063784854842!3d32.31590798111379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac21115bd78fbb%3A0x465ca28f5b049b0a!2sRte%20de%20Safi%2C%20Safi!5e0!3m2!1sfr!2sma!4v1632003294003!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Plage de Safi Maroc</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>surfsafi@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Téléphone:</h4>
                <p>0671815570</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ url('contact') }}" method="post" role="form" class="formInsert" enctype="multipart/form-data">
              @csrf

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer le message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Safi surf Club</h3>
            <p>
              Pour un abonnement annuel ou mensuel, il faut remplir fiche d’inscription disponible au Club, 
              Accompagnée d’une autorisation parentale pour les mineurs, et un certificat médical pour l’aptitude des sport nautiques… <br>

              Plage de Safi Maroc <br>
              <strong>Téléphone:</strong>0671815570<br>
              <strong>Email:</strong>surfsafi@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-5 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li class="active"><a href="/">Accueil</a></li>
              <li><a href="#about">À propos    </a></li>
              <li><a href="#services">Packages</a></li>
              <li><a href="#departments">Services</a></li>
              <li><a href="#testimonials">Témoignages</a></li>
              <li><a href="#gallery">Galerie</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Rejoignez notre newsletter</h4>
            <form action="{{ url('newsleter') }}" method="post" >
              @csrf
              <input type="email" name="email">
              <input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <script>
      datePickerId.min = new Date().toISOString().split("T")[0];
  </script>

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>