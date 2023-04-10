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
                               
                            </ul>
                        </div>
                        <div class=" add-task-row">
                            <?php echo $this->Html->link('Ajouter un nouveau ticket', ['controller' => 'Tickets', 'action' => 'create'], ['escapeTitle' => false, "class" => "btn btn-success btn-sm pull-left"]);?>
                            <?php echo $this->Html->link('Voir tous les tickets', ['controller' => 'Tickets', 'action' => 'listing'], ['escapeTitle' => false, "class" => "btn btn-default btn-sm pull-right"]);?>
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