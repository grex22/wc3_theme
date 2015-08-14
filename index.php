<?php include('inc/head.php'); ?>

    <?php include('inc/topnav.php'); ?>

    <div class="container-fluid" id="main">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('inc/leftnav.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard <a data-toggle="modal" data-target="#helpmodal" href="#" class="pull-right tooltipme" data-placement="left" title="Help!"><i id="help-button" class="fa fa-life-saver"></i></a></h1>
          
          <h5>Organization at a Glance:</h5>
          <div class="row at-a-glance">
            <div class="col-sm-3">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-sitemap"></i></div>
                  <select class="form-control">
                    <option>Savannah Pain Mgmt.</option>
                  </select>
                </div>
              </div>
              
            </div>
            <div class="col-sm-9">
              <span class="stat-group">
                <span class="well well-sm inline">11</span> Sites
              </span>
              <span class="stat-group">
                <span class="well well-sm inline">39</span> Users
              </span>
              <span class="stat-group">
                <span class="well well-sm inline">3</span> Admins
              </span>
              <span class="stat-group">
                <span class="well well-sm inline">1,911</span> Visitors, 10 Days
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-7">
            
            <h3 class="sub-header">Websites</h3>
            
            <div class="table-responsive">
              <table class="table table-condensed website-table">
                <thead>
                  <tr>
                    <th>Site</th>
                    <!--<th>Visitors, 10 days <i class="fa fa-info-circle tooltipme"></i></th>-->
                    <th class="text-center">404s <i class="fa fa-info-circle tooltipme"></i></th>
                    <th class="text-center">New Users <i class="fa fa-info-circle tooltipme"></i></th>
                    <th class="text-center">Forms <i class="fa fa-info-circle tooltipme"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php for($i = 1;$i < 11;$i++): ?>
                  <tr>
                    <td>
                      <h5><a href="#">livepainfreenow.com</a></h5>
                      <small>
                        <ul class="list-unstyled list-inline dividers">
                          <li><a href="#">Edit Site</a></li>
                          <li><a href="#">Pages</a></li>
                          <li><a href="#">Users</a></li>
                          <li><a href="#">Widgets</a></li>
                        </ul>
                      </small>
                    </td>
                    <!--<canvas class="linechart" id="sitetraffic-<?php echo $i; ?>" height="35px" width="100px"></canvas>-->
                    <!--<td>122</td>-->
                    <td class="text-center"><a href="#" class="action-item">5 <i class="fa fa-warning"></i></a></td>
                    <td class="text-center"><a href="#" class="action-item">2 <i class="fa fa-user-plus"></i></a></td>
                    <td class="text-center"><a href="#" class="action-item">5 <i class="fa fa-list"></i></a></td>
                  </tr>
                  <?php endfor; ?>


                  
                </tbody>
              </table>
            </div>
            </div>
            <div class="col-sm-5">
              <div class="row">
                <div class="col-sm-12 more_bottom_margin">
                  <span class="pull-right">4 of 20</span>
                  <h3 class="sub-header">Pending Approvals</h3>
                  <table class="table table-responsive list-table table-compact">
                    <tbody>
                      <tr>
                        <td><a href="#">Contact Us Page, Content Update</a><br>
                          <small><strong>Date:</strong> Aug 30, 2015 &nbsp; <strong>User:</strong> Alex Bauer</small>
                        </td>
                        <td class="table-action"><a href="#" title="Details" class="tooltipme fa fa-eye"></a></td>
                        <td class="table-action"><a href="#" title="Approve" class="tooltipme fa fa-check-circle success"></a></td>
                        <td class="table-action"><a href="#" title="Deny" class="tooltipme fa fa-times-circle error"></a></td>
                      </tr>
                      <tr>
                        <td><a href="#">Contact Us Page, Content Update</a><br>
                          <small><strong>Date:</strong> Aug 30, 2015 &nbsp; <strong>User:</strong> Alex Bauer</small>
                        </td>
                        <td class="table-action"><a href="#" title="Details" class="tooltipme fa fa-eye"></a></td>
                        <td class="table-action"><a href="#" title="Approve" class="tooltipme fa fa-check-circle success"></a></td>
                        <td class="table-action"><a href="#" title="Deny" class="tooltipme fa fa-times-circle error"></a></td>
                      </tr>
                      <tr>
                        <td><a href="#">Contact Us Page, Content Update</a><br>
                          <small><strong>Date:</strong> Aug 30, 2015 &nbsp; <strong>User:</strong> Alex Bauer</small>
                        </td>
                        <td class="table-action"><a href="#" title="Details" class="tooltipme fa fa-eye"></a></td>
                        <td class="table-action"><a href="#" title="Approve" class="tooltipme fa fa-check-circle success"></a></td>
                        <td class="table-action"><a href="#" title="Deny" class="tooltipme fa fa-times-circle error"></a></td>
                      </tr>
                      <tr>
                        <td><a href="#">Contact Us Page, Content Update</a><br>
                          <small><strong>Date:</strong> Aug 30, 2015 &nbsp; <strong>User:</strong> Alex Bauer</small>
                        </td>
                        <td class="table-action"><a href="#" title="Details" class="tooltipme fa fa-eye"></a></td>
                        <td class="table-action"><a href="#" title="Approve" class="tooltipme fa fa-check-circle success"></a></td>
                        <td class="table-action"><a href="#" title="Deny" class="tooltipme fa fa-times-circle error"></a></td>
                      </tr>
                    </tbody>
                  </table>
                  <a class="btn btn-block btn-light" href="approvals.php">View 6 more ...</a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 more_bottom_margin">
                  <span class="pull-right">4 of 6</span>
                  <h3 class="sub-header">SEO Opportunities</h3>
                  <table class="table table-responsive list-table table-compact">
                    <tbody>
                      <tr>
                        <td><a href="#">Services [Page]</a><br>
                          <small><strong>Site:</strong> Livepainfreenow.com</small>
                        </td>
                        <td class="table-action"><span class="warning"><i class="fa fa-circle"></i> Moderate</span></td>
                        <td class="table-action"><a href="#">Edit <i class="fa fa-arrow-right"></i></a></td>
                      </tr>
                      <tr>
                        <td><a href="#">About Us [Page]</a><br>
                          <small><strong>Site:</strong> Livepainfreenow.com</small>
                        </td>
                        <td class="table-action"><span class="warning"><i class="fa fa-circle"></i> Moderate</span></td>
                        <td class="table-action"><a href="#">Edit <i class="fa fa-arrow-right"></i></a></td>
                      </tr>
                      <tr>
                        <td><a href="#">Home [Page]</a><br>
                          <small><strong>Site:</strong> Livepainfreenow.com</small>
                        </td>
                        <td class="table-action"><span class="warning"><i class="fa fa-circle"></i> Moderate</span></td>
                        <td class="table-action"><a href="#">Edit <i class="fa fa-arrow-right"></i></a></td>
                      </tr>
                      <tr>
                        <td><a href="#">Policy [Blog Post]</a><br>
                          <small><strong>Site:</strong> Livepainfreenow.com</small>
                        </td>
                        <td class="table-action"><span class="error"><i class="fa fa-circle"></i> Poor</span></td>
                        <td class="table-action"><a href="#">Edit <i class="fa fa-arrow-right"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                  <a class="btn btn-block btn-light" href="approvals.php">View 2 more ...</a>
                </div>
              </div>
            </div>
            
            </div>
          
            
            
            
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>
