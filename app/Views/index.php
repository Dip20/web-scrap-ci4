<?= $this->extend(THEME . 'template') ?>

<?= $this->section('content') ?>

<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Add Scrape</h1>

            <?php if (isset($_SESSION['job_status'])) { ?>
                <div class="alert alert-<?= @$_SESSION['job_status'] == 1 ? "success" : "warning" ?> alert-dismissible fade show" role="alert">
                    <strong>Done!</strong> <?= @$_SESSION['job_status'] == 1 ? "Scrape successfully completed" : "Already Completed or Duplicate data" ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <div class="app-card app-card-settings shadow-sm p-4">

                <div class="app-card-body">

                    <form action="<?= base_url('Home/index') ?>" class="ajax-form-submit" method="post">
                        <input type="hidden" id="id" name="id" value="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="mb-2">Link</label>
                                    <input type="link" name="link" id="link" " class=" form-control" placeholder="https://stackoverflow.com/questions/tagged/c?tab=newest&pagesize=15" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label class="mb-2">Link Name</label>
                                    <input type="text" name="link_name" id="link_name" class="form-control" placeholder="C#" required>
                                </div>
                            </div>
                        </div>

                        <div class="form_proccessing text-success"></div>
                        <div class="error-msg text-danger"></div>
                        <div class="col-md-12 mt-4">
                            <p class="text-start">
                                <span class="text-muted">Note: As of now it will load only first 2 pages data, later we can use cron job to scrape all pages, I have Already Implemented Pagination.</span> <br>
                                <button class="btn app-btn-primary mt-3" id="save_data" type="submit">Submit</button>
                            </p>
                        </div>
                    </form>


                </div><!--//app-card-body-->

            </div>


        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <!--//app-footer-->

</div>


<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    <?= $this->endSection() ?>