@extends('layouts.menu-principal')
@section('content')
  <div class="container alt section-space">
    <div class="row c-how__heading align-row">
      <div class="col-xs-12 col-sm-6 c-how__headingLeft">
        <!-- <h2 class="h2 u-bold text-primary">Hack & Learn <em>React</em></h2> -->
        <h1 class="h2 u-bold">Besoin d'un plombier ? électricien ? coiffeur ? menuisier ? ou autre ?</h1>
        <p class="u-margin-t-md subHeading">Nous vous envoyons les meilleurs qui règleront vos problèmes, vite fait bien fait</p>
        <a class="btn btn-primary fw-bold u-margin-t-md open-signup-modal  subscribe-hacknlearn login-required " data-url="https://hackr.io/hack-n-learn/react" data-message="Please login to start React assignments.">
          Dites nous de quoi vous avez besoin
        </a>
        <p class="u-margin-t-md subHeading">
          Ou parlez directement avec nous, à l'aide de l'icône de messagerie, en bas à votre gauche.
        </p>
      </div>
      <div class="col-xs-12 col-sm-6 c-how__headingRight">
        <img src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/hacknlearn/asset.svg" />
      </div>
    </div>
  </div>
  <div class="container alt section-space">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h3 class="h3 u-bold text-center u-margin-b-sm">Fini les artisans qui viennent faire du mauvais travail chez vous à la maison</h3>
        <p class="u-margin-b-x-lg subHeading text-center">
          Avec <strong>Oui! Patron</strong>, faites vous aider par les meilleurs, et notez leurs prestations
        </p>
        <div class="c-browser">
          <div class="c-browser__chrome">
            <div class="c-browser__buttons">
              <div class="c-browser__button"></div>
              <div class="c-browser__button"></div>
              <div class="c-browser__button"></div>
            </div>
          </div>
          <div class="c-browser__image">
            <img src="/images/fini.png" />
          </div>
        </div>
        <a class="btn btn-primary fw-bold u-margin-t-lg open-signup-modal  subscribe-hacknlearn login-required " data-message="Please login to start React assignments.">
          Dites nous de quoi vous avez besoin</a>
      </div>
    </div>
  </div>
  <div class="container alt section-space">
    <div class="row">
      <div class="col-xs-12">
        <h3 class="h3 u-bold text-center u-margin-b-sm u-margin-t-sm">Comment ca marche ?</h3>
        <p class="subHeading text-center">Vous verrez, c'est rapide et simple</p>
      </div>
    </div>
    <div class="row u-margin-t-xxx-lg align-row">
      <div class="col-xs-12 col-sm-6">
        <div class="c-how__section">
          <div class="c-how__sectionImages">
            <img src="/images/mail.png" />
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="c-how__sectionContent">
          <h4 class="h4 u-bold">Votre besoin</h4>
          <p class="u-margin-t-md subHeading">Dites nous juste le problème que vous rencontrez, ou quel est votre besoin. Nous
          vous envoyons ensuite un professionnel qualifié pour s'occuper de votre affaire dans les plus brefs délais</p>
        </div>
      </div>
    </div>
    <div class="row u-margin-t-xxx-lg align-row ">
      <div class="col-xs-12 col-sm-6">
        <div class="c-how__section">
          <div class="c-how__sectionContent">
            <h4 class="h4 u-bold">Vous êtes satisfaits ? Dans ce cas, nous aussi :)</h4>
            <p class="u-margin-t-md subHeading">Payez après satisfaction directement en ligne, et 100% sécurisé</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="c-how__sectionImages">
          <img src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/hacknlearn/congrats.svg" />
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="container full-width c-pricing">
  <div class="row">
    <div class="col-xs-12">
      <div class="c-pricing__heading">
        <h3 class="h3 u-bold">Simple, fair pricing</h3>
        <p class="u-margin-t-md subHeading">Learning should be Free and it is, However if you do get stuck and need some experts help, we have a paid plan for
          you.
        </p>
      </div>
    </div>
  </div>
  <div class="c-pricing__list row">
    <div class="col-md-8">
      <div class="col-xs-12 col-sm-6 c-pricing__item">
        <div class="c-pricing__itemHeading">Starters Plan</div>
        <img src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/hacknlearn/pricing-1.svg" />
        <div class="c-pricing__features">
          <div class="c-pricing__feature">5 challenges with assets for practicing</div>
          <div class="c-pricing__feature">Solutions of all assignments</div>
          <div class="c-pricing__feature">Access to Hack n Learn discussions Forum</div>
          <div class="c-pricing__price">Free</div>
          <a href="https://hackr.io/hack-n-learn/react" class="btn btn-primary fw-bold u-margin-t-md  subscribe-hacknlearn login-required " data-url="https://hackr.io/hack-n-learn/react" data-message="Please login to start React assignments.">Start Now!</a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 c-pricing__item">
        <div class="c-pricing__itemHeading">Premium Plan</div>
        <img src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/hacknlearn/pricing-2.svg" />
        <div class="c-pricing__features">
          <div class="c-pricing__feature">5 challenges with assets for practicing</div>
          <div class="c-pricing__feature">Solutions of all assignments</div>
          <div class="c-pricing__feature">Access to Hack n Learn discussions Forum</div>
          <div class="c-pricing__feature">
            <strong>Technical Guidance via email</strong>
          </div>
          <div class="c-pricing__feature">
            <strong>Technical Assistance via skype over a 30 min session for each task</strong>
          </div>
          <div class="c-pricing__price">Coming Soon!</div>
        </div>
      </div>
    </div>
  </div>
</div> -->
  <div class="container alt">
    <div class="row c-learn">
      <div class="col-xs-12 col-sm-6 c-learn__list">
        <div>
          <img width="300" src="/images/reviews.png" />
          <p>Votre avis compte !</p>
        </div>

      </div>
      <div class="col-xs-12 col-sm-6 c-learn__content">
        <h3 class="h3 u-bold">Notez nos professionnels</h3>
        <p class="u-margin-t-md subHeading">Après service, dites nous votre avis sur la prestation de notre professionnel, pour améliorer nos services</p>
      </div>
    </div>
  </div>
  </div>
  <div class="container alt c-getStarted" id="get-started">
    <div class="row align-row c-getStarted__content">
      <div class="col-xs-12 col-sm-6">
        <div class="h3 u-bold">Vous n'avez rien à perdre </div>
        <p class="u-margin-t-sm subHeading">Essayez nos professionnels et vous verrez !</p>
        <div class="c-form__footer l-form__footer">
          <div class="l-form__submit">
            <a class="btn btn-primary  login-required subscribe-hacknlearn  fw-bold open-signup-modal" data-message="You need to login to subscribe.">Dites nous de quoi vous avez besoin</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 c-getStarted__contentRight">
        <img src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/hacknlearn/comp.svg" />
      </div>
    </div>
  </div>
  @endsection
