@extends('layouts.app')

@section('content')
    <section>
      <div class="container">
        <a class="btn btn-primary" href="{{ route('admin.projects.edit',$project) }}">edit</a>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">project name:{{$project->name}}</h5>
                <p class="card-text">project description: {{$project->description}}</p>
                <a href="#" class="card-link">GitHub link: {{$project->link}}</a>
                <p class="card-text">project type: {{$project->project_type}}</p>
                </div>
            </div>
      </div>
    </section>
@endsection