// $(document).ready(function(){
//     alert('donehbvbf');
//   });


$(document).ready(function () {
    $('#addressForm').validate({
      rules: {
        address: {
          required: true
        },
      },
      messages: {
        address: 'Please enter address.',
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
});

