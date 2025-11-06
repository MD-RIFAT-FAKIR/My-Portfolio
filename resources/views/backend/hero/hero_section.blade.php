@extends('admin.admin_dashboard')

@section('admin')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Hero Section Edit</h6>
        <form>
          <div class="row">
            <div class="col-sm-4">
              <div class="mb-4">
                <img id="showImage" src="{{ !empty($admin->photo) ? asset($admin->photo) : asset('uploads/no-img-avatar.png') }}" alt="" style="width: 90px; height: 90px;">
              </div>
            </div><!-- Col -->
          </div><!-- Row -->
          <div class="row">
            <div class="col-sm-4">
              <div class="mb-3">
                <label class="form-label">Hero Photo</label>
                <input class="form-control" type="file" name="photo" id="Image">
              </div>
            </div><!-- Col -->
            <div class="col-sm-4">
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
              </div>
            </div><!-- Col -->
            <div class="col-sm-4">
              <div class="mb-4">
                <label class="form-label">Profession</label>
                <input type="text" class="form-control" name="profession" placeholder="Profession">
              </div>
            </div><!-- Col -->
          </div><!-- Row -->
          <div class="row">
            <div class="col-sm-3">
              <div class="mb-3">
                <label class="form-label">Twitter URL</label>
                <input type="text" class="form-control" name="twitter_url" placeholder="Twitter URL">
              </div>
            </div><!-- Col -->
            <div class="col-sm-3">
              <div class="mb-3">
                <label class="form-label">YouToube URL</label>
                <input type="text" class="form-control" name="youtube_url" placeholder="YouToube URL">
              </div>
            </div><!-- Col -->
            <div class="col-sm-3">
              <div class="mb-4">
                <label class="form-label">Linkedin URL</label>
                <input type="text" class="form-control" name="linkdin_url" placeholder="Linkedin URL">
              </div>
            </div><!-- Col -->
            <div class="col-sm-3">
              <div class="mb-3">
                <label class="form-label">GitHub URL</label>
                <input type="text" class="form-control" name="github_url" placeholder="GitHub URL">
              </div>
            </div><!-- Col -->
          </div><!-- Row -->
          <div class="row">
            <div class="col-sm-4">
              <div class="mb-3">
                <label class="form-label">Year Of Experience</label>
                <input type="text" class="form-control" name="YOE" placeholder="Year Of Experience">
              </div>
            </div><!-- Col -->
            <div class="col-sm-4">
              <div class="mb-4">
                <label class="form-label">Project Completed</label>
                <input type="text" class="form-control" name="PC" placeholder="Project Completed">
              </div>
            </div><!-- Col -->
            <div class="col-sm-4">
              <div class="mb-3">
                <label class="form-label">Happy Client</label>
                <input type="text" class="form-control" name="HC" placeholder="Happy Client">
              </div>
            </div><!-- Col -->
          </div><!-- Row -->
          <div class="row">
             <div class="col-sm-12">
              <div class="mb-4">
                <label class="form-label">Upload Your Resume (CV)</label>
                <input type="file" name="resume" class="form-control">
              </div>
            </div><!-- Col -->
          </div>
          <div class="row">
             <div class="col-sm-12">
              <div class="mb-4">
                <label for="short_desc" class="form-label">Short Description</label>
										<textarea class="form-control" name="short_desc" id="short_desc" rows="5"></textarea>
              </div>
            </div><!-- Col -->
          </div>
        </form>
        <button type="button" class="btn btn-primary submit">Update Hero Section</button>
    </div>
  </div>
</div>
    
@endsection