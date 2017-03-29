<script type="text/javascript">
    $('.sweet-delete-button-trigger').on('click', function (e) {
        e.preventDefault();
        var self = $(this);
        swal({
                title: "Are you sure?",
                text: "You won't be able to recuperate this record!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true
            },
            function (isConfirm) {
                if (isConfirm) {
                    swal("Working on your request!", "Deleting record...", "success");
                    setTimeout(function () {
                        self.parents(".sweet-delete-form-trigger").submit();
                    }, 1000);
                }
                else {
                    swal("cancelled", "Record is safe.", "error");
                }
            });
    });
</script>