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
                  <td>{{ Str::title($service->service_title)   }}</td>
                  <td>{!! Str::wordWrap($service->service_description, 60, '<br>') !!}</td>
                  <td>
                    <a href="{{ route('edit.service', $service->id) }}" class="btn btn-inverse-light" style="margin-right: 6px">Edit</a>
                    <a href="{{ route('delete.service', $service->id) }}" class="btn btn-inverse-danger" id="delete">Delete</a>
                  </td>                        
              </tr>
            @endforeach  
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection