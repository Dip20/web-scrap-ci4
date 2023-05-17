<?= $this->extend(THEME . 'template') ?>

<?= $this->section('content') ?>

<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Add Scrape</h1>

            <div class="app-card app-card-settings shadow-sm p-4">

                <div class="app-card-body">

                    <form action="<?= base_url('Home/index') ?>" class="ajax-form-submit" method="post">
                        <input type="hidden" id="id" name="id" value="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="mb-2">Link</label>
                                    <input type="link" name="link" id="link" placeholder="Enter Link" class="form-control" value="https://stackoverflow.com/questions/tagged/c?tab=newest&pagesize=15" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label class="mb-2">Link Name</label>
                                    <input type="text" name="link_name" id="link_name" placeholder="Enter link name" class="form-control" value="C" required>
                                </div>
                            </div>
                        </div>

                        <div class="form_proccessing text-success"></div>
                        <div class="error-msg text-danger"></div>
                        <div class="col-md-12 mt-4">
                            <p class="text-start">
                                <span class="text-muted">Note: As of now it will load only first 4pages data, later we can use cron job to scrape all pages, I have Already Implemented Pagination.</span> <br>
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
    $('.ajax-form-submit').on('submit', function(e) {
        $('#save_data').prop('disabled', true);
        $('.save_data').attr("disabled", true);
        $('.error-msg').html('');
        $('.form_proccessing').html('Please wait...');
        e.preventDefault();
        var aurl = $(this).attr('action');
        var form = $(this);
        var formdata = false;

        if (window.FormData) {
            formdata = new FormData(form[0]);
        }

        $.ajax({
            type: "POST",
            url: aurl,
            cache: false,
            contentType: false,
            processData: false,
            data: formdata ? formdata : form.serialize(),
            success: function(response) {

                if (response.st == 'success') {
                    swal.fire("success!", "Your update successfully!", "success");
                    $('#save_data').prop('disabled', false);
                    $('.form_proccessing').html('');

                    //we can reset form or redirect to view data table page
                    $('.ajax-form-submit')[0].reset();
                } else {
                    $('.form_proccessing').html('');
                    $('#save_data').prop('disabled', false);
                    $('.error-msg').html(response.msg);
                }
            },
            error: function() {
                $('#save_data').prop('disabled', false);
                alert('Error');
                $('.form_proccessing').html('');

            }
        });

        return false;
    });

    <?= $this->endSection() ?>