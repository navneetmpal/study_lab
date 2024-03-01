function redirectToPickPlace(id) {
        // Construct the URL for the pickplace route using the ID
        var url = "{{ route('pickplace', ['id' => ':id']) }}";
        url = url.replace(':id', id);
        
        // Redirect to the pickplace route
        // window.location.href = url;
    }