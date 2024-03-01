// tinymce.init({
//   selector: '.mytextarea',
//   toolbar: 'undo redo | blocks | bold italic underline strikethrough | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table| link',
//   menubar: false,
//   branding: false,
// });
// ---------------------------------------------------------------------------
// $(document).ready(function () {
//     $('#admissionForm').validate({
//       rules: {
//         name: {
//           required: true
//         },
//         contact: {
//           required: true,
//           rangelength: [10, 12],
//           number: true
//         },
//       },
//       messages: {
//         name: 'Please enter Name.',
//         email: {
//           required: 'Please enter Email Address.',
//           email: 'Please enter a valid Email Address.',
//         },
//         contact: {
//           required: 'Please enter Contact.',
//           rangelength: 'Contact should be 10 digit number.'
//         },
//       },
//       submitHandler: function (form) {
//         form.submit();
//       }
//     });
//   });
// -----------------------------------------------------------------------



$(function () {

  $('.error, .errortwo').hide();

  tinymce.init({
    selector: ".mytextarea",
    toolbar: 'undo redo | blocks | bold italic underline strikethrough | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table| link',
    menubar: false,
    statusbar: false,
    setup: function (editor) {
      editor.on('change', function () {
        tinymce.triggerSave();
        chkSubmit();
      });
    }
  });

  $(document).on('click', '#submit', chkSubmit);
  function chkSubmit() {
    // var msg1 = $('#mytextarea').val();
    // var msg2 = $('#secound').val();

    // var textmsg1 = $.trim($(msg1).text());
    // var textmsg2 = $.trim($(msg2).text());

    // if (textmsg1 == '' || textmsg2 == '') {
    //   if (textmsg1 == '') {
    //     $('.error').show();
    //     $('.error').html('Please fill out something in the first comments box');
    //   } else {
    //     $('.error').hide();
    //     $('.error').html('');
    //   }

    //   if (textmsg2 == '') {
    //     $('.errortwo').show();
    //     $('.errortwo').html('Please fill out something in the second comments box');
    //   } else {
    //     $('.errortwo').hide();
    //     $('.errortwo').html('');
    //   }
    //   return false;
    // }
    var allFilled = true;

    $('.mytextarea').each(function() {
      var $textarea = $(this);
      var msg = $textarea.val();
      var textmsg = $.trim($(msg).text());

      if (textmsg == '') {
        allFilled = false;
        $textarea.siblings('.error').show();
        $textarea.siblings('.error').html('Please fill out something in the comments box');
      } else {
        $textarea.siblings('.error').hide();
        $textarea.siblings('.error').html('');
      }
    });

    if (!allFilled) {
      return false;
    }


  }

});