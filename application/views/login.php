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
            <h2 class="center-align">
                <img src="<?= assets() ?>image/logo.png">
            </h2>
            <?= form_open('login/validate', ['id' => 'form_login']) ?>
            <div class="input-field">
                <input class="validate" type="text" name="email" id="email">
                <label for="email">Email</label>
                <span class="error email red-text"></span>
            </div>
            <div class="input-field">
                <input class="validate" type="password" name="password" id="password">
                <label for="password">Password</label>
                <span class="error password red-text"></span>
            </div>
            <button type="submit" class="col s12 m-md btn btn-large btn-primary-unico waves-effect waves-light">Login</button>
            <a href="<?= site_url('register') ?>" class="col s12 m-md btn btn-large btn-default-unico waves-effect waves-light">Register</a>
            <?= form_close() ?>
        </div>
    </div>

    <!-- Modal -->
    <div id="info" class="modal modal-sm">
        <div class="modal-content">
            <div class="center-align">Either your email/password is incorrect<br>Please try again</div>
        </div>
        <div class="modal-footer">
            <div class="center-align" style="margin-top: -5px;">
                <button type="button" class="btn btn-block btn-primary-unico modal-close waves-effect">OK</button>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Script Login -->
    <script>
        $(document).ready(function() {
            $('.modal').modal();

            $('#form_login').on('submit', function(event) {
                event.preventDefault();
                var fa = $(this);
                $.ajax({
                    url: $("#form_login").attr('action'),
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(resp) {
                        $('.error').html('');
                        if (resp.status == true) {
                            window.location.href = "<?= site_url('welcome') ?>";
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
    <!-- End Script Login -->

</body>

</html>