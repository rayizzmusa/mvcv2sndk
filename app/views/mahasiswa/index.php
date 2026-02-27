<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary mt-3 mb-3 modal-tambah" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari nama mahasiswa" name="nama" id="nama" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="button-cari">Cari</button>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <br>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mahasiswa) : ?>
                    <li class="list-group-item">
                        <?= $mahasiswa['nama'] ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mahasiswa['id']; ?>" class="badge bg-danger float-end ms-2" onclick="return confirm('Apakah yakin menghapus data ini?');">hapus</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mahasiswa['id']; ?>" class="badge bg-info float-end ms-2 modal-ubah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mahasiswa['id']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mahasiswa['id']; ?>" class="badge bg-primary float-end ms-2">detail</a>
                    </li>
                <?php endforeach ?>
            </ul>

        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulmodal">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" id="nim" placeholder="Nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" size="3" aria-label="size 3 select example" id="jurusan" name="jurusan">
                            <option selected>Jurusan</option>
                            <option value="IT">IT</option>
                            <option value="B. Arab">B. Arab</option>
                            <option value="Matematika">Matematika</option>
                            <option value="IPA">IPA</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>