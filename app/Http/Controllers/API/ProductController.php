<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
         return response()->json([
          /*'status'=> 200,*/
            'product'=> $product,
         ]);
     }
     public function store(Request $request)
     {
         $product = new Product;
         $product->nom = $request->input('nom');
         $product->type = $request->input('type');
         $product->modele = $request->input('modele');
         $product->prix = $request->input('prix');
         $product->save();

         return response()->json([
             'status'=> 200,
             'message'=>' produit Added Successful',
         ]);
     }
     public function edit($id)
     {
         $pproduct = Product::find($id);
         return response()->json([
             /*'status'=> 200,*/
             'product'=> $product,
            ]);

     }
     public function update(Request $request, $id)
     {
        $product = new Product;
        $product->nom = $request->input('nom');
        $product->type = $request->input('type');
        $product->modele = $request->input('modele');
        $product->prix = $request->input('prix');
        $product->update();

         return response()->json([
             'status'=> 200,
             'message'=>'product Update Successfully',
         ]);
     }
     public function destroy($id)
     {
         $product = Product::find($id);
         $product -> delete();

         return response()->json([
             'status'=> 200,
             'message'=>'product deleted Successfully',
         ]);
     }
}
