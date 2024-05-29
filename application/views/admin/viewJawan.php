<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Users</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total"><?= count($jawans) ?>
                        Total</span>
                    <form class="ml-5">
                        <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                            <input type="text" class="form-control" id="kt_subheader_search_form"
                                placeholder="Search..." />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:<?= base_url() ?>assets/media/svg/icons/General/Search.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
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
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Search Form-->
                <!--begin::Group Actions-->
                <div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
                    <div class="text-dark-50 font-weight-bold">
                        <span id="kt_subheader_group_selected_rows">23</span>Selected:
                    </div>
                    <div class="d-flex ml-6">
                        <div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
                            <button type="button"
                                class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle"
                                data-toggle="dropdown">Update Status</button>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
                                <ul class="navi navi-hover pt-3 pb-4">
                                    <li
                                        class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">
                                        Change status to:</li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="1">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-light-success label-inline font-weight-bold">Approved</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="2">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-light-danger label-inline font-weight-bold">Rejected</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="3">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-light-warning label-inline font-weight-bold">Pending</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="4">
                                            <span class="navi-text">
                                                <span class="label label-light-info label-inline font-weight-bold">On
                                                    Hold</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-light-success font-weight-bolder btn-sm mr-2"
                            id="kt_subheader_group_actions_fetch" data-toggle="modal"
                            data-target="#kt_datatable_records_fetch_modal">Fetch Selected</button>
                        <button class="btn btn-light-danger font-weight-bolder btn-sm mr-2"
                            id="kt_subheader_group_actions_delete_all">Delete All</button>
                    </div>
                </div>
                <!--end::Group Actions-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="#" class=""></a>
                <!--end::Button-->
                <!--begin::Button-->
                <a href="<?= base_url('jawan/create') ?>"
                    class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Add Jawan</a>
                <!--end::Button-->

            </div>
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
                        <h3 class="card-label">Jawan Management
                            <span class="d-block text-muted pt-2 font-size-sm">User management made easy</span>
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
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Main-->

<!--end::Demo Panel-->
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url() ?>assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?= base_url() ?>assets/js/scripts.bundle.js"></script>
<script src="https://keenthemes.com/metronic/<?= base_url() ?>assets/js/engage_code.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<!-- <script src="<?= base_url() ?>assets/js/pages/custom/user/list-datatable.js"></script> -->
<script>
    "use strict";
    // Class definition

    var KTAppsUsersListDatatable = function () {
        // Private functions
        var _demo = function () {
            var baseUrl = "<?php echo base_url(); ?>";
            var datatable = $('#kt_datatable').KTDatatable({
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: baseUrl + 'jawans',
                            method: 'GET',
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
                        field: 'village',
                        title: 'Village',
                    },
                    {
                        field: 'vitals',
                        title: 'Vital',
                    },
                    {
                        field: "birth_mark",
                        title: "Birth Mark",
                    },
                    {
                        field: "Actions",
                        title: "Actions",
                        sortable: false,
                        autoHide: false,
                        template: function (row) {
                            return '\
                            <a href="' + baseUrl + 'editJawan/' + row.id + '" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">\
                                <span class="svg-icon svg-icon-md">\
                                    <!--begin::Svg Icon | path:<?= base_url() ?>assets/media/svg/icons/Communication/Write.svg-->\
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                            <rect x="0" y="0" width="24" height="24"/>\
                                            <path d="M14.7071068,3.29289322 C15.0976311,3.68341751 15.0976311,4.31658249 14.7071068,4.70710678 L5.70710678,13.7071068 C5.31658249,14.0976311 4.68341751,14.0976311 4.29289322,13.7071068 C3.90236893,13.3165825 3.90236893,12.6834175 4.29289322,12.2928932 L13.2928932,3.29289322 C13.6834175,2.90236893 14.3165825,2.90236893 14.7071068,3.29289322 Z" fill="#000000" fill-rule="nonzero"/>\
                                            <path d="M15.7071068,4.29289322 C16.0976311,4.68341751 16.0976311,5.31658249 15.7071068,5.70710678 L6.70710678,14.7071068 C6.31658249,15.0976311 5.68341751,15.0976311 5.29289322,14.7071068 C4.90236893,14.3165825 4.90236893,13.6834175 5.29289322,13.2928932 L14.2928932,4.29289322 C14.6834175,3.90236893 15.3165825,3.90236893 15.7071068,4.29289322 Z" fill="#000000" fill-rule="nonzero"/>\
                                        </g>\
                                    </svg>\
                                    <!--end::Svg Icon-->\
                                </span>\
                            </a>\
                            <a href="' + baseUrl + 'deleteJawan/' + row.id + '" class="btn btn-sm btn-clean btn-icon" title="Delete">\
                                <span class="svg-icon svg-icon-md">\
                                    <!--begin::Svg Icon | path:<?= base_url() ?>assets/media/svg/icons/General/Trash.svg-->\
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                            <rect x="0" y="0" width="24" height="24"/>\
                                            <path d="M3,6 L5,6 L5,19 C5,20.1045695 5.8954305,21 7,21 L17,21 C18.1045695,21 19,20.1045695 19,19 L19,6 L21,6 L21,4 L3,4 L3,6 Z" fill="#000000" fill-rule="nonzero"/>\
                                            <path d="M18,3 L15.5,3 L14.5,3 L10.5,3 L9.5,3 L6,3 L6,6 L18,6 L18,3 Z" fill="#000000" opacity="0.3"/>\
                                        </g>\
                                    </svg>\
                                    <!--end::Svg Icon-->\
                                </span>\
                            </a>\
                        ';
                        },
                    },
                    {
                        field: "aadhar",
                        title: "Aadhar",
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

            $('#kt_datatable_search_status').on('change', function () {
                datatable.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_search_type').on('change', function () {
                datatable.search($(this).val().toLowerCase(), 'Type');
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