<?php

namespace App\Controllers;

use App\Models\ProductCategoryModel;

class ProdukCategoryController extends BaseController
{
    protected $product_category; 

    function __construct()
    {
        $this->product_category = new ProductCategoryModel();
    }

    public function index()
    {
        $product_category = $this->product_category->findAll();
        $data['product_category'] = $product_category;

        return view('v_produk_category', $data);
    }

    public function create()
    {
        $dataForm = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'created_at' => date("Y-m-d H:i:s")
        ];
        
        $this->product_category->insert($dataForm);

        return redirect('produkcategory')->with('success', 'Data Berhasil Ditambah');
    }
    public function edit($id)
    {
        $dataProduk = $this->product_category->find($id);
    
        $dataForm = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'updated_at' => date("Y-m-d H:i:s")
        ];

        $this->product_category->update($id, $dataForm);
    
        return redirect('produkcategory')->with('success', 'Data Berhasil Diubah');
    }
    
    public function delete($id)
    {
        $dataProdukCategory = $this->product_category->find($id);
    
        $this->product_category->delete($id);
    
        return redirect('produkcategory')->with('success', 'Data Berhasil Dihapus');
    }
}