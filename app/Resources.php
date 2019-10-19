<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    protected $fillable = [
      'resourcesTitle',
      'resourcesDesc',
      'featuredImage',
      'resourcesPDF'
    ];
}
