<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AgencySolution;
use App\Resources;

class AgencySolutionController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => array('index')]);
  }
  public function index()
  {
      $agencySolution = AgencySolution::all();
      $resources = Resources::all();
      return view('agency-solutions/agency-solutions', compact('agencySolution', 'resources'));
  }

  public function show($id)
  {
      return AgencySolution::find($id);
  }

  public function store(Request $request, $id)
  {
    $agencySolution = AgencySolution::find($id);

    $agencySolution->headerTitle = $request->get('headerTitle');
    $agencySolution->headerSubtitle = $request->get('headerSubtitle');
    $agencySolution->headerBody = $request->get('headerBody');
    $agencySolution->discoverTitle = $request->get('discoverTitle');
    $agencySolution->discoverSubtitle = $request->get('discoverSubtitle');
    $agencySolution->discoverBody = $request->get('discoverBody');
    $agencySolution->attackTitle = $request->get('attackTitle');
    $agencySolution->attackSubtitle = $request->get('attackSubtitle');
    $agencySolution->attackBody = $request->get('attackBody');
    $agencySolution->createTitle = $request->get('createTitle');
    $agencySolution->createSubtitle = $request->get('createSubtitle');
    $agencySolution->createBody = $request->get('createBody');
    // dd($agencySolution);
    $agencySolution->save();

    return redirect('/home')->with('success', 'Business Solutions Page Has Been Updated');

  }

  public function update(Request $request, $id)
  {
      $agencySolution = AgencySolution::find($id);

      $agencySolution->headerTitle = $request->get('headerTitle');
      $agencySolution->headerSubtitle = $request->get('headerSubtitle');
      $agencySolution->headerBody = $request->get('headerBody');
      $agencySolution->sectionOneTitle = $request->get('sectionOneTitle');
      $agencySolution->sectionOneSubtitle = $request->get('sectionOneSubtitle');
      $agencySolution->sectionOneBody = $request->get('sectionOneBody');
      $agencySolution->sectionTwoTitle = $request->get('sectionTwoTitle');
      $agencySolution->sectionTwoSubtitle = $request->get('sectionTwoSubtitle');
      $agencySolution->sectionTwoBody = $request->get('sectionTwoBody');
      $agencySolution->sectionThreeTitle = $request->get('sectionThreeTitle');
      $agencySolution->sectionThreeSubtitle = $request->get('sectionThreeSubtitle');
      $agencySolution->sectionThreeBody = $request->get('sectionThreeBody');
      // dd($agencySolution->headerTitle);

      $agencySolution->save();

      return redirect('/agency-solutions/1/edit')->with('success', 'Show has been updated');

  }
  public function edit($id)
  {
      $agencySolution = AgencySolution::find($id);
      return view('agency-solutions/edit', compact('agencySolution'));
  }
  public function delete(Request $request, $id)
  {
      $agencySolution = AgencySolution::findOrFail($id);
      $agencySolution->delete();

      return 204;
  }
}
