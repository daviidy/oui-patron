<?php

namespace App\Http\Controllers;

use App\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (Auth::check()) {
        $demandes = Demande::where('etudiant', Auth::user()->name)->orderby('date', 'asc')->get();
        return view('demandes.index', ['demandes' => $demandes]);
      }
      elseif (Auth::user()->isTeacher()) {
        return view('demandes.index');
      }
    else {
      return redirect('home');
    }


  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
      if (Auth::check() && Auth::user()->isTeacher()) {
        return view('demandes.ajouter');
      }
      else {
        return redirect('home');
      }

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $demande = Demande::create($request->all());
    return redirect('demandes')->with('status', 'Votre demande a bien été prise en compte. Nous vous contacterons sous peu.');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Demande  $demande
   * @return \Illuminate\Http\Response
   */
  public function show(Demande $demande)
  {
      //
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Demande  $demande
   * @return \Illuminate\Http\Response
   */
  public function edit(Demande $demande)
  {
      return view('demandes.edit', ['demande' => $demande]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Demande  $demande
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Demande $demande)
  {
      $demande->update($request->all());

      $detail=$request->commentaire;

      $dom = new \domdocument();
      $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

      $images = $dom->getelementsbytagname('img');

      foreach($images as $k => $img){
          $data = $img->getattribute('src');

          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);

          $data = base64_decode($data);
          $image_name= time().$k.'.png';
          $path = public_path() .'/img/demandes/'. $image_name;

          file_put_contents($path, $data);

          $img->removeattribute('src');
          $img->setattribute('src', '/img/demandes/'. $image_name);
      }

      $detail = $dom->savehtml();
      $demande->commentaire = $detail;
      $demande->save();
      return redirect('demandes')->with('status', 'Vos informations ont bien été entregistrées !');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Demande  $demande
   * @return \Illuminate\Http\Response
   */
  public function destroy(Demande $demande)
  {
      //
  }
}
