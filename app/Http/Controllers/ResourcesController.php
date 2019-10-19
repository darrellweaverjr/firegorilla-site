<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Resources;

use Carbon\Carbon;

class ResourcesController extends Controller
{
  public function index()
  {
      $resources = Resources::all();
      return view('resources.resources', compact('resources'));
  }

  public function show($id)
  {
      return Resources::find($id);
  }

  public function store(Request $request)
  {
    $resources = new Resources();

    if ($request->hasFile('featuredImage')) {
      $featuredImage = $request->file('featuredImage');
      $name = time().'.'.$featuredImage->getClientOriginalExtension();
      $destinationPath = 'images';
      $resources->featuredImage = $featuredImage->move($destinationPath, $name);
      $resources->featuredImage = '/'. $destinationPath . '/'. $name;;
    }else {
      $resources->featuredImage  = "none";
    }

    if ($request->hasFile('resourcesPDF')) {
      $resourcesPDF = $request->file('resourcesPDF');
      $name = time().'.'.$resourcesPDF->getClientOriginalExtension();
      $destinationPath = 'pdf';
      $resources->resourcesPDF = $resourcesPDF->move($destinationPath, $name);
      $resources->resourcesPDF = '/'. $destinationPath . '/'. $name;;
    } else {
      $resources->resourcesPDF  = "none";
    }

    $resources->resourcesTitle = $request->get('resourcesTitle');
    $resources->resourcesDesc = $request->get('resourcesDesc');

    // dd($resources);

    $resources->save();
    return redirect('resources/all')->with('success', 'A New Resource Has Been Added');
  }
  public function allResources()
  {
      $resources = Resources::all();
      return view('resources.all', compact('resources'));
  }
  public function update(Request $request, $id)
  {
      $resources = Resources::findOrFail($id);
      $resources->update($request->all());

      return $resources;
  }
  public function create()
  {
    return view('resources.create');
  }
  public function delete(Request $request, $id)
  {
      $resources = Resources::findOrFail($id);
      $resources->delete();

      return 204;
  }
}
