<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website Scrape - PHP</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" integrity="sha512-ykRBEJhyZ+B/BIJcBuOyUoIxh0OfdICfHPnPfBy7eIiyJv536ojTCsgX8aqrLQ9VJZHGz4tvYyzOM0lkgmQZGw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="<?= ASSETS ?>css/portal.css">

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="app">
    <?= $this->include(THEME . 'block/header') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include(THEME . 'block/scripts') ?>

    <?= $this->renderSection('scripts') ?>


    <!-- modal starts here -->
    <!-- Grids in modals -->
    <div class="modal fade" id="fm_model" data-bs-backdrop="static" aria-labelledby="fm_modelLabel" aria-modal="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fm_modelLabel"><span class="model_title"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
    <!-- modal ends here -->

    <script>
        $('body').on('click', '[data-bs-toggle="modal"]', function() {
            $($(this).data("bs-target") + ' .modal-body').load($(this).attr("href"), function() {
                afterload();
            });

            $('.model_title').text($(this).data("title"));
            if ($(this).data("action") != undefined)
                $('#fm_action').val($(this).data("action"));
        });
    </script>
</body>

</html>