@extends('layouts.main')
@section('content')
<!-- Change Mobile Modal -->
<div class="modal fade" id="changeMobileModal" tabindex="-1" aria-labelledby="changeMobileLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form id="changeMobileForm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Change Mobile Number</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="user_id" id="mobileUserId">
            <div class="mb-3">
              <label for="newMobile" class="form-label">New Mobile Number</label>
              <input type="text" class="form-control" id="newMobile" name="mobile" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </div>

    <div class="content">
        <x-breadcrumbs :bcdata="$breadcrumbs" />
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm fs-9 mb-0 " id="branch_table">
                                <thead class="bg-light">
                                    <tr>
                                        <th> S.No </th>
                                        <th> User Name </th>
                                        <th >Contact Number </th>
                                        <th>E-mail Id </th>
                                        <th >gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list p-3">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @include('includes.footer')
    </div>
@endsection
@section('inline')
   <script>
      $(document).ready(function() {
            $('#branch_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('user.manage_user_lists') }}',
                columns: [{
                        data: null,
                        name: 'sno',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'firstname',
                        name: 'firstname'
                    },
                    {
                        data: 'contact_number',
                        name: 'contact_number'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },

                    {
                        data: 'gender',
                        name: 'gender'
                    },

                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                "rowCallback": function(row, data, index) {
                    $('td:eq(0)', row).html(index + 1);
                }
            });
        });
    // Handle delete button click
    $(document).on('click', '.deleteRow', function (e) {
        e.preventDefault();
        let deleteId = $(this).data('id');

        if (confirm('Are you sure you want to delete this user?')) {
            $.ajax({
                url: "{{ route('user.manage_user_lists') }}", // Replace with your actual route if different
                type: "POST",
                data: {
                    delete_user: true,
                    deleteId: deleteId,
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    if (response.success) {
                        alert(response.message);
                        $('#branch_table').DataTable().ajax.reload(); // Replace with your actual table ID
                    } else {
                        alert(response.message);
                    }
                },
                error: function () {
                    alert('An error occurred while deleting the user.');
                }
            });
        }
    });

$(document).ready(function () {
    // Prefill modal with current mobile and user ID
    $(document).on('click', '.changeMobileBtn', function () {
        $('#mobileUserId').val($(this).data('id'));
        $('#newMobile').val($(this).data('mobile'));
    });

    // Handle submit
    $('#changeMobileForm').submit(function (e) {
        e.preventDefault();
        let formData = {
            user_id: $('#mobileUserId').val(),
            mobile: $('#newMobile').val(),
            _token: '{{ csrf_token() }}'
        };

        $.ajax({
            url: "{{ route('user.manage_user_lists') }}", // You need to define this route
            method: "POST",
            data: formData,
            success: function (response) {
                if (response.success) {
                    alert(response.message);
                    $('#changeMobileModal').modal('hide');
                    $('#branch_table').DataTable().ajax.reload(); // Reload table
                } else {
                    alert(response.message);
                }
            },
            error: function () {
                alert('Failed to update mobile number.');
            }
        });
    });
});


   </script>
@endsection
