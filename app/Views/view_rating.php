<?= $this->extend(THEME . 'form') ?>

<?= $this->section('content') ?>

<div class="row">
    <table class="mt-1 table app-table-hover mb-0 text-left my-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Rating</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($ratings as $rating) {
            ?>
                <tr>
                    <td><?= $rating->id ?></td>
                    <td><?= $rating->rating ?></td>
                    <td><?= $rating->created_at ?></td>
                </tr>

            <?php }
            ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>