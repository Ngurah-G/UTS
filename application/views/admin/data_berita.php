<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Berita</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <button class="btn btn-sm btn-success mb-3"><i class="fa fa-plus fa-sm"></i>Tambah Berita</button>

            <table class="table table-bordered" cellpadding="10" cellspacing="0">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Berita</th>
                        <th>Deskripsi Berita</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_berita as $val) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $val['judul_berita']; ?></td>
                            <td><?= $val['deskripsi_berita']; ?></td>
                            <td><?= $val['date_berita']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>