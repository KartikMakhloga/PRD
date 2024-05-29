<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title
        ">
            Edit Jawan
        </h3>
    </div>
</div>

<!-- show flash messages -->
<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>

<?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
<!-- show flash messages end-->

<!--begin::Form-->
<form action="<?= base_url('updateJawan/' . $jawan->id) ?>" method="post" class="form">
    <div class="card-body" style="
    width: 70%;
    margin: 0 auto;
    ">
        <div class="form-group">
            <label>Select Block:</label>
            <select class="form-control form-control-solid" name="block_id">
                <option value="">Select Block</option>
                <?php foreach ($blocks as $block) { ?>
                    <option value="<?= $block->id ?>" <?= $jawan->block_id == $block->id ? 'selected' : '' ?>>
                        <?= $block->name ?>
                    </option>
                <?php } ?>
            </select>
            <span class="form-text text-muted">Please Select Block</span>
        </div>

        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter name" name="name"
                value="<?= $jawan->name ?>" />
            <span class="form-text text-muted">Please enter Full Name</span>
        </div>
        <div class="form-group">
            <label>Father Name:</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter father name"
                name="father_name" value="<?= $jawan->father_name ?>" />
            <span class="form-text text-muted">Please Enter Full Name</span>
        </div>

        <div class="form-group">
            <label>Residential Address</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Residential Address"
                name="residential_address" value="<?= $jawan->residential_address ?>" />
            <span class="form-text text-muted">Please Enter Residential Address</span>
        </div>
        <div class="form-group">
            <label>Permanent Address</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Permanent Address"
                name="permanent_address" value="<?= $jawan->permanent_address ?>" />
            <span class="form-text text-muted">Please Enter Permanent Address</span>
        </div>
        <div class="form-group">
            <label>Village</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Village" name="village"
                value="<?= $jawan->village ?>" />
            <span class="form-text text-muted">Please Enter Village</span>
        </div>
        <div class="form-group">
            <label>Vital</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Vital" name="vital"
                value="<?= $jawan->vitals ?>" />
            <span class="form-text text-muted">Please Enter Vital</span>
        </div>
        <div class="form-group">
            <label>Birth Mark</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Birth Mark" name="birth_mark"
                value="<?= $jawan->birth_mark ?>" />
            <span class="form-text text-muted">Please Enter Birth Mark</span>
        </div>
        <div class="form-group">
            <label>Aadhar Number</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Aadhar Number"
                name="aadhar_number" value="<?= $jawan->aadhar ?>" />
            <span class="form-text text-muted">Please Enter Aadhar Number</span>
        </div>
        <div class="form-group">
            <label>PAN Number</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter PAN Number" name="pan_number"
                value="<?= $jawan->pan ?>" />
            <span class="form-text text-muted">Please Enter PAN Number</span>
        </div>
        <div class="form-group">
            <label>Bank Details</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Bank Details"
                name="bank_details" value="<?= $jawan->bank_details ?>" />
            <span class="form-text text-muted">Please Enter Bank Details</span>
        </div>
        <div class="form-group">
            <label>Mobile Number</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Mobile Number"
                name="mobile_number" value="<?= $jawan->mobile_number ?>" />
            <span class="form-text text-muted">Please Enter Mobile Number</span>
        </div>
        <div class="form-group">
            <label>Alternative Mobile Number</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Alternative Mobile Number"
                name="alternative_mobile_number" value="<?= $jawan->alternative_number ?>" />
            <span class="form-text text-muted">Please Enter Alternative Mobile Number</span>
        </div>
        <div class="form-group">
            <label>Training:</label>
            <select class="form-control form-control-solid" name="training">
                <!-- get selected data auto selected -->
                <option value="15 days" <?= $jawan->training == '15 days' ? 'selected' : '' ?>>15 days</option>
                <option value="30 days" <?= $jawan->training == '30 days' ? 'selected' : '' ?>>30 days</option>
                <option value="special training" <?= $jawan->training == 'special training' ? 'selected' : '' ?>>special
                    training</option>

            </select>
            <span class="form-text text-muted">Please Select Training</span>
        </div>
        <div class="form-group">
            <label>Skills:</label>
            <select class="form-control form-control-solid" name="skills">
                <option value="Carpenter" <?= $jawan->skills == 'Carpenter' ? 'selected' : '' ?>>Carpenter</option>
                <option value="Electrician" <?= $jawan->skills == 'Electrician' ? 'selected' : '' ?>>Electrician</option>
                <option value="Plumber" <?= $jawan->skills == 'Plumber' ? 'selected' : '' ?>>Plumber</option>
                <option value="Mason" <?= $jawan->skills == 'Mason' ? 'selected' : '' ?>>Mason</option>
                <option value="Painter" <?= $jawan->skills == 'Painter' ? 'selected' : '' ?>>Painter</option>
                <option value="Welder" <?= $jawan->skills == 'Welder' ? 'selected' : '' ?>>Welder</option>
                <option value="Fitter" <?= $jawan->skills == 'Fitter' ? 'selected' : '' ?>>Fitter</option>
                <option value="Turner" <?= $jawan->skills == 'Turner' ? 'selected' : '' ?>>Turner</option>
                <option value="Machinist" <?= $jawan->skills == 'Machinist' ? 'selected' : '' ?>>Machinist</option>
                <option value="Sheet Metal Worker" <?= $jawan->skills == 'Sheet Metal Worker' ? 'selected' : '' ?>>Sheet
                    Metal Worker</option>
                <option value="Computer Operator and Programming Assistant" <?= $jawan->skills == 'Computer Operator and Programming Assistant' ? 'selected' : '' ?>>Computer Operator and Programming Assistant</option>
                <option value="Draftsman (Civil)" <?= $jawan->skills == 'Draftsman (Civil)' ? 'selected' : '' ?>>Draftsman
                    (Civil)</option>
            </select>
            <span class="form-text text-muted">Please Select Training</span>
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary mr-2">Update</button>
        <button type="reset" class="btn btn-secondary">Cancel</button>
    </div>
</form>

<!--end::Form-->