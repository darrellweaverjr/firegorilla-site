<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessSolution extends Model
{
  protected $fillable = [
    'headerTitle',
    'headerSubtitle',
    'headerBody',
    'sectionOneIMG',
    'discoverTitle',
    'discoverSubtitle',
    'discoverBody',
    'sectionTwoIMG',
    'attackTitle',
    'attackSubtitle',
    'attackBody',
    'sectionThreeIMG',
    'createTitle',
    'createSubtitle',
    'createBody'
  ];
}
