@extends('layouts.page')
@section('title', 'New Posts')
@section('body')
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">New Posts</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('create_post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="caption" class="form-label">Caption</label>
                        <textarea style="height: 100px" class="form-control" placeholder="Leave a text here" name="caption" id="caption"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="custom-file-upload">
                            <input type="file" class="custom-file-input" id="media" name="media[]"
                                multiple="multiple" accept="image/*, video/*" style="display: none;">
                            <label class="custom-file-label" for="media" id="selectedFileName">
                                <i class="fas fa-plus"></i> Add Media
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div id="mediaPreview" class="d-flex flex-wrap"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
