
/*
 *  Author     : muzaqh
 *  Description: Custom JS code used in Dialogs Page
 */
jQuery('.js-swal-confirm').on('click', function() {
    let id = $(this).attr('id');
    Swal.fire({
        title: 'Are you sure?',
        text: 'You will not be able to recover this Data!',
        icon: 'warning',
        showCancelButton: true,
        customClass: {
        confirmButton: 'btn btn-danger m-1',
        cancelButton: 'btn btn-secondary m-1'
    },
        confirmButtonText: 'Yes, delete it!',
        html: false,
        preConfirm: e => {
            return new Promise(resolve => {
                setTimeout(() => {
                    resolve();
                }, 50);
            });
        }
    }).then(result => {
        if (result.value) {
            $('#delete_'+ id).submit();
            // result.dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
        } else if (result.dismiss === 'cancel') {
            toast.fire('Cancelled', 'Your imaginary file is safe :)', 'error');
        }
    });
});


