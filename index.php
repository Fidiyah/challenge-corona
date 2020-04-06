<?php
include 'koneksi.php';
$sql = "SELECT * FROM  nilai";
$res = mysqli_query($koneksi, $sql);
$corona = array();
while ($data = mysqli_fetch_assoc($res)) {
    $corona[] = $data;
}
?>
<?php
include 'assets/header.php';
?>
<style media="screen">
.p{background-image:url("back.jpg");
}
</style>
<div class="container">
    <div class="row mt-4">

        <div class="col-md">
          <div class="card p">
            <div class="card-header">
              <h2 class="card-title"><i class="fas fa-user"></i> Data nilai</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Nis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Matpel WEB</th>
                    <th scope="col">Matpel PBO</th>
                    <th scope="col">Matpel Basdat</th>
                    <th scope="col">Matpel Desain</th>
                    <th scope="col">Matpel Progdas</th>
                    <th scope="col">Rata-Rata</th>
                    <th scope="col">Predikat</th>
                    <th scope="col">Keterangan</th>
                </tr>
              </thead>
            <tbody>
        <?php
        foreach ($corona as $c) { ?>
        <tr>
            <td><?= $c['NIS'] ?></th>
            <td><?= $c['nama'] ?></th>
            <td><?= $c['jurusan'] ?></th>
            <td><?= $c['kelas'] ?></th>
            <td><?= $c['alamat'] ?></th>
            <td><?= $c['matpel_web'] ?></th>
            <td><?= $c['matpel_pbo'] ?></th>
            <td><?= $c['matpel_basdat'] ?></th>
            <td><?= $c['matpel_desain'] ?></th>
            <td><?= $c['matpel_progdas'] ?></th>
            <td><?= $c['nilairatarata'] ?></th>
            <td><?= $c['predikat_nilai'] ?></th>
            <td><?= $c['keterangan'] ?></th>
             </tr>
             <?php 
           }
              ?>
        </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
<?php
include 'assets/footer.php';
?>