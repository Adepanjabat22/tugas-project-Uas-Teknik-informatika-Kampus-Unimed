<?php include "header.php"; ?>

        <div class="jumbotron">
            <div class="container">
                  <div class="row">
                        <div class="col-md-12"> 
                          <h1>KOTAK SARAN UNIVERSITAS NEGERI MEDAN</h1>
                        </div>
                  </div>
            </div>
      </div> 

      <div class="container">
            <div class="row">
                  <div class="col-md-12">

                        <?php 

                              if(@$_GET['pesan']=="inputBerhasil"){

                              ?>
                                                      <div class="alert alert-success">
                                                      Terima kasih, pesan anda sudah terkirim!
                                                      </div>
                              <?php

                              }

                              ?>
                        
                  <form action="proses-komentar.php" method="post">
                        <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Isikan Nama anda..">
                        </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Isikan Email anda..">
                        </div>
                        <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan"class="form-control"></textarea>
                        </div><br>
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                  </form>
                  </div>
            </div>
      </div><br><br>

      <?php include "footer.php"; ?>