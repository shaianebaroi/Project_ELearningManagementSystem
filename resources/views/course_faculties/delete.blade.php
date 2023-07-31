<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Course Faculties') }}
        </h2>
    </x-slot>
      
    <form action = "" method ="post">
      {{ csrf_field() }}
      <br>
      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "section_id"> Section ID </label>
        <input type = "text" id = "section_id" name = "section_id" class = "form-control" value = '{{ $courseFaculties->section_id }}' disabled/>
      </div>

      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "course_code"> Course Code </label>
        <input type = "text" id = "course_code" name = "course_code" class = "form-control" value = '{{ $courseFaculties->course_code }}'disabled />
      </div>

      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "section_no"> Section No </label>
        <input type = "text" id = "section_no" name = "section_no" class = "form-control" value = '{{ $courseFaculties->section_no }}'disabled/>
      </div>

      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "course_faculty"> Course Faculty</label>
        <input type = "text" id = "course_faculty" name = "course_faculty" class = "form-control" value = '{{ $courseFaculties->course_faculty }}'disabled/>
      </div>

      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "status"> Status </label>
        <input type = "text" id = "status" name = "status" class = "form-control" value = '{{ $courseFaculties->status }}'disabled/>
      </div>

      <div class="col-md-12 text-center">
      <button class = "btn btn-primary btn-lg active" type = "submit"> Update </button>
      <a href = "{{ route('course_faculties.customisecourse_faculties') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"> Back </a>
      </div>

    </form>
  </div>
  </div>
</x-app-layout>

