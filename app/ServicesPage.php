<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesPage extends Model
{
  public function services()
  {
    return $this->belongsTo(Services::class);
  }
  protected $fillable = [
    'headerIMG',
    'pageTitle',
    'serivces_title',
    'serivces_desc',
    'serivce_price',
    'spend_title',
    'spend_desc',
    'spend_price',
    'pageCTA'
  ];
}
