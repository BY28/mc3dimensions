  <div class="navbar-fixed">
    <nav class="z-depth-0">
      <div class="nav-wrapper container">
        <a href="{{ URL::to('/') }}" class="brand-logo"><img src="http://www.mc3antilles.com/images/mc3_logo/55x55.png" style="padding: 8%"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="dropdown-button" href="#!" data-activates="services-dropdown">Services<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="{{ URL::to('blog') }}">Blog</a></li>
          <li><a href="{{ URL::to('about') }}">A propos</a></li>
          <li><a href="{{ URL::to('contact') }}">Contact</a></li>
          <li><a href="{{ URL::to('contact') }}">Contact</a></li>
          <li><a href="#">Connexion</a></li>
          <li><a href="#">Inscription</a></li>
        </ul>
        <ul id="services-dropdown" class="dropdown-content">
          <li><a href="{{ URL::to('formations') }}">Formations</a></li>
          <li><a href="{{ URL::to('print') }}">Impression3D</a></li>
          <li><a href="{{ URL::to('products') }}">Produits</a></li>
          <li><a href="{{ URL::to('domaines') }}">Domaines</a></li>
        </ul>
         <ul id="services-dropdown-s" class="dropdown-content">
          <li><a href="{{ URL::to('formations') }}">Formations</a></li>
          <li><a href="{{ URL::to('print') }}">Impression3D</a></li>
          <li><a href="{{ URL::to('products') }}">Produits</a></li>
          <li><a href="{{ URL::to('domaines') }}">Domaines</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a class="dropdown-button" href="#!" data-activates="services-dropdown-s">Services<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="{{ URL::to('blog') }}">Blog</a></li>
          <li><a href="{{ URL::to('about') }}">A propos</a></li>
          <li><a href="{{ URL::to('contact') }}">Contact</a></li>
          <li><a href="#">Connexion</a></li>
          <li><a href="#">Inscription</a></li>
        </ul>
      </div>

    </nav>
</div>