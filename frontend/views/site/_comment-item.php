<div class="row">
    <div class="col-sm-1">
        <div class="thumbnail">
            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
        </div><!-- /thumbnail -->
    </div><!-- /col-sm-1 -->

    <div class="col-sm-11">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><i class="glyphicon glyphicon-user"></i> <?=$model->user->username?></strong> <span class="text-muted">  <i class="glyphicon glyphicon-calendar"></i><?=$model->date?></span>
            </div>
            <div class="panel-body">
                <?=$model->content?>
            </div><!-- /panel-body -->
        </div><!-- /panel panel-default -->
    </div><!-- /col-sm-5 -->
</div>