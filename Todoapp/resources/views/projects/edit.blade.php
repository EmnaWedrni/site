@extends('auth.layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Project</div>

                <div class="card-body">
                   <!-- edit.blade.php -->

<form method="POST" action="{{route('projects.update', $project->id) }}">
    @csrf
  
    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $project->title) }}" required autofocus>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" class="form-control" name="description" rows="4">{{ old('description', $project->description) }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update Project</button>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection