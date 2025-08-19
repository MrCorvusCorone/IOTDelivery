

<?php $__env->startSection('title', 'Dashboard | IOTDelivery'); ?>

<?php $__env->startSection('headLibrary'); ?>
    
    <script src="<?php echo e(asset('assets/plugins/jquery/jquery-3.7.1.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <?php if (isset($component)) { $__componentOriginalb9fc42f36bf42628fcf6e8ed8e37931a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9fc42f36bf42628fcf6e8ed8e37931a = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Breadcrumb::resolve(['group' => ''.e($data['group']).'','heading' => ''.e($data['heading']).'','menu' => ''.e($data['menu']).'','submenu' => ''.e($data['submenu']).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dashboard\Breadcrumb::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9fc42f36bf42628fcf6e8ed8e37931a)): ?>
<?php $attributes = $__attributesOriginalb9fc42f36bf42628fcf6e8ed8e37931a; ?>
<?php unset($__attributesOriginalb9fc42f36bf42628fcf6e8ed8e37931a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9fc42f36bf42628fcf6e8ed8e37931a)): ?>
<?php $component = $__componentOriginalb9fc42f36bf42628fcf6e8ed8e37931a; ?>
<?php unset($__componentOriginalb9fc42f36bf42628fcf6e8ed8e37931a); ?>
<?php endif; ?>
            <!-- [ breadcrumb ] end -->
        
            <!-- [ Main Content ] start -->
            <form action="/userslist/<?php echo e($data['user']->id); ?>/edit" method="post" enctype="multipart/form-data">
                <?php echo method_field('patch'); ?>
                <?php echo csrf_field(); ?>
                <div class="row mt-5">
                    
                    <div class="col-md-12 col-xl-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-2">Edit Biodata</h5>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <strong><i class="fas fa-user me-2"></i>Nama Lengkap</strong>
                                                <input type="text" class="form-control form-control-sm mt-1" placeholder="<?php echo e($data['user']->name); ?>" name="name" id="name" value="<?php echo e($data['user']->name, old('name')); ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <strong><i class="fas fa-envelope me-2"></i>Email</strong>
                                                <input type="email" class="form-control form-control-sm mt-1" placeholder="<?php echo e($data['user']->email); ?>" name="email" id="email" value="<?php echo e($data['user']->email, old('email')); ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <strong><i class="fas fa-phone-square-alt me-2"></i>Telepon</strong>
                                                <input type="text" class="form-control form-control-sm mt-1" placeholder="<?php echo e($data['user']->telepon); ?>" name="telepon" id="telepon" value="<?php echo e($data['user']->telepon, old('telepon')); ?>" required>
                                            </div>
                                        </div>
                                
                                        <div class="row mb-5">
                                            <div class="col-md-6">
                                                <strong><i class="fas fa-birthday-cake me-2"></i>Tanggal Lahir</strong>
                                                <input type="date" class="form-control form-control-sm mt-1" placeholder="<?php echo e($data['user']->data_lahir); ?>" name="date_lahir" id="date_lahir" value="<?php echo e($data['user']->date_lahir, old('date_lahir')); ?>" required>
                                            </div>
                                            <div class="col-md-6">
                                                <strong><i class="fas fa-map-marked me-2"></i>Kota Lahir</strong>
                                                <input type="text" class="form-control form-control-sm mt-1" placeholder="<?php echo e($data['user']->kota_lahir); ?>" name="kota_lahir" id="kota_lahir" value="<?php echo e($data['user']->kota_lahir, old('kota_lahir')); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-12 col-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0">Edit Alamat</h5>
                            <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="alm-asal-tab" data-bs-toggle="pill" data-bs-target="#alm-asal" type="button" role="tab" aria-controls="alm-asal" aria-selected="true">
                                        Asal
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="alm-domisili-tab" data-bs-toggle="pill" data-bs-target="#alm-domisili" type="button" role="tab" aria-controls="alm-domisili" aria-selected="false">
                                        Domisili
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="chart-tab-tabContent">
                                    <div class="tab-pane active" id="alm-asal" role="tabpanel" aria-labelledby="alm-asal-tab" tabindex="0">
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <strong><i class="fas fa-map-marked me-2"></i> Provinsi Asal</strong>
                                                <div class="input-group">
                                                    <select class="form-select form-select-sm mt-1" name="alm_prov_asal" id="alm_prov_asal" value=<?php echo e(old('alm_prov_asal')); ?>  aria-label="" required>
                                                        <?php if($data['user']->alm_prov_asal != '0'): ?>
                                                            <option value="<?php echo e($data['user']->alm_prov_asal); ?>" selected><?php echo e($data['alm_wilayah_asal']['prov_asal']); ?></option>
                                                        <?php endif; ?>
                                                        <?php $__currentLoopData = $data['provincies']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($province->id); ?>"><?php echo e($province->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <strong><i class="fas fa-map-marked me-2"></i>Kota Asal</strong>
                                                <div class="input-group">
                                                    <select class="form-select form-select-sm mt-1" name="alm_kota_asal" id="alm_kota_asal" aria-label="" required>
                                                        <?php if($data['user']->alm_kota_asal != '0'): ?>
                                                            <option value="<?php echo e($data['user']->alm_kota_asal); ?>" selected><?php echo e($data['alm_wilayah_asal']['kota_asal']); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($data['user']->alm_kota_asal); ?>" selected>Belum terisi</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <strong><i class="fas fa-map-marked me-2"></i>Kec. Asal</strong>
                                                <div class="input-group">
                                                    <select class="form-select form-select-sm mt-1" name="alm_kec_asal" id="alm_kec_asal" aria-label="" required>
                                                        <?php if($data['user']->alm_kec_asal != 0 ): ?>
                                                            <option value="<?php echo e($data['user']->alm_kec_asal); ?>" selected><?php echo e($data['alm_wilayah_asal']['kec_asal']); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($data['user']->alm_kec_asal); ?>" selected>Belum terisi</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <strong><i class="fas fa-map-marked me-2"></i>Kel. Asal</strong>
                                                <div class="input-group">
                                                    <select class="form-select form-select-sm mt-1" name="alm_kel_asal" id="alm_kel_asal" aria-label="" required>
                                                        <?php if($data['user']->alm_kel_asal != 0 ): ?>
                                                            <option value="<?php echo e($data['user']->alm_kel_asal); ?>" selected><?php echo e($data['alm_wilayah_asal']['kel_asal']); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($data['user']->alm_kel_asal); ?>" selected>Belum terisi</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-12">
                                                <strong><i class="fas fa-map-marked me-2"></i>Alamat Jalan Asal</strong>
                                                <textarea class="form-control form-control-sm" id="alm_jl_asal" name="alm_jl_asal" rows="4"><?php echo e($data['user']->alm_jln_asal, old('alm_jln_asal')); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane show " id="alm-domisili" role="tabpanel" aria-labelledby="alm-domisili-tab" tabindex="0">
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <strong><i class="fas fa-map-marked me-2"></i> Provinsi Domisili</strong>
                                                <div class="input-group">
                                                    <select class="form-select form-select-sm mt-1" name="alm_prov_domisili" id="alm_prov_domisili" value=<?php echo e(old('alm_prov_domisili')); ?>  aria-label="" required>
                                                        <?php if($data['user']->alm_prov_domisili != '0'): ?>
                                                            <option value="<?php echo e($data['user']->alm_prov_domisili); ?>" selected><?php echo e($data['alm_wilayah_domisili']['prov_domisili']); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($data['user']->alm_prov_domisili); ?>">Belum Terisi</option>
                                                        <?php endif; ?>
                                                        <?php $__currentLoopData = $data['provincies']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($province->id); ?>"><?php echo e($province->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                                
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <strong><i class="fas fa-map-marked me-2"></i>Kota Domisili</strong>
                                                <div class="input-group">
                                                    <select class="form-select form-select-sm mt-1" name="alm_kota_domisili" id="alm_kota_domisili" aria-label="" required>
                                                        <?php if($data['user']->alm_kota_domisili != '0'): ?>
                                                            <option value="<?php echo e($data['user']->alm_kota_domisili); ?>" selected><?php echo e($data['alm_wilayah_domisili']['kota_domisili']); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($data['user']->alm_kota_domisili); ?>" selected>Belum terisi</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <strong><i class="fas fa-map-marked me-2"></i>Kec. Domisili</strong>
                                                <div class="input-group">
                                                    <select class="form-select form-select-sm mt-1" name="alm_kec_domisili" id="alm_kec_domisili" aria-label="" required>
                                                        <?php if($data['user']->alm_kec_domisili != 0 ): ?>
                                                            <option value="<?php echo e($data['user']->alm_kec_domisili); ?>" selected><?php echo e($data['alm_wilayah_domisili']['kec_domisili']); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($data['user']->alm_kec_domisili); ?>" selected>Belum terisi</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <strong><i class="fas fa-map-marked me-2"></i>Kel. Domisili</strong>
                                                <div class="input-group">
                                                    <select class="form-select form-select-sm mt-1" name="alm_kel_domisili" id="alm_kel_domisili" aria-label="" required>
                                                        <?php if($data['user']->alm_kel_domisili != 0 ): ?>
                                                            <option value="<?php echo e($data['user']->alm_kel_domisili); ?>" selected><?php echo e($data['alm_wilayah_domisili']['kel_domisili']); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($data['user']->alm_kel_domisili); ?>" selected>Belum terisi</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-12">
                                                <strong><i class="fas fa-map-marked me-2"></i>Alamat Jalan Domisili</strong>
                                                <textarea class="form-control form-control-sm" id="alm_jl_domisili" name="alm_jl_domisili" rows="4"><?php echo e($data['user']->alm_jln_domisili, old('alm_jln_domisili')); ?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-12 col-xl-3 mt-2 ">
                        <div class="row">
                            <div class="col">
                                <h5>Edit Photo</h5>
                                <div class="card mt-4">
                                    <div class="card-body text-center py-1">
                                        <?php if($data['user']->photo == ''): ?>
                                            <img type="button" class="profile-user-img rounded-circle img-preview mt-2 mb-3" width="130px" height="130px" data-bs-toggle="modal" data-bs-target="#zoomPhoto" title="Zoom" src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/images/user/user_icon.jpg')); ?>">
                                        <?php else: ?>                                
                                            
                                            <img type="button" class="profile-user-img rounded-circle img-preview mt-2 mb-3" width="130px" height="130px" data-bs-toggle="modal" data-bs-target="#zoomPhoto" title="Zoom" src="<?php echo e(asset('storage/usersdata/'.$data['user']->email.'/images/'.$data['user']->photo)); ?>">
                                        <?php endif; ?>
                                        <div class="form-group text-center">
                                            <input class="form-control form-control-sm" id="photo" name="photo" type="file" title="Edit photo" value=<?php echo e($data['user']->photo); ?>>                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5>Submit Perubahan</h5>
                                <div class="card">
                                    <div class="card-body text-center py-3">
                                        <p class="mb-1" style="font-size:12px">Klik Submit untuk menyimpan perubahan atau Cancel untuk kembali ke halaman sebelumnya tanpa meyimpan perubahan</p>
                                        <a href="/userslist" class="btn btn-outline-danger btn-sm me-2">Cancel</a>
                                        <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Zoom Photo Profile-->
    <div class="modal fade" id="zoomPhoto" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-magnifying-glass-plus me-2"></i>Zoom Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">  
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            <?php if($data['user']->photo == ''): ?>
                                <img  class="profile-user-img img-fluid img-circle imgZoom" src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/images/user/user_icon.jpg')); ?>" style="width:450px;height:450px">
                            <?php else: ?> 
                                
                                <img class="profile-user-img img-fluid img-circle img-preview" src="<?php echo e(asset('storage/usersdata/'.$data['user']->email.'/images/'.$data['user']->photo)); ?>" style="width:450px;height:450px">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary btn-sm px-4" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col-sm my-1">
          <p class="m-0">
            Mantis &#9829; crafted by Team <a href="https://themeforest.net/user/codedthemes" target="_blank">Codedthemes</a> Distributed by <a href="https://themewagon.com/">ThemeWagon</a>.
          </p>
        </div>
        <div class="col-auto my-1">
          <ul class="list-inline footer-link mb-0">
            <li class="list-inline-item"><a href="../index.html">Home</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script>
        // Fungsi create child element select #child_id berdasarkan #source_id
        function createChild(source_id, wilayah_lev, child_id){
            // cek data kota berdasarkan provinsi yang dipilih
            $.ajax({
                url         : '/check' + wilayah_lev + '/' + $(source_id).val(), 
                type        : 'get',
                dataType    : 'json',
                success     : function(result){
                    // Jika hasil ambil data dari table kota kosong/tidak ada, maka responnya mengirim json kosong
                    if(result['length'] == 0){
                        // console.log('Data di table ' + wilayah_lev + ' kosong');
                        
                        // Ambil data dari API jika data tidak terdapat di dalam table kota
                        $.ajax({
                            url         : '/get'+ wilayah_lev + '/' + $(source_id).val(),
                            type        : 'get',
                            dataType    : 'json',
                            success     : function(result){
                                // Hapus child (element option) pada element select dengan id="kota"
                                $(child_id).empty();

                                // Buat option untuk select #kota
                                for(i=0; i<result.length; i++){
                                    $(child_id).append('<option value="' + result[i].id +'">' + result[i].name + '</option>');
                                }

                                // // display data di console browser untuk check result
                                // console.log(source_id + '_id: ' + $(source_id).val());
                                // console.log('data length: ' + result['length']);
                                // console.log('Data yang didapat dari API Server (https://wilayah.id/): ');
                                // console.log(result);
                            }
                        });
                    } 
                    else{
                        // display data di console browser untuk check result
                        console.log('Data sudah ada di table ' + wilayah_lev + '. Tidak perlu ambil dari API (https://wilayah.id/)');

                        // Hapus child (element option) pada element select dengan id="city"
                        $(child_id).empty();

                        // Tampilkan data result 
                        for(i=0; i<result.length; i++){
                            $(child_id).append('<option value="' + result[i].id +'">' + result[i].name + '</option>');
                        }

                        // // display data di console browser untuk check result
                        // console.log(source_id + '_id: ' + $(source_id).val());
                        // console.log('data length: ' + result['length']);
                        // console.log(result);
                    }
                }
            });
        }

        // Document page telah ter-load sepenuhnya
        $(document).ready(function() {

            // Jika value #alm_prov_asal berubah
            $('#alm_prov_asal').change(function(){
                // Panggil fungsi appendChild untuk element select #alm_kota_asal
                createChild('#alm_prov_asal', 'kota', '#alm_kota_asal');
            });

            // jika value #alm_kota_asal berubah
            $('#alm_kota_asal').change(function(){
                // Panggil fungsi appendChild untuk element select #alm_kota_asal
                createChild('#alm_kota_asal', 'kecamatan', '#alm_kec_asal');
            });

            // jika value #alm_kecamatan_asal berubah
            $('#alm_kec_asal').change(function(){
                // Panggil fungsi appendChild untuk element select #alm_kota_asal
                createChild('#alm_kec_asal', 'kelurahan', '#alm_kel_asal');
            });

            // Jika value #alm_prov_domisili berubah
            $('#alm_prov_domisili').change(function(){
                // Panggil fungsi appendChild untuk element select #alm_kota_asal
                createChild('#alm_prov_domisili', 'kota', '#alm_kota_domisili');
            });

            // jika value #alm_kota_asal berubah
            $('#alm_kota_domisili').change(function(){
                // Panggil fungsi appendChild untuk element select #alm_kota_asal
                createChild('#alm_kota_domisili', 'kecamatan', '#alm_kec_domisili');
            });

            // jika value #alm_kecamatan_asal berubah
            $('#alm_kec_domisili').change(function(){
                // Panggil fungsi appendChild untuk element select #alm_kota_asal
                createChild('#alm_kec_domisili', 'kelurahan', '#alm_kel_domisili');
            });

            // Preview photo sebelum di-Submit di Modal Edit Photo Profile
            $('#photo').change(function(){
                const image = document.querySelector("#photo");
                const imgPreview = document.querySelector('.img-preview');

                // imgPreview.style.display ='block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent){
                    imgPreview.src = oFREvent.target.result;
                }

                // 
                $('.img-preview').on('click', function(){
                    const imgSrc = document.querySelector("#photo");
                    const imgZoom = document.querySelector('.imgZoom');
                    
                    const zoomPhoto = new FileReader();
                    zoomPhoto.readAsDataURL(imgSrc.files[0]); 

                    zoomPhoto.onload = function(zoomEvent){
                        imgZoom.src = zoomEvent.target.result;
                    }

                });
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footerLibrary'); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mantis', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Apache24\htdocs\My_Project\IOTDelivery\resources\views/settings/userslist/edit.blade.php ENDPATH**/ ?>