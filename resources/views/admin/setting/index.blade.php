@extends('admin.layouts.admin')

@section('content')
{{-- 
<div class="main-panel">
    <div class="content-wrapper"> --}}

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">About Me Section Details</h4>
            <p class="card-description"> Web Informations </p>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
             @endif
            <form class="forms-sample" method="POST" action="{{ route('admin.setting.update', $setting->id ) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
            <div class="row">
            <div class="form-group">
              <label for="exampleInputName1">Title</label>
              <input type="text" class="form-control" id="exampleInputName1" name="about_title" placeholder="Title" value="{{ old('about_title', $setting->about_title) }}" required>
            </div>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Description</label>
              <textarea class="form-control" id="exampleTextarea1" rows="4" maxlength="255" name="about_description" required>{{ old('about_description', $setting->about_description) }}</textarea>
            </div>
            <div class="form-group">
                <label>About Picture</label>
                <input type="file" name="image" class="form-control" value="{{ old('about_photo', $setting->about_photo) }}">
              </div>
          </div>
        </div>
      </div>


      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Website Settings</h4>

              <p class="card-description"> Web Informations </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Facebook</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="fb_url" value="{{ old('fb_url', $setting->fb_url) }}"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Github</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="github_url" value="{{ old('github_url' ,$setting->github_url) }}"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">FreeLance</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="freelance_url" value="{{ old('freelance_url', $setting->freelance_url) }}"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">CV URL</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="cv_url" value="{{ old('cv_url',$setting->cv_url) }}"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Video URL</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="video_url" placeholder="Embded URL" value="{{ old('video_url',$setting->video_url) }}"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">linkedin URL</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="linkedin_url" value="{{ old('linkedin_url',$setting->linkedin_url) }}"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Contact Mail</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="contact_mail" value="{{ old('contact_mail',$setting->contact_mail) }}"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                </div>
              </div>
              <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
            </form>
          </div>
      </div>

{{-- </div>
</div> --}}

@endsection
