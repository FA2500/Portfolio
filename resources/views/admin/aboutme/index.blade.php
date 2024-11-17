@extends('admin.layouts.admin')

@section('content')
{{-- 
<div class="main-panel">
    <div class="content-wrapper"> --}}
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">About me</h4>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
             @endif
            <form class="forms-sample" method="POST" action="{{ route('admin.aboutme.update', $user->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <p class="card-description"> Personal info </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                      <input type="tel" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="address" rows="3">{{ old('address', $user->address) }}</textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Job</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="job" value="{{ old('job', $user->job) }}"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Degree</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="degree" value="{{ old('degree', $user->degree)}}" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Experience</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="experience" value="{{ old('experience', $user->experience)}}"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Birth Day</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="birth_day" value="{{ old('birth_day', $user->birth_day)}}" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Profile Picture</label>
                <input type="file" name="image" class="form-control" value="{{ old('profile_pic', $user->profile_pic) }}">
              </div>
              <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
            </form>
          </div>
      </div>

{{-- </div>
</div> --}}

@endsection
