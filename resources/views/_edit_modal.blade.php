<div class="modal fade" tabindex="-1" role="dialog"  id="editModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{URL::to('/register')}}" method="post">
                @method('PATCH')
                @csrf
                <input type="hidden" name="register_id" id="register-id-input">
            <fieldset class="form-group mb-2">
                <label for="exampleInputPassword1">Nama Lengkap</label>
                <input type="text" max="255" class="form-control" name="nama" id="edit-fullname" required placeholder="Nama">
            </fieldset>
            <fieldset class="form-group mb-2">
                <label for="exampleInputPassword1">Alamat Lengkap</label>
                <input type="text" max="255"  class="form-control" name="alamat" id="edit-address" required placeholder="Alamat">
            </fieldset>
            <fieldset class="form-group mb-2">
                <label for="exampleInputPassword1">Asal Sekolah</label>
                <input type="text" max="255"  class="form-control" name="asal_sekolah" id="edit-junior-high-school" required placeholder="Asal Sekolah">
            </fieldset>
            <fieldset class="form-group mb-2">
                <label for="jk">Jenis Kelamin</label>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" id="edit-male-check" value="Laki-Laki">
                    Laki-Laki
                    </label>
                </div>
                <div class="form-check mb-2">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" id="edit-female-check" value="Perempuan">
                    Perempuan
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group mb-2">
                <label for="exampleSelect1" class="form-label">Agama</label>
                <select class="form-select form-control" name="agama" id="edit-religion" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                </select>
            </fieldset>
            <fieldset class="form-group mb-2">
                <label for="exampleSelect1" class="form-label">Jurusan</label>
                <select class="form-select form-control" name="jurusan" id="edit-major" required>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Tata Boga">Tata Boga</option>
                    <option value="Tata Busana">Tata Busana</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </fieldset>
        </div>
        <div class="modal-footer d-flex justify-content-between">
            <div>
                <button type="button" class="btn btn-danger" onclick="deleteData()">Hapus</button>
                <a class="btn btn-success" target="_blank" id="btn-print" >Cetak</a>
            </div>
            <div class="d-flex ">
                <div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            </form>
        </div>
        </div>
    </div>
</div>
