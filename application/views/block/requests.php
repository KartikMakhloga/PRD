<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Requests</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->

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
                        <h3 class="card-label">Jawan Details of
                            <!-- <span class="text-primary"><?= $name ?></span> -->
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

<!--begin::Modal-->
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Request Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Details will be populated here -->
                <div id="modalContent"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->


<!-- Modal for showing details -->
<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalContent">
                <!-- Content will be loaded here dynamically -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Allocate button will be appended here dynamically -->
            </div>
        </div>
    </div>
</div>





<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>

<script>
    "use strict";

    function showDetailsModal(requestId) {
        var baseUrl = "<?php echo base_url(); ?>";
        var block_id = "<?php echo $this->session->userdata('user_id'); ?>";

        // Fetch data from the server
        $.ajax({
            url: baseUrl + 'block/getRequestDetails/' + requestId,
            type: 'GET',
            success: function (response) {
                var data = response.data;

                var blockIds = JSON.parse(data.block_ids);
                var jawansForBlock = blockIds[block_id] || '0';
                var skilledJawans = typeof data.skilled_jawans === 'string' ? JSON.parse(data.skilled_jawans) : data.skilled_jawans;
                var approvalStatus = data.approval;

                var statusBadge = data.approval == 0 ? '<span class="badge bg-secondary">Pending</span>' : '<span class="badge bg-success">Allocated</span>';

                var finalStatusBadge;
                switch (data.status) {
                    case 'Pending':
                        finalStatusBadge = '<span class="badge bg-secondary">Pending</span>';
                        break;
                    case 'Approved':
                        finalStatusBadge = '<span class="badge bg-warning text-dark">Allocated</span>';
                        break;
                    case 'Completed':
                        finalStatusBadge = '<span class="badge bg-success">Completed</span>';
                        break;
                    case 'Rejected':
                        finalStatusBadge = '<span class="badge bg-danger">Rejected</span>';
                        break;
                    default:
                        finalStatusBadge = '<span class="badge bg-dark">Unknown</span>';
                        break;
                }

                var detailsHtml =
                    `<p><strong>Demand Number: </strong><span class="badge bg-secondary">${data.demand_number}</span> </p>
                <p><strong>Department Name: </strong> <span class="badge bg-secondary">${data.department_name || 'Not specified'}</span></p>
                <p><strong>Order ID: </strong><span class="badge bg-secondary">${data.order_id || 'N/A'}</span> </p>
                <p><strong>Status: </strong> ${statusBadge}</p>
                <p><strong>Final Status: </strong> ${finalStatusBadge}</p>
                <p><strong>From Date: </strong> ${data.from_date}</p>
                <p><strong>To Date: </strong> ${data.to_date}</p>
                <p><strong>Total Jawans Requested from your block: </strong> <span class="badge bg-secondary">${jawansForBlock}</span></p>
                <p><strong>Skilled Jawans: </strong><ul>`;

                for (var key in skilledJawans) {
                    if (skilledJawans.hasOwnProperty(key) && skilledJawans[key]) {
                        detailsHtml += `<li>${key.charAt(0).toUpperCase() + key.slice(1)}: ${skilledJawans[key]}</li>`;
                    }
                }
                detailsHtml += '</ul></p>';

                $('#modalContent').html(detailsHtml);
                $('#detailsModal').modal('show');
                // Clear previous buttons, if any
                $('#allocateButton').remove();
                $('#allocateSelectedJawans').remove();

                // Add the allocate buttons dynamically based on approval status
                var footerHtml = '';
                if (data.status !== 'Rejected') {
                    if (data.approval === '2') {
                        footerHtml += '<button class="btn btn-primary ml-2" id="allocateButton" disabled>Allocate</button>';
                    } else {
                        footerHtml += '<button class="btn btn-primary ml-2" id="allocateButton">Allocate</button>';
                    }

                    $('.modal-footer').append(footerHtml);
                }

                $('#allocateButton').on('click', function () {
                    showJawansModal(data.department_id, data.from_date, data.to_date, requestId);
                });
            },
            error: function (error) {
                console.log('Error fetching details:', error);
            }
        });
    }

    function showJawansModal(department_id, from_date, to_date, requestId) {
        var baseUrl = "<?php echo base_url(); ?>";
        var blockId = "<?php echo $this->session->userdata('user_id'); ?>";
        $.ajax({
            url: baseUrl + 'block/getAvailableJawansByBlocks/' + blockId,
            type: 'GET',
            success: function (response) {
                var jawans = response.data;
                var jawanDetailsHtml = '<div class="container">';
                jawanDetailsHtml += '<div class="row">';
                jawanDetailsHtml += '<div class="col-md-12">';
                jawanDetailsHtml += '<h5 class="text-dark font-weight-bold mt-2 mb-2">Available Jawans</h5>';
                jawanDetailsHtml += `<span class="text-dark-50 font-weight-bold">${jawans.length} Total Jawans</span>`;
                jawanDetailsHtml += '<table class="table table-striped">';
                jawanDetailsHtml += '<thead><tr><th>Select</th><th>Name</th><th>Availability</th><th>Father Name</th><th>Skill</th><th>Residence Address</th><th>Height</th><th>Weight</th></tr></thead>';
                jawanDetailsHtml += '<tbody>';
                jawans.forEach(jawan => {
                    jawanDetailsHtml += `<tr>
                    <td><input type="checkbox" class="jawan-checkbox" value="${jawan.id}"></td>
                    <td>${jawan.name}</td>
                    <td>${jawan.availability == 0 ? "Available" : "Unavailable"}</td>
                    <td>${jawan.father_name}</td>
                    <td>${jawan.skills}</td>
                    <td>${jawan.residential_address}</td>
                    <td>${jawan.height}</td>
                    <td>${jawan.weight}</td>
                </tr>`;
                });
                jawanDetailsHtml += '</tbody></table>';
                jawanDetailsHtml += '</div></div></div>';

                // Add Allocate button
                var allocateAllJawans = '<button class="btn btn-primary ml-2" id="allocateSelectedJawans">Allocate Selected Jawans</button>';


                $('#allocateButton').remove();
                $('.modal-footer').append(allocateAllJawans);


                $('#modalContent').html(jawanDetailsHtml);
                // remove allocate button from modal
                $('#detailsModal').modal('show');

                // Allocate button click handler
                $('#allocateSelectedJawans').on('click', function () {
                    var selectedJawans = [];
                    $('.jawan-checkbox:checked').each(function () {
                        selectedJawans.push($(this).val());
                    });
                    var departmentId = department_id;
                    if (selectedJawans.length > 0 && departmentId && from_date) {
                        allocateJawansToDepartment(selectedJawans, departmentId, from_date, to_date, requestId);
                    } else {
                        alert('Please select jawans.');
                    }
                });
            },
            error: function (error) {
                console.log('Error fetching jawans:', error);
            }
        });
    }

    function allocateJawansToDepartment(jawanIds, departmentId, from_date, to_date, requestId) {
        var baseUrl = "<?php echo base_url(); ?>";
        $.ajax({
            url: baseUrl + 'block/allocateAllJawansToDepartment',
            type: 'POST',
            dataType: 'json',
            data: {
                jawan_ids: jawanIds,
                department_id: departmentId,
                from: from_date,
                to: to_date,
                requestId: requestId
            },
            success: function (response) {
                if (response.status === 'success') {
                    alert(response.message);
                    $('#detailsModal').modal('hide');
                } else {
                    alert(response.message);
                }
            },
            error: function (error) {
                console.log(error);
                alert('Failed to process your request');
            }
        });
    }


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
                            url: baseUrl + 'block/requestDetailsBlockwise',
                            method: 'GET',
                            map: function (raw) {
                                // sample data mapping
                                var dataSet = raw;
                                if (typeof raw.data !== 'undefined') {
                                    dataSet = raw.data;
                                }
                                return dataSet;
                            },
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
                        field: 'request_id',
                        title: '#',
                        sortable: 'asc',
                        width: 60,
                        type: 'number',
                        selector: false,
                        textAlign: 'left',
                    },
                    {
                        field: 'demand_number',
                        title: 'Demand Number',
                    },
                    {
                        field: 'order_id',
                        title: 'Order ID',
                    },
                    {
                        field: 'status',
                        title: 'Status',
                        template: function (row) {
                            var status = {
                                "Pending": { 'title': 'Pending', 'class': 'label-light-primary' },
                                "Approved": { 'title': 'Approved', 'class': 'badge bg-warning text-dark' },
                                "Completed": { 'title': 'Completed', 'class': 'badge bg-success' },
                                "OrderIdGenerated": { 'title': 'OrderGenerated', 'class': 'badge bg-warning text-dark' },
                                "Rejected": { 'title': 'Rejected', 'class': ' badge bg-danger' },
                            };
                            return '<span class="label label-lg font-weight-bold' + status[row.status].class + ' label-inline">' + status[row.status].title + '</span>';

                        },
                    },
                    {
                        field: 'from_date',
                        title: 'From Date',
                    },
                    {
                        field: 'to_date',
                        title: 'To Date',
                    },
                    {
                        field: 'Actions',
                        title: 'Actions',
                        sortable: false,
                        width: 120,
                        overflow: 'visible',
                        autoHide: false,
                        template: function (row) {
                            return `
        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="View details" onclick="showDetailsModal(${row.request_id})">
            <span class="svg-icon svg-icon-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M12.2679464,5.5 L17.5,5.5 C18.3284271,5.5 19,6.17157288 19,7 L19,19 C19,19.8284271 18.3284271,20.5 17.5,20.5 L6.5,20.5 C5.67157288,20.5 5,19.8284271 5,19 L5,7 C5,6.17157288 5.67157288,5.5 6.5,5.5 L11.7320536,5.5 L12,5.5 L12.2679464,5.5 Z" fill="#000000" opacity="0.3"/>
                        <path d="M11.0679492,2.5 L12.9320508,2.5 C13.3117852,2.5 13.6474452,2.67687516 13.8415064,2.96966991 L14.3415064,3.78033009 C14.5355676,4.07312484 14.4893479,4.46724827 14.2132034,4.71782682 L12.671597,6.14324346 C12.2564902,6.52512939 11.7435098,6.52512939 11.328403,6.14324346 L9.78679664,4.71782682 C9.5106521,4.46724827 9.4644324,4.07312484 9.65849364,3.78033009 L10.1584936,2.96966991 C10.3525548,2.67687516 10.6882148,2.5 11.0679492,2.5 Z" fill="#000000"/>
                    </g>
                </svg>
            </span>
        </a>`;
                        }

                    }

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