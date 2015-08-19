<?php include('inc/head.php'); ?>

    <?php include('inc/topnav.php'); ?>

    <div class="container-fluid" id="main">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('inc/leftnav.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Manage Widgets <a href="#" data-toggle="modal" data-target="#helpmodal" class="pull-right tooltipme" data-placement="left" title="Help!"><i id="help-button" class="fa fa-life-saver"></i></a></h1>
          <div class="row">
            <div class="col-xs-9">
              <div class="btn-group">
                  <a href="#" class="btn" data-toggle="modal" data-target="#new_widget_modal"><i class="fa fa-plus"></i> Create New Widget</a>
              </div>
            </div>
            <div class="text-right search-form col-xs-3"> 
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Widgets...">
                <span class="input-group-btn">
                  <button class="btn" type="button"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
              
            
          </div>
          <br>
          <div class="row">
            
            <div class="col-xs-12">
                
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        
                        <div class="panel-header">
                          <div class="form-group pagination-wrapper pull-right text-right">
                            <ul class="pagination-sm pagination no_margin">
                              <li>
                                <a href="#" aria-label="Previous">
                                  <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                                </a>
                              </li>
                              <li class="pagecontrol">
                                <span><input class="form-control input-sm tinyinput" type="text" value="1"> of 4</span>
                              </li>
                              <li>
                                <a href="#" aria-label="Next">
                                  <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <h4>Widgets</h4>
                        </div>
                        <?php include('inc/_widgets-filters.php'); ?>
                        
                      </div>

                      <div class="table-responsive">
                        <table class="table table-hover table-condensed">
                          <thead>
                            <tr>
                              <th><a href="" class="tooltipme" title="Select All"><input type="checkbox"></a></th>
                              <th class="sortable">Name</th>
                              <th class="sortable">Display Name</th>
                              <th class="sortable">Modified</th>
                              <th class="sortable">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php for($i = 1; $i < 20; $i++): ?>
                            <tr>
                              <td class="checkcolumn"><input type="checkbox"></td>
                              <td><a href="#" class="tooltipme"><b>About Us</b></a></td>
                              <td>About the Practice</td>
                              <td>3/31/15 3:15pm <em><small>Greg Burkett</small></em></td>
                              <td><i class="fa fa-check-circle success"></i> Approved
                              <div class="btn-group">
                                <a href="#" data-toggle="dropdown">
                                  <i class="fa fa-caret-down"></i>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Revert Approval</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                  </ul>
                              </div>
                              </td>
                            </tr>
                            <?php endfor; ?>

                          </tbody>
                        </table>
                      </div>
                      <div class="panel-footer">
                        <div class="row">
                          <div class="col-xs-12">
                          
                            <div class="form-group pagination-wrapper text-right">
                              <ul class="pagination-sm pagination no_margin">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                                  </a>
                                </li>
                                <li class="pagecontrol">
                                  <span><input class="form-control input-sm tinyinput" type="text" value="1"> of 4</span>
                                </li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

            </div>
          </div>
            
            
            
            
        </div>
      </div>
    </div>
    <div class="modal modal-wide fade" id="new_widget_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Create New Widget</h4>
          </div>
          <div class="modal-body">
            <p>Pending... Create Modal Process</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php include('inc/footer.php'); ?>
