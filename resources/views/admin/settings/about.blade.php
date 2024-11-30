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
                    <input type="file" class="form-control dropify" id="imageInput" name="aboutimage"
                        data-default-file="{{ asset($data->aboutimage) }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="emailInput">Email</label>
                    <input type="email" class="form-control" id="emailInput" name="email"
                        value="{{ old('email', $data->email) }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="phoneInput">Phone</label>
                    <input type="tel" class="form-control" id="phoneInput" name="phone"
                        value="{{ old('phone', $data->phone) }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="addressInput">Address</label>
                    <input type="text" class="form-control" id="addressInput" name="address"
                        value="{{ old('address', $data->address) }}">
                </div>
            </div>
            <div class="form-row" id="skillsContainer">
                @foreach ($data->skills as $index => $skill)
                    <div class="form-group col-md-3">
                        <label for="skillInput">Skill {{ $index + 1 }}</label>
                        <div class="input-group">
                            <input type="text" class="form-control skillInput" placeholder="Enter skill" name="skills[]"
                                value="{{ old('skills.' . $index, $skill) }}">
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
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

    <!-- include summernote css/js -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            $('#biographyTextarea').summernote();

            const addSkillBtn = document.getElementById("addSkillBtn");
            const skillsContainer = document.getElementById("skillsContainer");

            addSkillBtn.addEventListener("click", function() {
                const newSkillGroup = document.createElement("div");
                newSkillGroup.classList.add("form-group", "col-md-3");

                newSkillGroup.innerHTML = `
                    <label for="skillInput">Skill</label>
                    <div class="input-group">
                        <input type="text" class="form-control skillInput" placeholder="Enter skill" name="skills[]" value="">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-danger deleteSkillBtn">Delete</button>
                        </div>
                    </div>
                `;
                skillsContainer.appendChild(newSkillGroup);
                const deleteBtn = newSkillGroup.querySelector(".deleteSkillBtn");
                deleteBtn.addEventListener("click", function() {
                    newSkillGroup.remove();
                });
            });
            const deleteButtons = document.querySelectorAll(".deleteSkillBtn");
            deleteButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    this.closest('.form-group').remove();
                });
            });
        });
    </script>
@endsection
