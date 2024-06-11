<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Pendaftaran extends ResourceController
{
    protected $format = 'json';
    protected $modelName = '\App\Models\PendaftaranModel';
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        if(!$this->model->find($id)){
            return $this->failNotFound("Data dengan id $id tidak ditemukan");
        }
        return $this->respond($this->model->find($id));
    }

    public function create()
    {
        $data = $this->request->getPOST();
        $pendaftaran = new \App\Entities\Pendaftaran();
        $pendaftaran->fill($data);
        if(!$this->validate($this->model->validationRules, $this->model->validationMessages)){
            return $this->fail($this->validator->getErrors());
        }
        if($this->model->save($pendaftaran)){
            return $this->respondCreated($data);
        }
    }

    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;
        if (!$this->model->find($id)) {
            return $this->failNotFound("Data dengan id {$id} tidak ditemukan");
        }
        $pendaftaran = new \App\Entities\Pendaftaran();
        $pendaftaran->fill($data);
        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
            return $this->fail($this->validator->getErrors());
        }
        if ($this->model->save($pendaftaran)) {
            return $this->respondUpdated($data);
        }
    }
    public function delete($id = null)
    {
        if(!$this->model->find($id)){
            return $this->failNotFound("Data dengan id $id tidak ditemukan");
        }
        if($this->model->delete($id)){
            return $this->respondDeleted("Data dengan id $id berhasil dihapus");
        }
    }
}
