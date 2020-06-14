<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Unico Sentral Distribusi</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= assets() ?>css/materialize.min.css">
    <link rel="stylesheet" href="<?= assets() ?>css/style.css">

    <script src="<?= assets() ?>js/jquery-3.4.1.min.js"></script>
    <script src="<?= assets() ?>js/materialize.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</head>

<body>
    <!-- Navbar -->
    <nav class="white" role="navigation">
        <div class="nav-wrapper">
            <a id="logo-container" href="<?= site_url('welcome') ?>" class="brand-logo black-text">
                <img src="<?= assets() ?>image/logo.png" style="padding-top: 10px;">
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?= site_url('user-list') ?>" class="black-text darken-4">User List</a></li>
                <li><a href="<?= site_url('logout') ?>" class="black-text darken-4">Log Out</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="<?= site_url('user-list') ?>">User List</a></li>
                <li><a href="<?= site_url('logout') ?>">Log Out</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="container">
        <div class="row">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birthday</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td><?= $d['id_user'] ?></td>
                            <td><?= $d['name'] ?></td>
                            <td><?= $d['email'] ?></td>
                            <td><?= $d['birthday'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Mobile Navbar -->
    <div class="mobile-nav">
        <div class="mobile-nav-item">
            <a href="<?= site_url('welcome') ?>">
                <div class="mobile-nav-item-content black-text">
                    <i class="material-icons">home</i>
                </div>
            </a>
        </div>
        <div class="mobile-nav-item">
            <a href="<?= site_url('user-list') ?>">
                <div class="mobile-nav-item-content mobile-nav-item-active">
                    <i class="material-icons">person</i>
                </div>
            </a>
        </div>
    </div>
    <!-- End Mobile Navbar -->

    <script>
        (function($) {
            $(function() {
                $('.sidenav').sidenav();
            });
        })(jQuery);
    </script>
</body>

</html>