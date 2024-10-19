<!-- resources/views/pages/create.blade.php -->

@extends('backend.master')

@section('body')
<div class="row mt-5">
    <div class="col-md-12 mx-auto">
        <div class="card">
            <div class="card-header bg-light">
       <h2 >{{ isset($page) ? 'Edit Page' : 'Create Page' }}</h2>
       <a href="{{ route('pages.index') }}" class="btn btn-success btn-sm position-absolute me-5"
       style="right: 0">manage</a></div>

       <div class="card-body">
        <form action="{{ isset($page) ? route('pages.update', $page->id) : route('pages.store') }}" method="POST">
            @csrf
            @if(isset($page))
                @method('PUT')
            @endif


            <div class="row mt-3">
            <div class="form-group">
                <label for="name">Page Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', isset($page) ? $page->title : '') }}" required>
            </div>
            </div>

            <div class="row mt-3">
                <label for="" class="col-md-3">Image</label>
                <div class="col-md-9">
                    <input type="file" name="image" class="form-control" accept="image/*"  />
                    @if(isset($page))
                        <img src="{{ asset($page->image) }}" alt="" style="height: 80px" />
                    @endif
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group">
                    <label for="name">Posting Title</label>
                    <input type="text" name="posting_title" class="form-control" value="{{ old('posting_title', isset($page) ? $page->posting_title : '') }}" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group">
                    <label for="name">Date Opened</label>
                    <input type="text" name="date_opened" class="form-control" value="{{ old('date_opened', isset($page) ? $page->date_opened : '') }}" required>
                </div>
            </div>


            <div class="row mt-3">
                <div class="form-group">
                    <label for="content">Job description</label>
                    <textarea name="job_description" id="job_description" rows="5" class="form-control" required>{{ old('job_description', isset($page) ? $page->job_description : '') }}</textarea>
                </div>

            </div>


            <div class="row mt-3">
                <div class="form-group">
                    <label for="name">Work Experience</label>
                    <input type="text" name="work_experience" class="form-control" value="{{ old('work_experience', isset($page) ? $page->work_experience : '') }}" required>
                </div>
            </div>


            <div class="row mt-3">
                <div class="form-group">
                    <label for="name">Job Type</label>
                    <input type="text" name="job_type" class="form-control" value="{{ old('job_type', isset($page) ? $page->job_type : '') }}" required>
                </div>
            </div>


            <div class="row mt-3">
                <div class="form-group">
                    <label for="name">Apply Link</label>
                    <input type="text" name="apply_link" class="form-control" value="{{ old('apply_link', isset($page) ? $page->apply_link : '') }}" required>
                </div>
            </div>




            <div class="row mt-3">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control"
                           value="{{ old('slug', isset($page) ? $page->slug : '') }}" required>
                    @error('slug')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <div class="row mt-3">
                <div class="form-group">
                    <label for="content">Page Content</label>
                    <textarea name="content" id="content" rows="5" class="form-control" required>{{ old('content', isset($page) ? $page->content : '') }}</textarea>
                    @error('content')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>




            <button type="submit" class="btn btn-primary">{{ isset($page) ? 'Update' : 'Create' }}</button>
        </form>

        </div>
        </div>
    </div>
</div>

@endsection
