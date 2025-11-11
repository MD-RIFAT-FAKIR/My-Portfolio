@extends('admin.admin_dashboard')

@section('admin')
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">All Service</h6>
      <div class="table-responsive">
        <table id="dataTableExample" class="table">
          <thead>
            <tr>
              <th>Serial</th>
              <th>Service Title</th>
              <th>Service Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($services as $key => $service)
              <tr>             
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $service->service_title   }}</td>
                  <td>{{ $service->service_description }}</td>
                  <td>
                    <button type="button" class="btn btn-inverse-light">Edit</button>
                    <button type="button" class="btn btn-inverse-danger">Delete</button>
                  </td>                        
              </tr>
            @endforeach  
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection