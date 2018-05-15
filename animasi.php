              <section class="hero is-fullheight">
                <p class="red">UCAPAN</p>
                <div class="hero-body">

                  <div class="container">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="padingkanankiri">
                          <?php 
                          $ambil = mysqli_query($koneksi,"SELECT * FROM lomba WHERE kategori LIKE '4'");
                          while($baris = mysqli_fetch_array($ambil )) {

                           ?>

                           <div class="card1">
                            <div>
                              <text class="juara1"><?php echo $baris['judul'] ?></text>
                              <text class="floatright"><?php echo $baris['nama'] ?></text>
                            </div>
                            <div class="padingatasbawah20 font10">
                              <?php echo $baris['deskripsi'] ?>
                            </div>
                          </div>
                          <?php } ?> 

                        </div>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md-3">
                        <div>
                          <div class="padingkanankiri putih">
                            <a href="index.php?halaman=web" class="button fullwidth">Web Design</a>
                            <a href="index.php?halaman=it" class="button fullwidth">IT Software</a>
                            <a href="index.php?halaman=design" class="button fullwidth">Design Grafis</a>
                            <a href="index.php?halaman=animasi" class="button is-danger fullwidth">Animasi</a>
                            <a class="button fullwidth">Lainnya</a>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </section>