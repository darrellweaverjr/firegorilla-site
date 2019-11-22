<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NonProfitSolution;
use App\Resources;

class NonprofitSolutionController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => array('index')]);
  }
  public function index()
  {
      $nonProfitSolution = NonProfitSolution::all();
      $resources = Resources::all();
      // dd($nonProfitSolution);
      return view('nonprofit-solutions/nonprofit-solutions', compact('nonProfitSolution', 'resources'));
  }

  public function show($id)
  {
      return NonProfitSolution::find($id);
  }

  public function store(Request $request, $id)
  {
    $nonProfitSolution = NonProfitSolution::find($id);

    $nonProfitSolution->headerTitle = $request->get('headerTitle');
    $nonProfitSolution->headerSubtitle = $request->get('headerSubtitle');
    $nonProfitSolution->headerBody = $request->get('headerBody');
    $nonProfitSolution->sectionOneTitle = $request->get('sectionOneTitle');
    $nonProfitSolution->sectionOneSubtitle = $request->get('sectionOneSubtitle');
    $nonProfitSolution->sectionOneBody = $request->get('sectionOneBody');
    $nonProfitSolution->sectionTwoTitle = $request->get('sectionTwoTitle');
    $nonProfitSolution->sectionTwoSubtitle = $request->get('sectionTwoSubtitle');
    $nonProfitSolution->sectionTwoBody = $request->get('sectionTwoBody');
    $nonProfitSolution->sectionThreeTitle = $request->get('sectionThreeTitle');
    $nonProfitSolution->sectionThreeSubtitle = $request->get('sectionThreeSubtitle');
    $nonProfitSolution->sectionThreeBody = $request->get('sectionThreeBody');
    $nonProfitSolution->save();

    return redirect('/home')->with('success', 'Business Solutions Page Has Been Updated');

  }

  public function update(Request $request, $id)
  {
      $nonProfitSolution = NonProfitSolution::find($id);

      if ($request->hasFile('headerIMG')) {
        $headerIMG = $request->file('headerIMG');
        $headerIMGname = time().'-'.$headerIMG->getClientOriginalName();
        $destinationPath = 'images';
        $nonProfitSolution->$headerIMG = $headerIMG->move($destinationPath, $headerIMGname);
        $nonProfitSolution->$headerIMG = '/'. $destinationPath . '/'. $headerIMGname;
      }
      $nonProfitSolution->headerTitle = $request->get('headerTitle');
      $nonProfitSolution->headerSubtitle = $request->get('headerSubtitle');
      $nonProfitSolution->headerBody = $request->get('headerBody');
      if ($request->hasFile('sectionOneIMG')) {
        $sectionOneIMG = $request->file('sectionOneIMG');
        $sectionOneIMGname = time().'-'.$sectionOneIMG->getClientOriginalName();
        $destinationPath = 'images';
        $nonProfitSolution->sectionOneIMG = $sectionOneIMG->move($destinationPath, $sectionOneIMGname);
        $nonProfitSolution->sectionOneIMG = '/'. $destinationPath . '/'. $sectionOneIMGname;
      }
      $nonProfitSolution->sectionOneTitle = $request->get('sectionOneTitle');
      $nonProfitSolution->sectionOneSubtitle = $request->get('sectionOneSubtitle');
      $nonProfitSolution->sectionOneBody = $request->get('sectionOneBody');
      if ($request->hasFile('sectionTwoIMG')) {
        $sectionTwoIMG = $request->file('sectionTwoIMG');
        $sectionTwoName = time().'-'.$sectionTwoIMG->getClientOriginalName();
        $destinationPath = 'images';
        $nonProfitSolution->sectionTwoIMG = $sectionTwoIMG->move($destinationPath, $sectionTwoName);
        $nonProfitSolution->sectionTwoIMG = '/'. $destinationPath . '/'. $sectionTwoName;
      }
      $nonProfitSolution->sectionTwoTitle = $request->get('sectionTwoTitle');
      $nonProfitSolution->sectionTwoSubtitle = $request->get('sectionTwoSubtitle');
      $nonProfitSolution->sectionTwoBody = $request->get('sectionTwoBody');
      if ($request->hasFile('sectionThreeIMG')) {
        $sectionThreeIMG = $request->file('sectionThreeIMG');
        $sectionThreeIMGname = time().'-'.$sectionThreeIMG->getClientOriginalName();
        $destinationPath = 'images';
        $nonProfitSolution->sectionThreeIMG = $sectionThreeIMG->move($destinationPath, $sectionThreeIMGname);
        $nonProfitSolution->sectionThreeIMG = '/'. $destinationPath . '/'. $sectionThreeIMGname;
      }
      $nonProfitSolution->sectionThreeTitle = $request->get('sectionThreeTitle');
      $nonProfitSolution->sectionThreeSubtitle = $request->get('sectionThreeSubtitle');
      $nonProfitSolution->sectionThreeBody = $request->get('sectionThreeBody');
      // dd($nonProfitSolution->headerTitle);

      $nonProfitSolution->save();

      return redirect('/nonprofit-solutions/1/edit')->with('success', 'Show has been updated');

  }
  public function edit($id)
  {
      $nonProfitSolution = NonProfitSolution::find($id);
      return view('nonprofit-solutions/edit', compact('nonProfitSolution'));
  }
  public function delete(Request $request, $id)
  {
      $nonProfitSolution = NonProfitSolution::findOrFail($id);
      $nonProfitSolution->delete();

      return 204;
  }
}
