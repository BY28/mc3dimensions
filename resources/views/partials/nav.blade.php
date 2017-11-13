<!--  <div class="navbar-fixed">
    <nav class="z-depth-0">
      <div class="nav-wrapper container">
        <a href="{{ URL::to('/') }}" class="brand-logo"><img src="http://www.mc3antilles.com/images/mc3_logo/55x55.png" style="padding: 8%"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="dropdown-button" href="#!" data-activates="services-dropdown">Services<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="domaines-dropdown">Domaines<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="{{ URL::to('blog') }}">Blog</a></li>
          <li><a href="{{ URL::to('about') }}">A propos</a></li>
          <li><a href="{{ URL::to('contact') }}">Contact</a></li>
          <li><a href="{{ URL::to('support') }}">Support</a></li>
          <li><a href="#">Connexion</a></li>
          <li><a href="#">Inscription</a></li>
        </ul>
        <ul id="services-dropdown" class="dropdown-content">
          <li><a href="{{ URL::to('print') }}">Impression3D</a></li>
          <li><a href="{{ URL::to('formations') }}">Formations</a></li>
          <li><a href="{{ URL::to('products') }}">Boutique</a></li>
        </ul>
        <ul id="domaines-dropdown" class="dropdown-content">
          <li><a href="{{ URL::to('domaines/dentaire') }}">Dentaire</a></li>
          <li><a href="{{ URL::to('domaines/joaillerie') }}">Bijouterie</a></li>
          <li><a href="{{ URL::to('domaines/prototypage') }}">Prototypage</a></li>
        </ul>
         <ul id="services-dropdown-s" class="dropdown-content">
          <li><a href="{{ URL::to('print') }}">Impression3D</a></li>
          <li><a href="{{ URL::to('formations') }}">Formations</a></li>
          <li><a href="{{ URL::to('products') }}">Boutique</a></li>
        </ul>
        <ul id="domaines-dropdown-s" class="dropdown-content">
          <li><a href="{{ URL::to('domaines/dentaire') }}">Dentaire</a></li>
          <li><a href="{{ URL::to('domaines/joaillerie') }}">Bijouterie</a></li>
          <li><a href="{{ URL::to('domaines/prototypage') }}">Prototypage</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a class="dropdown-button" href="#!" data-activates="services-dropdown-s">Services<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="domaines-dropdown-s">Domaines<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="{{ URL::to('blog') }}">Blog</a></li>
          <li><a href="{{ URL::to('about') }}">A propos</a></li>
          <li><a href="{{ URL::to('contact') }}">Contact</a></li>
          <li><a href="{{ URL::to('support') }}">Support</a></li>
          <li><a href="#">Connexion</a></li>
          <li><a href="#">Inscription</a></li>
        </ul>
      </div>

    </nav>
</div> -->

<div class="navbar-upper">
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <div class="row">
        <div class="col s12">
          <ul id="nav-mobile" class="right">
            <li><a href="#" class="transparent" style="color: #cd201f"><i style="color: #cd201f" class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a href="#" class="transparent" style="color: #d34836"><i style="color: #d34836" class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="#" class="transparent" style="color: #0077B5"><i style="color: #0077B5" class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#" class="transparent" style="color: #3b5999"><i style="color: #3b5999" class="fa fa-facebook" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>


<div class="navbar-lower">
  <nav class="z-depth-0 nav-extended">
    <div class="nav-wrapper container">
      <a href="{{ URL::to('/') }}" class="brand-logo"><img src="{{ URL::to('src/img/logos/logo.png') }}" style="padding: 8%"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="dropdown-button" href="#!" data-activates="services-dropdown">Services<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="domaines-dropdown">Domaines<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="{{ URL::to('blog') }}">Blog</a></li>
          <li><a href="{{ URL::to('about') }}">A propos</a></li>
          <li><a href="{{ URL::to('contact') }}">Contact</a></li>
          <li><a href="{{ URL::to('support') }}">Support</a></li>
          <li><a href="#">Connexion</a></li>
          <li><a href="#">Inscription</a></li>
        </ul>
        <ul id="services-dropdown" class="dropdown-content">
          <li><a href="{{ URL::to('objects') }}">Impression3D</a></li>
          <li><a href="{{ URL::to('formations') }}">Formations</a></li>
          <li><a href="{{ URL::to('products') }}">Boutique</a></li>
        </ul>
        <ul id="domaines-dropdown" class="dropdown-content">
          <li><a href="{{ URL::to('domaines/dentaire') }}">Dentaire</a></li>
          <li><a href="{{ URL::to('domaines/joaillerie') }}">Bijouterie</a></li>
          <li><a href="{{ URL::to('domaines/prototypage') }}">Prototypage</a></li>
        </ul>
         <ul id="services-dropdown-s" class="dropdown-content">
          <li><a href="{{ URL::to('objects') }}">Impression3D</a></li>
          <li><a href="{{ URL::to('formations') }}">Formations</a></li>
          <li><a href="{{ URL::to('products') }}">Boutique</a></li>
        </ul>
        <ul id="domaines-dropdown-s" class="dropdown-content">
          <li><a href="{{ URL::to('domaines/dentaire') }}">Dentaire</a></li>
          <li><a href="{{ URL::to('domaines/joaillerie') }}">Bijouterie</a></li>
          <li><a href="{{ URL::to('domaines/prototypage') }}">Prototypage</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a class="dropdown-button" href="#!" data-activates="services-dropdown-s">Services<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="domaines-dropdown-s">Domaines<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="{{ URL::to('blog') }}">Blog</a></li>
          <li><a href="{{ URL::to('about') }}">A propos</a></li>
          <li><a href="{{ URL::to('contact') }}">Contact</a></li>
          <li><a href="{{ URL::to('support') }}">Support</a></li>
          <li><a href="#">Connexion</a></li>
          <li><a href="#">Inscription</a></li>
        </ul>
   </div>
  </nav>
</div>
