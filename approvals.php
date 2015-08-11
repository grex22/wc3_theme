<?php include('inc/head.php'); ?>

    <?php include('inc/topnav.php'); ?>

    <div class="container-fluid" id="main">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('inc/leftnav.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Approvals <a href="#" data-toggle="modal" data-target="#helpmodal" class="pull-right tooltipme" data-placement="left" title="Help!"><i class="fa fa-life-saver"></i></a></h1>
         
          <div class="row">
            
            <div class="col-xs-12">
                <ul class="nav nav-pills">
                  <li role="presentation" class="active"><a href="#tab1" data-toggle="tab">Pages <span class="badge">10</span></a></li>
                  <li role="presentation"><a href="#tab2" data-toggle="tab">Widgets <span class="badge">6</span></a></li>
                  <li role="presentation"><a href="#tab3" data-toggle="tab">File Manager <span class="badge">9</span></a></li>
                  <li role="presentation"><a href="#tab4" data-toggle="tab">Product Catalog <span class="badge">12</span></a></li>
                </ul>
                <br>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        
                        <div class="panel-header">
                          <h4>Page Approvals &rsaquo;
                            <div class="relative inline">
                              <a href="#" class="dropdown-toggle inline-toggler" data-toggle="dropdown">Approval Pending <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li class="active"><a href="#">Approval Pending</a></li>
                                <li><a href="#">In Progress</a></li>
                                <li><a href="#">Approved</a></li>
                                <li><a href="#">Rejected</a></li>
                              </ul>
                            </div>
                          </h4>
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
                        
                      </div>

                      <div class="table-responsive">
                        <table class="table table-hover table-condensed">
                          <thead>
                            <tr>
                              <th><a href="" class="tooltipme" title="Select All"><input type="checkbox"></a></th>
                              <th>Page</th>
                              <th>Site</th>
                              <th>Modified</th>
                              <th>Change</th>
                              <th>Quick Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php for($i = 1; $i < 8; $i++): ?>
                            <tr>
                              <td class="checkcolumn"><input type="checkbox"></td>
                              <td><a href="#" class="tooltipme" title="Preview Change"><b>About Us</b> <i class="row-hover-show fa fa-search"></i></a></td>
                              <td>savannahpain.com</td>
                              <td>3/31/15 3:15pm<br><small>Greg Burkett</small></td>
                              <td>Update</td>
                              <td><a class="btn btn-xs btn-primary tooltipme" title="Approve"><i class="fa fa-thumbs-up"></i></a> <a class="btn btn-xs btn-default tooltipme" title="Reject"><i class="fa fa-thumbs-down"></i></a></td>
                            </tr>
                            <?php endfor; ?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab2">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-header">
                        <h4>Widget Approvals &rsaquo;
                          <div class="relative inline">
                            <a href="#" class="dropdown-toggle inline-toggler" data-toggle="dropdown">Approval Pending <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li class="active"><a href="#">Approval Pending</a></li>
                              <li><a href="#">In Progress</a></li>
                              <li><a href="#">Approved</a></li>
                              <li><a href="#">Rejected</a></li>
                            </ul>
                          </div>
                        </h4>
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
                    </div>
                    
                    <div class="table-responsive">
                      <table class="table table-hover table-condensed">
                        <thead>
                          <tr>
                            <th><a href="" class="tooltipme" title="Select All"><input type="checkbox"></a></th>
                            <th>Widget</th>
                            <th>Modified</th>
                            <th>Change</th>
                            <th>Quick Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for($i = 1; $i < 8; $i++): ?>
                          <tr>
                            <td class="checkcolumn"><input type="checkbox"></td>
                            <td><a href="#" class="tooltipme" title="Preview Change"><b>Content Panel 1</b> <i class="row-hover-show fa fa-search"></i></a><br>
                            <small><i class="fa fa-gear"></i> Content Widget</small>
                            </td>
                            <td>3/31/15 3:15pm<br><small>Greg Burkett</small></td>
                            <td>Update</td>
                            <td><a class="btn btn-xs btn-primary tooltipme" title="Approve"><i class="fa fa-thumbs-up"></i></a> <a class="btn btn-xs btn-default tooltipme" title="Reject"><i class="fa fa-thumbs-down"></i></a></td>
                          </tr>
                          <?php endfor; ?>
                          

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                  <div class="tab-pane" id="tab3">             

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-header">
                      <h4>File Manager Approvals &rsaquo;
                        <div class="relative inline">
                          <a href="#" class="dropdown-toggle inline-toggler" data-toggle="dropdown">Approval Pending <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="active"><a href="#">Approval Pending</a></li>
                            <li><a href="#">In Progress</a></li>
                            <li><a href="#">Approved</a></li>
                            <li><a href="#">Rejected</a></li>
                          </ul>
                        </div>
                      </h4>
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
                    
                  </div>
                 
                  <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                      <thead>
                        <tr>
                          <th><a href="" class="tooltipme" title="Select All"><input type="checkbox"></a></th>
                          <th>Filename</th>
                          <th>Modified</th>
                          <th>Change</th>
                          <th>Quick Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php for($i = 1; $i < 8; $i++): ?>
                        <tr>
                          <td class="checkcolumn"><input type="checkbox"></td>
                          <td><a href="#" class="tooltipme" title="Preview Change"><b>Slider_image_<?php echo $i; ?>.jpg</b> <i class="row-hover-show fa fa-search"></i></a>
                          </td>
                          <td>3/31/15 3:15pm<br><small>Greg Burkett</small></td>
                          <td>Insert</td>
                          <td><a class="btn btn-xs btn-primary tooltipme" title="Approve"><i class="fa fa-thumbs-up"></i></a> <a class="btn btn-xs btn-default tooltipme" title="Reject"><i class="fa fa-thumbs-down"></i></a></td>
                        </tr>
                        <?php endfor; ?>
                        

                      </tbody>
                    </table>
                  </div>
                </div>
                  </div>
                  <div class="tab-pane" id="tab4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-header">  
                      <h4>Product Catalog Approvals &rsaquo;
                        <div class="relative inline">
                          <a href="#" class="dropdown-toggle inline-toggler" data-toggle="dropdown">Approval Pending <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="active"><a href="#">Approval Pending</a></li>
                            <li><a href="#">In Progress</a></li>
                            <li><a href="#">Approved</a></li>
                            <li><a href="#">Rejected</a></li>
                          </ul>
                        </div>
                      </h4>
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
                    
                  </div>
                  
                  <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                      <thead>
                        <tr>
                          <th><a href="" class="tooltipme" title="Select All"><input type="checkbox"></a></th>
                          <th>Name</th>
                          <th>Type</th>
                          <th>Modified</th>
                          <th>Change</th>
                          <th>Quick Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php for($i = 1; $i < 8; $i++): ?>
                        <tr>
                          <td class="checkcolumn"><input type="checkbox"></td>
                          <td><a href="#" class="tooltipme" title="Preview Change"><b>Model <?php echo $i; ?>-200T</b> <i class="row-hover-show fa fa-search"></i></a>
                          </td>
                          <td>Product</td>
                          <td>3/31/15 3:15pm<br><small>Greg Burkett</small></td>
                          <td>Update</td>
                          <td><a class="btn btn-xs btn-primary tooltipme" title="Approve"><i class="fa fa-thumbs-up"></i></a> <a class="btn btn-xs btn-default tooltipme" title="Reject"><i class="fa fa-thumbs-down"></i></a></td>
                        </tr>
                        <?php endfor; ?>
                        

                      </tbody>
                    </table>
                  </div>
                </div>
                  </div>
                </div>
            </div>
          </div>
            
            
            
            
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>
