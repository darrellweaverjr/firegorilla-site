<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessSolution;
use App\Resources;

class BusinessSolutionController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => array('index')]);
  }
  public function index()
  {
      $businessSolution = BusinessSolution::all();
      $resources = Resources::all();
      return view('business-solutions/business-solutions', compact('businessSolution', 'resources'));
  }

  public function show($id)
  {
      return BusinessSolution::find($id);
  }

  public function store(Request $request, $id)
  {
    $businessSolution = BusinessSolution::find($id);

    $businessSolution->headerTitle = $request->get('headerTitle');
    $businessSolution->headerSubtitle = $request->get('headerSubtitle');
    $businessSolution->headerBody = $request->get('headerBody');
    $businessSolution->discoverTitle = $request->get('discoverTitle');
    $businessSolution->discoverSubtitle = $request->get('discoverSubtitle');
    $businessSolution->discoverBody = $request->get('discoverBody');
    $businessSolution->attackTitle = $request->get('attackTitle');
    $businessSolution->attackSubtitle = $request->get('attackSubtitle');
    $businessSolution->attackBody = $request->get('attackBody');
    $businessSolution->createTitle = $request->get('createTitle');
    $businessSolution->createSubtitle = $request->get('createSubtitle');
    $businessSolution->createBody = $request->get('createBody');
    // dd($businessSolution);
    $businessSolution->save();

    return redirect('/home')->with('success', 'Business Solutions Page Has Been Updated');

  }

  public function update(Request $request, $id)
  {
      $businessSolution = BusinessSolution::find($id);
      if ($request->hasFile('headerIMG')) {
        $headerIMG = $request->file('headerIMG');
        $headerIMGname = time().'-'.$headerIMG->getClientOriginalName();
        $destinationPath = 'images';
        $businessSolution->headerIMG = $headerIMG->move($destinationPath, $headerIMGname);
        $businessSolution->headerIMG = '/'. $destinationPath . '/'. $headerIMGname;
      }
      $businessSolution->headerTitle = $request->get('headerTitle');
      $businessSolution->headerSubtitle = $request->get('headerSubtitle');
      $businessSolution->headerBody = $request->get('headerBody');
      if ($request->hasFile('sectionOneIMG')) {
        $sectionOneIMG = $request->file('sectionOneIMG');
        $name = time().'-'.$sectionOneIMG->getClientOriginalName();
        $destinationPath = 'images';
        $businessSolution->sectionOneIMG = $sectionOneIMG->move($destinationPath, $name);
        $businessSolution->sectionOneIMG = '/'. $destinationPath . '/'. $name;;
      }else {
        $businessSolution->sectionOneIMG  = "none";
      }
      $businessSolution->discoverTitle = $request->get('discoverTitle');
      $businessSolution->discoverSubtitle = $request->get('discoverSubtitle');
      $businessSolution->discoverBody = $request->get('discoverBody');
      if ($request->hasFile('sectionTwoIMG')) {
        $sectionTwoIMG = $request->file('sectionTwoIMG');
        $name = time().'-'.$sectionTwoIMG->getClientOriginalName();
        $destinationPath = 'images';
        $businessSolution->sectionTwoIMG = $sectionTwoIMG->move($destinationPath, $name);
        $businessSolution->sectionTwoIMG = '/'. $destinationPath . '/'. $name;;
      }else {
        $businessSolution->sectionTwoIMG  = "none";
      }
      $businessSolution->attackTitle = $request->get('attackTitle');
      $businessSolution->attackSubtitle = $request->get('attackSubtitle');
      $businessSolution->attackBody = $request->get('attackBody');
      if ($request->hasFile('sectionThreeIMG')) {
        $sectionThreeIMG = $request->file('sectionThreeIMG');
        $name = time().'-'.$sectionThreeIMG->getClientOriginalName();
        $destinationPath = 'images';
        $businessSolution->sectionThreeIMG = $sectionThreeIMG->move($destinationPath, $name);
        $businessSolution->sectionThreeIMG = '/'. $destinationPath . '/'. $name;;
      }else {
        $businessSolution->sectionThreeIMG  = "none";
      }
      $businessSolution->createTitle = $request->get('createTitle');
      $businessSolution->createSubtitle = $request->get('createSubtitle');
      $businessSolution->createBody = $request->get('createBody');
      // dd($businessSolution->headerTitle);

      $businessSolution->save();

      return redirect('/business-solutions/1/edit')->with('success', 'Show has been updated');

  }
  public function edit($id)
  {
      $businessSolution = BusinessSolution::find($id);
      return view('business-solutions/edit', compact('businessSolution'));
  }
  public function delete(Request $request, $id)
  {
      $businessSolution = BusinessSolution::findOrFail($id);
      $businessSolution->delete();

      return 204;
  }
}
