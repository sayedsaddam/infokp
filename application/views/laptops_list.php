<section class="secMainWidthFilter" style="padding: 0px;margin-top: -40px;">
  <section class="secIndexTable margint-top-0">
    <section class="secIndexTable">
      <div class="col-lg-12">
        <div class="mainTableWhite">
        <div class="row">
          <div class="col-md-8">
            <div class="tabelHeading">
              <h3>
                <?php if(empty($search_results)): ?>
                  list of items (Computers) | <a href="javascript:history.go(-1);" class="btn btn-primary btn-xs">
                    <i class="fa fa-angle-double-left"></i> Back</a>
                    <a href="<?php echo base_url('home/add_items'); ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add New</a>
                    <a href="<?php echo base_url('home/export_items'); ?>" class="btn btn-info btn-xs">Export</a>
                <?php elseif(!empty($search_results)): ?>
                  search results | <a href="javascript:history.go(-1);" class="btn btn-primary btn-xs">
                    <i class="fa fa-angle-double-left"></i> Back</a>
                <?php endif; ?>
              </h3>
            </div>
          </div>
          <div class="col-md-4">
            <form action="<?php echo base_url('home/search_items'); ?>" method="get" style="margin-top: 14px; padding-right: 12px;">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" autocomplete="off" required="" name="search_record">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
              </div>
            </form>
          </div>
        </div>
        <?php if($success = $this->session->flashdata('success')): ?>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="alert alert-success text-center">
                <?php echo $success; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <div class="row">
          <div class="col-md-12">
            <div class="tableMain">
              <div class="table-responsive">
                <table class="table table-condensed table-hover">
                  <thead>
                    <tr>
                      <th>s. no</th>
                      <th>item</th>
                      <th>description</th>
                      <th>receiving date</th>
                      <th>purchasing date</th>
                      <th>laptop age</th>
                      <th>custodianship</th>
                      <th>contact</th>
                      <th>designation</th>
                      <th>department</th>
                      <th>distt/region</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <?php if(empty($search_results)): ?>
                  <tbody>
                    <?php if(!empty($laptops)): $counter = $this->uri->segment(3) + 1; foreach ($laptops as $item): ?>
                      <tr>
                        <td><?php echo $counter++; ?></td>
                        <td><?php echo $item->item; ?></td>
                        <td><?php echo $item->description; ?></td>
                        <td><?php echo date('M d, Y', strtotime($item->receive_date)); ?></td>
                        <td><?php echo date('M d, Y', strtotime($item->purchase_date)); ?></td>
                        <td>
                          <?php $recDate = date('Y-m-d', strtotime($item->purchase_date));
                                $today = date("Y-m-d"); // Today's date
                                $diff = date_diff(date_create($recDate), date_create($today));
                                echo $diff->format('%yyr %mm %dd'); ?>
                        </td>
                        <td><?php echo $item->custodian_location; ?></td>
                        <td><?php echo $item->contact; ?></td>
                        <td><?php echo $item->designation; ?></td>
                        <td><?php echo $item->department; ?></td>
                        <td><?php echo $item->district_region; ?></td>
                        <td>
                          <?php $item_detail = $this->Home_model->item_detail($item->id); ?>
                          <a href="<?php echo base_url(); ?>home/edit_item/<?php echo $item->id; ?>" class="btn btn-primary btn-xs">Edit</a>
                          <a href="<?php echo base_url(); ?>home/delete_item/<?php echo $item->id; ?>" class="btn btn-danger btn-xs" onclick="javascript:return confirm('Are you sure to delete ?');">Delete</a>
                          <a data-toggle="modal" data-target="#view_detail<?php echo $item->id; ?>" href="#" class="btn btn-info btn-xs">View</a>
                          <div class="modal fade" id="view_detail<?php echo $item->id; ?>" tabindex="-1" role="dialog" aria-labelledby="view_detail" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                  <!--Header-->
                                <div class="modal-header">
                                  <h4 style="display: inline-block;" class="modal-title" id="myModalLabel">Item's Detail... </h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <!--Body-->
                                <div class="modal-body">
                                  <strong>Project : <?php echo $item_detail->project; ?></strong><hr>
                                  <div class="row">
                                    <div class="col-md-2">
                                      <strong>Description</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->description; ?>
                                    </div>
                                    <div class="col-md-2">
                                      <strong>Asset Code</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->asset_code; ?>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-2">
                                      <strong>Model</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->model; ?>
                                    </div>
                                    <div class="col-md-2">
                                      <strong>Quantity</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->quantity; ?>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-2">
                                      <strong>Status</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->status; ?>
                                    </div>
                                    <div class="col-md-2">
                                      <strong>P.O Number</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->po_no; ?>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-2">
                                      <strong>Model</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->model; ?>
                                    </div>
                                    <div class="col-md-2">
                                      <strong>Serial Number</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->serial_number; ?>
                                    </div>
                                  </div>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; endif; ?>
                  </tbody>
                  <?php elseif(!empty($search_results)): ?>
                    <tbody>
                    <?php $counter = 1; foreach ($search_results as $result): ?>
                      <tr>
                        <td><?php echo $counter++; ?></td>
                        <td><?php echo $result->item; ?></td>
                        <td><?php echo $result->description; ?></td>
                        <td><?php echo date('M d, Y', strtotime($result->receive_date)); ?></td>
                        <td><?php echo date('M d, Y', strtotime($result->purchase_date)); ?></td>
                        <td>
                          <?php $recDate = date('Y-m-d', strtotime($result->purchase_date));
                                $today = date("Y-m-d"); // Today's date
                                $diff = date_diff(date_create($recDate), date_create($today));
                                echo $diff->format('%yyr %mm %dd'); ?>
                        </td>
                        <td><?php echo $result->custodian_location; ?></td>
                        <td><?php echo $result->contact; ?></td>
                        <td><?php echo $result->designation; ?></td>
                        <td><?php echo $result->department; ?></td>
                        <td><?php echo $result->district_region; ?></td>
                        <td>
                          <?php $item_detail = $this->Home_model->item_detail($result->id); ?>
                          <a href="<?php echo base_url(); ?>home/edit_item/<?php echo $result->id; ?>" class="btn btn-primary btn-xs">Edit</a>
                          <a href="<?php echo base_url(); ?>home/delete_item/<?php echo $result->id; ?>" class="btn btn-danger btn-xs" onclick="javascript:return confirm('Are you sure to delete ?');">Delete</a>
                          <a data-toggle="modal" data-target="#view_detail<?php echo $result->id; ?>" href="#" class="btn btn-info btn-xs">View</a>
                          <div class="modal fade" id="view_detail<?php echo $result->id; ?>" tabindex="-1" role="dialog" aria-labelledby="view_detail" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                  <!--Header-->
                                <div class="modal-header">
                                  <h4 style="display: inline-block;" class="modal-title" id="myModalLabel">Item's Detail... </h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <!--Body-->
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-md-2">
                                      <strong>Description</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->description; ?>
                                    </div>
                                    <div class="col-md-2">
                                      <strong>Asset Code</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->asset_code; ?>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-2">
                                      <strong>Model</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->model; ?>
                                    </div>
                                    <div class="col-md-2">
                                      <strong>Quantity</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->quantity; ?>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-2">
                                      <strong>Status</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->status; ?>
                                    </div>
                                    <div class="col-md-2">
                                      <strong>P.O Number</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo $item_detail->po_no; ?>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-2">
                                      <strong>Purchasing Date</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo date('M d, Y', strtotime($item_detail->purchase_date)); ?>
                                    </div>
                                    <div class="col-md-2">
                                      <strong>Receiving Date</strong>
                                    </div>
                                    <div class="col-md-4">
                                      <?php echo date('M d, Y', strtotime($item_detail->receive_date)); ?>
                                    </div>
                                  </div>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; endif; ?>
                    <?php if(empty($search_results) AND empty($laptops)): ?>
                    <div class="alert alert-danger text-center col-md-10 col-md-offset-1">
                      <strong>Aww snap! </strong> We couldn't find what you need right now!
                    </div>
                  <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10 text-center">
            <?php if(empty($search_results) AND !empty($laptops)){ echo $this->pagination->create_links(); } ?>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
      </div>
    </section>
  </section>
</section>