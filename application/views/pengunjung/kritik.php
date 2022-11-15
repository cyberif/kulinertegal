<div class="container-fluid bg-dark mt-4">
    <div class="row d-flex justify-content-around">
        <div class="col-7">
            <h4 class="sub-judul fs-3 text-warning text-center">Kritik & Saran</h4>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark mt-4">
    <div class="row d-flex justify-content-around">
        <div class="col-7">
            <form name="formContact">
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <label for="exampleFormControlInput1" class="form-label text-light fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Your Name" />
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="exampleFormControlInput1" class="form-label text-light fw-bold">Email</label>
                        <input type="email" class="form-control" id="pesan" name="email" placeholder="name@example.com" />
                    </div>
                </div>
                <div class="mb-3 mt-2">
                    <label for="exampleFormControlTextarea1" class="form-label text-light fw-bold">Pesan</label>
                    <textarea class="form-control" id="pesan" name="pesan" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
                    <button class="btn btn-primary d-none btn-loading" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Mengirim...
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>