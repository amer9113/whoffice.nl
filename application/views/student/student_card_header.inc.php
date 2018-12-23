<?php if (!isset($opened_for_teacher_checking)): ?>
<div class="col-sm-12 w3-container w3-mobile" id="cnt" style="margin-bottom:25px;background:rgba(102, 153, 153,0.2); padding: 0.1px;">
    <div class="row">
        <!-- topbar -->
        <div class="topnav" id="myTopnav">
            <?php foreach ($cards_status as $key => $card): ?>
            <?php if ($card->card_no == $card_number): ?>
                <?php if ($page_type == "lesson"): ?>
                    <a class="active" href="<?= base_url().'student/lesson/'.$card->card_no; ?>"><?= 'Lektion'.$card->card_no; ?></a>
                <?php else: ?>
                    <a href="<?= base_url().'student/lesson/'.$card->card_no; ?>"><?= 'Lektion'.$card->card_no; ?></a>
                <?php endif ?>
                 <?php if ($page_type == "card"): ?>
                    <a class="active" href="<?= base_url().'student/card_1'; ?>"><?= 'Resultaatkaart'.$card->card_no; ?></a>
                <?php else: ?>
                    <a href="<?= base_url().'student/card_1'; ?>"><?= 'Resultaatkaart'.$card->card_no; ?></a>
                <?php endif ?>
            <?php else: ?>
                <?php if ($card->accessable == 1): ?>
                    <a href="<?= base_url().'student/lesson/'.$card->card_no; ?>"><?= 'Lektion'.$card->card_no; ?></a>
                    <a href="<?= base_url().'student/card_'.$card->card_no; ?>"><?= 'Resultaatkaart'.$card->card_no; ?></a>
                <?php else: ?>
                    <a class="disabled" href="#"><?= 'Lektion'.$card->card_no; ?></a>
                    <a class="disabled" href="#"><?= 'Resultaatkaart'.$card->card_no; ?></a>
                <?php endif ?>
            <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</div>
<h5 class="text-center" style="font-weight: 600">Verstrichene Zeit: <?= $this->elapsed_time; ?>&nbsp;&nbsp;&nbsp;<a href="<?= base_url().'student/logout' ?>">Ausloggen</a>&nbsp;&nbsp;<a href="<?= base_url().'student' ?>">Zuhause</a></h5>
<?php endif ?>