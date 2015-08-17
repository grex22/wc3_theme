<?php include('inc/head.php'); ?>

    <?php include('inc/topnav.php'); ?>

    <div class="container-fluid" id="main">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('inc/leftnav.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add Page<a href="#" data-toggle="modal" data-target="#helpmodal" class="pull-right tooltipme" data-placement="left" title="Help!"><i id="help-button" class="fa fa-life-saver"></i></a></h1>

          <div class="row">
            <div class="col-xs-12">
              
                  <div class="row">
                    <form class="col-md-8">
                      <div class="form-group">
                        <label>Page Title</label>
                        <input class="form-control input-lg" type="text" id="pagetitle">
                      </div>
                      <div class="form-group">
                        <label>Parent Page</label>
                        <select class="form-control input-sm" id="pageparent">
                          <option value="/">Top-Level Page (No Parent)</option>
                          <option value="about-us/">About Us</option>
                          <option value="about-us/our-location/">Our Location</option>
                          <option value="contact-us/">Contact Us</option>
                          <option value="our-process/">Our Process</option>
                          <option value="staff/">Staff</option>
                          <option value="staff/doctor-bio/">Doctor Bio</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Page URL Alias</label>
                        <div class="input-group">
                        <div class="input-group-addon prepend" id="parent_alias">/</div>
                        <input class="form-control input-sm" type="text" id="pagetitle_slug">
                        </div>
                      </div>
                      <div class="well well-sm">
                      <div class="row">
                        <div class="col-md-6">
                        <label>Menu Locations:</label><br>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> Main Menu
                          </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2"> Footer
                          </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> Sidebar Nav
                          </label>
                        </div>
                        <div class="col-md-6">
                          <label>When Clicked:</label><br>
                          <label class="radio-inline">
                            <input type="radio" name="menu_click_behavior" id="inlineCheckbox1" value="option1" checked> Normal
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="menu_click_behavior" id="inlineCheckbox2" value="option2"> Open in new tab / window
                          </label>
                        </div>
                      </div>
                      </div>
                    </form>
                    <div class="col-md-4">
                      <h5 class="no_top_margin">Page Publishing:</h5>
                      <div class="well">
                      
                        <label><i class="fa fa-warning"></i> 3 Pending Approvals</label><br>
                        <button class="btn btn-block">View Pending Approvals...</button>
                        <hr>
                        <button class="btn btn-secondary btn-block"><i class="fa fa-eye"></i> Preview Page...</button>
                        <button class="btn btn-primary btn-block"><i class="fa fa-check"></i> Save Changes</button>
                      </div>
                    </div>
                  </div>
                  <br>
              <ul class="nav nav-tabs">
                <li class="active"><a href="#pagecontent" data-toggle="tab">Page Builder</a></li>
                <li><a href="#tab2" data-toggle="tab">SEO</a></li>
                <li><a href="#tab3" data-toggle="tab">Social</a></li>
                <li><a href="#tab4" data-toggle="tab">Scheduling</a></li>
                <li><a href="#tab7" data-toggle="tab">Advanced</a></li>
              </ul>
              <div class="tab-content">
                
                <div class="tab-pane active" id="pagecontent">
                  <div class="panel panel-default">
                    <div class="panel-heading">

                      <form class="form-inline">
                      <label>Layout
                        <select class="form-control">
                          <option>Default Layout</option>
                        </select>
                      </label>
                      </form>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-xs-8">
                          Main Content
                          <div class="content_widget empty">
                            <div class="pull-right"><a href="#" class="btn btn-sm new_content_widget">New Content</a>
                            <a href="#widget_modal" data-toggle="modal" class="btn btn-sm">From Library...</a>
                            </div>
                            <div class="widgettitle">
                            <i class="fa fa-lg fa-plus-square"></i> Add:
                            </div>
                            <div class="contentwell"></div>
                            <div class="clearfix"></div>
                          </div>

                        </div>
                        <div class="col-xs-4">
                          Sidebar
                          <div class="content_widget empty">
                            <div class="pull-right"><a href="#" class="btn btn-sm new_content_widget">New Content</a>
                            <a href="#widget_modal" data-toggle="modal" class="btn btn-sm">From Library...</a>
                            </div>
                            <div class="widgettitle">
                            <i class="fa fa-lg fa-plus-square"></i> Add:
                            </div>
                            <div class="contentwell"></div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                                   
                  </div>
                </div>
                <div class="tab-pane padded" id="tab2">
                  <div class="row">
                    <div class="col-md-9">
                      <form class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Meta Description</label>
                          <div class="col-sm-9">
                            <div class="input-group">
                              <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Meta Description">
                              <div class="input-group-addon"><a href="#" class="icon-popover-fix" data-trigger="focus" role="button" tabindex="-1" data-toggle="popover" title="Meta Description" data-content="Meta description helps describe the content of your page to search engines, and is often used as the preview text in search results."><i class="fa fa-question-circle"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Browser Title</label>
                          <div class="col-sm-9">
                            <div class="input-group">
                              <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Browser Title">
                              <div class="input-group-addon"><a href="#" class="icon-popover-fix" data-trigger="focus" role="button" tabindex="-1" data-toggle="popover" title="Browser Title" data-content="This text displays at the top of browser window and is very important for SEO"><i class="fa fa-question-circle"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Robots Text</label>
                          <div class="col-sm-9">
                            <div class="input-group">
                              <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Robots Text">
                              <div class="input-group-addon"><a href="#" class="icon-popover-fix" data-trigger="focus" role="button" tabindex="-1" data-toggle="popover" title="Robots Text" data-content="Defines the text of your Robots.txt entry for this page. Only set this if you know what you're doing!  "><i class="fa fa-question-circle"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        
                      </form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane padded" id="tab3">
                  
                  <div class="col-md-9">
                    <p>This information will override information on the page when sharing this page over social media, fields left blank will default to the page information.</p>
                    <hr>
                      <form class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Sharing Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Sharing Title">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Description</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Description">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Image</label>
                          <div class="col-sm-9">
                            <input type="file" id="inputEmail3" placeholder="Robots Text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">URL</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="URL">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Publisher Twitter Handle</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Publisher Twitter Handle">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Creator Twitter Handle</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Creator Twitter Handle">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Twitter Share Card</label>
                          <div class="col-sm-9">
                            <select class="form-control input-sm">
                              <option>None</option>
                              <option>Summary</option>
                              <option>Summary with large image</option>
                            </select>
                          </div>
                        </div>
                        
                        
                      </form>
                    </div>
                </div>
                <div class="tab-pane padded" id="tab4">
                  <p>Schedule the availability of this page by setting the start and end dates you'd like it to publish.</p>
                  <hr>
                  <form class="form-horizontal">
                    <div class="form-group">
                      <div class=" col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Enable Scheduling
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Live Start Date</label>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <input type="date" class="form-control input-sm" id="inputEmail3" placeholder="Redirect URL">
                          
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-3 control-label">Live End Date</label>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <input type="date" class="form-control input-sm" id="inputEmail3" placeholder="Canonical URL">
                          
                        </div>
                      </div>
                    </div>
                    
                    
                    
                    
                  </form>
                </div>
                <div class="tab-pane padded" id="tab7">
                  <div class="row">
                    
                    <div class="col-md-9">
                      <h4>Javascript</h4>
                      <label>Custom Javascript for this Page</label>
                      <textarea class="form-control" rows="6"></textarea>
                      <hr>
                      <h4>Permissions</h4>
                      <label>Allow the following user types to access this page:</label>
                      <form>
                        <label class="checkbox-inline">
                          <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Public
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" id="inlineCheckbox2" value="option2" checked> Registered User
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" id="inlineCheckbox3" value="option3" checked> Site Administrator
                        </label>
                      </form>
                      <hr>
                      <h4>URLs and Redirects</h4>
                      <label>Advanced URL redirection settings, for experts only!</label>
                      <hr>
                      <form class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Redirect URL</label>
                          <div class="col-sm-9">
                            <div class="input-group">
                              <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Redirect URL">
                              <div class="input-group-addon"><a href="#" class="icon-popover-fix" data-trigger="focus" role="button" tabindex="-1" data-toggle="popover" title="Redirect" data-content="You may link this menu entry to an existing Page (e.g. /products) or to another website. If you link to another website, the URL must begin with http://"><i class="fa fa-question-circle"></i></a>
                              </div>
                            </div>
                            <span id="helpBlock" class="help-block">Must begin with / or http:// for external links</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Canonical URL</label>
                          <div class="col-sm-9">
                            <div class="input-group">
                              <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Canonical URL">
                              <div class="input-group-addon"><a href="#" class="icon-popover-fix" data-trigger="focus" role="button" tabindex="-1" data-toggle="popover" title="Canonical URL" data-content="A canonical URL defines a preferred master version of the current page. This tells search engines &quot;don't index this page, index the canonical instead&quot;. It's used to group similar pages together or on mobile websites to point out the preferred desktop version of the page."><i class="fa fa-question-circle"></i></a>
                              </div>
                            </div>
                            <span id="helpBlock" class="help-block">Must begin with / or http:// for external links</span>
                          </div>
                        </div>
                        
                        
                        
                        
                      </form>
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
