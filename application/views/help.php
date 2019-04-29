<?php $this->load->view('_layout/header') ?>

        <div class="jumbotron">
            <h1 class="display-4"><center>Panduan Penggunaan</center></h1>
        </div>
        <!-- end jumbotron -->

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <ul>
                        <li>
                            <h3><p>Terdapat menu yaitu beranda, data buku, data kategori dan help.</p></h3>
                            <h5>A. Sebelum memasuki website user harus login terlebih dahulu</h5>
                            <h5>Dengan username “admin” password “admin”, setelah mengisikan maka user dapat masuk ke website</h5>
                            <hr>

                            <h5>B.  Beranda menampilkan halaman awal setelah user melakukan login, yang menampilkan menu di navbar yaitu : Beranda, Data Buku, Data Kategori dan Help.
                            Pada beranda terdapat button untuk melakukan lihat buku yang menuju halaman data buku.</h5>
                            <hr>

                            <h5>C. Data Buku</h5>
                            <h6>Didalam data buku terdapat fitur yaitu :</h6>
                            <h6>1.  Tambah Data, untuk menambahkan data buku, jika sudah ditambahkan maka akan tertampil di halaman data buku</h6>
                            <h6>2.  Tabel informasi buku, hasil data dari tambah data</h6>
                            <h6>3.  Aksi edit yaitu untuk mengubah data pada field yang dipilih</h6>
                            <h6>4.  Aksi hapus yait untuk meghapus pada field yang dipilih </h6>
                            <h6>5.  Button pagnation untuk melihat data halaman selanjutnya</h6>
                            <hr>

                            <h5>D. Kategori Buku</h5>
                            <h6>Didalam Data Kategori terdapat fitur yaitu :</h6>
                            <h6>1.  Tambah Data, untuk menambahkan nama kategori buku</h6>
                            <h6>2.  Tabel informasi kategori menampilkan data dari kategori buku</h6>
                            <h6>3.  Aksi edit yaitu untuk mengubah data pada field yang dipilih</h6>
                            <h6>4.  Aksi hapus yait untuk meghapus pada field yang dipilih </h6>
                            <hr>

                            <h5>E. Help </h5>
                            <p> Help menampilkan mengenai panduan penggunaan web buku, dijelaskan fitur dan isi dalam website. </p>
                            <h5>Secara umum tampilan data kategori dengan data buku sama namun yang membedakan antara keduanya adalah setiap buku mimiliki kategori atau jenis buku, data buku menampilakn semua buku yang ada.</h5>
                        </li>
                    </ul>
                  
                </div>
                <div class="col-md-2"></div>
            </div>   
        </div> 
        <!-- end row -->

<?php $this->load->view('_layout/footer') ?>
        

