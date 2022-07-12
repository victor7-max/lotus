<?php

namespace App\Http\Controllers;

use App\Models\property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

public function viewprop()
{
    return view('add-property');
}




    public function addproperty(Request $r)
    {
  /* Add validdation here */
  $this->validate($r, [
    'images.*' => 'image|mimes:jpeg,JPEG,png,jpg|max:5048|required',
    'categories' => 'array|required',
]);
$p = new property();
$p->name = $r->name;
$p->price = $r->price;
$p->description = $r->description;
$p->keyword = $r->keyword;
$p->s_price = $r->s_price;
$p->location = $r->location;
$p->rooms = $r->rooms;
$p->type = $r->type;
$p->area = $r->area;
$p->amenities = $r->amenities;
$p->image = $r->image;
$p->video = $r->video;

$p->save();
dd('request all');


    }
}
