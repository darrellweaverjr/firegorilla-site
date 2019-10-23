<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Services;

class ServicesController extends Controller
{
  public function index()
  {
      $services = Services::all();
      $agencySerices = Services::where('featuresCategory', '=', 'Agency Services')->get();
      $businessSerices = Services::where('featuresCategory', '=', 'Business Services')->get();
      return view('services.services', compact('services', 'agencySerices', 'businessSerices'));
  }

  public function show($id)
  {
      return Services::find($id);
  }

  public function store(Request $request)
  {
    $services = new Services();
    $services->featuresCategory = $request->get('featuresCategory');
    $services->feature = $request->get('feature');
    $services->agencyServices = $request->get('agencyServices');
    $services->businessServices = $request->get('businessServices');

    if($services->agencyServices == null) {
      $services->agencyServices = "0";
    }

    if($services->businessServices == null) {
      $services->businessServices = "0";
    }

    // dd($services);

    $services->save();
    return redirect('all/services')->with('success', 'A New Service Has Been Added');
  }
  public function allServices()
  {
      $services = Services::all();
      // dd($services);
      return view('services.all', compact('services'));
  }
  public function update(Request $request, $id)
  {
      $services = Services::findOrFail($id);
      $services->featuresCategory = $request->get('featuresCategory');
      $services->feature = $request->get('feature');
      $services->agencyServices = $request->get('agencyServices');
      $services->businessServices = $request->get('businessServices');

      if($services->agencyServices == null) {
        $services->agencyServices = "0";
      }

      if($services->businessServices == null) {
        $services->businessServices = "0";
      }

      $services->update($request->all());
      return redirect('all/services')->with('success', 'A Service Has Been Updated');
  }
  public function edit($id)
  {
      $services = Services::find($id);

      return view('services.edit', compact('services'));
  }
  public function create()
  {
    return view('services.create');
  }
  public function destroy(Request $request, $id)
  {
      $services = Services::findOrFail($id);
      $services->delete();

      return view('services.edit', compact('services'));
  }
}
