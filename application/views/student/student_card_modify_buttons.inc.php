<?php if (!isset($only_viewing_texts_for_teacher)): ?>
    <?php if (isset($opened_for_teacher_checking)): ?>
        <input type="hidden" name="lock_card">
        <input type="hidden" name="needs_correction_by_student" value="no">
        <input type="hidden" name="alter_answers" value="no">
        <button class="w3-button w3-green approve_edit" type="button">Goedkeuren &amp; Niet slot</button> 
        <button class="w3-button w3-red approve_lock" type="button">Goedkeuren &amp; Slot</button> 
        <button class="w3-button w3-blue needs_correction" type="button">Correctie vereist</button>
        <button class="w3-button w3-green alter_answers" type="button">Verander antwoorden</button>
        <div class="col-sm-10 col-sm-offset-1">
            <textarea name="correction_notes" rows="5" placeholder="Correction Notes"><?= $data->correction_notes; ?></textarea>
        </div>
    <?php else: ?>
        <?php if (isset($data)): ?>
            <?php if ($data->edit_allow == 1): ?>
                <button type="button" class="submit w3-button w3-red">Update kaart</button> 
            <?php else: ?>
                <button type="button" class="submit w3-button w3-red" disabled>Update is niet toegestaan</button>
            <?php endif ?>
        <?php else: ?>
        <button type="button" class="submit w3-button w3-red">Controleren</button>
            <?php if ($card_number == 7): ?>
               <a class="w3-button w3-blue" href="<?= base_url().'student/employment_letter_form' ?>" target="_blank">Sollicitatiebrief</a>
            <?php endif ?>   
        <?php endif ?>
    <?php endif ?>
    
<?php endif ?>
