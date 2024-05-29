<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title
        ">
            Edit District
        </h3>
        <!-- add back button -->
        <a href="<?= base_url('district/view') ?>" class="btn btn-success h-50 mt-4">Back</a>
        
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
<form action="<?= base_url('updateDistrict/' . $district->id) ?>" method="post" class="form">
    <div class="card-body" style="
    width: 70%;
    margin: 0 auto;
    ">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter District name" name="name"
                value="<?= $district->name ?>" />
            <span class="form-text text-muted">Please enter district name</span>
        </div>
        <div class="form-group">
            <label>Email address:</label>
            <input type="email" class="form-control form-control-solid" placeholder="Enter email" name="username"
                value="<?= $district->username ?>" />
            <span class="form-text text-muted">Please Enter your email address</span>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary mr-2">Update</button>
        <button type="reset" class="btn btn-secondary">Cancel</button>
    </div>
</form>

<!--end::Form-->