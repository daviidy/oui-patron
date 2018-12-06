<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Auth;

class JobController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (Auth::check()) {
        $jobs = Job::orderby('id', 'asc')->paginate(30);
        return view('jobs.index', ['jobs' => $jobs]);
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
      if (Auth::check() && Auth::user()->isAdmin()) {
        return view('jobs.create');
      }
      else {
        return redirect('/');
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
    $job = Job::create($request->all());
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
        $path = public_path() .'/img/jobs/'. $image_name;

        file_put_contents($path, $data);

        $img->removeattribute('src');
        $img->setattribute('src', '/img/jobs/'. $image_name);
    }

    $detail = $dom->savehtml();
    $job->commentaire = $detail;
    $job->save();

    return redirect('jobs')->with('status', 'Le métier a bien été ajouté dans la base de données');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Job  $job
   * @return \Illuminate\Http\Response
   */
  public function show(Job $job)
  {
      return view('jobs.show', ['job' => $job]);
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Job  $job
   * @return \Illuminate\Http\Response
   */
  public function edit(Job $job)
  {
      return view('jobs.edit', ['job' => $job]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Job  $job
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Job $job)
  {
      $job->update($request->all());

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
          $path = public_path() .'/img/jobs/'. $image_name;

          file_put_contents($path, $data);

          $img->removeattribute('src');
          $img->setattribute('src', '/img/jobs/'. $image_name);
      }

      $detail = $dom->savehtml();
      $job->commentaire = $detail;
      $job->save();
      return redirect('jobs')->with('status', 'Vos informations ont bien été entregistrées !');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Job  $job
   * @return \Illuminate\Http\Response
   */
  public function destroy(Job $job)
  {
      //
  }
}
