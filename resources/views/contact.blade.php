@extends('layout')

@section('content')
  <div class="hero">
    <p class="hero__subtitle hero__subtitle--subdomain">THE ULTIMATE LUXURY</p>
    <h2 class="hero__title">New Details</h2>
    <div class="hero__page">
      <a class="hero__page__link" href="/">Home</a> |
      <a class="hero__page__link hero__page__link-active" href="/contact">Contact</a>
    </div>
  </div>

  <section class="contact">
    <div class="contact__flex">
      <div class="contact__flex__box">
        <img class="contact__flex__box__icon" src="img/icons/mail.svg" alt="">
        <div class="contact__flex__box__content">
          <h4 class="contact__flex__box__content__title">Hotel Address</h4>
          <p class="contact__flex__box__content__address">19/A, Cirikon City hall Tower New York, NYC</p>
        </div>
        <p class="contact__flex__box__number">01</p>
      </div>
      <div class="contact__flex__box">
        <img class="contact__flex__box__icon" src="img/icons/phone.svg" alt="">
        <div class="contact__flex__box__content">
          <h4 class="contact__flex__box__content__title">Phone Number</h4>
          <p class="contact__flex__box__content__address">+ 97656 8675 7864 7</p>
          <p class="contact__flex__box__content__address">+ 876 766 8675 765 6</p>
        </div>
        <p class="contact__flex__box__number">02</p>
      </div>
      <div class="contact__flex__box">
        <img class="contact__flex__box__icon" src="img/icons/location-2.svg" alt="">
        <div class="contact__flex__box__content">
          <h4 class="contact__flex__box__content__title">Email</h4>
          <p class="contact__flex__box__content__address">info@webmail.com</p>
          <p class="contact__flex__box__content__address">jobs.webmail@mail.com</p>
        </div>
        <p class="contact__flex__box__number">03</p>
      </div>
    </div>
    <iframe class="contact__img"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12958.338342185376!2d-5.903839474139565!3d35.71183897096658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b89e2f365159d%3A0xa7d8fe9905943e8b!2sH%C3%B4tel%20Miranda!5e0!3m2!1ses!2ses!4v1683206484443!5m2!1ses!2ses" 
      style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    <form method="post" class="contact__form">
      <div class="contact__form__row">
        <div class="contact__form__input">
          <img src="img/icons/user.svg" alt="" width="16" height="16" style="filter: invert(0.45) sepia(1);">
          <input type="text" name="full_name" placeholder="Your full name">
        </div>
        <div class="contact__form__input">
          <img src="img/icons/phone-2.svg" alt="" width="16" height="16">
          <input type="tel" name="phone" placeholder="Add phone number">
        </div>
      </div>
      <div class="contact__form__row">
        <div class="contact__form__input">
          <img src="img/icons/email.svg" alt="" width="16" height="16">
          <input type="email" name="email" placeholder="Enter email address">
        </div>
        <div class="contact__form__input">
          <img src="img/icons/notebook.svg" alt="" width="16" height="16">
          <input type="text" name="subject" placeholder="Enter subject">
        </div>
      </div>
      <div class="contact__form__input">
        <img src="img/icons/pen.svg" alt="" width="16" height="16">
        <textarea type="text" name="message" placeholder="Enter message" rows="8"></textarea>
      </div>

      <button type="submit" class="contact__form__btn btn btn--yellow">SEND</button>
    </form>
  </section>
@endsection