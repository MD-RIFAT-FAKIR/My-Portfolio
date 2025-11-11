@extends('admin.admin_dashboard')

@section('admin')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Add Service</h6>
      <form class="forms-sample" action="{{ route('store.service') }}" method="POST" >

        @csrf

        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Service Title</label>
          <div class="col-sm-9">
            <input type="text" class="form-control @error('service_title') is-invalid @enderror" name="service_title" placeholder="Service Title">
            @error('service_title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Service Description</label>
          <div class="col-sm-9">
            <textarea class="form-control @error('service_description') is-invalid @enderror" name="service_description" rows="5" placeholder="Service Description"></textarea>
            @error('service_description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-secondary">Add Service</button>
      </form>
    </div>
  </div>
</div>
    

@endsection