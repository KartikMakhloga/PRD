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
                        <form action="<?= base_url('registerJawan') ?>" method="post" enctype="multipart/form-data">
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
                                        <label>Mobile Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter mobile number"
                                            name="mobile_number" />
                                        <span class="form-text text-muted">Please enter contact</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Alternative Mobile Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter mobile number"
                                            name="alternative_mobile_number" />
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
                                            name="aadhar_number" />
                                        <span class="form-text text-muted">Please enter Aadhar number.</span>
                                        <input type="file" class="form-control" name="aadhar_card" />
                                        <span class="form-text text-muted">Please upload Aadhar Card</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>PAN Number:</label>
                                        <input type="text" class="form-control" placeholder="Enter PAN number"
                                            name="pan_number" />
                                        <span class="form-text text-muted">Please enter PAN number.</span>
                                        <input type="file" class="form-control" name="pan_card" />
                                        <span class="form-text text-muted">Please upload Pan Card</span>


                                    </div>

                                    <div class="col-lg-4">
                                        <label>Skills:</label>
                                        <select class="form-control form-control-solid" name="skills" multiple>
                                            <!-- <option value="">Select Skills</option> -->
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
                                        <label>Birth Mark</label>
                                        <input type="text" class="form-control" placeholder="Enter Birth Mark"
                                            name="birth_mark" />
                                        <span class="form-text text-muted">Please Enter Birth Mark</span>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Training:</label>
                                        <select class="form-control form-control-solid" name="training">
                                            <option value="">Select Training</option>
                                            <option value="none">none</option>
                                            <option value="15 days">15 Days</option>
                                            <option value="22 days">22 Days</option>
                                            <option value="special">Special Training</option>
                                        </select>
                                        <span class="form-text text-muted">Please Select Training</span>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Date of Birth:</label>
                                        <div class="input-group">
                                            <input type="Date" class="form-control" placeholder="Enter DOB" name="dob"
                                                id="kt_datepicker_1" />
                                        </div>
                                        <span class="form-text text-muted">Please enter DOB</span>
                                    </div>

                                </div>

                                <div class="card-heade">
                                    <h3 class="card-title" style="margin-top:7%">Residential Address</h3>
                                </div>
                                <div class="form-group row">

                                    <div class="col-lg-4">
                                        <label>Street Address:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter street address"
                                                name="address1" />
                                        </div>
                                        <span class="form-text text-muted">Please enter street address</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Village:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter village"
                                                name="village" />
                                        </div>
                                        <span class="form-text text-muted">Please village</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>City:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-bookmark-o"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter city"
                                                name="city" />
                                        </div>
                                        <span class="form-text text-muted">Please enter city</span>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-lg-4">
                                        <label>State:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter state"
                                                name="state" />
                                        </div>
                                        <span class="form-text text-muted">Please enter state</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Postal Code:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter zip code"
                                                name="postal_code" />
                                        </div>
                                        <span class="form-text text-muted">Please zip code</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Country:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-bookmark-o"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter country"
                                                name="country" />
                                        </div>
                                        <span class="form-text text-muted">Please enter country</span>
                                    </div>
                                </div>
                                <div class="card-heade" style="margin-top:7%">
                                    <h3 class="card-title">Permanent Address</h3>

                                    <div class="checkbox-list mb-6">
                                        <label class="checkbox">
                                            <input type="checkbox" id="sameAddress" name="same_as_residential_address"
                                                value="1" onchange="toggleAddressFields()" />
                                            <span></span>
                                            Same as Residential Address
                                        </label>
                                    </div>

                                </div>
                                <div class="form-group row">

                                    <div class="col-lg-4">
                                        <label>Street Address:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="permanent_address1"
                                                placeholder="Enter street address" name="permanent_address1" />
                                        </div>
                                        <span class="form-text text-muted">Please enter street address</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Village:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="permanent_village"
                                                placeholder="Enter village" name="permanent_village" />
                                        </div>
                                        <span class="form-text text-muted">Please village</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>City:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-bookmark-o"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="permanent_city"
                                                placeholder="Enter city" name="permanent_city" />
                                        </div>
                                        <span class="form-text text-muted">Please enter city</span>
                                    </div>

                                </div>
                                <div class="form-group row">

                                    <div class="col-lg-4">
                                        <label>State:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="permanent_state"
                                                placeholder="Enter state" name="permanent_state" />
                                        </div>
                                        <span class="form-text text-muted">Please enter state</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Postal Code:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="permanent_postal_code"
                                                placeholder="Enter zip code" name="permanent_postal_code" />
                                        </div>
                                        <span class="form-text text-muted">Please zip code</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Country:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-bookmark-o"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="permanent_country"
                                                placeholder="Enter country" name="permanent_country" />
                                        </div>
                                        <span class="form-text text-muted">Please enter country</span>
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
                                                name="height" />
                                        </div>
                                        <span class="form-text text-muted">Please enter height</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Weight:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter account number"
                                                name="weight" />
                                        </div>
                                        <span class="form-text text-muted">Please enter weight</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Blood Group:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter blood group"
                                                name="blood_group" />
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
                                                <input type="checkbox" name="availability" value="0" />
                                                <span></span>
                                                Available
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Department:</label>
                                        <select class="form-control form-control-solid" name="department">
                                            <option value="">Select Department</option>
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
                                                Operator and Programming Assistant</option>
                                            <option value="Draftsman (Civil)">Draftsman (Civil)</option>
                                        </select>
                                        <span class="form-text text-muted">Please Select Department</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>From Date:</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="Enter From Date"
                                                name="from_date" id="kt_datepicker_1" />
                                        </div>
                                        <span class="form-text text-muted">Please enter From Date</span>
                                        <label>To Date:</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="Enter To Date"
                                                name="to_date" id="kt_datepicker_2" />
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
            document.querySelector('[name="department"]').disabled = isDisabled;
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