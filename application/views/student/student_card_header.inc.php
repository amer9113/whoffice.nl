<?php if (!isset($only_viewing_texts_for_teacher)): ?>
    <?php if (!isset($opened_for_teacher_checking)): ?>
    <div class="row" style="margin-bottom: 75px;">
        <div class="col-sm-12" style="padding: 0px;">
            <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#student_navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="student_navbar">
                    <ul class="nav navbar-nav">
                        <?php foreach ($cards_status as $key => $card): ?>
                        <?php if ($card->card_no == $card_number): ?>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= 'Kaart'.$card->card_no ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url().'student/lesson/'.$card->card_no; ?>"><?= 'les'.$card->card_no; ?></a></li>
                                <li><a target="_blank" href="<?= base_url().'student/explanation_card/'.$card->card_no; ?>"><?= 'Ultlegkaart'.$card->card_no; ?></a></li>
                                <li><a href="<?= base_url().'student/card_'.$card->card_no; ?>"><?= 'Resultaatkaart'.$card->card_no; ?></a></li>
                            </ul>
                        </li>
                        <?php else: ?>
                            <?php if ($card->accessable == 1): ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= 'Kaart'.$card->card_no ?> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= base_url().'student/lesson/'.$card->card_no; ?>"><?= 'les'.$card->card_no; ?></a></li>
                                        <li><a target="_blank" href="<?= base_url().'student/explanation_card/'.$card->card_no; ?>"><?= 'Ultlegkaart'.$card->card_no; ?></a></li>
                                        <li><a href="<?= base_url().'student/card_'.$card->card_no; ?>"><?= 'Resultaatkaart'.$card->card_no; ?></a></li>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="dropdown inactive">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= 'Kaart'.$card->card_no ?> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><?= 'les'.$card->card_no; ?></a></li>
                                        <li><a href="#"><?= 'Ultlegkaart'.$card->card_no; ?></a></li>
                                        <li><a href="#"><?= 'Resultaatkaart'.$card->card_no; ?></a></li>
                                    </ul>
                                </li>
                            <?php endif ?>
                        <?php endif ?>
                        <?php endforeach ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->acc_name." ".$this->elapsed_time; ?> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Profiel</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?= base_url().'student' ?>">thuis</a></li>
                            <li><a href="<?= base_url().'student/logout' ?>">uitloggen</a></li>
                          </ul>
                        </li>
                        <li><a class="navbar-brand" href="<?= base_url().'student' ?>"><span class="glyphicon glyphicon-home"></span></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-sm-12">
            <h5 class="text-center" style="font-weight: 600">Verstreken tijd: <?= $this->elapsed_time; ?>&nbsp;&nbsp;&nbsp;<a href="<?= base_url().'student/logout' ?>">uitloggen</a>&nbsp;&nbsp;<a href="<?= base_url().'student' ?>">thuis</a></h5>
        </div>
    </div> -->
    <?php endif ?>
<?php endif ?>