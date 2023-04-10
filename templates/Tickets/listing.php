<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tickets list</h3>
        <div class="row mt">
            <div class="col-md-12">
                <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h5><i class="fa fa-tasks"></i> Liste des tickets</h5>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="task-content">
                            <ul class="task-list">
                            <?php

                                foreach ($tickets as $ticket) :
                                    ?>
                                    <li class="tooltips" title="<?= $ticket['id'] . " " . $ticket['description'] ?>">
                                        <div class="task-title">
                                            <span class="task-title-sp <?= ($ticket['done']?'done':'') ?>"><?= $ticket['title'] ?></span>
                                            <span class="badge <?= ($ticket['level'] <= 4 ? 'bg-theme' : 'bg-warning') ?>"><?= $ticket['level'] ?></span>
                                            <div class="pull-right hidden-phone">
                                                <?php
                                                if ($ticket['done']):
                                                    echo $this->Html->link('<i class="fa fa-close"></i>', ['controller' => 'Tickets', 'action' => 'uncheck', $ticket['id']], ['escapeTitle' => false, "class" => "btn btn-warning btn-xs", "style"=>'margin-right: 5px']);
                                                else:
                                                    echo $this->Html->link('<i class="fa fa-check"></i>', ['controller' => 'Tickets', 'action' => 'check', $ticket['id']], ['escapeTitle' => false, "class" => "btn btn-success btn-xs", "style"=>'margin-right: 5px']);
                                                ?>
                                                    
                                                <?php
                                                endif;
                                                    //$this->Html->link('i', 'route', ['escapeTitle' => false]);
                                                    echo $this->Html->link('<i class="fa fa-pencil"></i>', ['controller' => 'Tickets', 'action' => 'edit', $ticket['id']], ['escapeTitle' => false, "class" => "btn btn-primary btn-xs", "style"=>'margin-right: 5px']);
                                                    echo $this->Form->postLink(
                                                        '<i class="fa fa-trash-o "></i>',
                                                        ['controller' => 'Tickets', 'action' => 'remove', $ticket['id']],
                                                        ['escapeTitle' => false,
                                                        'confirm' => 'Êtes-vous sûr de vouloir supprimer ce ticket ?',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        "style"=>'margin-right: 5px']);
                                                   
                                                ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                endforeach;
                                ?>
                            </ul>
                        </div>
                        <div class=" add-task-row">
                            
                            <?php echo $this->Html->link('Ajouter un nouveau ticket', ['controller' => 'Tickets', 'action' => 'create'], ['escapeTitle' => false, "class" => "btn btn-success btn-sm pull-left"]);?>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /col-md-12-->
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!--main content end-->