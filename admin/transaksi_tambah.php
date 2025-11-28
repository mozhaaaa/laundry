<?php include 'header.php'; ?>
<?php
// koneksi database
include '../koneksi.php';
?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Transaksi Laundry Baru</h4>
        </div>
        <div class="panel-body">

            <div class="col-md-8 col-md-offset-2">
                <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                <br/><br/>

                <form method="post" action="transaksi_aksi.php">
                    <div class="form-group">
                        <label>Pelanggan</label>
                        <select class="form-control" name="pelanggan" required="required">
                            <option value="">- Pilih Pelanggan -</option>
                            <?php
                            // ambil data pelanggan dari database
                            $data = mysqli_query($koneksi, "select * from pelanggan");
                            while($d = mysqli_fetch_array($data)){
                            ?>
                                <option value="<?php echo $d['pelanggan_id']; ?>">
                                    <?php echo $d['pelanggan_nama']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Berat (Kg)</label>
                        <input type="number" class="form-control" name="berat" placeholder="Masukkan berat cucian ..." required="required">
                    </div>

                    <div class="form-group">
                        <label>Tgl. Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai" required="required">
                    </div>

                    <br/>

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Jenis Pakaian</th>
                            <th width="20%">Jumlah</th>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian1"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian2"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian2"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian3"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian3"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian4"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian4"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian5"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian5"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian6"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian6"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian7"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian7"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian8"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian8"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian9"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian9"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian10"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian10"></td>
                        </tr>
                    </table>

                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>