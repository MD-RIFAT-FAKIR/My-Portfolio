@extends('admin.admin_dashboard')

@section('admin')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Hero Section Edit</h6>
        <form action="{{ route('update.hero.section') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-sm-4">
              <div class="mb-4">
                <img id="showImage" src="{{ !empty($hero->photo) ? asset($hero->photo) : asset('uploads/no-img-avatar.png') }}" alt="" style="width: 150px; height: 150px; border-radius: 10px">
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
                <input type="text" name="name" class="form-control" value="{{ $hero->name }}">
              </div>
            </div><!-- Col -->
            <div class="col-sm-4">
              <div class="mb-4">
                <label class="form-label">Profession</label>
                <input type="text" class="form-control" name="profession" value="{{ $hero->profession }}">
              </div>
            </div><!-- Col -->
          </div><!-- Row -->
          <div class="row">
            <div class="col-sm-3">
              <div class="mb-3">
                <label class="form-label">Twitter URL</label>
                <input type="text" class="form-control" name="twitter_url" value="{{ $hero->twitter_url }}">
              </div>
            </div><!-- Col -->
            <div class="col-sm-3">
              <div class="mb-3">
                <label class="form-label">YouToube URL</label>
                <input type="text" class="form-control" name="youtube_url" value="{{ $hero->youtube_url }}">
              </div>
            </div><!-- Col -->
            <div class="col-sm-3">
              <div class="mb-4">
                <label class="form-label">Linkedin URL</label>
                <input type="text" class="form-control" name="linkdin_url" value="{{ $hero->linkdin_url }}">
              </div>
            </div><!-- Col -->
            <div class="col-sm-3">
              <div class="mb-3">
                <label class="form-label">GitHub URL</label>
                <input type="text" class="form-control" name="github_url" value="{{ $hero->github_url }}">
              </div>
            </div><!-- Col -->
          </div><!-- Row -->
          <div class="row">
            <div class="col-sm-4">
              <div class="mb-3">
                <label class="form-label">Year Of Experience</label>
                <input type="text" class="form-control" name="YOE" value="{{ $hero->YOE }}">
              </div>
            </div><!-- Col -->
            <div class="col-sm-4">
              <div class="mb-4">
                <label class="form-label">Project Completed</label>
                <input type="text" class="form-control" name="PC" value="{{ $hero->PC }}">
              </div>
            </div><!-- Col -->
            <div class="col-sm-4">
              <div class="mb-3">
                <label class="form-label">Happy Client</label>
                <input type="text" class="form-control" name="HC" value="{{ $hero->HC }}">
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
										<textarea class="form-control" name="short_desc" rows="5">{{ $hero->short_desc }}</textarea>
              </div>
            </div><!-- Col -->
          </div>
          <button type="submit" class="btn btn-primary">Update Hero Section</button>
        </form>
    </div>
  </div>
</div>
    


  {{-- image preview functionallity  --}}
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
  {{-- end image preview functionallity  --}}


@endsection