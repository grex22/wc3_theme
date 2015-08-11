<?php include('inc/head.php'); ?>

    <?php include('inc/topnav.php'); ?>

    <div class="container-fluid" id="main">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('inc/leftnav.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard <a data-toggle="modal" data-target="#helpmodal" href="#" class="pull-right tooltipme" data-placement="left" title="Help!"><i class="fa fa-life-saver"></i></a></h1>
          
           
          <div class="row">
            <div class="col-xs-12">
            
            <h3 class="sub-header">Websites</h3>
            
            <div class="table-responsive">
              <table class="table table-condensed website-table">
                <thead>
                  <tr>
                    <th>Site</th>
                    <th>Traffic, 10 days <i class="fa fa-info-circle tooltipme"></i></th>
                    <th class="text-center">404 Errors <i class="fa fa-info-circle tooltipme"></i></th>
                    <th class="text-center">Registrations <i class="fa fa-info-circle tooltipme"></i></th>
                    <th class="text-center">Form Submits <i class="fa fa-info-circle tooltipme"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php for($i = 1;$i < 9;$i++): ?>
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
                    <td><canvas class="linechart" id="sitetraffic-<?php echo $i; ?>" height="35px" width="300px"></canvas></td>
                    <td class="text-center"><a href="#" class="action-item">5 <i class="fa fa-warning"></i></a></td>
                    <td class="text-center"><a href="#" class="action-item">2 <i class="fa fa-user-plus"></i></a></td>
                    <td class="text-center"><a href="#" class="action-item">5 <i class="fa fa-list"></i></a></td>
                  </tr>
                  <?php endfor; ?>


                  
                </tbody>
              </table>
            </div>
            
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <h4>Pending Approvals</h4>
            </div>
            <div class="col-sm-6">
              <h4>SEO Opportunities</h4>
            </div>
          </div>
            
            
            
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>
