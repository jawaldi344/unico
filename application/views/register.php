<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Unico Sentral Distribusi</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= assets() ?>css/materialize.min.css">
    <link rel="stylesheet" href="<?= assets() ?>css/style.css">

    <script src="<?= assets() ?>js/jquery-3.4.1.min.js"></script>
    <script src="<?= assets() ?>js/materialize.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <?= form_open('register/store', ['id' => 'form_create']) ?>
            <div class="input-field">
                <input class="validate" type="text" name="name">
                <label for="name">Name</label>
                <span class="error name red-text"></span>
            </div>
            <div class="input-field">
                <input class="validate" type="text" name="email">
                <label for="email">Email</label>
                <span class="error email red-text"></span>
            </div>
            <div class="input-field">
                <input class="validate" type="password" name="password" id="password">
                <label for="password">Password</label>
                <span class="error password red-text"></span>
            </div>
            <div class="input-field">
                <input class="validate" type="password" name="re_password" id="re_password">
                <label for="re_password">Re-enter Password</label>
                <span class="error re_password red-text"></span>
            </div>
            <div class="input-field">
                <input class="datepicker" type="text" name="date" id="date">
                <label for="date">Birthday</label>
                <span class="error date red-text"></span>
            </div>
            <a href="<?= site_url('login') ?>" class="col s4 m4 l4 left m-md btn btn-large m-md btn-default-unico waves-effect waves-light">Back</a>
            <button type="submit" class="col s4 m4 l4 right m-md btn btn-large m-md btn-primary-unico waves-effect waves-light">Register</button>
        </div>
    </div>

    <!-- Modal -->
    <div id="info" class="modal modal-sm">
        <div class="modal-content">
            <div class="center-align">Register Error, please cek the data</div>
        </div>
        <div class="modal-footer">
            <div class="center-align" style="margin-top: -5px;">
                <button type="button" class="btn btn-block modal-close waves-effect btn-primary-unico">OK</button>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Script Register -->
    <script>
        // const Calender = document.querySelector('.datepicker');
        // M.Datepicker.init(Calender, {
        //     format: 'dd-mm-yyyy',
        //     showClearBtn: true
        // });
        $(document).ready(function() {
            $('.modal').modal();

            var currYear = (new Date()).getFullYear();
            $(".datepicker").datepicker({
                defaultDate: new Date(currYear - 5, 1, 31),
                // setDefaultDate: new Date(2000,01,31),
                maxDate: new Date(currYear - 5, 12, 31),
                yearRange: [1960, currYear - 0],
                format: "dd-mm-yyyy",
                showClearBtn: true
            });

            $('#form_create').on('submit', function(event) {
                event.preventDefault();
                var fa = $(this);
                $.ajax({
                    url: $("#form_create").attr('action'),
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(resp) {
                        $('.error').html('');
                        if (resp.status == true) {
                            fa[0].reset();
                            var toastHTML = '<span>Register Success</span>';
                            M.toast({
                                html: toastHTML
                            });
                        } else {
                            $.each(resp.pesan, function(key, value) {
                                $('.' + key).text(value);
                            });
                            $('#info').modal('open');
                        }
                    }
                })
            });
        });
    </script>
    <!-- End Script Register -->

</body>

</html>