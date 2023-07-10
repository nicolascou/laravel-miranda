<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Miranda</title>
  <link rel='stylesheet' href="{{ asset('css/styles.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
  />

</head>
<body>
  <header class="header">
    <div class="header__mobile-flex">
      <button class="header__hamburger btn-icon" id="hamburgerBtn">
        <img src="{{ asset('img/icons/hamburger') }}.svg" alt="hamburger">
      </button> 
      <button class="header__hamburger d-none btn-icon" id="closeMenu">
        <img src="{{ asset('img/icons/cross') }}.svg" alt="cross">
      </button>
      <div class="header__main">
        <div class="header__main__flex">
          <a href="/" class="header__main__anchor">
            <div class="header__main__h">H</div>
            <div class="header__main__title">
              <p class="header__main__title__hotel">HOTEL</p>
              <p class="header__main__title__miranda">MIRANDA</p>
            </div>
          </a>
        </div>
      </div>
      <div class="header__btns">
        <button class="header__btns__icon btn-icon">
          <img src="{{ asset('img/icons/user') }}.svg" alt="user">           
        </button>
        <button class="header__btns__icon btn-icon">
          <img src="{{ asset('img/icons/magnifying') }}-glass.svg" alt="magnifying-glass">
        </button>
      </div>
    </div>
    <nav class="header__navbar d-none" id="navbar">
      <ul>
        <li><a class="header__navbar__item" href="/about">About us</a></li>
        <li><a class="header__navbar__item" href="/rooms">Rooms</a></li>
        <li><a class="header__navbar__item" href="/offers">Offers</a></li>
        <li><a class="header__navbar__item" href="/contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  @yield('content')

  <div class="footer-wrapper">
    <footer class="footer">
      <div class="footer__first-col">
        <div class="footer__main">
          <div class="footer__main__h">H</div>
          <div class="footer__main__title">
            <p class="footer__main__title__hotel">HOTEL</p>
            <p class="footer__main__title__miranda">MIRANDA</p>
          </div>
        </div>
        <div class="footer__text">
          Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
        </div>
        
        <div class="footer__icon-bar">
          <a class="footer__icon-bar__icon" href="">
            <img src="{{ asset('img/icons/facebook.svg') }}" alt="">
          </a>
          <a class="footer__icon-bar__icon" href="">
            <img src="{{ asset('img/icons/twitter.svg') }}" alt="">
          </a>
          <a class="footer__icon-bar__icon" href="">
            <img src="{{ asset('img/icons/behance.svg') }}" alt="">
          </a>
          <a class="footer__icon-bar__icon" href="">
            <img src="{{ asset('img/icons/linkedin.svg') }}" alt="">
          </a>
          <a class="footer__icon-bar__icon" href="">
            <img src="{{ asset('img/icons/youtube.svg') }}" alt="">
          </a>
        </div>
      </div>

      <div class="footer__services">
        <h4 class="footer__services__title">Services.</h4>
        <div class="footer__services__options">
          <div class="footer__services__options__box">
            <p class="footer__services__options__title">+ Restaurant & Bar</p>
          </div>
          <div class="footer__services__options__box">
            <p class="footer__services__options__title">+ Gaming Zone</p>
          </div>
          <div class="footer__services__options__box">
            <p class="footer__services__options__title">+ Swimming Pool</p>
          </div>
          <div class="footer__services__options__box">
            <p class="footer__services__options__title">+ Marrige Party</p>
          </div>
          <div class="footer__services__options__box">
            <p class="footer__services__options__title">+ Wellness & Spa</p>
          </div>
          <div class="footer__services__options__box">
            <p class="footer__services__options__title">+ Party Planning</p>
          </div>
          <div class="footer__services__options__box">
            <p class="footer__services__options__title">+ Restaurant</p>
          </div>
          <div class="footer__services__options__box">
            <p class="footer__services__options__title">+ Tour Consultancy</p>
          </div>
          <div class="footer__services__options__box">
            <p class="footer__services__options__title">+ Conference Room</p>
          </div>
          <div class="footer__services__options__box">
            <p class="footer__services__options__title">+ Coctail Party House</p>
          </div>
        </div>
      </div>

      <div class="footer__contact">
        <h4 class="footer__contact__title">Contact Us.</h4>
        <div class="footer__contact__box">
          <img src="{{ asset('img/icons/phone.svg') }}" alt="">
          <div class="footer__contact__box__content">
            <h5 class="footer__contact__box__content__title">Phone Number</h5>
            <p class="footer__contact__box__content__number">+987 876 765 76 577</p>
          </div>
        </div>
        <div class="footer__contact__box">
          <img src="{{ asset('img/icons/mail.svg') }}" alt="">
          <div class="footer__contact__box__content">
            <h5 class="footer__contact__box__content__title">Phone Number</h5>
            <p class="footer__contact__box__content__number">+987 876 765 76 577</p>
          </div>
        </div>
        <div class="footer__contact__box">
          <img src="{{ asset('img/icons/location-2.svg') }}" alt="">
          <div class="footer__contact__box__content">
            <h5 class="footer__contact__box__content__title">Phone Number</h5>
            <p class="footer__contact__box__content__number">+987 876 765 76 577</p>
          </div>
        </div>
    </div>
    </footer>
  </div>
  <div class="footer__bottom">
    <p class="footer__bottom__text">Copyright By@Example - 2020</p>
    <div>
      <p class="footer__bottom__text">Terms of use | Privacy Environmental Policy</p>
    </div>
  </div>

  <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/swiper.js') }}" type="module"></script>
  @yield('scripts')
</body>
</html>