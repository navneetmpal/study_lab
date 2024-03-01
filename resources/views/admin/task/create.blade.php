@extends('layout.admin.app')
@section('content')
<div class="container">
    <div class="card">
        <h2>Add image</h2>
        <form method="POST" autocomplete="off" name="taskForm" id="taskForm" action="{{route('task.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="board">image:<span class="error"></span></label>
                <div class="field_wrapper ">
                    <div>
                        <input type="file" name="image[]" value=""/>
                        <a href="javascript:void(0);" class="add_button" title="Add field"> Add</a>
                    </div>
                </div>
                <!-- <input type="file" id="board" name="board" placeholder="Add new school board"> -->
                <!-- <input type="file" name="image[]" value=""/> -->
                <!-- <a href="javascript:void(0);" class="add_button" title="Add field"> Add</a> -->


                 <label for="board">type:<span class="error"></span></label>
                <input type="text" id="blog" name="blog" placeholder="Add new type">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
        <a href="{{route('task.index')}}"><button class="right-button">Back</button></a>
</div> 


<script type="text/javascript">
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="file" name="image[]" value=""/><a href="javascript:void(0);" class="remove_button"> Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    // Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increase field counter
            $(wrapper).append(fieldHTML); //Add field html
        }else{
            alert('A maximum of '+maxField+' fields are allowed to be added. ');
        }
    });
    
    // Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrease field counter
    });
// ------------------------------------
// });
</script>


@endsection

