@extends('layout')


@section('content')
  <div class="hero">
    <p class="hero__subtitle">THE ULTIMATE LUXURY EXPERIENCE</p>
    <h2 class="hero__title">The Perfect Base For You</h2>
    <div class="hero__btns">
      <a class="hero__btns__btn btn btn--yellow" href="">
        TAKE A TOUR
      </a>
      <a class="hero__btns__btn btn btn--transparent" href="">
        LEARN MORE
      </a>
    </div>
  </div>

  <div class="calendar">
    <form class="calendar__form" method="post">
      <div class="calendar__form__flex-desktop">
        <div class="calendar__form__input-box">
          <label for="arrival" class="calendar__form__label">Arrival Date</label>
          <div class="calendar__form__input">
            <img src="{{ asset('img/icons/calendar.svg') }}" width="17" height="17" alt="calendar">
            <input type="date" name="check_in" id="arrival" required>
          </div>
        </div>
        <div class="calendar__form__input-box">
          <label for="ledeparture" class="calendar__form__label">LeDeparture Date</label>
          <div class="calendar__form__input">
            <img src="{{ asset('img/icons/calendar.svg') }}" width="17" height="17" alt="calendar">
            <input type="date" name="check_out" id="ledeparture" required>
          </div>
        </div>
      </div>
      <button type="submit" class="calendar__form__btn btn btn--yellow">CHECK AVAILABILITY</button>
    </form>
  </div>

  <section class="aboutus">
    <div class="aboutus__main">
      <p class="aboutus__main__aboutus">ABOUT US</p>
      <h2 class="aboutus__main__title">Discover Our Underground.</h2>
      <p class="aboutus__main__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="" class="aboutus__main__btn btn btn--yellow">BOOK NOW</a>
    </div>

    <div class="aboutus__first-col">
      <div class="aboutus__first-col__first-col">
        <div class="aboutus__card aboutus__card--first">
          <img class="aboutus__card__img" src="{{ asset('img/unsplash-1.jpg') }}" alt="hotel 1">
          <div class="aboutus__card__content">
            <img class="aboutus__card__content__icon" src="{{ asset('img/icons/corporation.svg') }}" alt="corporation">   
            <img class="aboutus__card__content__icon-copy" width="136" height="100" src="{{ asset('img/icons/corporation.svg') }}" alt="corporation"> 
            <h3 class="aboutus__card__content__title">Strong Team</h3>
            <p class="aboutus__card__content__text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
            </p>
          </div>
        </div>
      </div>
      <div class="aboutus__first-col__second-col">
        <div class="aboutus__card">
          <img class="aboutus__card__img" src="{{ asset('img/luxury-room.jpg') }}" alt="hotel 1">
          <div class="aboutus__card__content aboutus__card__content--dark-bg">  
            <img class="aboutus__card__content__icon" width="57" height="52" src="{{ asset('img/icons/date.svg') }}" alt=""> 
            <h3 class="aboutus__card__content__title">Luxury Room</h3>
            <p class="aboutus__card__content__text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="rooms">
    <p class="rooms__rooms">ROOMS</p>
    <h2 class="rooms__title">Hand Picked Rooms</h2>
    <div class="rooms__rect">
      <img src="{{ asset('img/icons/bed.svg') }}" alt="">
      <img src="{{ asset('img/icons/wifi.svg') }}" alt="">
      <img src="{{ asset('img/icons/car.svg') }}" alt="">
      <img src="{{ asset('img/icons/winter.svg') }}" alt="">
      <img src="{{ asset('img/icons/gym.svg') }}" alt="">
      <img src="{{ asset('img/icons/smoke.svg') }}" alt="">
      <img src="{{ asset('img/icons/cocktail.svg') }}" alt="">
    </div>
    
    <div class="swiper rooms__swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide rooms__swiper__slide-1 rooms__swiper__slide"></div>
        <div class="swiper-slide rooms__swiper__slide-2 rooms__swiper__slide"></div>
        <div class="swiper-slide rooms__swiper__slide-3 rooms__swiper__slide"></div>
        <div class="swiper-slide rooms__swiper__slide-4 rooms__swiper__slide"></div>
      </div>
      <div class="rooms__swiper__nav-btn rooms__swiper__prev-btn">
        <img src="{{ asset('img/icons/arrow-left.svg') }}" alt="">
      </div>
      <div class="rooms__swiper__nav-btn rooms__swiper__next-btn">
        <img src="{{ asset('img/icons/arrow-right.svg') }}" alt="">
      </div>
    </div>
    
    <div class="swiper rooms__swiper-desktop">
      <div class="swiper-wrapper">
        <div class="swiper-slide rooms__swiper__slide-1 rooms__swiper__slide"></div>
        <div class="swiper-slide rooms__swiper__slide-2 rooms__swiper__slide"></div>
        <div class="swiper-slide rooms__swiper__slide-3 rooms__swiper__slide"></div>
        <div class="swiper-slide rooms__swiper__slide-4 rooms__swiper__slide"></div>
      </div>
      <div class="rooms__swiper__nav-btn rooms__swiper__prev-btn">
        <img src="{{ asset('img/icons/arrow-left.svg') }}" alt="">
      </div>
      <div class="rooms__swiper__nav-btn rooms__swiper__next-btn">
        <img src="{{ asset('img/icons/arrow-right.svg') }}" alt="">
      </div>
    </div>

    <div class="rooms__offer">
      <h3 class="rooms__offer__title">Minimal Duplex Room</h3>
      <p class="rooms__offer__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
      <p class="rooms__offer__price">$345<span class="rooms__offer__price__small-txt">/Night</span></p>
    </div>
  
  </section>

  <div class="intro-video-wrapper">
    <section class="intro-video">
      <div class="intro-video__first-col">
        <p class="intro-video__intro">INTRO VIDEO</p>
        <h2 class="intro-video__title">Meet With Our Luxury Place.</h2>
        <p class="intro-video__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
        <video class="intro-video__video" controls>
          <source src="{{ asset('video/hotel-miranda.mp4') }}" type="video/mp4">
        </video>
        <a href="" class="intro-video__btn btn btn--yellow">BOOK NOW</a>
      </div>
    </section>
  </div>

  <section class="facilities">
    <p class="facilities__intro">FACILITIES</p>
    <h2 class="facilities__title">Core Features</h2>

    <div class="swiper facilities__swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide facilities__swiper__slide">
          <p class="facilities__swiper__slide__number">01</p>
          <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/ranking.svg') }}" alt="">
          <h3 class="facilities__swiper__slide__title">Have High Rating</h3>
          <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
        <div class="swiper-slide facilities__swiper__slide">
          <p class="facilities__swiper__slide__number">02</p>
          <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/clock.svg') }}" alt="">
          <h3 class="facilities__swiper__slide__title">Quiet Hours</h3>
          <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
        <div class="swiper-slide facilities__swiper__slide">
          <p class="facilities__swiper__slide__number">03</p>
          <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/location.svg') }}" alt="">
          <h3 class="facilities__swiper__slide__title">Best Locations</h3>
          <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
        <div class="swiper-slide facilities__swiper__slide">
          <p class="facilities__swiper__slide__number">04</p>
          <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/cancellation.svg') }}" alt="">
          <h3 class="facilities__swiper__slide__title">Free Cancellation</h3>
          <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
        <div class="swiper-slide facilities__swiper__slide">
          <p class="facilities__swiper__slide__number">05</p>
          <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/payment.svg') }}" alt="">
          <h3 class="facilities__swiper__slide__title">Payment Options</h3>
          <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
        <div class="swiper-slide facilities__swiper__slide">
          <p class="facilities__swiper__slide__number">06</p>
          <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/offer.svg') }}" alt="">
          <h3 class="facilities__swiper__slide__title">Special Offers</h3>
          <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    
    <img class="facilities__bottom-img" src="{{ asset('img/facilities-img.png') }}" alt="donut">
    
  </section>

  <section class="menu-section">
    <div class="menu-section__head">
      <div>
        <p class="menu-section__intro section-intro">MENU</p>
        <h2 class="menu-section__title section-title">Our Foods Menu</h2>
      </div>
    </div>
    <div class="menu-section__menu">
      <div class="menu-section__menu__first-col">
        <div class="menu-section__menu__option">
          <img class="menu-section__menu__option__img" src="{{ asset('img/bacon-eggs.jpg') }}" alt="bacon and eggs">
          <div class="menu-section__menu__option__content">
            <h4 class="menu-section__menu__option__content__title">Eggs & Bacon</h4>
            <p class="menu-section__menu__option__content__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
        <div class="menu-section__menu__option">
          <img class="menu-section__menu__option__img" src="{{ asset('img/coffee.jpg') }}" alt="coffee or tea">
          <div class="menu-section__menu__option__content">
            <h4 class="menu-section__menu__option__content__title">Tea or Coffee</h4>
            <p class="menu-section__menu__option__content__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
        <div class="menu-section__menu__option">
          <img class="menu-section__menu__option__img" src="{{ asset('img/chia-oatmeal.jpg') }}" alt="Chia outmeal">
          <div class="menu-section__menu__option__content">
            <h4 class="menu-section__menu__option__content__title">Chia Oatmeal</h4>
            <p class="menu-section__menu__option__content__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
      </div>
      <div class="menu-section__menu__second-col only-desktop"></div>
      <div class="menu-section__menu__pagination">
        <button class="menu-section__menu__pagination__prev">
          <img src="{{ asset('img/icons/arrow-left.svg') }}" alt="">
        </button>
        <button class="menu-section__menu__pagination__next">
          <img src="{{ asset('img/icons/arrow-right.svg') }}" alt="">
        </button>
      </div>
    </div>
  </section>
  
  <div class="menu-section__bottom-slider swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img class="menu-section__bottom-slider__img" src="{{ asset('img/menu-1.jpg') }}" alt="menu-1">
      </div>
      <div class="swiper-slide">
        <img class="menu-section__bottom-slider__img" src="{{ asset('img/menu-2.jpg') }}" alt="menu-2">
      </div>  
      <div class="swiper-slide">
        <img class="menu-section__bottom-slider__img" src="{{ asset('img/menu-3.jpg') }}" alt="menu-3">
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <section class="summary">
    <div class="summary__box">
      <img class="summary__box__icon" src="{{ asset('img/icons/rocket.svg') }}" alt="">
      <p class="summary__box__number">84k<span class="summary__box__number__plus">+</span></p>
      <p class="summary__box__subtitle">Projects are Completed</p>
    </div>
    <div class="summary__box">
      <img class="summary__box__icon" src="{{ asset('img/icons/corporation-2.svg') }}" alt="">
      <p class="summary__box__number">10M<span class="summary__box__number__plus">+</span></p>
      <p class="summary__box__subtitle">Active Backers Around World</p>
    </div>
    <div class="summary__box">
      <img class="summary__box__icon" src="{{ asset('img/icons/finance.svg') }}" alt="">
      <p class="summary__box__number">02k<span class="summary__box__number__plus">+</span></p>
      <p class="summary__box__subtitle">Categories Served</p>
    </div>
    <div class="summary__box">
      <img class="summary__box__icon" src="{{ asset('img/icons/book.svg') }}" alt="">
      <p class="summary__box__number">100M<span class="summary__box__number__plus">+</span></p>
      <p class="summary__box__subtitle">Idea Raised Funds</p>
    </div>
  </section>
@endsection