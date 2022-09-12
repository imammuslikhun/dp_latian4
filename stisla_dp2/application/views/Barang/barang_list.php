<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data barang</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Barang</div>
            </div>
          </div>

          <div class="section-body">
          

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List Daftar Barang</h4>
                  </div>
                  <div class="card-body">
                  <a href="barang/add" class="btn btn-primary">tambah data</a>
                    </div>
                  
                  <div class="card-body">
                  
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            
                            <th>nama barang</th>
                            <th>harga satuan</th>
                            <th>action</th>
                           
                          </tr>
                        </thead>
                        <tbody>  
                            <?php foreach ($barang as $row): ?>
                                <tr>
                                    <td><?= $row->nama_barang; ?></td>
                                    <td><?= $row->harga_satuan; ?></td>
                                    <td>
                                        <a href="barang/edit/<?= $row->id_barang; ?>" class="btn btn-warning">edit</a>
                                        <a href="barang/hapus/<?= $row->id_barang; ?>" class="btn btn-danger">hapus</a>
                                    </td>
                                </tr>

                                <?php endforeach; ?>
                                

                                                           
                   
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>