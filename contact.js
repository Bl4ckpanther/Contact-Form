$(function(){
    $('#account-form').validetor();
    $('#account-form').on('submit', (e) => {
        // if the validator does not prevent form submit
        if(!e.isDefualtPrevented()){
            let url = 'contact.php';

            // post values to the url 
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                successful: (data) => {
                    // data is json object that we receive contact php
                    let messageAlert = 'alert-' + data.type;
                    let messageText = data.message;
                    let alertBox = '<div class="alert ' + messageAlert + 'alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> $times;</button>' + messageText + '<div>'

                    if(messageAlert && messageText) {
                        // inject the alert into the .message div
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            })
            return false;
        }
    });

})