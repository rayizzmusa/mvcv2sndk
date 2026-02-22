<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>

            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mahasiswa) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $mahasiswa['nama'] ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mahasiswa['id']; ?>" class="badge bg-primary">detail</a>
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
                        <select class="form-select" size="3" aria-label="size 3 select example" name="jurusan">
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