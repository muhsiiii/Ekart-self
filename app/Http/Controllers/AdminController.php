<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function Login()
    {
        return view('admin.login');
    }

    public function DoLogin()
    {
        // $input=request()->all();
        // return $input;

        $input = request()->only(['username', 'password']);
        if (auth()->guard('admin')->attempt($input)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
        // return $input;
    }

    public function AdminDashboard()
    {
        return view('admin.adminhome');
    }

    public function ProductList()
    {
        $products = Product::latest()->paginate(15);
        return view('admin.products.product_list', compact('products'));
    }

    public function ProductCreate()
    {
        $Categories = category::all();
        return view('admin.products.product_create', compact('Categories'));
    }

    public function ProductSave(Request $request)
    {


        $image = $request->file('pimage');
        $filename = "products/" . time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('products'), $filename);

        Product::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status,
            'is_favourite' => $request->favourite,
            'image' => $filename,
        ]);

        $data['success'] = 'success';
        echo json_encode($data);
    }


    public function ProductDelete(Request $request)
    {
        $product_id = $request->pid;

        $product = Product::find($product_id);
        if (Storage::disk('products')->exists($product->image)) {
            Storage::disk('products')->delete($product->image);
        }
        $product->delete();

        $data['success'] = 'success';
        echo json_encode($data);
    }
}
