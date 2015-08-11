<?php include('inc/head.php'); ?>

    <?php include('inc/topnav.php'); ?>

    <div class="container-fluid" id="main">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('inc/leftnav.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add Page<a href="#" data-toggle="modal" data-target="#helpmodal" class="pull-right tooltipme" data-placement="left" title="Help!"><i class="fa fa-life-saver"></i></a></h1>

          <div class="row">
            <div class="col-xs-12">
              
                  <div class="row">
                    <form class="col-md-8">
                      <div class="form-group">
                        <label>Page Title</label>
                        <input class="form-control input-lg" type="text" id="pagetitle">
                      </div>
                      <div class="form-group">
                        <label>Page URL Alias</label>
                        <div class="input-group">
                        <div class="input-group-addon prepend">/</div>
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
                            <input type="radio" id="inlineCheckbox1" value="option1" checked> Normal
                          </label>
                          <label class="radio-inline">
                            <input type="radio" id="inlineCheckbox2" value="option2"> Open in new tab / window
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
                        <button class="btn btn-primary btn-block">Save Changes</button>
                      </div>
                    </div>
                  </div>
                  <br>
              <ul class="nav nav-tabs">
                <li class="active"><a href="#pagecontent" data-toggle="tab">Page Builder</a></li>
                <li><a href="#tab2" data-toggle="tab">SEO</a></li>
                <li><a href="#tab3" data-toggle="tab">Social</a></li>
                <li><a href="#tab4" data-toggle="tab">Scheduling</a></li>
                <li><a href="#tab5" data-toggle="tab">Scripts</a></li>
                <li><a href="#tab6" data-toggle="tab">Permissions</a></li>
                <li><a href="#tab7" data-toggle="tab">URL &amp; Redirects</a></li>
              </ul>
              <div class="tab-content">
                
                <div class="tab-pane active" id="pagecontent">
                  <div class="panel panel-default">
                    <div class="panel-heading">

                      <form class="form-inline">
                      <label>Template
                        <select class="form-control">
                          <option>Default Template</option>
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
                <div class="tab-pane padded" id="tab5">
                  <label>Custom Javascript for this Page</label>
                  <textarea class="form-control" rows="6"></textarea>
                </div>
                <div class="tab-pane padded" id="tab6">
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
                </div>
                <div class="tab-pane padded" id="tab7">
                  <div class="row">
                    <div class="col-md-9">
                      <p>Advanced URL redirection settings, for experts only!</p>
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
                <h5>Widget Categories:</h5>
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
              <div class="modal-body step step-2">
                <div style="max-height:300px;overflow-y:scroll">
                  <table class="table table-responsive table-condensed table-selectable">
                    <thead>
                      <tr><th>Title</th></tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>New Content Widget</td>
                      </tr>
                        <tr><td>Content Widget 1</td>      </tr>
                        <tr><td>Content Widget 1</td>      </tr>
                        <tr><td>Content Widget 2</td>      </tr>
                        <tr><td>Content Widget 2</td>      </tr>
                        <tr><td>About us</td>              </tr>
                        <tr><td>About us</td>              </tr>
                        <tr><td>About us Revised</td>      </tr>
                        <tr><td>About us Revised</td>      </tr>
                        <tr><td>2015 Event List</td>       </tr>
                        <tr><td>2015 Event List</td>       </tr>
                        <tr><td>About the Practice</td>    </tr>
                        <tr><td>About the Practice</td>    </tr>
                        <tr><td>Dr. Delonghe</td>          </tr>
                        <tr><td>Dr. Delonghe</td>          </tr>
                        <tr><td>Dr. Tranton</td>           </tr>
                        <tr><td>Dr. Tranton</td>           </tr>
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
