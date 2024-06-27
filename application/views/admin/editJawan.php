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
                        <form action="<?= base_url('updateJawan/' . $jawan->id) ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Select Block:</label>
                                        <select class="form-control form-control-solid" name="block_id">
                                            <option value="">Select Block</option>
                                            <?php foreach ($blocks as $block) { ?>
                                                <option value="<?= $block->id ?>" <?= $jawan->block_id == $block->id ? 'selected' : '' ?>><?= $block->name ?></option>
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
                                                name="name" value="<?= $jawan->name ?>" />
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
                                                name="father_name" value="<?= $jawan->father_name ?>" />
                                        </div>
                                        <span class="form-text text-muted">Please enter father's name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Mobile Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter mobile number"
                                            name="mobile_number" value="<?= $jawan->mobile_number ?>" />
                                        <span class="form-text text-muted">Please enter contact</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Alternative Mobile Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter mobile number"
                                            name="alternative_mobile_number"
                                            value="<?= $jawan->alternative_number ?>" />
                                        <span class="form-text text-muted">Please enter alternative contact no.</span>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Profile Photo:</label>
                                        <input type="file" class="form-control" name="photo" />
                                        <span class="form-text text-muted">Please upload photo</span>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Aadhar Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter aadhar number"
                                            name="aadhar_number" value="<?= $jawan->aadhar ?>" />
                                        <span class="form-text text-muted">Please enter Aadhar number.</span>
                                        <input type="file" class="form-control" name="aadhar_card" />
                                        <span class="form-text text-muted">Please upload Aadhar Card</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>PAN Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter PAN number"
                                            name="pan_number" value="<?= $jawan->pan ?>" />
                                        <span class="form-text text-muted">Please enter PAN number.</span>
                                        <input type="file" class="form-control" name="pan_card" />
                                        <span class="form-text text-muted">Please upload Pan Card</span>


                                    </div>

                                    <div class="form-group">
                                        <label>Skills:</label>
                                        <select class="form-control form-control-solid" name="skills" multiple>
                                            <option value="Carpenter" <?= $jawan->skills == 'Carpenter' ? 'selected' : '' ?>>Carpenter</option>
                                            <option value="Electrician" <?= $jawan->skills == 'Electrician' ? 'selected' : '' ?>>Electrician</option>
                                            <option value="Plumber" <?= $jawan->skills == 'Plumber' ? 'selected' : '' ?>>
                                                Plumber</option>
                                            <option value="Mason" <?= $jawan->skills == 'Mason' ? 'selected' : '' ?>>Mason
                                            </option>
                                            <option value="Painter" <?= $jawan->skills == 'Painter' ? 'selected' : '' ?>>
                                                Painter</option>
                                            <option value="Welder" <?= $jawan->skills == 'Welder' ? 'selected' : '' ?>>
                                                Welder</option>
                                            <option value="Fitter" <?= $jawan->skills == 'Fitter' ? 'selected' : '' ?>>
                                                Fitter</option>
                                            <option value="Turner" <?= $jawan->skills == 'Turner' ? 'selected' : '' ?>>
                                                Turner</option>
                                            <option value="Machinist" <?= $jawan->skills == 'Machinist' ? 'selected' : '' ?>>Machinist</option>
                                            <option value="Sheet Metal Worker" <?= $jawan->skills == 'Sheet Metal Worker' ? 'selected' : '' ?>>Sheet
                                                Metal Worker</option>
                                            <option value="Computer Operator and Programming Assistant"
                                                <?= $jawan->skills == 'Computer Operator and Programming Assistant' ? 'selected' : '' ?>>Computer Operator and Programming Assistant</option>
                                            <option value="Draftsman (Civil)" <?= $jawan->skills == 'Draftsman (Civil)' ? 'selected' : '' ?>>Draftsman
                                                (Civil)</option>
                                        </select>
                                        <span class="form-text text-muted">Please Select Training</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Birth Mark</label>
                                        <input type="text" class="form-control" placeholder="Enter Birth Mark"
                                            name="birth_mark" value="<?= $jawan->birth_mark ?>" />
                                        <span class="form-text text-muted">Please Enter Birth Mark</span>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Training:</label>
                                        <select class="form-control form-control-solid" name="training">
                                            <option value="">Select Training</option>
                                            <option value="none" <?= $jawan->training == 'none' ? 'selected' : '' ?>>none
                                            </option>
                                            <option value="15 days" <?= $jawan->training == '15 days' ? 'selected' : '' ?>>
                                                15 Days</option>
                                            <option value="22 days" <?= $jawan->training == '22 days' ? 'selected' : '' ?>>
                                                22 Days</option>
                                            <option value="special" <?= $jawan->training == 'special' ? 'selected' : '' ?>>
                                                Special Training</option>
                                        </select>
                                        <span class="form-text text-muted">Please Select Training</span>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Date of Birth:</label>
                                        <div class="input-group">
                                            <input type="Date" class="form-control" placeholder="Enter DOB" name="dob"
                                                id="kt_datepicker_1" value="<?= $jawan->dob ?>" />
                                        </div>
                                        <span class="form-text text-muted">Please enter DOB</span>
                                    </div>

                                </div>

                                <div class="card-heade" style="margin-top:7%">
                                    <h3 class="card-title">Vitals</h3>
                                </div>
                                <div class="form-group row">

                                    <div class="col-lg-4">
                                        <label>Height:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter bank name"
                                                name="height" value="<?= $jawan->height ?>" />
                                        </div>
                                        <span class="form-text text-muted">Please enter height</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Weight:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter account number"
                                                name="weight" value="<?= $jawan->weight ?>" />
                                        </div>
                                        <span class="form-text text-muted">Please enter weight</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Blood Group:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter blood group"
                                                name="blood_group" value="<?= $jawan->blood_group ?>" />
                                        </div>
                                        <span class="form-text text-muted">Please enter blood group</span>
                                    </div>
                                </div>
                                <div class="card-heade" style="margin-top:7%">
                                    <h3 class="card-title">Bank Details</h3>
                                </div>
                                <div class="form-group row">

                                    <div class="col-lg-4">
                                        <label>Bank Name:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter bank name"
                                                name="bank_name" value="<?= $jawan->bank_name ?>" />
                                        </div>
                                        <span class="form-text text-muted">Please enter bank name</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Account Number:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter account number"
                                                name="account_number" value="<?= $jawan->account_number ?>" />
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
                                                name="ifsc_code" value="<?= $jawan->ifsc_code ?>" />
                                        </div>
                                        <span class="form-text text-muted">Please enter IFSC code</span>
                                    </div>
                                </div>
                                <div class="card-heade" style="margin-top:7%">
                                    <h3 class="card-title">Certificates</h3>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Learning Certificate:</label>
                                        <input type="file" class="form-control" name="learning_certificate" />
                                        <span class="form-text text-muted">Please upload Certificate</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>8th Certificate:</label>
                                        <input type="file" class="form-control" name="eight_certificate" />
                                        <span class="form-text text-muted">Please upload Certificate</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Medical:</label>
                                        <input type="file" class="form-control" name="medical" />
                                        <span class="form-text text-muted">Please upload Certificate</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Police Verification:</label>
                                        <input type="file" class="form-control" name="police_verification" />
                                        <span class="form-text text-muted">Please upload Certificate</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Caste Certificate:</label>
                                        <input type="file" class="form-control" name="caste_certificate" />
                                        <span class="form-text text-muted">Please upload Certificate</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Availability:</label>
                                        <div class="checkbox-list">
                                            <label class="checkbox">
                                                <!-- <input type="hidden" name="availability" value="1"> -->
                                                <input type="checkbox" name="availability" value="0"
                                                    <?= $jawan->availability == 0 ? 'checked' : '' ?> />
                                                <span></span>
                                                Available
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Department:</label>
                                        <select class="form-control form-control-solid" name="department_id">
                                            <option value="0" selected disabled>Select Department</option>
                                            <?php foreach ($departments as $department) { ?>
                                                <option value="<?= $department->id ?>"
                                                    <?= $jawan->department_id == $department->id ? 'selected' : '' ?>>
                                                    <?= $department->name ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                        <span class="form-text text-muted">Please Select Department</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>From Date:</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="Enter From Date"
                                                name="from_date" id="kt_datepicker_1" value="<?= $jawan->from ?>" />
                                        </div>
                                        <span class="form-text text-muted">Please enter From Date</span>
                                        <label>To Date:</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="Enter To Date"
                                                name="to_date" id="kt_datepicker_2" value="<?= $jawan->to ?>" />
                                        </div>
                                        <span class="form-text text-muted">Please enter To Date</span>
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
                                            Update
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

<script>
    function toggleAddressFields() {
        var isChecked = document.getElementById('sameAddress').checked;
        // Select all permanent address input fields
        document.getElementById('permanent_address1').disabled = isChecked;
        document.getElementById('permanent_village').disabled = isChecked;
        document.getElementById('permanent_city').disabled = isChecked;
        document.getElementById('permanent_state').disabled = isChecked;
        document.getElementById('permanent_postal_code').disabled = isChecked;
        document.getElementById('permanent_country').disabled = isChecked;
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Function to enable or disable inputs
        function toggleInputs(isDisabled) {
            document.querySelector('[name="department_id"]').disabled = isDisabled;
            document.querySelector('[name="from_date"]').disabled = isDisabled;
            document.querySelector('[name="to_date"]').disabled = isDisabled;
        }

        // Get the checkbox and add event listener
        const availabilityCheckbox = document.querySelector('[name="availability"]');
        availabilityCheckbox.addEventListener('change', function () {
            toggleInputs(this.checked);
        });

        // Initialize the state on page load based on checkbox state
        toggleInputs(availabilityCheckbox.checked);
    });
</script>