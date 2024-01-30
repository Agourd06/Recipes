<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RecetteController extends Controller
{
   public function CreateRecipe(Request $request){

      $data = $request->validate([

         'Title' => 'required',
         'Desc' => 'required'
      ]);
      $data['Title'] = strip_tags($data['Title']);
      $data['Desc'] = strip_tags($data['Desc']);
      $data['user_id'] = auth()->id();
      Recipe::Create($data);
      return redirect('recettePage');
   }
}
