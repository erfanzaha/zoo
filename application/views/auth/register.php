<div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
    <div class="slide-content bg-2">
    </div>
</div>
<div class="col-12 col-md-8 h-100 bg-white">
    <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
        <div class="nav-get-started">
            <p>Already an account?</p>
            <a class="btn get-started-btn" href="<?= base_url('login') ?>">LOGIN</a>
        </div>
        <form id="form-data" class="account-create">
            <h3 class="mr-auto">Register</h3>
            <p class="mb-5 mr-auto">Enter your details below.</p>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-emoticon-happy"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nama Lengkap..." name="nama" id="nama">
                    
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-gmail"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email..." name="email" id="email">
                    
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-compass-outline"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Alamat..." name="alamat" id="alamat">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-phone"></i></span>
                    </div>
                    <input type="number" class="form-control" placeholder="Nomor Telepon..." name="no_telp" id="no_telp">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username..." name="username" id="username">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password..." name="password" id="password">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-redo-variant"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Konfirmasi Password Anda..." id="confirm_password" name="confirm_password">
                </div>
            </div>
            <!-- <div class="form-group">
                  <label for="exampleFormControlFile1">Example file input</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div> -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary submit-btn" id="btnSimpan">REGISTER</button>
            </div>
            <div class="wrapper mt-5 text-gray">
                <p class="footer-text"><?= APP_COPYRIGHT ?></p>
            </div>
        </form>
    </div>
</div>