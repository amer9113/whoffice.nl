<?php if (!isset($only_viewing_texts_for_teacher)): ?>
    <?php if (!isset($opened_for_teacher_checking)): ?>  
        <?php if (isset($data)): ?>
            <?php if ($data->checked_with_teacher == 0): ?>
                <?php if ($data->needs_correction_by_student == 1): ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <strong>Kaart moet worden gecorrigeerd</strong><br><strong>Opmerking van de docent: </strong><?= $data->correction_notes; ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger text-center" role="alert"><strong> Wachten </strong> als de docent het goedkeurt om naar de volgende kaart te gaan.</div>
                    <?php if ($data->correction_notes != ""): ?>
                        <div class="alert alert-info text-center" role="alert">
                            <strong>Opmerking van de docent: </strong><?= $data->correction_notes; ?>
                        </div>
                    <?php endif ?>
                <?php endif ?>
                
            <?php else: ?>
                <div class="alert alert-success text-center" role="alert">
                    <strong>Goed gedaan!</strong> <?php if ($card_number < 8): ?>
                        U kunt nu <a href="<?= base_url().'student/lesson/'.($card_number+1); ?>" class="alert-link">kaart <?= $card_number+1; ?></a> pakken.
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
