@extends('layout.admin.app')
@section('content')
<div class="container">
    <div id="image-gallery">
        <!-- Images will be displayed here -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var id = 1; // Change this to the desired ID

            $.ajax({
                url: '/images/' + id,
                type: 'GET',
                success: function(response) {
                    var images = response;
                    var gallery = $('#image-gallery');

                    $.each(images, function(index, image) {
                        gallery.append('<img src="' + image.url + '" alt="Image ' + (index + 1) + '">');
                    });
                }
            });
        });
    </script>
</div>

@endsection

