<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Report</h5>

                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total"><?= count($jawans) ?> Total
                        Jawans</span>
                    <form class="ml-5 d-flex align-items-center">
                        <!-- <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                            <input type="text" class="form-control" id="kt_subheader_search_form"
                                placeholder="Search..." />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                </span>
                            </div>
                        </div> -->
                        <div class="input-group input-group-sm input-group-solid ml-2" style="max-width: 175px">
                            <select class="form-control" id="kt_subheader_search_block">
                                <option value="" disabled selected>Select Block</option>
                                <option value="0">All</option>
                                <?php foreach ($blocks as $block): ?>
                                    <option value="<?= $block->id ?>"><?= $block->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group input-group-sm input-group-solid ml-2" style="max-width: 175px">
                            <select class="form-control" id="kt_subheader_search_demand_number">
                                <option value="" disabled selected>Select Demand Number</option>
                                <option value="0">All</option>
                                <?php foreach ($requests as $demand_number): ?>
                                    <option value="<?= $demand_number->demand_number ?>">
                                        <?= $demand_number->demand_number ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </form>
                </div>

                <!--end::Search Form-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->

            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Report
                            <!-- <span class="d-block text-muted pt-2 font-size-sm">User management made easy</span> -->
                        </h3>
                    </div>

                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
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
                    </div>
                    <!--end: Datatable-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
<script>
    "use strict";
    // Class definition

    var KTAppsUsersListDatatable = function () {
        // Private functions
        var _demo = function () {
            var baseUrl = "<?php echo base_url(); ?>";
            var districtId = "<?php echo $this->session->userdata('user_id'); ?>";
            var datatable = $('#kt_datatable').KTDatatable({
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: baseUrl + 'district/getJawansByDistrictIdForReport/' + districtId,
                            method: 'GET',
                            params: {
                                blockId: function () {
                                    return $('#kt_subheader_search_block').val();
                                },
                                demand_number: function () {
                                    return $('#kt_subheader_search_demand_number').val();
                                },
                            },
                        },
                    },
                    pageSize: 5, // display 5 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },

                // layout definition
                layout: {
                    scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                    footer: false, // display/hide footer
                },

                // column sorting
                sortable: true,

                pagination: true,

                search: {
                    input: $('#kt_subheader_search_form'),
                    delay: 400,
                    key: 'generalSearch'
                },

                // columns definition
                columns: [
                    {
                        field: 'id',
                        title: '#',
                        sortable: 'asc',
                        width: 60,
                        type: 'number',
                        selector: false,
                        textAlign: 'left',
                    },
                    {
                        field: 'block_name',
                        title: 'Block'
                    },
                    {
                        field: 'availability',
                        title: 'Availability',
                        width: 100,
                        template: function (row) {
                            var status = {
                                0: {
                                    'title': 'Available',
                                    'class': ' label-light-success'
                                },
                                1: {
                                    'title': 'Unavailable',
                                    'class': ' label-light-danger'
                                },
                                2: {
                                    'title': 'Pending',
                                    'class': ' label-light-primary'
                                },
                                3: {
                                    'title': 'On Hold',
                                    'class': ' label-light-info'
                                },
                            };
                            return '<span class="label font-weight-bold label-lg' + status[row.availability].class + ' label-inline">' + status[row.availability].title + '</span>';
                        },
                    },
                    {
                        field: 'name',
                        title: 'Name',
                    },
                    {
                        field: 'father_name',
                        title: 'Father Name',
                    },
                    {
                        field: 'residential_address',
                        title: 'Residence Address',
                    },
                    {
                        field: 'permanent_address',
                        title: 'Permanent Address',
                    },
                    {
                        field: 'height',
                        title: 'Height',
                    },
                    {
                        field: 'weight',
                        title: 'Weight',
                    },
                    {
                        field: "birth_mark",
                        title: "Birth Mark",
                    },

                    {
                        field: "aadhar",
                        title: "Aadhar",
                    },
                    {
                        field: "blood_group",
                        title: "Blood Group",
                    },
                    {
                        field: "pan",
                        title: "PAN",
                    },
                    {
                        field: "mobile_number",
                        title: "Mobile Number",
                    },
                    {
                        field: "alternative_number",
                        title: "Alternate Number",
                    },
                    {
                        field: "training",
                        title: "Training",
                    },
                    {
                        field: "skills",
                        title: "Skills",
                    },
                    {
                        field: "bank_name",
                        title: "Bank Name",
                    },
                    {
                        field: "account_number",
                        title: "Bank Account Number",
                    },
                    {
                        field: "ifsc_code",
                        title: "IFSC Code",
                    },
                    {
                        field: "created_at",
                        title: "Created At",
                    },
                ],
            });

            $('#kt_subheader_search_block').on('change', function () {
                datatable.setDataSourceParam('blockId', $(this).val());
                datatable.load();
            });

            $('#kt_subheader_search_demand_number').on('change', function () {
                datatable.setDataSourceParam('demand_number', $(this).val());
                console.log($(this).val());
                datatable.load();
            });

            $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
        };

        return {
            // public functions
            init: function () {
                _demo();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTAppsUsersListDatatable.init();
    });

</script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>