@extends('admin.home')

@section('content')
<h1>Generate your new project:</h1>
<form action="{{route('admin.project.store')}}" method="POST" class="row g-3 p-3">
    @csrf
    {{-- NAME --}}
    <div class="col-md-3">
        <label for="title" class="form-label">Name:</label>
        <input type="text" placeholder="Project name" class="form-control" name="title" id="title">
        @error('title')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror
    </div>

    {{-- Category --}}
    <div class="col-md-3">
        <label for="type_id" class="form-label">Genere</label>
        <select name="type_id" class="form-select" id="type_id">
            <option value="">Selezionare una genere</option>
            @foreach ($types as $type)
            <option
            >{{ $type->name }}</option>
            @endforeach
        </select>
    </div>



    {{-- DATE --}}
    <div class="col-md-3">
        <label for="start_date" class="form-label">Project start date:</label>
        <input type="date" class="form-control" name="start_date" id="start_date">
        @error('start_date')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror
    </div>
    {{-- DESCRIPTION --}}
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" name="description" placeholder="Insert description" id="description" rows="3"></textarea>
        @error('description')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror
    </div>
    {{-- BTN --}}
    <div class="col-12">
        <button type="reset" class="btn btn-warning">Annulla</button>
        <button type="submit" class="btn btn-primary">Save new project</button>
    </div>
  </form>

@endsection
