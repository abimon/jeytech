@extends('layouts.admin')
@section('content')
<section class="section profile">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Create User</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                            <!-- Profile Create Form -->
                            <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img id="output" src="" />
                                        <input type="file" accept="image/jpeg, image/png" name="avatar" id="file" style="display: none;" class="form-control" onchange="loadFile(event)">

                                        <script>
                                            var loadFile = function(event) {
                                                var image = document.getElementById('output');
                                                image.src = URL.createObjectURL(event.target.files[0]);
                                                document.getElementById('output').value == image.src;
                                            };
                                        </script>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-primary btn-sm " title="Upload new profile image"><label for="file" class="text-white"><i class="bi bi-upload"></i> Upload Avatar</label></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text" class="form-control" id="fullName" value="{{old('name')}}">
                                    </div>
                                    @error('name')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Role</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="role" type="text" class="form-control" id="Job" value="{{old('role')}}">
                                    </div>
                                    @error('role')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone No.</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="contact" type="text" class="form-control" id="Phone"  value="{{old('contact')}}">
                                    </div>
                                    @error('contact')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="Email"  value="{{old('email')}}">
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="twitter" type="text" class="form-control" id="Twitter"  value="{{old('twitter')}}">
                                    </div>
                                    @error('twitter')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="facebook" type="text" class="form-control" id="Facebook"  value="{{old('facebook')}}">
                                    </div>
                                    @error('facebook')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="instagram" type="text" class="form-control" id="Instagram"  value="{{old('instagram')}}">
                                    </div>
                                    @error('instagram')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="linkedin" type="text" class="form-control" id="Linkedin"  value="{{old('linkedin')}}">
                                    </div>
                                    @error('linkedin')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save User</button>
                                </div>
                            </form>
                            <!-- End Profile Edit Form -->

                        </div>
                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection