<div class="container">
    <div class="row mt-3">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="p-5 mb-4 bg-light rounded-3 mt-4">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat Datang</h1>
            <p class="col-md-8 fs-4">Halo nama kita <?= $data['nama'] ?></p>
            <button class="btn btn-primary btn-lg" type="button">Contoh Tombol</button>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row g-4 mb-5"> <!-- g-4 = jarak antar card -->
        <?php foreach ($data['services'] as $service): ?>
            <div class="col-md-4 col-lg-3"> <!-- atur jumlah kolom -->
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $service['service']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $service['keterangan'] ?></h6>
                        <p class="card-text"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <div class="col-md-4 col-lg-3">
            <a href="" class="text-decoration-none modal-service" data-bs-toggle="modal" data-bs-target="#serviceModal">
                <div class="card h-100 text-center d-flex justify-content-center align-items-center add-card">
                    <div class="card-body">
                        <i class="bi bi-plus-circle" style="font-size: 3rem;"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="modal fade" id="serviceModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Service</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/home/tambah" method="post">
                    <div class="mb-3">
                        <label for="namaService" class="form-label">Nama Service</label>
                        <input type="text" class="form-control" id="namaService" name="service" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>