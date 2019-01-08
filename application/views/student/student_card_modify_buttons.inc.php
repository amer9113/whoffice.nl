<?php if (!isset($only_viewing_texts_for_teacher)): ?>
    <?php if (isset($opened_for_teacher_checking)): ?>
        <?php if ($opened_for_teacher_checking_mode == 1): ?>
        <input type="hidden" name="lock_card">
        <input type="hidden" name="needs_correction_by_student" value="no">
        <button class="w3-button w3-green approve_edit" type="button">Approve &amp; allow edit</button> 
        <button class="w3-button w3-red approve_lock" type="button">Approve &amp; lock</button> 
        <button class="w3-button w3-blue needs_correction" type="button">Needs correction</button>
        <div class="col-sm-10 col-sm-offset-1">
            <textarea name="correction_notes" rows="5" placeholder="Correction Notes"><?= $data->correction_notes; ?></textarea>
        </div>
        <?php endif ?>
    <?php else: ?>
        <?php if (isset($data)): ?>
            <?php if ($data->edit_allow == 1): ?>
                <button type="button" class="submit w3-button w3-red">Update card</button> 
            <?php else: ?>
                <button type="button" class="submit w3-button w3-red" disabled>Update isn't allowed</button>
            <?php endif ?>
        <?php else: ?>
        <button type="button" class="submit w3-button w3-red">Submit card</button>
            <?php if ($card_number == 7): ?>
               <a class="w3-button w3-blue" href="<?= base_url().'student/employment_letter_form' ?>" target="_blank">Employment letter form</a>
            <?php endif ?>   
        <?php endif ?>
    <?php endif ?>
    
<?php endif ?>
