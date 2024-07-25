<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class CategoryController extends Controller
{
    //
    private $view;
    public function __construct()
    {
        $this->view = [];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objCate = new categories();
        $this->view['listCate'] = $objCate->LoadAllDataCategory();
        return view('category.index', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $objCate = new Category();
        // $this->view['listCate'] = $objCate ->LoadAllDataCategory();
        // // DD($this->view['listCate']);

        // return view('product.create',$this->view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
    //     $validate = $request->validate(
    //         [
    //             'name' => ['required', 'string', 'max:255'],
    //             'price' => ['required', 'integer', 'min:1'],
    //             'quantity' => ['required', 'integer', 'min:1'],
    //             'image' => ['required', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
    //             'category_id' => ['required', 'exists:categories,id'],
    //         ],
    //         [
    //             'name.required' => 'Trường tên không được bỏ trống',
    //             'name.string' => 'Trường tên yêu cầu bắt buộc kiểu dữ liệu kí tự',
    //             'name.max' => 'Trường tên không được qua 255 kí tự',
    
    //             // Lab 5

    //         ]
    //     );
    // }
    

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
