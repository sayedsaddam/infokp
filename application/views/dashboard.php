<?php $inuse_stats = $this->Home_model->status_in_use(); ?>
<?php $computers_stats = $this->Home_model->count_items_computers(); ?>
<?php $furniture_stats = $this->Home_model->count_items_furniture(); ?>
<?php $electric_stats = $this->Home_model->count_items_electric(); ?>
<?php $equipment_stats = $this->Home_model->count_items_office(); ?>
<?php $mobile_stats = $this->Home_model->count_items_mobiles(); ?>
<?php $outlet_stats = $this->Home_model->count_items_outlets(); ?>
<?php $factory_stats = $this->Home_model->count_items_factory(); ?>
<?php $store_stats = $this->Home_model->count_items_store(); ?>
<?php $admin_store_stats = $this->Home_model->count_items_admin_store(); ?>
<section class="secMainWidthFilter" style="padding: 0px;margin-top: -40px;">
  <section class="secIndexTable margint-top-0">
    <section class="secIndexTable">
      <div class="col-lg-6">
        <div class="mainTableWhite">
        <div class="row">
          <div class="col-md-8">
            <div class="tabelHeading">
              <h3>stats | category wise <br><small style="text-transform: lowercase;">The stats shows overall data (<strong>in use & store</strong>) around the country.</small></h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tabelTopBtn">
              <div class="input-group-btn">
                <a href="<?php echo base_url('home/add_items'); ?>" class="btn btn-default"><i class="fa fa-plus"></i> add item</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="tableMain">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>serial no.</th>
                      <th>category name</th>
                      <th>no. of items</th>
                    </tr>
                  </thead>
                  <tbody>
                   <tr>
                     <td>1</td>
                     <td>Computers</td>
                     <td><?php echo $computers_stats; ?></td>
                   </tr>
                   <tr>
                     <td>2</td>
                     <td>Furniture</td>
                     <td><?php echo $furniture_stats; ?></td>
                   </tr>
                   <tr>
                     <td>3</td>
                     <td>Electric Applicances</td>
                     <td><?php echo $electric_stats; ?></td>
                   </tr>
                   <tr>
                     <td>4</td>
                     <td>Office Equipment</td>
                     <td><?php echo $equipment_stats; ?></td>
                   </tr>
                   <tr>
                     <td>5</td>
                     <td>Mobile</td>
                     <td><?php echo $mobile_stats; ?></td>
                   </tr>
                   <tr>
                     <td>6</td>
                     <td>Outlet Equipment</td>
                     <td><?php echo $outlet_stats; ?></td>
                   </tr>
                   <tr>
                     <td>7</td>
                     <td>Factory Equipment</td>
                     <td><?php echo $factory_stats; ?></td>
                   </tr>
                   <tr>
                     <td><strong>Total</strong></td>
                     <td></td>
                     <td>
                       <?php echo $computers_stats + $furniture_stats + $electric_stats + $equipment_stats + $mobile_stats + $outlet_stats + $factory_stats;  ?>
                     </td>
                   </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-6">
        <div class="mainTableWhite">
        <div class="row">
          <div class="col-md-8">
            <div class="tabelHeading">
              <h3>stats|in store & use <br><small style="text-transform: lowercase;">the stats shows all types of items.</small></h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tabelTopBtn">
              <div class="input-group-btn">
                <a href="<?php echo base_url('home/add_items'); ?>" class="btn btn-default"><i class="fa fa-plus"></i> add item</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="tableMain">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>serial no.</th>
                      <th>store</th>
                      <th>admin store</th>
                      <th>in use</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><?php echo $store_stats; ?></td>
                      <td><?php echo $admin_store_stats; ?></td>
                      <td><?php echo $inuse_stats; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- <div class="col-lg-6">
        <div class="mainTableWhite">
        <div class="row">
          <div class="col-md-8">
            <div class="tabelHeading">
              <h3>statistics|other locations</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tabelTopBtn">
              <div class="input-group-btn">
                <a class="btn btn-defaul" href="<?= base_url('admin_dashboard/all_ucpos'); ?>">view all</a>
                <a class="btn btn-defaul" href="<?= base_url('admin_dashboard/add_peos'); ?>"><i class="fa fa-plus"></i> add item</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="tableMain">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>UCPO name</th>
                      <th>PEO name</th>
                      <th>AC name</th>
                      <th>status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php //foreach ($pen_ucpos as $pending): ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td><?php //echo $pending->ac_name; ?></td>
                        <td><div class="label label-info">Pending...</div></td>
                      </tr>
                    <?php //endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div> -->
      <!-- <div class="col-lg-6">
        <div class="mainTableWhite">
        <div class="row">
          <div class="col-md-8">
            <div class="tabelHeading">
              <h3>statistics</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tabelTopBtn">
              <div class="input-group-btn">
                <a class="btn btn-defaul" href="<?= base_url('admin_dashboard/all_tcsps'); ?>">view all</a>
                <a class="btn btn-defaul" href="<?= base_url('admin_dashboard/add_peos'); ?>"><i class="fa fa-plus"></i> add item</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="tableMain">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>TCSP name</th>
                      <th>PEO name</th>
                      <th>AC name</th>
                      <th>status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php //foreach($pen_tcsps as $pending): ?>
                      <tr>
                        <td><?php  ?></td>
                        <td><?php ?></td>
                        <td><?php ?></td>
                        <td><div class="label label-info">Pending...</div></td>
                      </tr>
                    <?php //endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div> -->
    </section>
  </section>
</section>