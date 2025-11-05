@extends('admin.admin_dashboard')

@section('admin')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Edit Profile</h6>
      <form class="forms-sample">
        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="username" value="{{ $admin->username }}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" name="email" value="{{ $admin->email }}" autocomplete="off" placeholder="Email">
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Profile Photo</label>
          <div class="col-sm-9">
            <input class="form-control" type="file" id="Image">
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label"></label>
          <div class="col-sm-9">
            <img id="showImage" src="{{ asset('uploads/no-img-avatar.png') }}" alt="" style="width: 90px; height: 90px;">
          </div>
        </div>
        <button class="btn btn-secondary">Update</button>
      </form>
    </div>
  </div>
</div>
    

{{-- image preview functionallity --}}
<script>
  $(document).ready(function() {
      $('#Image').on('change', function(e) {
        let reader = new FileReader();

        reader.onload = function(e) {
          $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
        
      });
  });
</script>
{{-- end image preview functionallity --}}

@endsection