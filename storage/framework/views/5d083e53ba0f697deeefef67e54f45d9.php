

<?php $__env->startSection('title', 'Dashboard | IOTDelivery'); ?>

<?php $__env->startSection('headLibrary'); ?>
    
    <script src="<?php echo e(asset('assets/plugins/jquery/jquery-3.7.1.min.js')); ?>"></script>

    
    <script src="<?php echo e(asset('assets/plugins/datatables/datatables.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables/datatables.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <div class="pc-container">
        <div class="pc-content">
            
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
            
        
            
            <div class="row">
                
                <div class="col-md-12 col-xl-12">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Table Users</h5>
                        <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class=" btn btn-outline-success btn-sm" id="alm-asal-tab" data-bs-toggle="modal" data-bs-target="#alm-asal" type="button" role="tab" aria-controls="alm-asal" aria-selected="true">
                                    <i class="fa-solid fa-user-plus"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-body">
                        
                            <table id="tableUserList" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Photo</th>
                                        <th width="150px">Name</th>
                                        <th width="200px">Email</th>
                                        <th width="150px">Telepon</th>
                                        <th width="300px">Alamat Domisili</th>
                                        <th width="50px">Role</th>
                                        <th class="text-center" width="150px"><i class="fa-solid fa-user-gear"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data['users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($index + 1); ?></td>
                                            <td><?php echo e($user->id); ?></td>
                                            <td class="text-center">
                                                <?php if($user->photo == ''): ?>
                                                    <img src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/images/user/user_icon.jpg')); ?>" alt="user-image" class="rounded-circle" width="40px" height="40px">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('storage/usersdata/'.$user->email.'/images/'.$user->photo)); ?>" alt="user-image" class="rounded-circle" width="40px" height="40px">
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($user->name); ?></td>
                                            <td><?php echo e($user->email); ?></td>
                                            <td><?php echo e($user->telepon); ?></td>
                                            <td>
                                                <?php if($user->alm_jln_domisili != ''): ?>
                                                    <?php echo e($user->alm_jln_domisili); ?>

                                                <?php else: ?>
                                                    <i class="fa-solid fa-triangle-exclamation me-2"></i>Data belum terisi
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="" class="me-2 btnRoleInfo" data-bs-toggle="modal" data-bs-target="#roleInfo" data-roleinfo="<?php echo e($user->user_role->desc); ?>" data-rolename="<?php echo e($user->user_role->name); ?>" title="Role detail">
                                                    <?php echo e($user->user_role->name); ?>

                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-primary btn-sm me-1 btnInfo" data-bs-toggle="modal" data-bs-target="#" data-userid="<?php echo e($user->id); ?>" title="User details">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-warning btn-sm me-1 btnEdit" data-bs-toggle="modal" data-bs-target="#passwordConfirm" data-userid="<?php echo e($user->id); ?>" title="Edit user data">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm me-1 btnDelete" data-bs-toggle="modal" data-bs-target="#delete_user" data-roleinfo="<?php echo e($user->role_desc); ?>" data-rolename="<?php echo e($user->role_name); ?>" title="Delete">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="roleInfo" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog fluid">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">View Role Info</h1>
                    <button type="button" class="btn-close btnCloseRoleInfo" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="roleName"></h4>
                    <textarea class="form-control roleInfo" rows="6" aria-label="With textarea" name="text_detail" id="text_detail"></textarea>
                    <div class="pt-3 text-end">
                        <button type="button" class="btn btn-outline-primary btn-sm btnCloseRoleInfo" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="passwordConfirm" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" >Konfirmasi Edit Profile User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="formConfirm">
                        <?php echo method_field('post'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <p class="text-center">
                                    Password Anda dibutuhkan untuk melanjutkan ke form edit user profile untuk mengubah atau melengkapi data user tsersebut.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 offset-md-3">
                                <label for="passwordAuth"><i class="fas fa-key me-2"></i>Password</label>
                                <div class="form-group input-group">
                                    <input type="password" class="form-control form-control-sm seePassword" name="passwordAuth" id="passwordAuth">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-primary btn-sm seePasswordButton"><i class="fas fa-eye p-1"></i></button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="pt-5 me-3 text-end">
                            <button type="reset" class="btn btn-outline-danger btn-sm me-1" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark me-1"></i>Cancel</button>
                            <button type="submit" class="btn btn-outline-warning btn-sm px-3"><i class="fas fa-edit me-1"></i>Edit</button>
                        </div>
                    </form>
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
        // Document page telah ter-load sepenuhnya
        $(document).ready(function() {
            // Datatables
            $('#tableUserList').DataTable({
                // paging: false,
                scrollCollapse: true,
                scrollY: '50vh', // vertical scrolling
                scrollX: true // horizntal scrolling
            });

            // Ketika button class="btnRoleInfo" di-click
            $('.btnRoleInfo').on('click', function(){
                let roleName = $(this).data('rolename');
                roleName = roleName.charAt(0).toUpperCase() + roleName.slice(1); // code javascript untuk mengubah huruf pertama suatu kata menjadi huruf kapital
                let roleInfo = $(this).data('roleinfo');

                // Append text pada elemen H4 dengan class="roleName"
                $('.roleName').append(roleName);

                // Manipulasi isi atau value elemen html textarea
                $('.roleInfo').val(roleInfo);

                // Reset
                $('.btnCloseRoleInfo').on("click", function(){
                    $('.roleName').text("");
                })
            });

            // Ketika button .btnEdit di-click
            $('.btnEdit').on('click', function(){
                let user_id = $(this).data('userid');
                
                $('#formConfirm').attr('action', '/userslist/' + user_id + '/edit');
            });

            // preview password
            $(document).ready(function(){
                $('.seePasswordButton').on("click", function(){
                    // Dapatkan nilai attribute elemet dengan selector '#password'
                    let seePassword = document.querySelector('.seePassword');
                    let seePasswordButton = document.querySelector('.seePasswordButton');
                    let typeInput = seePassword.getAttribute("type");

                    // Jika nilainya adalah 'password', maka rubah menjadi 'text'
                    if(typeInput == 'password'){
                        $('.seePassword').attr('type', 'text');
                        seePasswordButton.style.backgroundColor = 'red';
                    }

                    // Jika nilainya adalah 'password', maka rubah menjadi 'text'
                    if(typeInput == 'text'){
                        $('.seePassword').attr('type', 'password');
                        seePasswordButton.style.backgroundColor = 'transparent';
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footerLibrary'); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mantis', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Apache24\htdocs\My_Project\IOTDelivery\resources\views/settings/userslist/index.blade.php ENDPATH**/ ?>