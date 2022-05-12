<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->save();
        return redirect()->back();
    }

    public function add()
    {
        return view('add');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');

        $product->update();
        return redirect()->back();
     }

}