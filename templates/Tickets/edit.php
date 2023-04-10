<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tickets list</h3>
        <div class="row mt">
            <div class="col-md-12">
                <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h5><i class="fa fa-tasks"></i> Modifier un ticket</h5>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="task-content">
                            <?php echo $this->Form->create($ticket, ['type' => 'post', 'class' => "form-horizontal style-form"]); ?>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label" for="inputTitle">Titre du ticket</label>
                                    <div class="col-sm-10">
                                        <?php
                                            echo $this->Form->control('title', [
                                                'label' => false,
                                                "class" => "form-control",
                                                "name" => "title",
                                                "id" => "inputTitle",
                                                "value" => $ticket->title
                                            ]);
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label" for="inputContent">Description complète du ticket</label>
                                    <div class="col-sm-10">
                                        <?php
                                            echo $this->Form->control('content', [
                                                'label' => false,
                                                "class" => "form-control",
                                                "name" => "description",
                                                "id" => "inputContent",
                                                "type" => "textarea",
                                                "value" => $ticket->description
                                            ]);
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label" for="inputSelect">Niveau d'urgence</label>
                                    <div class="col-sm-10">
                                        <?php 
                                            $levels = [
                                                "0" => 0,
                                                "1" => 1,
                                                "2" => 2,
                                                "3" => 3,
                                                "4" => 4,
                                                "5" => 5,
                                                "6" => 6,
                                                "7" => 7,
                                                "8" => 8,
                                                "9" => 9,
                                                "10" => 10
                                            ];

                                            echo $this->Form->select('levels', $levels, [
                                                'default' => $ticket->level,
                                                'id' => 'inputSelect',
                                                'class' => 'form-control',
                                                'name' => 'level',
                                                'label' => false,
                                            ]);
                                        ?>
                                        
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <?php
                                        echo $this->Form->button('Enregistrer', ['type' => 'submit', 'class' => 'btn btn-primary']);
                                    ?>
                                </div>
                            <?= $this->Form->end(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>