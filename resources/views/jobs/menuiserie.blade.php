@extends('layouts.menu-principal')
@section('content')
  <div class="container alt section-space">
    <div class="row c-how__heading align-row">
      <div class="col-xs-12 col-sm-6 c-how__headingLeft">
        <!-- <h2 class="h2 u-bold text-primary">Hack & Learn <em>React</em></h2> -->
        <h1 class="h2 u-bold">Besoin d'un menuisier ?</h1>
        <p class="u-margin-t-md subHeading">La menuiserie, art et métier, est l'ensemble des techniques mises en œuvre pour construire des ouvrages de taille relativement petite (par opposition aux ouvrages de charpente) par la mise en forme et l'assemblage de menues pièces de bois1. Ces assemblages se font de largeur, de longueur ou en angle. Nous vous envoyons les meilleurs qui règleront vos problèmes, vite fait bien fait</p>
        <a href="#" data-toggle="modal" data-target="#modalSignUp" class="btn btn-primary fw-bold">
          Dites nous de quoi vous avez besoin
        </a>
        <p class="u-margin-t-md subHeading">
          Ou parlez directement avec nous, à l'aide de l'icône de messagerie, en bas à votre gauche.
        </p>
      </div>
      <div class="col-xs-12 col-sm-6 c-how__headingRight">
        <img src="https://www.jeuneafrique.com/medias/2015/08/14/Congo-%C3%A9b%C3%A9niste-592x296.jpg" />
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

  <div id="modalSignUp" class="modal full-page-modal" tabindex="-1" role="dialog" aria-hidden="false">
  <!-- <button type="button" class="modal-action-btn action-left back-to-signin" style="opacity: 0;"><i class="ion-ios-arrow-back"></i></button> -->
  <button type="button" class="modal-action-btn action-right close-modal" data-dismiss="modal"><i class="ion-android-close"></i></button>
  <div class="modal-container">
    <div class="modal-dialog" role="document">
      <div class="modal-content text-center">

















        <div class="modal-body signup-modal-body">
          <div class="modal-header">
            <img width="100" src="/img/page-parcours/card.png" alt="">
            <div class="modal-title">Remplissez ce formulaire pour vous inscrire à cette formation</div>
            <div class="login-needed-alert"></div>
          <form name="userSignUpForm" action="{{url('envoi')}}" method="post" id="signup-modal-form" class="margintop-lg">
            {{ csrf_field() }}

            <h2>Informations sur le client </h2>
            <div class="form-group full_name-form-group">
              <div class="input-with-icon">
                <input value="{{Auth::check() ? Auth::user()->email : ''}}" type="email" class="form-control" id="" placeholder="Email" name="email" required>
                <i class="input-icon ion-android-mail"></i>
              </div>
            </div>

            <div class="form-group email-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Nom" name="nom" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Prénoms" name="prenoms" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Téléphone" name="tel" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>

            <h2>Informations sur les travaux à effectuer </h2><br/>

            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Titre du travail à effectuer" name="titre_de_tache" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>


            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <select class="form-control" name="formation">
                  <option value="type de travaux ">Type de travaux</option>
                  <option class="carrelage">Ardoise pose</option>
        <option class="carrelage">Carrelage mur</option>
        <option class="carrelage">Carrelage salle de bain</option>
        <option class="carrelage">Carrelage sol</option>
        <option class="carrelage">Carrelage tous travaux</option>
        <option class="carrelage">Autres</option>

        <option class="charpentier">Abri de jardin bois - Installation/Réparation</option>
        <option class="charpentier">Abri voiture</option>
        <option class="charpentier">Agencement/Rangement divers</option>
        <option class="charpentier">Armoire - Installation/Réparation</option>
        <option class="charpentier">Baies vitrées - Installation/Réparation/Restauration</option>
        <option class="charpentier">Bâtiment ossature bois - Construction/Réparation</option>
        <option class="charpentier">Bois intérieur protection</option>
        <option class="charpentier">Chambre à coucher - Agencement/Rangement</option>
        <option class="charpentier">Chambre à coucher - Installation</option>
        <option class="charpentier">Cuisine design et pose</option>
        <option class="charpentier">Escalier tous travaux</option>
        <option class="charpentier">Etagère/Bibliothèque - Installation</option>
        <option class="charpentier">Fabrication de meubles</option>
        <option class="charpentier">Garde corps - Construction/Réparation</option>
        <option class="charpentier">Insectes du bois traitement</option>
        <option class="charpentier">Isolation intérieure</option>
        <option class="charpentier">Menuiserie tous travaux</option>
        <option class="charpentier">Meuble bois - Installation/Réparation</option>
        <option class="charpentier">Meuble en kit assemblage</option>
        <option class="charpentier">Parquet flottant - Installation/Réparation</option>
        <option class="charpentier">Placard cuisine - Installation/Réparation</option>
        <option class="charpentier">Planchers - Installation/Rénovation</option>
        <option class="charpentier">Planchers bois massif - Installation/Restauration</option>
        <option class="charpentier">Portes tous travaux</option>
        <option class="charpentier">Porte-fenêtre - Installation/Réparation</option>
        <option class="charpentier">Pose et installation diverse</option>
        <option class="charpentier">Pourriture sèche traitement</option>
        <option class="charpentier">Poutre restauration</option>
        <option class="charpentier">Poutre sablage</option>
        <option class="charpentier">Poutre charpente - Installation/Restauration</option>
        <option class="charpentier">Rampe escalier bois - Construction/Réparation</option>
        <option class="charpentier">Rampe escalier métal - Construction/Réparation</option>
        <option class="charpentier">Restauration de meuble</option>
        <option class="charpentier">Sol ponçage et finition</option>
        <option class="charpentier">Sol restauration</option>
        <option class="charpentier">Terrasse bois - Installation/Réparation</option>
        <option class="charpentier">Véranda bois - Construction/Réparation</option>
        <option class="charpentier">Volet roulant/sécurité - Installation/Réparation</option>
        <option class="charpentier">Volet tous travaux</option>
        <option class="charpentier">Autres</option>

        <option class="chauffage">Chaudière électrique - Installation/Réparation/Entretien</option>
        <option class="chauffage">Chaudière gaz - Installation/Réparation/Entretien</option>
        <option class="chauffage">Chauffage au sol (eau) - Installation/Réparation</option>
        <option class="chauffage">Chauffage au sol (électrique) - Installation/Réparation</option>
        <option class="chauffage">Chauffage central fioul - Installation/Réparation/Entretien</option>
        <option class="chauffage">Chauffage central gaz - Installation/Réparation/Entretien</option>
        <option class="chauffage">Chauffage tous travaux</option>
        <option class="chauffage">Chauffe-eau électrique -  Installation/Réparation/Entretien</option>
        <option class="chauffage">Chauffe-eau gaz -  Installation/Réparation/Entretien</option>
        <option class="chauffage">Conduit tubage</option>
        <option class="chauffage">Détection fuite gaz</option>
        <option class="chauffage">Gaz installation</option>
        <option class="chauffage">Radiant - Installation/Réparation</option>
        <option class="chauffage">Radiateur (à eau) - Installation/Réparation/Purge</option>
        <option class="chauffage">Radiateur (électrique) - Installation/Réparation/Purge</option>
        <option class="chauffage">Ramonage chaudière</option>
        <option class="chauffage">Autres</option>

        <option class="construction">Abri voiture</option>
        <option class="construction">Agrandissement</option>
        <option class="construction">Allée - Béton imprimé</option>
        <option class="construction">Allée - Dallage et pavés</option>
        <option class="construction">Allée - Goudron/Bitume</option>
        <option class="construction">Allée - Gravier</option>
        <option class="construction">Avant-toit/Rive/Revêtement façade (PVC) - Installation/Réparation</option>
        <option class="construction">Baies vitrées - Installation/Réparation/Restauration</option>
        <option class="construction">Baignoire/Lavabo/Bidet/Toilette - Installation</option>
        <option class="construction">Barrière/Clôture piscine - Construction/Réparation</option>
        <option class="construction">Bassin de jardin - Création/Réparation</option>
        <option class="construction">Bâtiment ossature bois - Construction/Réparation</option>
        <option class="construction">Béton ciré</option>
        <option class="construction">Chapes/Fondations</option>
        <option class="construction">Chien-Assis - Installation/Réparation</option>
        <option class="construction">Cloison - Construction/Réparation</option>
        <option class="construction">Cloison sèche</option>
        <option class="construction">Comble aménagement</option>
        <option class="construction">Construction écologique</option>
        <option class="construction">Construction tous travaux</option>
        <option class="construction">Crépis</option>
        <option class="construction">Cuisine design et pose</option>
        <option class="construction">Dépendance - Construction/Réparation/Rénovation</option>
        <option class="construction">Double vitrage - Installation/Réparation</option>
        <option class="construction">Echafaudage</option>
        <option class="construction">Enduit aspect minéral</option>
        <option class="construction">Escaliers (bois) - Installation/Réparation</option>
        <option class="construction">Escaliers (métal) - Installation/Réparation</option>
        <option class="construction">Etanchéité</option>
        <option class="construction">Fenêtre (PVC) Installation/Réparation</option>
        <option class="construction">Fenêtre à guillotine - Installation/Restauration</option>
        <option class="construction">Garage aménagement</option>
        <option class="construction">Garage construction</option>
        <option class="construction">Isolation des murs contre l'humidité</option>
        <option class="construction">Isolation extérieure</option>
        <option class="construction">Isolation intérieure</option>
        <option class="construction">Isolation soufflée</option>
        <option class="construction">Maçonnerie</option>
        <option class="construction">Mur creux isolation</option>
        <option class="construction">Nouveau toi</option>
        <option class="construction">Peinture et décoration</option>
        <option class="construction">Petits travaux de Construction/Entretien</option>
        <option class="construction">Pieux de fondation</option>
        <option class="construction">Piscine construction</option>
        <option class="construction">Plafond suspendu - Installation/Réparation</option>
        <option class="construction">Portes PVC (extérieur) - Installation/Réparation</option>
        <option class="construction">Poutre charpente - Installation/Restauration</option>
        <option class="construction">Réagréage</option>
        <option class="construction">Rénovation de propriété</option>
        <option class="construction">Rénovation/Aménagement intérieur</option>
        <option class="construction">Revêtement façade tous travaux</option>
        <option class="construction">Salle d'eau</option>
        <option class="construction">Salle de bain - Design et Installation</option>
        <option class="construction">Salle de bain - Installation</option>
        <option class="construction">Salle de bain tous travaux</option>
        <option class="construction">Sol en béton</option>
        <option class="construction">Sol en restauration</option>
        <option class="construction">Sous-sol/Cellier - Rénovation/Aménagement</option>
        <option class="construction">Terrasse bois - Installation/Réparation</option>
        <option class="construction">Toit terrasse - Construction/Réparation </option>
        <option class="construction">Toile tuile/Ardoise</option>
        <option class="construction">Toiture (métal) - Construction/Réparation</option>
        <option class="construction">Toiture - Réparation/Fuite</option>
        <option class="construction">Toiture Isolation</option>
        <option class="construction">Toiture tous travaux</option>
        <option class="construction">Traitement de l'humidité</option>
        <option class="construction">Travaux de démolition</option>
        <option class="construction">Travaux de structure</option>
        <option class="construction">Ventilation - Installation/Réparation</option>
        <option class="construction">Véranda bois - Construction/Réparation</option>
        <option class="construction">Véranda (métal) - Construction/Réparation</option>
        <option class="construction">Véranda (PVC) - Construction/Réparation</option>
        <option class="construction">Véranda tous travaux</option>
        <option class="construction">Zinguerie - Installation/Réparation</option>
        <option class="construction">Autres</option>

        <option class="cuisines">Baignoire/Lavabo/Bidet/Toilette - Installation</option>
        <option class="cuisines">Cuisine design et pose</option>
        <option class="cuisines">Cuisine pose</option>
        <option class="cuisines">Cuisine tous travaux</option>
        <option class="cuisines">Cuisinière/Plaque gaz - Installation/Réparation</option>
        <option class="cuisines">Extracteur - Installation/Réparation</option>
        <option class="cuisines">Hotte - Installation/Réparation</option>
        <option class="cuisines">Placards cuisine - Installation/Réparation</option>
        <option class="cuisines">Plan de travail cuisine - Installation/Réparation</option>
        <option class="cuisines">Plan de travail marbre - Installation/Réparation</option>
        <option class="cuisines">Robinet remplacement</option>
        <option class="cuisines">Autres</option>

        <option class="decorateur">Béton ciré</option>
        <option class="decorateur">Chambre à coucher - Agencement/Rangement</option>
        <option class="decorateur">Couleurs Création/Design</option>
        <option class="decorateur">Décoration intérieure</option>
        <option class="decorateur">Garnissage</option>
        <option class="decorateur">Home staging</option>
        <option class="decorateur">Meuble protection</option>
        <option class="decorateur">Papier peint</option>
        <option class="decorateur">Re-couverture</option>
        <option class="decorateur">Rideaux - Fabrication/Réparation</option>
        <option class="decorateur">Tissus d'ameublement - Fabrication/Réparation</option>
        <option class="decorateur">Autres</option>

        <option class="demenagements">Déménagement bureaux</option>
        <option class="demenagements">Déménagement maison</option>
        <option class="demenagements">Enlèvement Déchets/Encombrants</option>
        <option class="demenagements">Autres</option>

        <option class="drainage">Connexion réseaux</option>
        <option class="drainage">Détection fuite</option>
        <option class="drainage">Drain Nettoyage/Débouchage</option>
        <option class="drainage">Drainage terrain</option>
        <option class="drainage">Drainage tous travaux</option>
        <option class="drainage">Fosse septique installation</option>
        <option class="drainage">Fosse septique Nettoyage/Entretien</option>
        <option class="drainage">Puisard - Installation/Entretien</option>
        <option class="drainage">Traitement de l'eau</option>
        <option class="drainage">Travaux d'assainissement</option>
        <option class="drainage">Autres</option>

        <option class="electricite">Air conditionné tous travaux</option>
        <option class="electricite">Alarme anti-intrusion - Installation/Réparation</option>
        <option class="electricite">Alarme incendie - Installation/Réparation/Contrôle</option>
        <option class="electricite">Alarme tous travaux</option>
        <option class="electricite">Antenne satellite - Installation/Réparation</option>
        <option class="electricite">Antenne TV - Installation/Réparation</option>
        <option class="electricite">Ascenseur - Installation</option>
        <option class="electricite">Ascenseur - Réparation/Entretien</option>
        <option class="electricite">Ascenseur tous travaux</option>
        <option class="electricite">Audiovisuel - Installation/Réparation</option>
        <option class="electricite">Boîte à fusibles - Installation/Réparation</option>
        <option class="electricite">Chaudière électrique - Installation/Réparation/Entretien</option>
        <option class="electricite">Chauffage au sol (électrique) - Installation/Réparation</option>
        <option class="electricite">Chauffage eau électrique - Installation/Réparation/Entretien</option>
        <option class="electricite">Connexion réseaux</option>
        <option class="electricite">Digicode - Installation/Réparation</option>
        <option class="electricite">Douche (électrique) - Installation/Réparation</option>
        <option class="electricite">Eclairage (électrique) - Installation/Réparation</option>
        <option class="electricite">Electricité - Inspection/Contrôle</option>
        <option class="electricite">Electricité travaux urgents</option>
        <option class="electricite">Electricité câblage tous travaux</option>
        <option class="electricite">Electroménager - Installation/Réparation</option>
        <option class="electricite">Extracteur - Installation/Réparation</option>
        <option class="electricite">Hotte - Installation/Réparation</option>
        <option class="electricite">Ingénierie téléphonique - Installation/Réparation</option>
        <option class="electricite">Interphone - Installation/Réparation</option>
        <option class="electricite">Interphone et système d'entrée</option>
        <option class="electricite">Piscine système de sécurité - Installation/Réparation</option>
        <option class="electricite">Portail automatique - Installation/Réparation</option>
        <option class="electricite">Radiant - Installation/Réparation</option>
        <option class="electricite">Radiateur (électrique) - Installation/Réparation/Purge</option>
        <option class="electricite">Refaire installation (électrique)</option>
        <option class="electricite">Tous travaux TV/Satellites</option>
        <option class="electricite">Ventilateur plafonnier - Installation/Réparation</option>
        <option class="electricite">Vidéo surveillance - Installation/Réparation</option>
        <option class="electricite">Autres</option>

        <option class="installationdepannagefrigorifique">Installation/Dépannage climatisation</option>
        <option class="installationdepannagefrigorifique">Installation/Dépannage de chambres froides</option>
        <option class="installationdepannagefrigorifique">Installation/Dépannage d’armoires et de vitrines réfrigérées</option>
        <option class="installationdepannagefrigorifique">Installation/Dépannage de machines à glaçons</option>
        <option class="installationdepannagefrigorifique">Autres</option>


        <option class="excavation">Allée béton imprimé</option>
        <option class="excavation">Allée dallage et pavés</option>
        <option class="excavation">Allée - Goudron/Bitume</option>
        <option class="excavation">Allée - Gravier</option>
        <option class="excavation">Allée tous travaux</option>
        <option class="excavation">Chapes/Fondations</option>
        <option class="excavation">Clôture - Pose/Réparation</option>
        <option class="excavation">Connexion réseaux</option>
        <option class="excavation">Dallage intérieur</option>
        <option class="excavation">Drainage terrain</option>
        <option class="excavation">Fouilles</option>
        <option class="excavation">Mure Bordure/Allée - Construction/Réparation</option>
        <option class="excavation">Nettoyage d'allée</option>
        <option class="excavation">Pieux de fondation</option>
        <option class="excavation">Puisard - Installation/Entretien</option>
        <option class="excavation">Puits/Forage</option>
        <option class="excavation">Réagréage</option>
        <option class="excavation">Sol en béton</option>
        <option class="excavation">Terrassement tous travaux</option>
        <option class="excavation">Travaux de démolition</option>
        <option class="excavation">Autres</option>

        <option class="ferronnerie">Escaliers - Installation/Réparation</option>
        <option class="ferronnerie">Fabrication de meubles</option>
        <option class="ferronnerie">Fenêtre - Installation/Réparation</option>
        <option class="ferronnerie">Garde-corps - Construction/Réparation</option>
        <option class="ferronnerie">Métal tous travaux</option>
        <option class="ferronnerie">Portail - Installation/Réparation</option>
        <option class="ferronnerie">Rampe escalier métal - Construction/Réparation</option>
        <option class="ferronnerie">Soudure tous travaux</option>
        <option class="ferronnerie">Toiture (métal) - Construction/Réparation</option>
        <option class="ferronnerie">Travail du métal</option>
        <option class="ferronnerie">Volets (métal) - Installation/Réparation</option>
        <option class="ferronnerie">Autres</option>

        <option class="macconnerie">Ardoise pose</option>
        <option class="macconnerie">Assèchement des murs</option>
        <option class="macconnerie">Béton ciré</option>
        <option class="macconnerie">Cloison - Construction/Réparation</option>
        <option class="macconnerie">Cloison sèche</option>
        <option class="macconnerie">Crépris</option>
        <option class="macconnerie">Dallage extérieur</option>
        <option class="macconnerie">Dallage pierres Raturelles/Reconstituées</option>
        <option class="macconnerie">Enduit aspect minéral</option>
        <option class="macconnerie">Etanchéité</option>
        <option class="macconnerie">Garage construction</option>
        <option class="macconnerie">Isolation des murs contre l'humidité</option>
        <option class="macconnerie">Isolation intérieure/extérieure</option>
        <option class="macconnerie">Isolation soufflée</option>
        <option class="macconnerie">Maçonnerie</option>
        <option class="macconnerie">Mur bordure/Allée - Construction/Réparation</option>
        <option class="macconnerie">Mur creux isolation</option>
        <option class="macconnerie">Mur de jardin - Construction/Réparation</option>
        <option class="macconnerie">Pieux de fondation</option>
        <option class="macconnerie">Porche d'entrée construction</option>
        <option class="macconnerie">Puits/Forage</option>
        <option class="macconnerie">Rejointoiement</option>
        <option class="macconnerie">Rénovation/Travail de la pierre</option>
        <option class="macconnerie">Sablage</option>
        <option class="macconnerie">Sol marbre - Installation/Réparation</option>
        <option class="macconnerie">Traitement de l'humidité</option>
        <option class="macconnerie">Autres</option>

        <option class="peinture">Béton ciré</option>
        <option class="peinture">Carrelage mur</option>
        <option class="peinture">Carrelage salle de bain</option>
        <option class="peinture">Céramique pose</option>
        <option class="peinture">Cloison plâtre</option>
        <option class="peinture">Cloison sèche</option>
        <option class="peinture">Enduit plâtre</option>
        <option class="peinture">Home staging</option>
        <option class="peinture">Isolation des murs contre l'humidité</option>
        <option class="peinture">Isolation intérieure</option>
        <option class="peinture">Moulure</option>
        <option class="peinture">Mur creux isolation</option>
        <option class="peinture">Papier peint</option>
        <option class="peinture">Parquet flottant - Installation/Réparation</option>
        <option class="peinture">Peinture et décoration (extérieur/intérieur)</option>
        <option class="peinture">Peinture/Décoration tous travaux</option>
        <option class="peinture">Plafond décoratif</option>
        <option class="peinture">Plafond suspendu - Installation/Réparation</option>
        <option class="peinture">Plâtrage</option>
        <option class="peinture">Plâterie tous travaux</option>
        <option class="peinture">Sablage</option>
        <option class="peinture">Autres</option>

        <option class="piscine">Barrière/Clôture piscine - Construction/Réparation</option>
        <option class="piscine">Piscine Construction/Entretien</option>
        <option class="piscine">Piscine hors sol - Installation/Réparation</option>
        <option class="piscine">Piscine nettoyage</option>
        <option class="piscine">Piscine système de sécurité - Installation/Réparation</option>
        <option class="piscine">Piscine tous travaux</option>
        <option class="piscine">Plage de piscine - Installation/Réparation</option>
        <option class="piscine">Spa/Jacuzzi - Installation/Réparation</option>
        <option class="piscine">Autres</option>

        <option class="plomberie">Air conditionné - Installation</option>
        <option class="plomberie">Air conditionné - Réparation/Entretien</option>
        <option class="plomberie">Baignoire/Lavabo/Bidet/Toilette - Installation</option>
        <option class="plomberie">Chaudière Gaz - Installation/Réparation/Entretien</option>
        <option class="plomberie">Chauffage au sol (eau) - Installation/Réparation</option>
        <option class="plomberie">Chauffage central fioul - Installation/Réparation/Entretien</option>
        <option class="plomberie">Chauffage central gaz - Installation/Réparation/Entretien</option>
        <option class="plomberie">Chauffage tous travaux</option>
        <option class="plomberie">Chauffe-eau électrique -  Installation/Réparation/Entretien</option>
        <option class="plomberie">Chauffe-eau gaz -  Installation/Réparation/Entretien</option>
        <option class="plomberie">Connexion réseaux</option>
        <option class="plomberie">Cuisine/Salle de bain fuite</option>
        <option class="plomberie">Cuisinière/Plaque gaz - Installation/Réparation</option>
        <option class="plomberie">Détection Fuite - Extérieur/Intérieur</option>
        <option class="plomberie">Détection fuite gaz</option>
        <option class="plomberie">Douche (électrique) - Installation/Réparation</option>
        <option class="plomberie">Douche (non électrique) - Installation/Réparation</option>
        <option class="plomberie">Douche italienne</option>
        <option class="plomberie">Drain nettoyage/Débouchage</option>
        <option class="plomberie">Gaz inspection/Contrôle sécurité</option>
        <option class="plomberie">Gaz installation</option>
        <option class="plomberie">Machine à laver/Lave-vaiselle - Installation/Réparation</option>
        <option class="plomberie">Plomberie cuisine tous travaux</option>
        <option class="plomberie">Plomberie gaz travaux urgents</option>
        <option class="plomberie">Plomberie tous travaux</option>
        <option class="plomberie">Radiateur à eau - Installation/Réparation/Purge</option>
        <option class="plomberie">Réservoir d'eau - Installation/Réparation</option>
        <option class="plomberie">Résistance plongeante - Installation/Réparation</option>
        <option class="plomberie">Robinet remplacement</option>
        <option class="plomberie">Salle de bain - Design et installation</option>
        <option class="plomberie">Salle de bain tous travaux</option>
        <option class="plomberie">Spa/Jacuzzi - Installation/Réparation</option>
        <option class="plomberie">Système arroseur incendie - Installation/Réparation</option>
        <option class="plomberie">Traitement de l'eau</option>
        <option class="plomberie">Urgent plomberie eau</option>
        <option class="plomberie">Autres</option>

        <option class="portesG">Garage porte automatique - Installation/Réparation</option>
        <option class="portesG">Portail (bois) - Installation/Réparation</option>
        <option class="portesG">Portail (métal) - Installation/Réparation</option>
        <option class="portesG">Portail automatique - Installation/Réparation</option>
        <option class="portesG">Portail tous travaux</option>
        <option class="portesG">Porte de garage tous travaux</option>
        <option class="portesG">Porte de sécurité - Installation/Réparation</option>
        <option class="portesG">Porte garage - Installation/Réparation</option>
        <option class="portesG">Autres</option>

        <option class="portesF">Auvent/Pare soleil - Installation/Réparation</option>
        <option class="portesF">Baies vitrées - Installation/Réparation/Restauration</option>
        <option class="portesF">Chien-assis - Installation/Réparation</option>
        <option class="portesF">Double vitrage - Installation/Réparation</option>
        <option class="portesF">Fenêtre (bois/métal) - Installation/Réparation</option>
        <option class="portesF">Fenêtre (PVC) - Installation/Réparation</option>
        <option class="portesF">Fenêtre à guillotine - Installation/Réparation</option>
        <option class="portesF">Fenêtre tous travaux</option>
        <option class="portesF">Porte d'entrée - Installation/Réparation</option>
        <option class="portesF">Portes PVC (extérieur) - Installation/Réparation</option>
        <option class="portesF">Portes tous travaux</option>
        <option class="portesF">Portes/fenêtres - Installation/Réparation</option>
        <option class="portesF">Stores de véranda - Installation</option>
        <option class="portesF">Véranda - Construction/Réparation</option>
        <option class="portesF">Véranda (PVC) - Construction/Réparation</option>
        <option class="portesF">Véranda réparation</option>
        <option class="portesF">Véranda tous travaux</option>
        <option class="portesF">Verre décoratif - Fabrication/Installation</option>
        <option class="portesF">Verre teinté - Design/Restauration</option>
        <option class="portesF">Vitrage fenêtre</option>
        <option class="portesF">Volet Roulant/Sécurité - Installation/Réparation</option>
        <option class="portesF">Volets (bois/métal) - Installation/Réparation</option>
        <option class="portesF">Volets (PVC) - Installation/Réparation</option>
        <option class="portesF">Autres</option>

        <option class="service">Drain Nettoyage/Débouchage</option>
        <option class="service">Gouttière nettoyage</option>
        <option class="service">Jardin défrichage</option>
        <option class="service">Location de benne</option>
        <option class="service">Nettoyage bureau</option>
        <option class="service">Nettoyage d'allée</option>
        <option class="service">Nettoyage de Moquette</option>
        <option class="service">Nettoyage haute pression</option>
        <option class="service">Nettoyage maison</option>
        <option class="service">Piscine nettoyage</option>
        <option class="service">Poutre sablage</option>
        <option class="service">Sablage</option>
        <option class="service">Sol nettoyage/Polissage</option>
        <option class="service">Autres</option>

        <option class="traitement">Assèchement murs</option>
        <option class="traitement">Bois intérieur protection</option>
        <option class="traitement">Cloison sèche</option>
        <option class="traitement">Dératisation</option>
        <option class="traitement">Désinfection</option>
        <option class="traitement">Désinsectisation</option>
        <option class="traitement">Etanchéité</option>
        <option class="traitement">Humidité tous travaux</option>
        <option class="traitement">Insectes du bois traitement</option>
        <option class="traitement">Isolation des murs contre l'humidité</option>
        <option class="traitement">Remontée capillaire</option>
        <option class="traitement">Traitement du bois tous travaux</option>
        <option class="traitement">Autres</option>
                </select>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>

          <div class="form-group password-form-group">
              <div class="input-with-icon">
                <select class="form-control" name="montant">
                  <option value="Lieu">Commune</option>
                  <option value="60000">60.000 FCFA</option>
                   <option value="60000">60.000 FCFA</option>
                </select>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>

            <div class="form-group email-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Quartier" name="quartier" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>

            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <select class="form-control" name="montant">
                  <option value="30000">30.000 FCFA</option>
                  <option value="60000">60.000 FCFA</option>
                </select>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>

            <div class="row">
               <div class="col-md-12 col-sm-12">
                        <label class="control-label">Description </label>
                        <textarea class="form-control" required data-validation="required" id="work-description" name="reserv_desc"></textarea>
                    </div>
                </div><!-- end row --><br/><br/>

            <div class="form-group">
              <button type="submit" class="btn btn-success full_width spinning-loader"><span class="txt">Envoyer</span><i class="fa fa-circle-o-notch fa-spin"></i></button>
            </div>
          </form>

        </div><!-- /.signup-modal-body -->


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal-container -->
</div><!-- /.modal -->
 -->
</div>

  @endsection
