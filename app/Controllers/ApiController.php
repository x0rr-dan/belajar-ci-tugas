<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

use App\Models\UserModel;
use App\Models\TransactionModel;
use App\Models\TransactionDetailModel;

class ApiController extends ResourceController
{
    protected $apikey;
    protected $user;
    protected $transaction;
    protected $transaction_detail;

    function __construct()
    {
        $this->apikey = env('API_KEY');
        $this->user = new UserModel();
        $this->transaction = new TransactionModel();
        $this->transaction_detail = new TransactionDetailModel();
    }

    public function index()
        {
            $data = [ 
                'results' => [],
                'status' => ["code" => 401, "description" => "Unauthorized"]
            ];

            $headers = $this->request->headers(); 

            array_walk($headers, function (&$value, $key) {
                $value = $value->getValue();
            });

            if(array_key_exists("Key", $headers)){
                if ($headers["Key"] == $this->apikey) {
                    $penjualan = $this->transaction->findAll();

                    foreach ($penjualan as &$pj) {
                        $details = $this->transaction_detail->where('transaction_id', $pj['id'])->findAll();

                        // Tambah jumlah item
                        $pj['jumlah_item'] = array_sum(array_column($details, 'jumlah'));

                        // Optional: ubah status angka jadi teks
                        $pj['status'] = $pj['status'] == 1 ? 'Selesai' : 'Belum Diproses';

                        $pj['details'] = $details;
                    }

                    $data['status'] = ["code" => 200, "description" => "OK"];
                    $data['results'] = $penjualan;
                }
            } 

            return $this->respond($data);
        }




    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}