<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>mahasiswa</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">mahasiswa</div>
            </div>
          </div>

          <div class="section-body">
           

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Daftar mahasiswa</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                           
                                <th>id mahasiswa</th>
                                <th>nama</th>
                                <th>nim</th>
                                <th>no_hp</th>
                                <th>email</th>
                                <th>jurusan</th>
                                <th>foto profil</th>
                                <th>alamat</th>
                          </tr>
                        </thead>
                        <tbody> 
                            <?php foreach ($mahasiswa as $row):?>
                                <tr>
                                    <td><?= $row->id_mhs; ?></td>
                                    <td><?= $row->nama; ?></td>
                                    <td><?= $row->nim; ?></td>
                                    <td><?= $row->no_hp; ?></td>
                                    <td><?= $row->email; ?></td>
                                    <td><?= $row->jurusan; ?></td>
                                    <td><?= $row->foto_profil; ?></td>
                                    <td><?= $row->alamat; ?></td>
                                    <td></td>

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