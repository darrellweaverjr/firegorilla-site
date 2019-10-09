<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessSolution extends Model
{
  protected $fillable = [
    'headerTitle',
    'headerSubtitle',
    'headerBody',
    'discoverTitle',
    'discoverSubtitle',
    'discoverBody',
    'attackTitle',
    'attackSubtitle',
    'attackBody',
    'createTitle',
    'createSubtitle',
    'createBody'
  ];
}
