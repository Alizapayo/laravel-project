@extends('layouts.back')

@section('title', 'พนักงาน')

@section('content')

    <div class="container mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Barber</h4>
                        <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                            <i class="fa fa-plus"></i>
                            Add
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Add Modal -->
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title">
                                    <span class="fw-mediumbold">เพิ่มข้อมูลการบริการและราคา</span>
                                </h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="addForm" action="{{ route('barber.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="NameInput" class="form-label">ชื่อ</label>
                                                <input id="NameInput" name="name" type="text" class="form-control"
                                                    placeholder="กรอกชื่อบริการ" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="PhoneInput" class="form-label">phone</label>
                                                <input id="PhoneInput" name="phone" type="text" class="form-control"
                                                    placeholder="กรอกเบอร์โทร" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="EmailInput" class="form-label">อีเมล์</label>
                                                <input id="EmailInput" name="email" type="email" class="form-control"
                                                    placeholder="กรอกอีเมล์" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="PasswordInput" class="form-label">Password</label>
                                                <input id="PasswordInput" name="Password" type="Password" class="form-control"
                                                    placeholder="กรอกอีเมล์" required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Edit Modal -->
                    <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">แก้ไขข้อมูลพนักงาน</span>
                                    </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="editForm" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" id="editId" name="id">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="editName" class="form-label">ชื่อ</label>
                                                    <input id="editName" name="name" type="text" class="form-control"
                                                        placeholder="กรอกชื่อบริการ" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editPhone" class="form-label">phone</label>
                                                    <input id="editPhone" name="phone" type="text" class="form-control"
                                                        placeholder="กรอกเบอร์โทร" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editEmail" class="form-label">อีเมล์</label>
                                                    <input id="editEmail" name="email" type="email" class="form-control"
                                                        placeholder="กรอกอีเมล์" required>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer border-0">
                                    <button type="button" id="saveEditButton" class="btn btn-primary">บันทึก</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ตาราง -->
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>name</th>
                                    <th>phone</th>
                                    <th>Email</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        
                                        <td>
                                            <a href="#" class="me-2 edit-button" data-id="{{ $user->id }}"
                                                data-name="{{ $user->name }}" data-phone="{{ $user->phone }}"
                                                data-email="{{ $user->email }}">
                                                <img src="https://cdn-icons-png.flaticon.com/128/4476/4476194.png"
                                                    width="33px" alt="Edit">
                                            </a>
                                            <form action="{{ url('/barber/' . $user->id) }}" method="POST"
                                                style="display:inline;"
                                                onsubmit="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background: none; border: none; padding: 0;">
                                                    <img src="https://cdn-icons-png.flaticon.com/128/9790/9790368.png"
                                                        width="30px" alt="Delete">
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.edit-button');
            const editNameInput = document.getElementById('editName');
            const editPhoneInput = document.getElementById('editPhone');
            const editEmailInput = document.getElementById('editEmail');
            const editIdInput = document.getElementById('editId');
            const editForm = document.getElementById('editForm');
            const saveEditButton = document.getElementById('saveEditButton');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const barberId = button.getAttribute('data-id');
                    const barberName = button.getAttribute('data-name');
                    const barberPhone = button.getAttribute('data-phone');
                    const barberEmail = button.getAttribute('data-email');

                    editIdInput.value = barberId;
                    editNameInput.value = barberName;
                    editPhoneInput.value = barberPhone;
                    editEmailInput.value = barberEmail;

                    editForm.action = `/barber/${barberId}`;

                    const editRowModal = new bootstrap.Modal(document.getElementById(
                        'editRowModal'));
                    editRowModal.show();
                });
            });

            saveEditButton.addEventListener('click', function() {
                editForm.submit();
            });
        });
    </script>
@endsection
