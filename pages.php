<?php include('inc/head.php'); ?>

    <?php include('inc/topnav.php'); ?>

    <div class="container-fluid" id="main">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('inc/leftnav.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Pages<a href="#" data-toggle="modal" data-target="#helpmodal" class="pull-right tooltipme" data-placement="left" title="Help!"><i id="help-button" class="fa fa-life-saver"></i></a></h1>
          <div class="row">
            <div class="col-xs-9">
              <div class="btn-group">
                  <a class="btn" href="#"><i class="fa fa-plus"></i> Add New Page</a>
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-upload"></i> Batch Upload</a></li>
                  </ul>
              </div>
              <div class="btn-group">
                <a class="btn" href="#reorder_modal" data-toggle="modal"><i class="fa fa-bars"></i> Reorder Menus</a>
              </div>
              
              <!--<div class="pull-right">
                View 
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> <i class="fa fa-tasks"></i>
                  </label>
                  <label class="btn">
                    <input type="radio" name="options" id="option2" autocomplete="off"> <i class="fa fa-th-list"></i>
                  </label>
                </div>
              </div>-->
            </div>
            <div class="text-right search-form col-xs-3"> 
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Pages...">
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
                          <span><input class="form-control input-sm tinyinput" type="text" value="1"> of 2</span>
                        </li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  <h4>Site Pages for livepainfreenow.com <a href="http://livepainfreenow.com" target="_blank"><i class="fa fa-external-link-square"></i></a></h4>
                  </div>
                  
                  <div class="form-inline row">
                    <div class="form-group col-sm-3">
                    <select class="form-control input-sm">
                      <option value="0">Bulk Actions...</option>
                      <option value="0">Bulk Edit</option>
                      <option value="0">Preview Selected</option>
                    </select>
                    <button class="btn btn-sm">Apply</button>
                    </div>
                    <div class="form-group col-sm-9 text-right">
                      Filters
                      <select class="form-control input-sm">
                        <option value="0">All Approvals</option>
                        <option value="0">Pending Approval</option>
                        <option value="0">Approved</option>
                        <option value="0">Rejected</option>
                      </select>
                      <select class="form-control input-sm">
                        <option value="0">All Page Types</option>
                        <option value="0">Sub Pages Only</option>
                        <option value="0">Menu Pages Only</option>
                      </select>
                       
                      <button class="btn btn-sm">Filter</button>
                    </div>
                    
                  </div>
                </div>
                               
                <div class="table-responsive">
                  <table class="table table-hover table-condensed">
                    <thead>
                      <tr>
                        <th><a href="#" title="Select All" class="tooltipme"><input type="checkbox"></a></th>
                        <th class="sortable">Page</th>
                        <th>Location</th>
                        <th class="sortable">Layout</th>
                        <th class="sortable">Last Modified</th>
                        <th class="sortable">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php for($i = 1; $i < 9; $i++): ?>
                      <tr<?php if($i == 2 || $i == 3){echo " class='childitem'";}?>>
                        <td class="checkcolumn"><input type="checkbox"></a>
                        <td><a href="#"><b>About Us</b></a>
                        <?php if($i == 1 || $i == 4):?>
                          <a href="#" title="Approval Pending" class="tooltipme"><i class="fa fa-warning highlight"></i></a>
                        <?php else: ?>
                          <a href="#" title="Approved" class="tooltipme"><i class="fa fa-check lightgray"></i></a>
                        <?php endif; ?>
                        <br>
                          <small>
                            <ul class="list-unstyled list-inline dividers">
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">Preview</a></li>
                              <li><a href="#">Widgets (3)</a></li>
                            </ul>
                          </small>
                        </td>
                        <td>
                          <ul class="list-unstyled list-sm">
                            <?php if($i == 5 || $i == 6):?>
                              <li>(Not in a Menu)</li>
                            <?php elseif($i == 8): ?>
                              <li>Main Menu</li>
                              <li>Footer</li>
                            <?php else: ?>
                              <li>Main Menu</li>
                            <?php endif; ?>
                          </ul>
                        </td>
                        <td>Default Layout</td>
                        <td>3/31/15 3:15pm<br>
                          <small>by: Greg Burkett</small>
                        </td>
                        <td>Published</td>
                      </tr>
                      <?php endfor; ?>

                    </tbody>
                  </table>
                </div>
                <!--
                <div class="panel-heading condensed newsection">
                  <div class="btn-group pull-right">
                    <a href="#" class="btn btn-sm"><i class="fa fa-bars"></i> Reorder Pages...</a>
                  </div>
                  <h4>Non-Menu Pages</h4>
                </div>
                <div class="panel-heading sub-panel-heading">
                  <div class="pull-right">
                    <ul class="pagination pagination-sm no_margin">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                        </a>
                      </li>
                      <li class="pagecontrol">
                        <span><input class="form-control input-sm tinyinput" type="text" value="1"> of 2</span>
                      </li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="form-inline">
                    <select class="form-control input-sm">
                      <option value="0">Bulk Actions...</option>
                      <optgroup label="With Selected...">
                        <option value="0">Approve Selected</option>
                        <option value="0">Reject Selected</option>
                      </optgroup>
                      <optgroup label="With All...">
                        <option value="0">Approve All</option>
                        <option value="0">Reject All</option>
                      </optgroup>
                    </select>
                    <button class="btn btn-sm">Apply</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
                -->
                <div class="panel-footer">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group pagination-wrapper pull-right text-right">
                        Pages <ul class="pagination-sm pagination no_margin">
                          <li>
                            <a href="#" aria-label="Previous">
                              <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                            </a>
                          </li>
                          <li class="pagecontrol">
                            <span><input class="form-control input-sm tinyinput" type="text" value="1"> of 2</span>
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
            
        <form class="modal multi-step fade" id="reorder_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title step-1" data-step="1">Reorder Menu</h4>
                <h4 class="modal-title step-2" data-step="2">Reorder Menu &rsaquo; Main Menu</h4>
              </div>
              <div class="modal-body step step-1">
                <div class="form-group">
                  <label>Select the menu you'd like to reorder:</label>
                  <select class="form-control">
                    <option>Main Menu</option>
                    <option>Footer</option>
                  </select>
                </div>
              </div>
              <div class="modal-body step step-2">
                <p>Drag the menu items into the desired order. When finished, hit the "Confirm" button.</p>
                <ul class="list-unstyled draggable">
                  <li>About Us</li>
                  <li>About Us</li>
                  <li>About Us</li>
                  <li>About Us</li>
                  <li>About Us</li>
                  <li>About Us</li>
                </ul>
              </div>
              <div class="modal-footer">
                
                <button type="button" class="btn step step-2 pull-left" data-step="1" onclick="prevstep()">Back</button>
                <button type="button" class="btn btn-default step step-1" data-step="2" onclick="nextstep()">Continue</button>
                <button type="button" data-dismiss="modal" class="btn btn-default step step-2" data-step="1">Confirm</button>
              </div>
            </div>
          </div>
        </form>
         
            
            
        </div>
      </div>
    </div>
    
<?php include('inc/footer.php'); ?>

