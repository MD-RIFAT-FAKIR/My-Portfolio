@extends('admin.admin_dashboard')

@section('admin')


<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Add Work</h6>
      <form class="forms-sample" action="{{ route('store.service') }}" method="POST" >

        @csrf


        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Select Service</label>
          <div class="col-sm-9">
            <select name="service" class="form-control">
              @foreach ($services as $service)
                  <option value="{{ $service->id }}">{{ $service->service_title }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
          <div class="col-sm-9">
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Sub Title</label>
          <div class="col-sm-9">
            <input type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" placeholder="Sub Title">
            @error('sub_title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">URL</label>
          <div class="col-sm-9">
            <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url" placeholder="URL">
            @error('url')
                <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Photo</label>
          <div class="col-sm-9">
            <input type="file" class="form-control" name="photo" id="Image">
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label"></label>
          <div class="col-sm-9">
            <img src="" alt="" id="ShowImage" style="width: 100px; height:100px">
          </div>
        </div>
        <button type="submit" class="btn btn-secondary">Add Work</button>
      </form>
    </div>
  </div>
</div>


{{-- image previw functionallity --}}
<script>
  $(document).ready(function() {

    $('#Image').on('change', function(e) {
      let reader = new FileReader();
      reader.onload = function(e) {
        $('#ShowImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files[0]);

    });

  });
</script>
{{-- image previw functionallity --}}



@endsection

