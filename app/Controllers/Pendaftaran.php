<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;

class Pendaftaran extends BaseController
{
 public function index()
 {
  $pendaftaran = new PendaftaranModel();
  $data = $pendaftaran->findAll();


  return view('view_pendaftaran',['data'=> $data]);
 }
 public function tambah_siswa(){
    return view('view_tambah');
 }
 public function save_tambah(){
  $tambah = new PendaftaranModel();
  $tambah->insert($this->request->getPost());
  return redirect()->to(base_url('/'));
 }
 public function edit($id=false){
$edit = new PendaftaranModel();
$data = $edit->find($id);
return view('view_edit',['data'=>$data]);
 }
 public function save_edit(){
  $tambah = new PendaftaranModel();
  $tambah->update($this->request->getPost('id'),$this->request->getPost());
  return redirect()->to(base_url('/'));
 }
 public function delete($id=false){
$delete = new PendaftaranModel();
$delete->delete($id);
return redirect()->to(base_url('/'));
 }
}
