<button class="pull-right btn btn-success btn-lg" style='margin:10px;' data-toggle="modal" data-target="#myDeclaratie">
	<i class='glyphicon glyphicon-briefcase' ></i> Declaratie
</button>

<!-- Modal -->
<div class="modal fade" id="myDeclaratie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Cerere ordin </h4>
      </div>
      <div class="modal-body">
       <?php echo $view['form']->form($DeclaratieForm) ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<br />
<br />
<br />