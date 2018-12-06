@extends('layouts.form-job')
@section('title', 'Ajouter un métier')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ route('jobs.store') }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Ajouter un nouveau métier
        </span>
        {{ csrf_field() }}



        <div class="wrap-input100 validate-input">
          <label for="">Titre</label>
          <input class="input100" value="" type="text" name="nom" placeholder="Menuiserie" required>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input">
          <textarea id="summernote" required class="input100" name="commentaire" placeholder="Faites ici un commentaire de la séance ...."></textarea>
        </div>

        <div class="wrap-input100 validate-input">
          <label for="">Choisis une image correspondant à ce métier</label>
          <input class="input100" value="{{Auth::user()->id}}" type="file" name="photo1" placeholder="">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>


        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Ajouter le parcours
          </button>
        </div>


        <div class="text-center p-t-136">
          <a class="txt2" href="{{url('home')}}">
            Allez à la page d'accueil
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection
