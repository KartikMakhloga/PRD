<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Jawans</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total"><?= count($jawans) ?>
                        Total Jawans</span>
                    <span class="font-weight-bold ml-5" id="kt_subheader_total"
                        style="color:springgreen;"><?= count($availableJawanCount) ?>
                        Available Jawans</span>
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
                    <div class="d-flex align-items-center ml-2">
                        <select class="form-control form-control-sm" id="kt_datatable_search_availability">
                            <option value="" selected disabled>Select Availability</option>
                            <option value="">All</option>
                            <option value="0">Available</option>
                            <option value="1">Non-Available</option>
                        </select>

                        <select class="form-control form-control-sm ml-2" id="kt_datatable_search_training">
                            <option value="" selected disabled>Select Training</option>
                            <option value="">All</option>
                            <option value="trained">Trained</option>
                            <option value="untrained">Untrained</option>
                        </select>
                        <select class="form-control form-control-sm ml-2" id="kt_datatable_search_department">
                            <option value="">All Departments</option>
                            <?php foreach ($departments as $department) { ?>
                                <option value="<?= $department->id ?>"><?= $department->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
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
                <!-- <a href="<?= base_url('jawan/create') ?>"
                    class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Add Jawan</a> -->
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
                            <!-- <span class="d-block text-muted pt-2 font-size-sm">User management made easy</span> -->
                        </h3>
                    </div>

                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <!-- Flash Messages Container -->
                        <div id="flash-messages"></div>

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


<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>

<script>
    "use strict";
    // Class definition

    var KTAppsUsersListDatatable = function () {
        // Private functions
        var _demo = function () {
            var baseUrl = "<?php echo base_url(); ?>";
            var blockId = "<?php echo $this->session->userdata('user_id'); ?>";
            var datatable = $('#kt_datatable').KTDatatable({
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: baseUrl + 'block/getJawansByBlocks/' + blockId,
                            method: 'GET',
                        },
                    },
                    pageSize: 10, // display 10 records per page
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
                        width: 50,
                        type: 'number',
                        selector: false,
                        textAlign: 'left',
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
                        width: 100,
                        field: 'height',
                        title: 'Height',
                    },
                    {
                        field: 'weight',
                        title: 'Weight',
                    },
                    {
                        field: "Actions",
                        title: "Actions",
                        sortable: false,
                        autoHide: false,
                        textAlign: 'left',
                        template: function (row) {
                            var select = '<select class="form-select form-select-sm request_id" style="width:100px; margin-bottom:5px"  name="request_id">';
                            select += '<option value="" disabled selected>Demand</option>';
                            <?php foreach ($requests as $request) { ?>
                                select += '<option value="<?= $request->id ?>"><?= $request->demand_number ?></option>';
                            <?php } ?>
                            select += '</select>';
                            var allocateButton = '<button type="button" class="btn btn-primary btn-sm" onclick="allocateJawanToDepartment(this, ' + row.id + ')" style="width:100px">Allocate</button>';

                            var deallocateButton = '<button type="button" class="btn btn-danger btn-sm mt-1" onclick="deallocateJawanFromDepartment(' + row.id + ')" style="width:100px">Deallocate</button>';
                            return select + allocateButton + deallocateButton;
                        },
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
                        field: 'blood_group',
                        title: 'Blood Group',
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


            // allocate Jawan To Department
            window.allocateJawanToDepartment = function (button, jawanId) {
                var requestId = $(button).closest('tr').find('.request_id').val();
                console.log(requestId);
                $.ajax({
                    url: baseUrl + 'block/allocateJawanToDepartment',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        jawan_id: jawanId,
                        request_id: requestId
                    },
                    success: function (response) {
                        if (response.status === 'success') {
                            showFlashMessage(response.message); // Showing success message
                            datatable.reload();
                        } else {
                            showFlashMessage(response.message, 'warning'); // Showing error message
                        }
                    },
                    error: function (error) {
                        console.log(error);
                        showFlashMessage('Failed to process your request', 'danger');
                    }
                });
            }



            // deallocate Jawan From Department
            window.deallocateJawanFromDepartment = function (jawanId) {
                if (confirm('Are you sure you want to deallocate this Jawan?')) {
                    $.ajax({
                        url: baseUrl + 'block/deallocateJawanFromDepartment',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            jawan_id: jawanId,
                        },
                        success: function (response) {
                            if (response.status === 'success') {
                                showFlashMessage(response.message, 'success');
                            } else {
                                showFlashMessage(response.message, 'warning');
                            }
                            datatable.reload();
                        },
                        error: function (error) {
                            console.log(error);
                            showFlashMessage('Failed to process your request', 'danger');
                        }
                    });
                }
            }


            // Function to show and automatically dismiss flash messages
            function showFlashMessage(message, type = 'success') {
                var messageHtml = '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
                    message +
                    '</div>';
                $('#flash-messages').html(messageHtml);
                setTimeout(function () {
                    $('.alert').alert('close');
                }, 2000);
            }


            // Handle search event
            $('#kt_subheader_search_form').on('keyup', function () {
                datatable.setDataSourceParam('generalSearch', $(this).val());
                datatable.load();
            });

            // Handle availability filter event
            $('#kt_datatable_search_availability').on('change', function () {
                datatable.setDataSourceParam('availability', $(this).val());
                datatable.load();
            });

            // Handle training filter event
            $('#kt_datatable_search_training').on('change', function () {
                datatable.setDataSourceParam('training', $(this).val());
                datatable.load();
            });

            // Handle department filter event
            $('#kt_datatable_search_department').on('change', function () {
                datatable.setDataSourceParam('department', $(this).val());
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