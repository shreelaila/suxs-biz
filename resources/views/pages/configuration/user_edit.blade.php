@extends('layouts.main')
@section('content')

    <div class="content">
        <x-breadcrumbs :bcdata="$breadcrumbs" />
        @if ($errors->any())
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="alert alert-subtle-danger alert-dismissible fade show mb-xl-0" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-body">
                        <form action="" method="post" class="needs-validation" novalidate id="user_form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="ture">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="firstName" name="firstName" type="text" value="{{ old('firstName', $user->firstname) }}" placeholder="First Name" required>
                                        <label for="firstName">First Name <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="lastName" name="lastName" type="text" value="{{ old('lastName', $user->lastname) }}" placeholder="Last Name" required>
                                        <label for="lastName">Last Name <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" type="email" value="{{ old('email', $user->email) }}" placeholder="Email ID" required>
                                        <label for="email">Email ID <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="contactNumber" name="contactNumber" type="tel" value="{{ old('contactNumber', $user->contact_number) }}" placeholder="Contact Number" required>
                                        <label for="contactNumber">Contact Number <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control datetimepicker" id="dob" name="dob" type="text" value="{{ old('dob', $user->date_of_birth) }}" placeholder="Date Of Birth" onfocus="this.type='date'" required>
                                        <label for="dob">Date Of Birth <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="gender" name="gender" aria-label="Select Gender" required>
                                            <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                            <option value="other" {{ old('gender', $user->gender) == 'other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                        <label for="gender">Gender <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="address_1" name="address_1" placeholder="Address" style="height: 100px;" required>{{ old('address_line1', $user->address_line1) }}</textarea>
                                        <label for="address_1">Address1 <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="address_2" name="address_2" placeholder="Address" style="height: 100px;" required>{{ old('address_line2', $user->address_line1) }}</textarea>
                                        <label for="address_2">Address2 <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="customerType" name="role" aria-label="Select Role">
                                            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="distributed" {{ old('role', $user->role) == 'distributed' ? 'selected' : '' }}>Distributed</option>
                                            <option value="retail" {{ old('role', $user->role) == 'retail' ? 'selected' : '' }}>Retail</option>
                                            <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                                        </select>
                                        <label for="customerType">Customer Type</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-advance-select mb-3">
                                        <select class="form-select" id="country" required name="country">
                                            <option>-- Select country --</option>
                                            @if (isset($countries))
                                                @foreach ($countries as $country)
                                                    <option value="{{ Crypt::encrypt($country['id']) }}"
                                                        {{ isset($user) && $user->country == $country['id'] ? 'selected' : '' }}>
                                                        {{ $country['name'] }}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                        <label for="country">country <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-advance-select mb-3">
                                        <select class="form-select" id="state" required name="state">
                                            @if (isset($states))
                                                @foreach ($states as $state)
                                                    <option value="{{ Crypt::encrypt($state['id']) }}"
                                                        {{ isset($user) && $user->state == $state['id'] ? 'selected' : '' }}>
                                                        {{ $state['state_name'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <label for="state">state <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-advance-select mb-3">
                                        <select class="form-select" id="city" required name="city">
                                            @if (isset($cities))
                                                @foreach ($cities as $city)
                                                    <option value="{{ Crypt::encrypt($city['id']) }}"
                                                        {{ isset($user) && $user->city == $city['id'] ? 'selected' : '' }}>
                                                        {{ $city['city_name'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <label for="city">City <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="shop" name="shop" type="file" placeholder="Shop Photo">
                                        <label for="shop">Shop Photo</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="pan" name="pan" type="file" placeholder="Pan Photo">
                                        <label for="pan">Pan Photo</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="aadhar" name="aadhar" type="file" placeholder="Aadhar Photo">
                                        <label for="aadhar">Aadhar Photo</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="profile" name="profile" type="file" placeholder="Profile Photo">
                                        <label for="profile">Profile Photo</label>
                                    </div>
                                </div>
                                <div class="card-footer mt-3">
                                    <div class="hstack gap-2 justify-content-center">
                                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Save</button>
                                        <a href="javascript:;" class="btn btn-xs btn-light cancel"><i class="far fa-times-circle"></i> Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('inline')
<script>
    var cities = new Choices(document.getElementById("city"), {
           shouldSort: false,
           searchEnabled: true,
           searchChoices: true,
           allowHTML: true,
           position: "bottom"
       });
       var states = new Choices(document.getElementById("state"), {
           shouldSort: false,
           searchEnabled: true,
           searchChoices: true,
           allowHTML: true,
           position: "bottom"
       });
       var countries = new Choices(document.getElementById("country"), {
           shouldSort: false,
           searchEnabled: true,
           searchChoices: true,
           allowHTML: true,
           position: "bottom"
       });
       $(document).on('change', '#country', function(e) {
           let countries_id = $(this).val();
           states.clearChoices();
           states.clearStore();
           $.ajax({
               url: "{{ route('user.manage_user_add') }}",
               type: 'POST',
               data: {
                   countries_id: countries_id,
                   _token: "{{ csrf_token() }}",
                   ax_states: 'true'
               },
               dataType: "json",
               success: function(response) {
                   var s = [];
                   s.push({
                       value: '',
                       label: '-- select --',
                       selected: true
                   });
                   if (response.length > 0) {
                       $.each(response, function(index, v) {
                           s.push({
                               value: v.id,
                               label: v.state_name
                           });
                       });
                       states.setChoices(s);
                   }
               }
           });
       });
       // get cities
       $(document).on('change', '#state', function(e) {
           let state_id = $(this).val();
           cities.clearChoices();
           cities.clearStore();
           $.ajax({
               url: "{{ route('user.manage_user_add') }}",
               type: 'POST',
               data: {
                   state_id: state_id,
                   _token: "{{ csrf_token() }}",
                   ax_cities: 'true'
               },
               dataType: "json",
               success: function(response) {
                   var s = [];
                   s.push({
                       value: '',
                       label: '-- select --',
                       selected: true
                   });
                   if (response.length > 0) {
                       $.each(response, function(index, v) {
                           s.push({
                               value: v.id,
                               label: v.city_name
                           });
                       });
                       cities.setChoices(s);
                   }
               }
           });
       });
       $("#user_form").submit(function(event) {
           $("#user_form").validate({
               errorPlacement: function(error, element) {
                   return true;
               }
           });
           event.preventDefault();
           let form = this;
           if ($(this).valid()) {
               simpleConfirmation('form_submit', function(v) {
                   if (v) {
                       form.submit();
                   }
               });
           }
       });

       $(document).on('click', '.cancel', function(e) {
           window.location.reload();
       });
</script>
@endsection
