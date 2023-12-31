  <!-- DataTales Example -->
  <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h3 class="m-0 font-weight-bold text-primary">Data Guru</h3>
            <button type="button" class="tambah btn btn-primary" data-toggle="modal" data-target="#myModal">
                Tambah
            </button>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($hasil as $item) {
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item->nama; ?></td>
                <td><button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#editModal" data-id="<?php echo $item->id; ?>">Edit</button></button>
                <button type="button" class="btn btn-danger hapus" data-toggle="modal" data-target="#konfirmasiModal" data-id="<?php echo $item->id; ?>">Hapus</button> </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>

<?php $this->load->view('level/hapus');?>
<?php $this->load->view('level/edit');?>