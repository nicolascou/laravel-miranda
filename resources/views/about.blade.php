@extends('layout')

@section('content')

  <div class="hero">
    <p class="hero__subtitle hero__subtitle--subdomain">THE ULTIMATE LUXURY</p>
    <h2 class="hero__title">About Us</h2>
    <div class="hero__page">
      <a class="hero__page__link" href="/">Home</a> |
      <a class="hero__page__link hero__page__link-active" href="/about">About</a>
    </div>
  </div>

  <section class="about-intro">
    <video class="about-intro__video" controls>
      <source src="{{ asset('video/hotel-miranda.mp4') }}" type="video/mp4">
    </video>
    <h2 class="about-intro__title">Hello. Our hotel has been present for over 20 years. We make the best for all our ctomers.</h2>
    <div class="about-intro__pick">
      <div class="about-intro__pick__box">
        <img class="about-intro__pick__box__icon" src="{{ asset('img/icons/coffee.svg') }}" alt="Coffee">
        <p class="about-intro__pick__box__text">BREAKFAST</p>
      </div>
      <div class="about-intro__pick__box">
        <img class="about-intro__pick__box__icon" src="{{ asset('img/icons/plane.svg') }}" alt="Airplane">
        <p class="about-intro__pick__box__text">AIRPORT PICKUP</p>
      </div>
      <div class="about-intro__pick__box">
        <img class="about-intro__pick__box__icon" src="{{ asset('img/icons/location-3.svg') }}" alt="Airplane">
        <p class="about-intro__pick__box__text">CITY GUIDE</p>
      </div>
      <div class="about-intro__pick__box d-none d-flex-desktop">
        <img class="about-intro__pick__box__icon" src="{{ asset('img/icons/bbq.svg') }}" alt="Airplane">
        <p class="about-intro__pick__box__text">BBQ PARTY</p>
      </div>
      <div class="about-intro__pick__box">
        <img class="about-intro__pick__box__icon" src="{{ asset('img/icons/bed-2.svg') }}" alt="Airplane">
        <p class="about-intro__pick__box__text">LUXURY ROOM</p>
      </div>
    </div>
  </section>

  <div class="restaurant-wrapper">
    <section class="restaurant">
      <img class="restaurant__img" src="{{ asset('img/menu-3.jpg') }}" alt="Restaurant">
      <div>
        <p class="restaurant__intro">RESTAURANT</p>
        <h2 class="restaurant__title">Get Restaurant Facilities & Many Other More</h2>
        <p class="restaurant__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        <button class="restaurant__btn btn btn--yellow">TAKE A TOUR</button>
      </div>
    </section>
  </div>

  <div class="facilities-black-wrapper">
  <section class="facilities facilities-black">
    <div class="content-wrapper">
    <p class="facilities__intro facilities-black__text">FACILITIES</p>
    <h2 class="facilities__title facilities-black__text">Core Features</h2>

    <div class="facilities-black__swiper-wrapper">
      <div class="swiper facilities__swiper facilities-black__swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide facilities__swiper__slide">
            <p class="facilities__swiper__slide__number facilities-black__number">01</p>
            <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/ranking.svg') }}" alt="">
            <h3 class="facilities__swiper__slide__title facilities-black__text">Have High Rating</h3>
            <p class="facilities__swiper__slide__text facilities-black__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div class="swiper-slide facilities__swiper__slide">
            <p class="facilities__swiper__slide__number facilities-black__number">02</p>
            <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/clock.svg') }}" alt="">
            <h3 class="facilities__swiper__slide__title facilities-black__text">Quiet Hours</h3>
            <p class="facilities__swiper__slide__text facilities-black__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div class="swiper-slide facilities__swiper__slide">
            <p class="facilities__swiper__slide__number facilities-black__number">03</p>
            <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/location.svg') }}" alt="">
            <h3 class="facilities__swiper__slide__title facilities-black__text">Best Locations</h3>
            <p class="facilities__swiper__slide__text facilities-black__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div class="swiper-slide facilities__swiper__slide">
            <p class="facilities__swiper__slide__number facilities-black__number">04</p>
            <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/cancellation.svg') }}" alt="">
            <h3 class="facilities__swiper__slide__title facilities-black__text">Free Cancellation</h3>
            <p class="facilities__swiper__slide__text facilities-black__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div class="swiper-slide facilities__swiper__slide">
            <p class="facilities__swiper__slide__number facilities-black__number">05</p>
            <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/payment.svg') }}" alt="">
            <h3 class="facilities__swiper__slide__title facilities-black__text">Payment Options</h3>
            <p class="facilities__swiper__slide__text facilities-black__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
          <div class="swiper-slide facilities__swiper__slide">
            <p class="facilities__swiper__slide__number facilities-black__number">06</p>
            <img class="facilities__swiper__slide__icon" src="{{ asset('img/icons/offer.svg') }}" alt="">
            <h3 class="facilities__swiper__slide__title facilities-black__text">Special Offers</h3>
            <p class="facilities__swiper__slide__text facilities-black__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  </div>

  <section class="counter">
    <p class="counter__intro">COUNTER</p>
    <h2 class="counter__title">Some Fun Facts</h2>
    <div class="counter__flex">
      <div class="counter__flex__box">
        <img src="{{ asset('img/icons/feedback.svg') }}" alt="">
        <div class="counter__flex__box__content">
          <p class="counter__flex__box__content__number">8000</p>
          <p class="counter__flex__box__content__text">Happy Users</p>
        </div>
        <img src="{{ asset('img/icons/arrow.svg') }}" alt="">
      </div>
      <div class="counter__flex__box">
        <img src="{{ asset('img/icons/positive.svg') }}" alt="">         
        <div class="counter__flex__box__content">
          <p class="counter__flex__box__content__number">10M</p>
          <p class="counter__flex__box__content__text">Reviews & Appriciate</p>
        </div>
        <img src="{{ asset('img/icons/arrow.svg') }}" alt="">
      </div>
      <div class="counter__flex__box">
        <img src="{{ asset('img/icons/earth.svg') }}" alt="">
        <div class="counter__flex__box__content">
          <p class="counter__flex__box__content__number">100</p>
          <p class="counter__flex__box__content__text">Country Coverage</p>
        </div>
        <img src="{{ asset('img/icons/arrow.svg') }}" alt="">
      </div>
    </div>

    <div class="counter__bottom-slider swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="counter__bottom-slider__img" src="{{ asset('img/counter-1.jpg') }}" alt="counter-1">
        </div>
        <div class="swiper-slide">
          <img class="counter__bottom-slider__img" src="{{ asset('img/counter-2.jpg') }}" alt="counter-2">
        </div>  
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

@endsection