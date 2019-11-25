<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\ServicesPage;

class ServicesPageController extends Controller
{

  public function show($id)
  {
      $servicesPage = ServicesPage::all();
      return view('services.servicesPage', compact('servicesPage'));
  }

  public function store(Request $request)
  {
      $servicesPage = new ServicesPage();
      $servicesPage->save();
      return redirect('all/services')->with('success', 'A New Service Has Been Added');
  }
  public function update(Request $request, $id)
  {
    $servicesPage = ServicesPage::findOrFail($id);

    if ($request->hasFile('headerIMG')) {
      $headerIMG = $request->file('headerIMG');
      $headerIMGname = time().'-'.$headerIMG->getClientOriginalName();
      $destinationPath = 'images';
      $servicesPage->headerIMG = $headerIMG->move($destinationPath, $headerIMGname);
      $servicesPage->headerIMG = '/'. $destinationPath . '/'. $headerIMGname;
    }
    $servicesPage->pageTitle = $request->get('pageTitle');
    $servicesPage->serivces_title = $request->get('serivces_title');
    $servicesPage->serivces_desc = $request->get('serivces_desc');
    $servicesPage->serivce_price = $request->get('serivce_price');
    $servicesPage->spend_title = $request->get('spend_title');
    $servicesPage->spend_desc = $request->get('spend_desc');
    $servicesPage->spend_price = $request->get('spend_price');
    $servicesPage->pageCTA = $request->get('pageCTA');
    $servicesPage->update($request->all());
    return redirect('/servicespage/1/edit')->with('success', 'A Service Has Been Updated');
  }
  public function edit($id)
  {
      $servicesPage = ServicesPage::find($id);
      // dd($servicesPage);
      return view('services.servicesPageUpdate', compact('servicesPage'));
  }
  public function create()
  {
    return view('services.servicesPage');
  }
  public function destroy(Request $request, $id)
  {
      $servicesPage = ServicesPage::findOrFail($id);
      $servicesPage->delete();
      return view('services.edit', compact('services'));
  }
}
