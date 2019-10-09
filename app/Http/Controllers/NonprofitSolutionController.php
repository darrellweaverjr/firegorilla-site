<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NonProfitSolution;

class NonprofitSolutionController extends Controller
{
  public function index()
  {
      $nonProfitSolution = NonProfitSolution::all();

      return view('nonprofit-solutions/nonprofit-solutions', compact('nonProfitSolution'));
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
    // dd($nonProfitSolution);
    $nonProfitSolution->save();

    return redirect('/home')->with('success', 'Business Solutions Page Has Been Updated');

  }

  public function update(Request $request, $id)
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
