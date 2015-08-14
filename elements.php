<?php include('inc/head.php'); ?>

    <?php include('inc/topnav.php'); ?>

    <div class="container-fluid" id="main">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('inc/leftnav.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard <a data-toggle="modal" data-target="#helpmodal" href="#" class="pull-right tooltipme" data-placement="left" title="Help!"><i id="help-button" class="fa fa-life-saver"></i></a></h1>
          
          <div class="stickywrapper">
            <div class="stickytabs">
              <ul class="nav nav-tabs">       
                <li class="active"><a href="#tab1" data-toggle="tab">Pages</a></li>
                <li><a href="#tab2" data-toggle="tab">Users</a></li>
                <li><a href="#tab3" data-toggle="tab">Domains</a></li>
                <li><a href="#tab4" data-toggle="tab">Theme</a></li>
                <li><a href="#tab5" data-toggle="tab">Layouts</a></li>
                <li><a href="#tab7" data-toggle="tab">Approvals</a></li>
                <li><a href="#tab8" data-toggle="tab">Settings</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab1"> </div>
                <div class="tab-pane" id="tab2"> </div>
                <div class="tab-pane" id="tab3"> </div>
                <div class="tab-pane" id="tab4"> </div>
                <div class="tab-pane" id="tab5"> </div>
                <div class="tab-pane" id="tab6"> </div>
                <div class="tab-pane" id="tab7"> </div>
                <div class="tab-pane" id="tab8"> </div>
              </div>
            </div>
          </div>
          
          <br><br>
          
          <div class="row">
          
          <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success</strong> This alert lets you know that the content was successfully saved!
          </div>
         
          
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>

                
              </tbody>
            </table>
          </div>
          </div>
          <div class="row">
            <div class="list-group">
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading" id="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              </a>
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading" id="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              </a>
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading" id="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              </a>
            </div>
          </div>
            
            <h1 class="sub-header">H1 Section title</h1>
            <h2 class="sub-header">H2 Section title</h2>
            <h3 class="sub-header">H3 Section title</h3>
            <h4 class="sub-header">H4 Section title</h4>
            <h5 class="sub-header">H5 Section title</h5>
            <h6 class="sub-header">H6 Section title</h6>
            <hr>
            <h3>Form Elements</h3>
            <div class="row">
              <form class="col-md-6">
                <div class="form-group">
                  <label>Text Input
                  <input class="form-control" type="text" value ="Text Input">
                  </label>
                </div>
                <div class="form-group">
                  <label>HTML5 Number Input</label>
                  <input class="form-control" type="number" value="10">
                </div>
                <div class="form-group">
                  <label>Text Area</label>
                  <textarea class="form-control" ></textarea>
                </div>
              </form>
            </div>
            <hr>
            <h4>Form Inline</h4>
            <form class="form-inline">
              <div class="form-group">
                <label for="exampleInputName2">Name</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail2">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
              </div>
              <button type="submit" class="btn btn-default">Send invitation</button>
            </form>
            <hr>
            <h4>Form Append / Prepend</h4>
              <form class="form-inline">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                  <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                    <div class="input-group-addon">.00</div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <hr>
              <h4>Horizontal Login Form</h4>
              <div class="row">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Remember me
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                      <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                  </div>
                </form>
              </div>
              <h4>Graphing</h4>
              <div class="row">
                <div class="col-sm-6">
                  <canvas id="myChart" height="90" width="auto"></canvas>
                </div>
                <div class="col-sm-6">
                  <canvas id="linechart" height="90" width="auto"></canvas>
                </div>
              </div>
              <hr>
              <div class="clearfix"></div>
              <h4>Doughnut Graphs</h4>
              <div class="row">
                <div class="col-sm-3">
                  <canvas id="pie1" height="120" width="auto"></canvas>
                </div>
                <div class="col-sm-3">
                  <canvas id="pie2" height="120" width="auto"></canvas>
                </div>
                <div class="col-sm-3">
                  <canvas id="pie3" height="120" width="auto"></canvas>
                </div>
                <div class="col-sm-3">
                  <canvas id="pie4" height="120" width="auto"></canvas>
                </div>
              </div>
              <hr>
            
            
            
            
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>
