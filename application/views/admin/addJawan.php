<!-- show flash messages -->
<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('success') ?>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
    </div>
<?php } ?>

<?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('error') ?>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
    </div>
<?php } ?>
<!-- show flash messages end-->

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        PRD Jawans
                    </h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">All Jawans</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a class="text-muted">PRD Jawan Registration</a>
                        </li>

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="view" class="btn btn-light-primary font-weight-bolder btn-sm">View Jawans</a>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">PRD Jawan Registration</h3>
                        </div>
                        <!--begin::Form-->
                        <form action="<?= base_url('registerJawan') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Select Block:</label>
                                        <select class="form-control form-control-solid" name="block_id">
                                            <option value="">Select Block</option>
                                            <?php foreach ($blocks as $block) { ?>
                                                <option value="<?= $block->id ?>"><?= $block->name ?></option>
                                            <?php } ?>
                                        </select>
                                        <span class="form-text text-muted">Please select block</span>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Jawan Name:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter full name"
                                                name="name" />
                                        </div>
                                        <span class="form-text text-muted">Please enter your name</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Father's Name:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter father's name"
                                                name="father_name" />
                                        </div>
                                        <span class="form-text text-muted">Please enter father's name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Contact Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter contact number"
                                            name="mobile_number" />
                                        <span class="form-text text-muted">Please enter contact</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Alternative Contact Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter contact number"
                                            name="alternative_mobile_number" />
                                        <span class="form-text text-muted">Please enter alternative contact no.</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Aadhar Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter aadhar number"
                                            name="aadhar_number" />
                                        <span class="form-text text-muted">Please enter Aadhar number.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>PAN Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter PAN number"
                                            name="pan_number" />
                                        <span class="form-text text-muted">Please enter PAN number.</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Training:</label>
                                        <select class="form-control form-control-solid" name="training">
                                            <option value="">Select Training</option>
                                            <option value="15 days">15 Days</option>
                                            <option value="22 days">22 Days</option>
                                            <option value="special">Special Training</option>
                                        </select>
                                        <span class="form-text text-muted">Please Select Training</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Skills:</label>
                                        <select class="form-control form-control-solid" name="skills">
                                            <option value="">Select Skills</option>
                                            <option value="Carpenter">Carpenter</option>
                                            <option value="Electrician">Electrician</option>
                                            <option value="Plumber">Plumber</option>
                                            <option value="Mason">Mason</option>
                                            <option value="Painter">Painter</option>
                                            <option value="Welder">Welder</option>
                                            <option value="Fitter">Fitter</option>
                                            <option value="Turner">Turner</option>
                                            <option value="Machinist">Machinist</option>
                                            <option value="Sheet Metal Worker">Sheet Metal Worker</option>
                                            <option value="Computer Operator and Programming Assistant">Computer
                                                Operator and Programming Assistant
                                            </option>
                                            <option value="Draftsman (Civil)">Draftsman (Civil)</option>
                                        </select>
                                        <span class="form-text text-muted">Please Select Training</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Village</label>
                                        <input type="text" class="form-control" placeholder="Enter Village"
                                            name="village" />
                                        <span class="form-text text-muted">Please Enter Village</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Vital</label>
                                        <input type="text" class="form-control " placeholder="Enter Vital"
                                            name="vital" />
                                        <span class="form-text text-muted">Please Enter Vital</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Birth Mark</label>
                                        <input type="text" class="form-control" placeholder="Enter Birth Mark"
                                            name="birth_mark" />
                                        <span class="form-text text-muted">Please Enter Birth Mark</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Residential Address:</label>
                                        <div class="input-group">
                                            <textarea class="form-control" placeholder="Enter your residential address"
                                                name="residential_address"></textarea>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-map-marker"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">Please enter residential address</span>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Permanent Address:</label>
                                        <div class="input-group">
                                            <textarea class="form-control" placeholder="Enter your permanent address"
                                                name="permanent_address"></textarea>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-map-marker"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">Please enter permanent address</span>
                                    </div>
                                </div>

                                <div class="card-heade">
                                    <h3 class="card-title">Bank Details</h3>
                                </div>
                                <div class="form-group row">

                                    <div class="col-lg-4">
                                        <label>Bank Name:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter bank name"
                                                name="bank_name" />
                                        </div>
                                        <span class="form-text text-muted">Please enter bank name</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Account Number:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter account number"
                                                name="account_number" />
                                        </div>
                                        <span class="form-text text-muted">Please enter account number</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>IFSC Code:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-bookmark-o"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter IFSC code"
                                                name="ifsc_code" />
                                        </div>
                                        <span class="form-text text-muted">Please enter IFSC code</span>
                                    </div>
                                </div>
                                <!-- begin: Example Code-->
                                <div class="example-code mt-10">
                                    <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab"
                                                href="#example_code_html_3">HTML</a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end: Example Code-->
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary mr-2">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->

                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>