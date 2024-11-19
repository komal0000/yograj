@extends('admin.adminpanel')
@section('title', 'About Page Settings')
@section('jumbo')
    <li class="breadcrumb-item"><a href="/admin/settings">Settings</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Page Settings</li>
@endsection
@section('content')
    <div class="mt-5">
        <h2>About Page Settings</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="biographyTextarea">Biography</label>
                    <textarea class="form-control" id="biographyTextarea" name="biography" rows="5">{{ old('biography', $data->biography) }}</textarea>
                </div>
                <div class="form-group col-md-3">
                    <label for="imageInput">Upload Image</label>
                    <input type="file" class="form-control" id="imageInput" name="aboutimage" value="">{{ $data->aboutimage }}
                </div>
                <div class="form-group col-md-4">
                    <label for="emailInput">Email</label>
                    <input type="email" class="form-control" id="emailInput" name="email" value="{{ old('email', $data->email) }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="phoneInput">Phone</label>
                    <input type="tel" class="form-control" id="phoneInput" name="phone" value="{{ old('phone', $data->phone) }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="addressInput">Address</label>
                    <input type="text" class="form-control" id="addressInput" name="address" value="{{ old('address', $data->address) }}">
                </div>
            </div>
            <div class="form-row" id="skillsContainer">
                @foreach($data->skills as $index => $skill)
                <div class="form-group col-md-3">
                    <label for="skillInput">Skill {{ $index + 1 }}</label>
                    <div class="input-group">
                        <input type="text" class="form-control skillInput" placeholder="Enter skill" name="skills[]" value="{{ old('skills.' . $index, $skill) }}">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-danger deleteSkillBtn">Delete</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="form-group col-md-3 mt-2" id="addSkillBtnContainer">
                <button type="button" class="btn btn-success mt-4" id="addSkillBtn">Add Skill</button>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("addSkillBtn").addEventListener("click", function () {
                var newSkillInput = document.querySelector(".skillInput").cloneNode(true);
                newSkillInput.value = '';
                document.getElementById("skillsContainer").appendChild(newSkillInput);
            });

            var deleteButtons = document.querySelectorAll(".deleteSkillBtn");
            deleteButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    this.closest('.form-group').remove();
                });
            });
        });
    </script>
@endsection
