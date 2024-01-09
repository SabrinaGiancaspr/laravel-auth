@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <h1>Edit the Project</h1>
    <form action="{{ route('admin.projects.update', $project ) }}" method="POST" >

      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ old('name',$project->name) }}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="descrizione" ></textarea>

      </div>
      <div class="mb-3">
        <label for="project_type" class="form-label">project type</label>
        <input type="text" class="form-control" name="project_type" id="project_type" placeholder="project type">
      </div>
      <div class="mb-3">
        <label for="project_status" class="form-label">project status</label>
        <input type="text" class="form-control" name="project_status" id="project_status" placeholder="project status">
      </div>
      <div class="mb-3">
        <label for="link" class="form-label">link</label>
        <input type="text" class="form-control" name="link" id="link" placeholder="link">
      </div>
      
      
      <div class="">
        <input type="submit" class="btn btn-primary" value="Edit">
      </div>

    </form>
  </div>
</section>

@endsection