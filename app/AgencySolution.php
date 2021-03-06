<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencySolution extends Model
{
  protected $fillable = [
    'headerIMG',
    'headerTitle',
    'headerSubtitle',
    'headerBody',
    'sectionOneIMG',
    'sectionOneTitle',
    'sectionOneSubtitle',
    'sectionOneBody',
    'sectionTwoIMG',
    'sectionTwoTitle',
    'sectionTwoSubtitle',
    'sectionTwoBody',
    'sectionThreeIMG',
    'sectionThreeTitle',
    'sectionThreeSubtitle',
    'sectionThreeBody'
  ];
}
