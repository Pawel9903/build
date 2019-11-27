AOS.init();

$(document).ready(() => {
    $('#footer-form').on('submit', event => {
        event.preventDefault()

        let name = $('#footer-form-name')
        let email = $('#footer-form-email')
        let description = $('#footer-form-description')

        if(name.val() !== '' || email.val() !== '' || description.val() !== '') {

            $.ajax({
                type: 'POST',
                url: event.target.action,
                accept: {
                    javascript: 'application/javascript'
                },
                data: {
                    name: name.val(),
                    email: email.val(),
                    description: description.val()
                },
                beforeSend: () => {
                }
            }).done(data => {
                name.val('')
                email.val('')
                description.val('')

                $('#footer-form-message').show('slow')
                setTimeout(() => {
                    $('#footer-form-message').hide('slow')
                }, 10000)
            });

        }
    })
})
