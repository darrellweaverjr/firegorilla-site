<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencySolution extends Model
{
  protected $fillable = [
    'headerTitle',
    'headerSubtitle',
    'headerBody',
    'sectionOneTitle',
    'sectionOneSubtitle',
    'sectionOneBody',
    'sectionTwoTitle',
    'sectionTwoSubtitle',
    'sectionTwoBody',
    'sectionThreeTitle',
    'sectionThreeSubtitle',
    'sectionThreeBody'
  ];
}
