<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pcategory;
use App\Models\Vcategory;
use App\Models\Vpost;


class VpostController extends Controller
{
  public function index()
  {
    $vcats               = Vcategory::select('id', 'title', 'image', 'updated_at')->OrderBy('id', 'DESC')->get();
    $pcats               = Pcategory::select('id', 'title', 'image', 'updated_at')->OrderBy('id', 'DESC')->get();

    // dd($vpostsHasSameTaqs);
    return view('frontend.vposts.index', [
      'vcats'=>$vcats,
      'pcats'=>$pcats,
    ]);
  }

    public function show($id)
    {
      $vcats               = Vcategory::select('id', 'title', 'image')->get();
      $pcats               = Pcategory::select('id', 'title')->get();

      $myvpost             = Vpost::where('id', $id)->with('vcategory', 'user', 'vtaqs')->first();
      $vpostsHasSameTaqs   = Vpost::where('id', '!=', $myvpost->id)->whereHas('vtaqs', function ($q) use($myvpost){
        return $q->whereIn('vtaqs.id', $myvpost->vtaqs->pluck('id')->ToArray());
      })->OrderBy('id', 'DESC')->limit(5)->get();
      // dd($postsHasSameTaqs);
      return view('frontend.vposts.show', [
        'vcats'=>$vcats,
        'pcats'=>$pcats,
        'myvpost'=>$myvpost,
        'vpostsHasSameTaqs'=>$vpostsHasSameTaqs
      ]);
      // return view('frontend.vposts.show');
    }
}
