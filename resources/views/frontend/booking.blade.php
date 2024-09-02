<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-sec {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .btn-capsul {
            border-radius: 50px;
            font-weight: bold;
        }

        .time-container {
            margin-top: 20px;
        }

        h2 {
            font-weight: bold;
            color: #007bff;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="col-lg-8 col-md-10 col-sm-12 form-sec bg-white rounded shadow my-5 p-5 mx-auto">
           <form id="bookingForm" action="{{ route('booking.store') }}" method="POST">
    @csrf
    @php
        $user_name = request()->get('user_name');
        $user_id = request()->get('user_id');
    @endphp

    <h2 class="mb-4 text-center">
        {{ $user_name ? $user_name : 'จองเลย' }}
    </h2>

    <input type="hidden" id="user_id" name="user_id" value="{{ $user_id }}">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="fullName">ชื่อ-สกุล</label>
                <input class="form-control" id="fullName" name="customer_name" placeholder="ชื่อ-สกุล"
                    type="text" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="service">การบริการ</label>
                <select class="form-control" id="service" name="service_id" required>
                    <option value="" disabled selected>-- บริการ --</option>
                    @foreach ($data as $service)
                        <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="time">เลือกเวลา</label>
                <select class="form-control" id="time" name="time" required>
                    <option value="" disabled selected>เลือกเวลา</option>
                    <option value="09:00">09:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="12:00">12:00 PM</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="date">วันที่</label>
                <input class="form-control" id="date" name="date" placeholder="วันที่"
                    type="date" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">เบอร์โทรติดต่อ</label>
                <input class="form-control" id="phone" name="phone_number" placeholder="เบอร์โทรติดต่อ"
                    type="tel" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="price">ราคา</label>
                <input class="form-control" id="price" name="price" placeholder="ราคา" type="text"
                    readonly>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="message">ความต้องการเพิ่มเติม</label>
        <textarea class="form-control" id="message" name="additional_requests" placeholder="ความต้องการเพิ่มเติม"
            rows="4"></textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-capsul px-4">บันทึก</button>
    </div>
</form>

        </div>
        <!-- Modal -->
     
<div class="modal fade" id="bookingDetailModal" tabindex="-1" role="dialog"
aria-labelledby="bookingDetailModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="bookingDetailModalLabel">รายละเอียดการจอง</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if (session('booking'))
                <p><strong>ชื่อ-สกุล:</strong> {{ session('booking')->customer_name }}</p>
                <p><strong>เบอร์โทร:</strong> {{ session('booking')->phone_number }}</p>
                <p><strong>ชื่อช่าง:</strong> {{ session('booking')->user->name }}</p>
                <p><strong>การบริการ:</strong> {{ session('booking')->service->service_name }}</p>
                <p><strong>วันที่:</strong> {{ session('booking')->date }}</p>
                <p><strong>เวลา:</strong> {{ session('booking')->time }}</p>
                <p><strong>ราคา:</strong> {{ session('booking')->price }}</p>
                <p><strong>ความต้องการเพิ่มเติม:</strong> {{ session('booking')->additional_requests }}</p>
            @else
                <p>ไม่พบข้อมูลการจอง</p>
            @endif
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        </div>
    </div>
</div>
</div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery, Popper.js, Bootstrap JS -->

    <script>
      document.addEventListener('DOMContentLoaded', function() {
    const serviceSelect = document.getElementById('service');
    const userId = document.getElementById('user_id').value;
    const priceInput = document.getElementById('price');

    function fetchPrice() {
        const serviceId = serviceSelect.value;

        if (serviceId && userId) {
            $.ajax({
                url: '{{ route('fetch.price') }}',
                type: 'GET',
                data: {
                    service_id: serviceId,
                    user_id: userId,
                },
                success: function(response) {
                    if (response.price) {
                        priceInput.value = response.price;
                    } else {
                        priceInput.value = 'ไม่พบราคา';
                    }
                },
                error: function() {
                    priceInput.value = 'เกิดข้อผิดพลาด';
                }
            });
        }
    }

    serviceSelect.addEventListener('change', fetchPrice);
});

document.addEventListener('DOMContentLoaded', function() {
    @if (session('booking'))
        $('#bookingDetailModal').modal('show');
    @endif
});

    </script>

</body>

</html>
