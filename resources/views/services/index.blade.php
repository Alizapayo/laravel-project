@extends('layouts.back') <!-- ดึงข้อมูลจากหน้า layout -->
@section('title', 'การบริการ')
@section('content')

    <div class="container mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">การบริการ</h4>
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
                                        <span class="fw-mediumbold">เพิ่มข้อมูลการบริการ</span>
                                    </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="addForm" action="{{ route('services.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>ชื่อบริการ</label>
                                                    <input name="service_name" type="text" class="form-control" placeholder="fill name" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>Duration</label>
                                                    <input name="service_duration" type="text" class="form-control" placeholder="fill barber" required>
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

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">แก้ไขข้อมูลการบริการ</span>
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
                                                <div class="form-group form-group-default">
                                                    <label>ชื่อบริการ</label>
                                                    <input id="editName" name="service_name" type="text" class="form-control"
                                                        placeholder="กรอกชื่อบริการ" required>
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>ระยะเวลา</label>
                                                    <input id="editDuration" name="service_duration" type="text" class="form-control"
                                                        placeholder="กรอกชื่อช่างตัดผม" required>
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
                                    <th>Services</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->service_name }}</td>
                                        <td>{{ $row->service_duration }}</td>
                                        <td>
                                            <a href="#" class="me-2 edit-button"
                                                data-id="{{ $row->id }}"
                                                data-name="{{ $row->service_name }}"
                                                data-duration="{{ $row->service_duration }}">
                                                <img src="https://cdn-icons-png.flaticon.com/128/4476/4476194.png" width="33px" alt="Edit">
                                            </a>
                                            <form action="{{ route('services.delete', $row->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background: none; border: none; padding: 0;">
                                                    <img src="https://cdn-icons-png.flaticon.com/128/9790/9790368.png" width="30px" alt="Delete">
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
            const editDurationInput = document.getElementById('editDuration');
            const editIdInput = document.getElementById('editId');
            const editForm = document.getElementById('editForm');
            const saveEditButton = document.getElementById('saveEditButton');
            const addRowButton = document.getElementById('addRowButton');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const serviceId = button.getAttribute('data-id');
                    const serviceName = button.getAttribute('data-name');
                    const serviceDuration = button.getAttribute('data-duration');

                    editIdInput.value = serviceId;
                    editNameInput.value = serviceName;
                    editDurationInput.value = serviceDuration;

                    editForm.action = `/services/${serviceId}`;
                    
                    const editRowModal = new bootstrap.Modal(document.getElementById('editRowModal'));
                    editRowModal.show();
                });
            });

            saveEditButton.addEventListener('click', function() {
                editForm.submit();
            });

            addRowButton.addEventListener('click', function() {
                document.getElementById('addForm').submit();
            });
        });
    </script>

@endsection


