<!-- show flash messages -->
<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('success') ?>
        <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button> -->
    </div>
<?php } ?>

<?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('error') ?>
        <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button> -->
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
                         Blocks
                    </h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">All Blocks</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a class="text-muted">Block Registration</a>
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
                <a href="view" class="btn btn-light-primary font-weight-bolder btn-sm">View Blocks</a>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Add Block</h3>

                        </div>
                        <!--begin::Form-->
                        <form action="<?= base_url('registerBlock') ?>" method="post">
                            <div class="card-body">
                                <!-- <div class="form-group mb-8">
                                                        <div class="alert alert-custom alert-default" role="alert">
                                                            <div class="alert-icon">
                                                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                                                    
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                                                            <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                                                        </g>
                                                                    </svg>
                                                                    
                                                                </span>
                                                            </div>
                                                            <div class="alert-text">Please add Block.</div>
                                                        </div>
                                                    </div> -->
                                <div class="form-group">
                                    <label>Select District:</label>
                                    <select class="form-control form-control-solid" name="district_id">
                                        <option value="">Select District</option>
                                        <?php foreach ($districts as $district) { ?>
                                            <option value="<?= $district->id ?>"><?= $district->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="form-text text-muted">Please select district</span>
                                </div>
                                <div class="form-group">
                                    <label>Block Name
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter block name.."
                                        name="name" />
                                    <span class="form-text text-muted">Please enter block name.</span>
                                </div>
                                <div class="form-group">
                                    <label>Email address
                                        <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="Enter your email address"
                                        name="username" />
                                    <span class="form-text text-muted">We'll never share your email with anyone
                                        else.</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password
                                        <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password" name="password" />
                                    <span class="form-text text-muted">Please enter your password.</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password
                                        <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password" name="confirm_password" />
                                    <span class="form-text text-muted">Please enter your password again.</span>
                                </div>


                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
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
</div>
