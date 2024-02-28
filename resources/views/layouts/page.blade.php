<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        .custom-file-upload {
            display: inline-block;
            position: relative;
            overflow: hidden;
            border-radius: 5px;
            background-color: #f1f1f1;
            padding: 10px;
        }

        .custom-file-input {
            display: none;
        }

        .custom-file-label {
            cursor: pointer;
        }

        .custom-file-label i {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    @yield('body')

    <div class="modal fade" id="alert-modal" tabindex="-1" aria-labelledby="alert-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alert-modal-label">Alert</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{ implode('', $errors->all(':message')) }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var alertModal = new bootstrap.Modal(document.getElementById('alert-modal'));
            @if (session('success') || $errors->any())
                alertModal.show();
            @endif
        });

        document.addEventListener("DOMContentLoaded", function() {
            const mediaInput = document.getElementById('media');
            const mediaPreview = document.getElementById('mediaPreview');

            mediaInput.addEventListener('change', function(event) {
                mediaPreview.innerHTML = ''; // Clear previous previews
                const files = event.target.files;
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const fileType = file.type.split('/')[0];
                        let mediaPreviewElement;
                        if (fileType === 'image') {
                            mediaPreviewElement = document.createElement('img');
                            mediaPreviewElement.src = e.target.result;
                            mediaPreviewElement.classList.add('img-thumbnail', 'm-2');
                            mediaPreviewElement.style.maxWidth = '150px';
                            mediaPreviewElement.style.maxHeight = '150px';
                        } else if (fileType === 'video') {
                            mediaPreviewElement = document.createElement('video');
                            mediaPreviewElement.src = e.target.result;
                            mediaPreviewElement.classList.add('m-2');
                            mediaPreviewElement.width = '150';
                            mediaPreviewElement.height = '150';
                            mediaPreviewElement.controls = true;
                            const source = document.createElement('source');
                            source.src = e.target.result;
                            source.type = file.type;
                            mediaPreviewElement.appendChild(source);
                        }
                        mediaPreview.appendChild(mediaPreviewElement);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });

        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function() {
                var dataURL = reader.result;
                var img = document.getElementById('preview-image');
                img.src = dataURL;
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/36d0a929ff.js" crossorigin="anonymous"></script>
</body>

</html>
