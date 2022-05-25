<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
// use CodeIgniter\HTTP\RequestTrait;
// use CodeIgniter\HTTP\ResponseTrait as HTTPResponseTrait;
use App\Models\ModRest;
use Error;

class Rest extends BaseController
{
    use ResponseTrait;
    function __construct()
    {
        $this->MR = new ModRest();
    }
    public function index()
    {
        $data = $this->MR->select('key, value, file')->findAll();
        $data['info'] = $this->request->getMethod();
        $data['post'] = $this->request->getPost();
        // $data['tes'] = ['status' => 'ok'];
        return $this->respond($data, 200);
    }

    public function show($key = '')
    { //get
        $data = $this->MR->where('key', $key)->findAll();
        if ($data) {
            return $this->respond($data, 200);
        } else {
            return $this->failNotFound();
        }
    }
    public function create()
    { //post
        $data = $this->request->getPost();
        if ($data === null) {
            return $this->fail($this->MR->errors());
        }
        if (!$this->MR->save($data)) {
            return $this->fail($this->MR->errors());
        }
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Berhasil menambah data'
            ]
        ];
        $this->respond($response);
    }

    public function update($id = '')
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;
        $updatedata = $this->MR->where('id', $id)->findAll();
        if (!$updatedata) {
            return $this->failNotFound();
        }
        if (!$this->MR->save($data)) {
            return $this->fail($this->MR->errors());
        }
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => "Berhasil mengubah data pada id $id"
            ]
        ];
        return $this->respond($response, 200);
    }
    public function delete($id = '')
    {
        $deletedata = $this->MR->where('id', $id)->findAll();
        if ($deletedata) {
            $this->MR->delete($id);
            $response = [
                'status' => 201,
                'error' => null,
                'messages' => [
                    'success' => "Data $id berhasil dihapus"
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan');
        }
    }
}
