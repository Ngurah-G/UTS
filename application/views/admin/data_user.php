<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"></i>Import Data</button>

            <table class="table table-bordered" cellpadding="10" cellspacing="0">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_user as $val) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $val['nama']; ?></td>
                            <td><?= $val['email']; ?></td>
                            </td>
                            <td><img src="<?php echo base_url() . 'assets/img/profile/' . $val['gambar']; ?>" width="100" height="100" /></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>