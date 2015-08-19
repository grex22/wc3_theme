<?php include('inc/head.php'); ?>

    <?php include('inc/topnav.php'); ?>

    <div class="container-fluid" id="main">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('inc/leftnav.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">New Widget<a href="#" data-toggle="modal" data-target="#helpmodal" class="pull-right tooltipme" data-placement="left" title="Help!"><i id="help-button" class="fa fa-life-saver"></i></a></h1>

          <div class="row">
            <div class="col-xs-12">
                  
                  <div class="row">
                    <form class="col-md-8">
                      <div class="form-group form-inline">
                        <label>Widget Type</label><br>
                        <select class="form-control">
                          <option>Content Management</option>
                        </select> <i class="fa fa-caret-right"></i> 
                        <select class="form-control">
                          <option>Blog Post Widget</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Blog Title</label>
                        <input class="form-control input-lg" type="text" id="widgettitle">
                      </div>
                      <div class="form-group">
                        <label>Display Heading</label>
                        <input class="form-control" type="text" id="display_heading">
                        <p class="help-block">Leave blank to use the widget title</p>
                      </div>
                      <div class="form-group">
                        <label>Short Description</label>
                        <input class="form-control" type="text" id="display_heading">
                        <p class="help-block">Greg's Note: We'd discussed removing this, so this may be unneccesary</p>
                      </div>
                      <br>
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#pagecontent" data-toggle="tab">Widget Content</a></li>
                        <li><a href="#tab2" data-toggle="tab">Details</a></li>
                      </ul>
                      <div class="tab-content">
                
                        <div class="tab-pane padded active" id="pagecontent">
                            
                              <div class="row">
                                <div class="col-xs-12">
                                  <label>Main Content</label><div class='summernote'></div>
                                  <br>
                                  <label>Related Content</label><div class='summernote'></div>

                                </div>
                              </div>

                        </div>
                        <div class="tab-pane padded" id="tab2">
                          <div class="row">
                            <div class="col-md-12">
                              <em>Whatever custom elements are necessary for the widget... Too many to mock-up! :) </em>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      
                    </form>
                    <div class="col-md-4">
                      <h5 class="no_top_margin">Widget Publishing:</h5>
                      <div class="well">
                      
                        <label>Status:</label> <i class="fa fa-asterisk"></i> New (will need approval)<br>
                        <hr>
                        <button class="btn btn-secondary btn-block"><i class="fa fa-eye"></i> Preview Widget...</button>
                        <button class="btn btn-primary btn-block"><i class="fa fa-check"></i> Submit for Approval</button>
                        <hr>
                        <label>Edit History:</label>
                        <div class="table-scrollable-wrapper">
                          <table class="table-responsive table-condensed table table-small ">
                            <thead>
                              <tr><th>User</th><th>Date</th></tr>
                            </thead>
                            <tbody>
                              <tr><td>Greg Burkett</td><td>3/13/16 4:33 pm</td></tr>
                              <tr><td>Greg Burkett</td><td>3/13/16 4:33 pm</td></tr>
                              <tr><td>Greg Burkett</td><td>3/13/16 4:33 pm</td></tr>
                              <tr><td>Greg Burkett</td><td>3/13/16 4:33 pm</td></tr>
                              <tr><td>Greg Burkett</td><td>3/13/16 4:33 pm</td></tr>
                            </tbody>
                          </table>
                        </div>
                        <hr>
                        <label>Page Associations:</label>
                        <div class="table-scrollable-wrapper">
                          <table class="table-responsive table-condensed table table-small ">
                            <thead>
                              <tr><th>Site</th><th>Page</th></tr>
                            </thead>
                            <tbody>
                              <tr><td>SMT 2015</td><td><a href="#">About Us</a></td></tr>
                              <tr><td>SMT 2015</td><td><a href="#">Blog</a></td></tr>
                              <tr><td>SMT 2015</td><td><a href="#">Etc</a></td></tr>
                              <tr><td>SMT 2015</td><td><a href="#">Privacy Policy</a></td></tr>
                              <tr><td>SMT 2015</td><td><a href="#">About Us</a></td></tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
              
              
              
              <br>
              <br>
              <br>
              <br>
              <br>

              <br>
              <br>
              <br>
              <br>
              <br>
              
              
             
            </div>
          </div>
            
        <form class="modal modal-wide multi-step fade" id="widget_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title step-1" data-step="1">Add from Widget Library</h4>
                <h4 class="modal-title step-2" data-step="1">Add from Widget Library &rsaquo; Content</h4>
              </div>
              <div class="modal-body step step-1">
                <div class="btn-group btn-group-toggle">
                  <a class="btn btn-default btn-sm active" href="#tab_widget_grid" data-toggle="tab"><i class="fa fa-th-large"></i> Categories</a>
                  <a class="btn btn-default btn-sm" href="#tab_widget_list" data-toggle="tab"><i class="fa fa-list"></i> List</a>
                  <a class="btn btn-default btn-sm" href="#tab_widget_recent" data-toggle="tab"><i class="fa fa-clock-o"></i> Recent</a>
                </div>
                <hr>
                <div class="tab-content">
                  <div class="tab-pane active " id="tab_widget_grid">
                    
                    <div class="row widgetgrid">
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-list"></i>Content</a></div>
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-server"></i>Forms</a></div>
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-file"></i>Files</a></div>
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-wrench"></i>Complex Content</a></div>
                    </div>
                    <div class="row widgetgrid">
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-table"></i>Data</a></div>
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-suitcase"></i>Project</a></div>
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-subway"></i>Other</a></div>
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-tablet"></i>Mobile</a></div>
                    </div>
                    <div class="row widgetgrid">
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-star"></i>Ratings</a></div>
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-server"></i>Forms</a></div>
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-file"></i>Files</a></div>
                      <div class="col-xs-3"><a href="#" onclick="gotostep(2)" class="widgetcat"><i class="fa fa-lg fa-wrench"></i>Complex Content</a></div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab_widget_list">
                    
                    <input type="text" class="form-control" placeholder="Search...">
                    <div style="max-height:300px;overflow-y:scroll;margin-top:10px;">
                      <table class="table table-responsive table-condensed table-selectable">
                        <thead>
                          <tr><th class="sortable">Widget Title</th><th class="sortable">Type</th></tr>
                        </thead>
                        <tbody>
                            <tr onclick="gotostep(2)"><td>New Content Widget</td><td>Content</td></tr>
                            <tr onclick="gotostep(2)"><td>Content Widget 1</td><td>Content</td>      </tr>
                            <tr onclick="gotostep(2)"><td>Content Widget 1</td><td>Content</td>      </tr>
                            <tr onclick="gotostep(2)"><td>Content Widget 2</td><td>Content</td>      </tr>
                            <tr onclick="gotostep(2)"><td>Content Widget 2</td><td>Content</td>      </tr>
                            <tr onclick="gotostep(2)"><td>About us</td><td>Content</td>              </tr>
                            <tr onclick="gotostep(2)"><td>About us</td><td>Content</td>              </tr>
                            <tr onclick="gotostep(2)"><td>About us Revised</td><td>Content</td>      </tr>
                            <tr onclick="gotostep(2)"><td>About us Revised</td><td>Content</td>      </tr>
                            <tr onclick="gotostep(2)"><td>2015 Event List</td><td>Calendar</td>       </tr>
                            <tr onclick="gotostep(2)"><td>2015 Event List</td><td>Calendar</td>       </tr>
                            <tr onclick="gotostep(2)"><td>About the Practice</td><td>Map</td>    </tr>
                            <tr onclick="gotostep(2)"><td>About the Practice</td><td>Map</td>    </tr>
                            <tr onclick="gotostep(2)"><td>Dr. Delonghe</td><td>Map</td>          </tr>
                            <tr onclick="gotostep(2)"><td>Dr. Delonghe</td><td>Map</td>          </tr>
                            <tr onclick="gotostep(2)"><td>Dr. Tranton</td><td>Form</td>           </tr>
                            <tr onclick="gotostep(2)"><td>Dr. Tranton</td><td>Form</td>           </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane " id="tab_widget_recent">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div style="max-height:300px;overflow-y:scroll;margin-top:10px;">
                      <table class="table table-responsive table-condensed table-selectable">
                        <thead>
                          <tr><th class="sortable">Widget Title</th><th class="sortable">Type</th></tr>
                        </thead>
                        <tbody>
                            <tr onclick="gotostep(2)"><td>New Content Widget</td><td>Content</td></tr>
                            <tr onclick="gotostep(2)"><td>Content Widget 1</td><td>Content</td>      </tr>
                            <tr onclick="gotostep(2)"><td>Content Widget 1</td><td>Content</td>      </tr>
                            <tr onclick="gotostep(2)"><td>Content Widget 2</td><td>Content</td>      </tr>
                            <tr onclick="gotostep(2)"><td>Content Widget 2</td><td>Content</td>      </tr>
                            <tr onclick="gotostep(2)"><td>Dr. Tranton</td><td>Form</td>           </tr>
                            <tr onclick="gotostep(2)"><td>Dr. Tranton</td><td>Form</td>           </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                                
              </div>
              <div class="modal-body step step-2">
                <input type="text" class="form-control" placeholder="Search...">
                <div style="max-height:300px;overflow-y:scroll;margin-top:10px;">
                  <table class="table table-responsive table-condensed table-selectable">
                    <thead>
                      <tr><th class="sortable">Widget Title</th><th class="sortable">Type</th></tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>New Content Widget</td><td>Content</td>
                      </tr>
                        <tr><td>Content Widget 1</td><td>Content</td>      </tr>
                        <tr><td>Content Widget 1</td><td>Content</td>      </tr>
                        <tr><td>Content Widget 2</td><td>Content</td>      </tr>
                        <tr><td>Content Widget 2</td><td>Content</td>      </tr>
                        <tr><td>About us</td><td>Content</td>              </tr>
                        <tr><td>About us</td><td>Content</td>              </tr>
                        <tr><td>About us Revised</td><td>Content</td>      </tr>
                        <tr><td>About us Revised</td><td>Content</td>      </tr>
                        <tr><td>2015 Event List</td><td>Calendar</td>       </tr>
                        <tr><td>2015 Event List</td><td>Calendar</td>       </tr>
                        <tr><td>About the Practice</td><td>Map</td>    </tr>
                        <tr><td>About the Practice</td><td>Map</td>    </tr>
                        <tr><td>Dr. Delonghe</td><td>Map</td>          </tr>
                        <tr><td>Dr. Delonghe</td><td>Map</td>          </tr>
                        <tr><td>Dr. Tranton</td><td>Form</td>           </tr>
                        <tr><td>Dr. Tranton</td><td>Form</td>           </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="modal-footer">
                
                <button type="button" class="btn step step-2 pull-left" data-step="1" onclick="gotostep(1)">Back</button>
                <button type="button" class="btn btn-default step step-1 hidden" data-step="2">Continue</button>
                <button id="widgetconfirm" type="button" data-dismiss="modal" class="btn btn-default step step-2">Add to Page</button>
              </div>
            </div>
          </div>
        </form>
        
         
            
            
        </div>
      </div>
    </div>
    
<?php include('inc/footer.php'); ?>
