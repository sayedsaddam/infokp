<?php 
/*
* Filename: add_items.php
* Author: Saddam
*/
?>
<style type="text/css">
  .para p{
    padding-top: 12px;
    color: #ff8d00;
  }
  .para{
    background: #d6dad282;
  }
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $('.select2').select2(); // Searchable dropdown lists/select boxes.
  });
</script>
<section class="secMainWidth">
  <section class="secFormLayout">
    <div class="mainInputBg">
      <div class="row">
        <div class="col-lg-12">
          <h3>Add Items</h3><hr>
          <?php if($success = $this->session->flashdata('success')): ?>
            <div class="alert alert-success text-center">
              <?php echo $success; ?>
            </div>
          <?php endif; ?>
          <form action="<?php if(empty($edit)){ echo base_url('home/save_items'); }else{ echo base_url('home/update_items'); } ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>">
            <div class="row">
              <div class="col-lg-6">
                <label>Year</label>
                <input type="text" name="year" class="form-control" placeholder="Year" value="<?php if(!empty($edit)){ echo $edit->year; } ?>">
                <label>Project</label>
                <input type="text" name="project" class="form-control" placeholder="Project" value="<?php if(!empty($edit)){ echo $edit->project; } ?>">
                <label>Category</label>
                <input type="text" name="category" class="form-control" placeholder="Category" value="<?php if(!empty($edit)){ echo $edit->category; } ?>">
                <label>Item</label>
                <input type="text" name="item" class="form-control" placeholder="Item" value="<?php if(!empty($edit)){ echo $edit->item; } ?>">
                <label>Description</label>
                <textarea name="description" class="form-control" placeholder="Desctiption..."><?php if(!empty($edit)){ echo $edit->description; } ?></textarea>
                <label>Model</label>
                <input type="text" name="model" class="form-control" placeholder="Model" value="<?php if(!empty($edit)){ echo $edit->model; } ?>">
                <label>Asset Code</label>
                <input type="text" name="asset_code" class="form-control" placeholder="Asset Code" value="<?php if(!empty($edit)){ echo $edit->asset_code; } ?>">
                <label>P.O No.</label>
                <input type="text" name="po_no" class="form-control" placeholder="P.O Number" value="<?php if(!empty($edit)){ echo $edit->po_no; } ?>">
                <label>Contact</label>
                <input type="text" name="contact" class="form-control" placeholder="Contact" value="<?php if(!empty($edit)){ echo $edit->contact; } ?>">
              </div>
              <div class="col-lg-6">
                <label>Serial Number</label>
                <input type="text" name="serial_no" class="form-control" placeholder="Serial Number" value="<?php if(!empty($edit)){ echo $edit->serial_number; } ?>">
                <label>Custodian</label>
                <input type="text" name="custodian" class="form-control" placeholder="Custodian" value="<?php if(!empty($edit)){ echo $edit->custodian_location; } ?>">
                <label>Designation</label>
                <input type="text" name="designation" class="form-control" placeholder="Designation" value="<?php if(!empty($edit)){ echo $edit->designation; } ?>">
                <label>Department</label>
                <input type="text" name="department" class="form-control" placeholder="Department" value="<?php if(!empty($edit)){ echo $edit->department; } ?>">
                <label>Quantity</label>
                <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="<?php if(!empty($edit)){ echo $edit->quantity; } ?>">
                <label>District/Region</label>
                <input type="text" name="district" class="form-control" placeholder="District" value="<?php if(!empty($edit)){ echo $edit->district_region; } ?>">
                <label>Status</label>
                <textarea name="status" class="form-control" placeholder="Status..."><?php if(!empty($edit)){ echo $edit->status; } ?></textarea>
                <label>Receiving Date</label>
                <input type="text" name="receive_date" class="form-control" placeholder="Receiving Date" value="<?php if(!empty($edit)){ echo $edit->receive_date; } ?>">
                <label>Purchasing Date</label>
                <input type="text" name="purchase_date" class="form-control" placeholder="Purchasing Date" value="<?php if(!empty($edit)){ echo $edit->purchase_date; } ?>">
              </div>
            </div><br>
            <div class="row">
              <div class="col-lg-12 text-right">
                <a href="javascript:history.go(-1);" class="btn btn-default">Back</a>
                <?php if(empty($edit)): ?>
                  <button type="submit" class="btn btn-default">Next</button>
                <?php else: ?>
                  <button type="submit" class="btn btn-default">Update</button>
                <?php endif; ?>
              </div>
            </div>
          </form>
        </div>
      </div>  
    </div>
  </section>
</section>