$(document).ready(function () {
    $('#boardForm').validate({
      rules: {
        board: {
          required: true
        },
      },
      messages: {
        board: 'Please enter board.',
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
});
