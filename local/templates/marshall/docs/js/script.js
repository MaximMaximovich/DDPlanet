/** Обработка формы */

$(function () {
    $('#mail-feedback').parsley().on('form:submit', function (e) {
        console.log('submit');
        let form = $('#mail-feedback');
        let formID = form.attr('id');
        let formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: '/local/ajax/mailing_form.php',
            data: formNm.serialize(),
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.status === 'ok') {
                    resetForm();
                    console.log(data);
                    alert( data.msg[0]["text"] );
                } else {
                    resetForm();
                    //
                    console.log(data);
                    alert( 'Error. Something went wrong try again' );
                }
            },
            error: function (jqXHR, text, error) {
                resetForm();
                alert( 'Error. Something went wrong try again' );
            }
        });
        return false;
    });
});


function resetForm() {
    document.getElementById('emailInput').value = '';
}