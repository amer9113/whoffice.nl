<?php if (!isset($only_viewing_texts_for_teacher)): ?>
    <?php if (!isset($opened_for_teacher_checking)): ?>  
        <?php if (isset($data)): ?>
            <?php if ($data->checked_with_teacher == 0): ?>
                <?php if ($data->needs_correction_by_student == 1): ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <strong>Card Needs Correction</strong><br><strong>Teacher Notes: </strong><?= $data->correction_notes; ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger text-center" role="alert"><strong>Waiting</strong> for teacher approval to go to the next card.</div>
                    <?php if ($data->correction_notes != ""): ?>
                        <div class="alert alert-info text-center" role="alert">
                            <strong>Teacher Notes: </strong><?= $data->correction_notes; ?>
                        </div>
                    <?php endif ?>
                <?php endif ?>
                
            <?php else: ?>
                <div class="alert alert-success text-center" role="alert">
                    <strong>Well done!</strong> <?php if ($card_number < 8): ?>
                        You can now take <a href="<?= base_url().'student/lesson/'.($card_number+1); ?>" class="alert-link">card<?= $card_number+1; ?></a>.
                    <?php endif ?>
                </div>
            <?php endif ?>
        <?php endif ?>
        <?php if (isset($message)): ?>
            <p><b><?= $message; ?></b></p>
            <script>
                 window.onload = function() {
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                 }
             </script>
        <?php endif ?>
    <?php endif ?>
<?php endif ?>
