<script>
    $(() => {

        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        })

        $('[data-toggle="tooltip"]').tooltip()

        $('a.btn-danger').click((e) => {

            let that = $(e.currentTarget)
            e.preventDefault()

            swal({

                title: '{{ $text }}',
                type: 'error',
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Oui',
                cancelButtonText: 'Non'

            }).then((result) => {

                if (result.value) {

                    $.ajax({
                        url: that.attr('href'),
                        type: 'DELETE'
                    })

                    .done(() => {

                        @switch($return)

                            @case('removeTr')
                                that.parents('tr').remove()
                                @break

                            @case('reload')
                                location.reload()
                                @break

                        @endswitch
                    })

                    .fail(() => {

                        swal({
                            title: 'Il semble y avoir une erreur sur le serveur, veuillez réessayer plus tard...',
                            type: 'warning'
                        })
                    })
                }
            })
        })
    })
</script>