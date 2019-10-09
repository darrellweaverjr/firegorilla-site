<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessSolution;

class BusinessSolutionController extends Controller
{
  public function index()
  {
      $businessSolution = BusinessSolution::all();
      return view('business-solutions/business-solutions', compact('businessSolution'));
  }

  public function show($id)
  {
      return BusinessSolution::find($id);
  }

  public function store(Request $request)
  {
      return redirect('/business-solutions/1/edit')->with('success', 'Business Solutions Page Has Been Updated');

  }

  public function update(Request $request, $id)
  {
      $businessSolution = BusinessSolution::findOrFail($id);
      $businessSolution->update($request->all());

      return $businessSolution;
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
