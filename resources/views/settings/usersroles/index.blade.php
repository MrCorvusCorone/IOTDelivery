@extends('templates.mantis')

@section('title', 'Dashboard | IOTDelivery')

@section('headLibrary')
    {{-- Jquery --}}
    <script src="{{ asset('assets/plugins/jquery/jquery-3.7.1.min.js')}}"></script>

    {{-- DataTables --}}
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}">
@endsection

@section('mainContent')
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <x-dashboard.breadcrumb group="{{ $data['group'] }}" heading="{{ $data['heading'] }}" menu="{{ $data['menu'] }}" submenu="{{ $data['submenu'] }}"></x-dashboard.breadcrumb>
            <!-- [ breadcrumb ] end -->
        
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ List ] start -->
                <div class="col-md-12 col-xl-12">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Table Semua User Beserta Role-nya</h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            {{-- Datatable --}}
                            <table id="dataTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Role</th>
                                        <th><i class="fa-solid fa-user-gear"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['users'] as $index => $user)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $user->user_id }}</td>
                                            <td>{{ $user->user_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->telp }}</td>
                                            <td>
                                                <a href="" class="btnInfo" data-bs-toggle="modal" data-bs-target="#view_role" data-roleinfo="{{ $user->role_desc }}" data-rolename="{{ $user->role_name }}" title="View detail">
                                                    <i class="fa-solid fa-eye me-1"></i>
                                                    {{ $user->role_name }}
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-outline-warning btn-sm btnEdit" data-bs-toggle="modal" data-bs-target="#edit_userrole" data-userid="{{ $user->user_id }}" title="Edit role">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>{{-- /.datatable --}}
                        </div>
                    </div>
                </div><!-- [ List ] end -->
            </div>
        </div>
    </div>

    {{-- Modal View Role --}}
    <div class="modal fade" id="view_role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog fluid">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">View Role Info</h1>
                    <button type="button" class="btn-close btnCloseRoleInfo" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="roleName"></h4>
                    <textarea class="form-control roleInfo" rows="6" aria-label="With textarea"></textarea>
                    <div class="pt-3 text-end">
                        <button type="button" class="btn btn-outline-primary btn-sm btnCloseRoleInfo" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>{{-- /.modal view role --}}

    {{-- Modal Edit Role --}}
    <div class="modal fade" id="edit_userrole" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User Role</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="formEditRole">
                        @method('put')
                        @csrf
                        <div class="mb-5 px-3">
                            <label for="user_role" class="form-label fw-bold">Pilih User Role:</label>
                            <select class="form-select" id="user_role" name="user_role">
                                {{-- <option value="">Pilih Role</option> --}}
                                @foreach ($data['roles'] as $role)
                                    <option value="{{ $role->id }}" type="number">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="px-3 text-end">
                            <button type="submit" class="btn btn-outline-primary btn-sm me-auto">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>{{-- /.modal edit role --}}
@endsection

@section('footer')
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
@endsection

@section('javascript')
    <script>
        // Document page telah ter-load sepenuhnya
        $(document).ready(function() {
            // Datatables
            $('#dataTable').DataTable();

            // Ketika button view role diclick
            $('.btnInfo').on('click', function(){
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

            // Ketika button edit use_role diclick
            $('.btnEdit').on('click', function(){
                let user_id = $(this).data('userid');

                // Mendapatkan nilai dari opsi yang dipilih
                $('#user_role').on('change', function(){
                    // let selectedValue = $(this).val();  // Mendapatkan nilai dari opsi yang dipilih
                    // let selectedText = $(this).find('option:selected').text(); // Mendapatkan teks dari opsi yang dipilih

                    // Manipulasi attribut elemen html dengan id="send_data"
                    $('#formEditRole').attr('action', '/usersrole/' + user_id + '/edit');
                    
                });

                // Manipulasi attribut elemen html dengan id="send_data" tanpa merubah elemen select dengan id=formEditRole
                $('#formEditRole').attr('action', '/usersrole/' + user_id + '/edit');
            });

        });
    </script>
@endsection