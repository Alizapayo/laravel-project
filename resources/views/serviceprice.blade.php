@extends('layouts.back')
@section('title', 'บริการและราคา')
@section('content')

<div class="container mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">บริการและราคา</h4>
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
                                <form id="addForm" action="{{ route('serviceprice.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="employeeSelect" class="form-label">ชื่อพนักงาน</label>
                                                <select id="employeeSelect" name="user_id" class="form-select" required>
                                                    <option value="">-- เลือกชื่อพนักงาน --</option>
                                                    @foreach($user as $row)
                                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="serviceSelect" class="form-label">ชื่อบริการ</label>
                                                <select id="serviceSelect" name="service_id" class="form-select" required>
                                                    <option value="">-- เลือกบริการ --</option>
                                                    @foreach($data as $row)
                                                        <option value="{{$row->id}}">{{$row->service_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="priceInput" class="form-label">ราคา</label>
                                                <input id="priceInput" name="price" type="text" class="form-control" placeholder="กรอกราคา" required>
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
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="editEmployeeSelect" class="form-label">ชื่อพนักงาน</label>
                                                <select id="editEmployeeSelect" name="user_id" class="form-select" required>
                                                    <option value="">-- เลือกชื่อพนักงาน --</option>
                                                    @foreach($user as $row)
                                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="editServiceSelect" class="form-label">ชื่อบริการ</label>
                                                <select id="editServiceSelect" name="service_id" class="form-select" required>
                                                    <option value="">-- เลือกบริการ --</option>
                                                    @foreach($data as $row)
                                                        <option value="{{$row->id}}">{{$row->service_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="editPriceInput" class="form-label">ราคา</label>
                                                <input id="editPriceInput" name="price" type="text" class="form-control" placeholder="กรอกราคา" required>
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
                                <th>Barber</th>
                                <th>Service</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($serviceprice as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ optional($row->user)->name }}</td>
                                    <td>{{ optional($row->service)->service_name }}</td>
                                    <td>{{ $row->price }}</td>
                                    <td>
                                        <a href="#" class="me-2 edit-button" data-id="{{ $row->id }}"
                                            data-user="{{ $row->user_id }}"
                                            data-service="{{ $row->service_id }}"
                                            data-price="{{ $row->price }}">
                                            <img src="https://cdn-icons-png.flaticon.com/128/4476/4476194.png" width="33px" alt="Edit">
                                        </a>
                                        <form action="{{ route('serviceprice.delete', $row->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')">
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
        const editUserSelect = document.getElementById('editEmployeeSelect');
        const editServiceSelect = document.getElementById('editServiceSelect');
        const editPriceInput = document.getElementById('editPriceInput');
        const editIdInput = document.getElementById('editId');
        const editForm = document.getElementById('editForm');
        const saveEditButton = document.getElementById('saveEditButton');
        const addRowButton = document.getElementById('addRowButton');

        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const servicepriceId = button.getAttribute('data-id');
                const servicepriceUser = button.getAttribute('data-user');
                const servicepriceService = button.getAttribute('data-service');
                const servicepricePrice = button.getAttribute('data-price');

                editIdInput.value = servicepriceId;
                editUserSelect.value = servicepriceUser;
                editServiceSelect.value = servicepriceService;
                editPriceInput.value = servicepricePrice;

                editForm.action = `/serviceprice/${servicepriceId}`;

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
