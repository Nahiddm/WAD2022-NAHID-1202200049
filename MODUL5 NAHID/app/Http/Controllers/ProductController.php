<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{

    public function index()
    {
        $products=Product::orderBy('id','desc')->get();
        return view('ListCarmobil', compact('products'));
    }

    public function create()
    {
        return view('Addmobil');
    }

    public function store(Request $request)
    {   
        $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                    . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);
        $user = User::find(Auth::id());
        Product::create([
            'name' => $request -> name,
            'user_id' => $request->user_id,
            'owner' => $request -> owner,
            'brand' => $request -> merk,
            'purchase_date' => $request -> tanggal,
            'description' => $request -> deskripsi,
            'image' => $imgName,
            'status' => $request -> status,
        ]);

        return redirect('/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        
        return view('product.edit', compact('product')); 
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);

        $imgName = $product->img_path;
        if ($request->img_path) {
            $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                        . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'), $imgName);
        }

        Product::find($id)->update([
            'nama' => $request -> name,
            'harga' => $request -> price,
            'gambar' => $imgName
        ]);

        return redirect('/product');
    }

    public function destroy($id)
    {   

        Product::find($id)->delete();

        return redirect('/product');  
    }
}
