<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class HomeController extends Controller
{
   public function index()
   {
      $data = [
         'produtos' => Produto::all(),
      ];

      return view("index",$data);
   }

   public function zerbinao()
   {
      $data = [
         'produtos' => Produto::all(),
      ];

      return view("zerbinao",$data);
   }

   public function create(Request $request)
   {
      $insert = Produto::create($request->all());

      if($insert)
      {
         return redirect()->route('admin.index');
      } else {
         echo "erro";
      }
   }

   public function update($id,Request $request)
   {
      $update = Produto::find($id)->update($request->all());

      if($update == true)
      {
         return redirect()->route('admin.index');
      } else 
      {
         dd('ERRROUUUUUU!');
      }
   }

   public function edit($id)
   {
      $data = [
         'produto' => Produto::find($id),
      ];

      return view("edit",$data);
   }

   public function delete($id)
   {
      $data = [
         'produto' => Produto::find($id),
      ];

      return view("delete",$data);
   }
   
   public function destroy($id)
   {
      $delete = Produto::destroy($id);
      
      return redirect()->route('admin.index');
   }
}
