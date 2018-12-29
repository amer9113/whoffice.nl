<?php if (!isset($only_viewing_texts_for_teacher)): ?>
    <?php if (isset($opened_for_teacher_checking)): ?>
        <?php if ($opened_for_teacher_checking_mode == 1): ?>
        <input type="hidden" name="lock_card">
        <input type="hidden" name="needs_correction_by_student" value="no">
        <button class="w3-button w3-green approve_edit" type="button">Approve &amp; allow edit</button> 
        <button class="w3-button w3-red approve_lock" type="button">Approve &amp; lock</button> 
        <button class="w3-button w3-blue needs_correction" type="button">Needs correction</button><br>
        <input type="text" name="correction_notes" placeholder="Correction Notes" value="<?= $data->correction_notes; ?>">
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
        <?php endif ?>
    <?php endif ?>
    
<?php endif ?>
