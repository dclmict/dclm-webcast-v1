$(function () {

    $('#testimony-form').validator();

    $('#testimony-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "bin/libs/testimony_form.php";

            /*$form = $(this);
            //show some response on the button
            $('button[type="submit"]', $form).each(function()
            {
              $btn = $(this);
              $btn.prop('type','button' ); 
              $btn.prop('orig_label',$btn.text());
              $btn.text('Sending ...');
            }); */

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#testimony-form').find('.messages').html(alertBox);
                        $('#testimony-form')[0].reset();
                        grecaptcha.reset();
                    }
                }
            });
            return false;
        }
    })
});