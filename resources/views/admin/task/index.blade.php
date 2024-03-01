@extends('layout.admin.app')
@section('content')
<div class="container">
    <a href="{{ route('task.create') }}"><button class="right-button">Add</button></a>
    @foreach($task1 as $task)
        <div class="box"> 
            <a href="#" class="image-link" data-category="{{ $task->type }}">
                {{ $task->type }}
            </a>
        </div>
    @endforeach
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Images Slideshow</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" id="imageContainer">
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.image-link').click(function(){
            var category = $(this).data('category');
            $.ajax({
                url: "{{ route('getImages', ['category' => ':category']) }}".replace(':category', category),
                type: 'GET',
                dataType: "json",
                success: function(response){
                    var images = response.images;
                    var imageContainer = $('#imageContainer');
                    imageContainer.empty();
                    $.each(images, function(index, image){
                        var img = $('<img>').addClass('d-block w-100').attr('src', '{{ asset('') }}' + image.image).attr('alt', 'Slide ' + index).css('height', '500px');
                        var carouselItem = $('<div>').addClass('carousel-item').append(img);
                        if (index === 0) {
                            carouselItem.addClass('active');
                        }
                        imageContainer.append(carouselItem);
                    });
                    $('#imageModal').modal('show');
                }
            });
        });
    });
</script>

@endsection
