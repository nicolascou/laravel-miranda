@extends('layout')

@section('content')
  <div class="hero">
    <p class="hero__subtitle hero__subtitle--subdomain">THE ULTIMATE LUXURY</p>
    <h2 class="hero__title">Ultimate Room</h2>
    <div class="hero__page">
      <a class="hero__page__link" href="/">Home</a> |
      <a class="hero__page__link hero__page__link-active" href="/room_details">Room Details</a>
    </div>
  </div>

  <section class="offer">
    <div class="offer__left-col">
      <div class="offer__head">
        <div>
          <p class="offer__intro">{{ $room['bed_type'] }}</p>
          <h2 class="offer__title">{{ $room['name'] }}</h2>
        </div>
        <p class="rooms__offer__price">${{ $room['rate'] }}<span class="rooms__offer__price__small-txt">/Night</span></p>
      </div>
      <img class="offer__img" src="img/rooms-1.jpg" alt="Luxury room">
      <form class="offer__form" method="post">
        <h5 class="offer__form__title">Check Availability</h5>
        <label class="offer__form__label" for="checkin">Check In</label>
        <div class="offer__form__input">
          <input type="date" id="checkin" name="check_in">
          <img src="img/icons/calendar.svg" alt="" style="filter: invert(.7);">
        </div>
        <label class="offer__form__label" for="checkout">Check Out</label>
        <div class="offer__form__input">
          <input type="date" id="checkout" name="check_out">
          <img src="img/icons/calendar.svg" alt="" style="filter: invert(.7);">
        </div>
        <label class="offer__form__label" for="name">Full Name</label>
        <div class="offer__form__input">
          <input type="text" id="name" name="name" placeholder="Your Name">
          <img src="img/icons/user.svg" alt="" style="filter: invert(.4);" required>
        </div>
        <label class="offer__form__label" for="special_request">Special Request</label>
        <div class="offer__form__input">
          <input name="special_request" id="special_request" placeholder="Message">
          <img src="img/icons/lock.svg" alt="" style="filter: invert(.7);">
        </div>
        <button type="submit" class="offer__form__btn btn btn--yellow">CHECK AVAILABILITY</button>
      </form>
      <p class="default-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>
  </section>

  <div class="container">
    <div class="amenities">
      <h3 class="amenities__title">Amenities</h3>
      <div class="amenities__flex">
        <div class="amenities__flex__box">
          <img src="img/icons/air-conditioner.svg" alt="">
          <p class="amenities__text">Air conditioner</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/wifi.svg" alt="" style="filter: invert(0.45) sepia(1);">
          <p class="amenities__text">High speed WiFi</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/breakfast.svg" alt="">
          <p class="amenities__text">Breakfast</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/kitchen.svg" alt="">
          <p class="amenities__text">Kitchen</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/cleaning.svg" alt="">
          <p class="amenities__text">Cleaning</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/shower.svg" alt="">
          <p class="amenities__text">Shower</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/grocery.svg" alt="">
          <p class="amenities__text">Grocery</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/single-bed.svg" alt="">
          <p class="amenities__text">Single bed</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/shop.svg" alt="">
          <p class="amenities__text">Shop near</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/towels.svg" alt="">
          <p class="amenities__text">Towels</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/support.svg" alt="">
          <p class="amenities__text">24/7 Online Support</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/key.svg" alt="">
          <p class="amenities__text">Strong Locker</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/lock.svg" alt="">
          <p class="amenities__text">Smart Security</p>
        </div>
        <div class="amenities__flex__box">
          <img src="img/icons/tech.svg" alt="">
          <p class="amenities__text">Expert Team</p>
        </div>
      </div>
    </div>

    <div class="profile">
      <div class="profile__img">
        <div class="profile__img__tick">
          <img src="img/icons/tick.svg" alt="">
        </div>
        <img class="profile__img__rosalina" width="100%" height="100%" src="img/rosalina.jpg" alt="Rosalina pic">
      </div>
      <h3 class="profile__name">Rosalina D. William</h3>
      <p class="profile__subtitle">Founder, Qux Co.</p>
      <p class="profile__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>

    <div class="cancellation">
      <h3 class="cancellation__title">Cancellation</h3>
      <p class="default-txt cancellation__text">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
    </div>
  </div>
  
  <div class="related-rooms">
    <h3 class="related-rooms__title">Related Rooms</h3>

    <div class="swiper related-rooms__swiper">
      <div class="swiper-wrapper">
        <div class="rooms-flex__box swiper-slide">
          <div style="position: relative;">
            <div>
              <img class="rooms-flex__box__img" src="img/rooms-4.jpg" alt="Hotel room">
            </div>
            <div class="rooms-flex__box__rect">
              <img src="img/icons/bed.svg" alt="">
              <img src="img/icons/wifi.svg" alt="">
              <img src="img/icons/car.svg" alt="">
              <img src="img/icons/winter.svg" alt="">
              <img src="img/icons/gym.svg" alt="">
              <img src="img/icons/smoke.svg" alt="">
              <img src="img/icons/cocktail.svg" alt="">
            </div>
          </div>
          <div class="rooms-flex__box__card">
            <h3 class="rooms-flex__box__card__title">Minimal Duplex Room</h3>
            <p class="rooms-flex__box__card__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="rooms-flex__box__card__bottom-flex">
              <p class="rooms-flex__box__card__price">$345/Night</p>
              <a class="rooms-flex__box__card__booking" href="">Book Now</a>
            </div>
          </div>
        </div>
        <div class="rooms-flex__box swiper-slide">
          <div style="position: relative;">
            <img class="rooms-flex__box__img" src="img/rooms-4.jpg" alt="Hotel room">
            <div class="rooms-flex__box__rect">
              <img src="img/icons/bed.svg" alt="">
              <img src="img/icons/wifi.svg" alt="">
              <img src="img/icons/car.svg" alt="">
              <img src="img/icons/winter.svg" alt="">
              <img src="img/icons/gym.svg" alt="">
              <img src="img/icons/smoke.svg" alt="">
              <img src="img/icons/cocktail.svg" alt="">
            </div>
          </div>
          <div class="rooms-flex__box__card">
            <h3 class="rooms-flex__box__card__title">Minimal Duplex Room</h3>
            <p class="rooms-flex__box__card__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="rooms-flex__box__card__bottom-flex">
              <p class="rooms-flex__box__card__price">$345/Night</p>
              <a class="rooms-flex__box__card__booking" href="">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="related-rooms__nav-btn related-rooms__prev-btn">
        <img src="img/icons/arrow-left.svg" alt="">
      </div>
      <div class="related-rooms__nav-btn related-rooms__next-btn">
        <img src="img/icons/arrow-right.svg" alt="">
      </div>
    </div>
  </div>
@endsection