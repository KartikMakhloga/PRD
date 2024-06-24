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



<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
<script>
    "use strict";

    function showDetailsModal(id) {
        var baseUrl = "<?php echo base_url(); ?>";
        $.ajax({
            url: baseUrl + 'district/getRequestById/' + id,
            method: 'GET',
            success: function (response) {
                // Check and parse the response
                if (typeof response === 'string') {
                    try {
                        response = JSON.parse(response);
                    } catch (e) {
                        console.error('Failed to parse response JSON:', e);
                        alert('Failed to fetch details. Please try again.');
                        return;
                    }
                }

                if (typeof response === 'object' && response.hasOwnProperty('data')) {
                    var requests = response.data;
                    if (requests.length > 0) {
                        // Parse block_ids and skilled_jawans JSON
                        var blockIds, allApproved = true, allAllocated = true;
                        try {
                            blockIds = JSON.parse(requests[0].block_ids);
                        } catch (e) {
                            console.error('Failed to parse block_ids:', e);
                            alert('Failed to fetch details. Please try again.');
                            return;
                        }

                        // Construct the modal content dynamically
                        var modalContent = `<p><strong>Demand Number: </strong><span class="badge bg-secondary">${requests[0].demand_number}</span></p>
                    <p><strong>Order ID: </strong> <span class="badge bg-secondary">${requests[0].order_id || "N/A"}</span></p>
                    <p><strong>Department: </strong> <span class="badge bg-secondary">${requests[0].department_name}</span></p>
                    <p><strong>From Date: </strong> ${requests[0].from_date || 'N/A'}</p>
                    <p><strong>To Date: </strong> ${requests[0].to_date || 'N/A'}</p>
                    <p><strong>Final Status: </strong> ${requests[0].status === 'Pending' ? '<span class="badge bg-secondary">Pending</span>' :
                                requests[0].status === 'Approved' ? '<span class="badge bg-warning text-dark">Approved</span>' :
                                    requests[0].status === 'Completed' ? '<span class="badge bg-success">Completed</span>' :
                                        requests[0].status === 'Rejected' ? '<span class="badge bg-danger text-white">Rejected</span>' :
                                            requests[0].status === 'OrderIdGenerated' ? '<span class="badge bg-warning text-dark">Order ID Generated</span>' :
                                                '<span class="badge bg-dark">Unknown</span>'
                            }</p>
                    <p><strong>Total Jawans Requested: </strong> <span class="badge bg-secondary">${requests[0].total_jawans_requested}</span></p>
                    <p><strong>Block Details:</strong></p>
                    <ul>`;

                        // Loop through each block
                        Object.entries(blockIds).forEach(([blockId, totalJawans]) => {
                            var blockDetails = requests.find(r => r.block_id === blockId);
                            var blockName = blockDetails.block_name;
                            var skilledJawans = JSON.parse(blockDetails.skilled_jawans);
                            var approvalStatus = blockDetails.approval === "0" ? "Pending"
                                : blockDetails.approval === "2" ? "Allocated"
                                    : "Approved";

                            if (approvalStatus !== "Approved") allApproved = false;
                            if (approvalStatus !== "Allocated") allAllocated = false;

                            modalContent += `<li><strong>${blockName}</strong>: <span class="badge bg-secondary">${totalJawans}</span> Jawans required - <span class="badge ${approvalStatus === "Allocated" ? "bg-success" : approvalStatus === "Approved" ? "bg-info text-white" : "bg-secondary"
                                }">${approvalStatus}</span><ul>`;

                            Object.entries(skilledJawans).forEach(([skill, count]) => {
                                if (count) {
                                    modalContent += `<li>${skill}: <span class="badge bg-secondary">${count}</span> jawans</li>`;
                                }
                            });
                            modalContent += `</ul></li>`;
                        });

                        modalContent += `</ul>`;
                        $('#modalContent').html(modalContent);
                        $('#detailsModal').modal('show');

                        // Clear and set footer buttons
                        $('#detailsModal .modal-footer').empty();
                        if (requests[0].status !== 'Rejected') {
                            $('#detailsModal .modal-footer').append('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>');
                            $('#detailsModal .modal-footer').append('<button type="button" class="btn btn-danger" onclick="rejectOrder(' + id + ')">Reject</button>');

                            if (allApproved && requests[0].status !== 'OrderIdGenerated') {
                                $('#detailsModal .modal-footer').append('<button type="button" class="btn btn-primary" onclick="generateOrderId(' + id + ')">Generate Order ID</button>');
                            }

                            if (allAllocated) {
                                if (requests[0].status === 'Completed') {
                                    $('#detailsModal .modal-footer').append('<button type="button" class="btn btn-primary" disabled>Complete Order</button>');
                                } else {
                                    $('#detailsModal .modal-footer').append('<button type="button" class="btn btn-primary" onclick="completeOrder(' + id + ')">Complete Order</button>');
                                }
                            }
                        } else {
                            // If the status is 'Rejected', only show the Close button
                            $('#detailsModal .modal-footer').append('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>');
                        }
                    } else {
                        console.error('No data found for ID:', id);
                        alert('No details found for this ID.');
                    }
                } else {
                    console.error('Invalid response structure');
                    alert('Failed to fetch details. Please try again.');
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', status, error);
                alert('Failed to fetch details. Please try again.');
            }
        });
    }


    function rejectOrder(id) {
        if (confirm('Are you sure you want to reject this order?')) {
            var baseUrl = "<?php echo base_url(); ?>";
            $.ajax({
                url: baseUrl + 'district/rejectOrder/' + id,
                method: 'POST',
                success: function (response) {
                    if (typeof response === 'string') {
                        try {
                            response = JSON.parse(response);
                        } catch (e) {
                            console.error('Failed to parse response JSON:', e);
                            alert('Failed to reject the order. Please try again.');
                            return;
                        }
                    }

                    if (response.success) {
                        alert('Order has been rejected.');
                        $('#detailsModal').modal('hide');
                        // Optionally refresh the page or update the status in the UI
                        location.reload();
                    } else {
                        alert('Failed to reject the order. Please try again.');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX error:', status, error);
                    alert('Failed to reject the order. Please try again.');
                }
            });
        }
    }


    function completeOrder(id) {
        var baseUrl = "<?php echo base_url(); ?>";
        $.ajax({
            url: baseUrl + 'district/completeOrder/' + id,
            method: 'POST',
            success: function (response) {
                // Check and parse the response
                if (typeof response === 'string') {
                    try {
                        response = JSON.parse(response);
                    } catch (e) {
                        console.error('Failed to parse response JSON:', e);
                        alert('Failed to complete the order. Please try again.');
                        return;
                    }
                }

                if (response.success) {
                    alert('Order has been Completed.');
                    $('#detailsModal').modal('hide');
                    // Optionally refresh the page or update the status in the UI
                    location.reload();
                } else {
                    alert('Failed to complete the order. Please try again.');
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', status, error);
                alert('Failed to complete the order. Please try again.');
            }
        });
    }


    function generateOrderId(id) {
        var baseUrl = "<?php echo base_url(); ?>";
        $.ajax({
            url: baseUrl + 'district/generateOrderId/' + id,
            method: 'GET',
            success: function (response) {
                // Check and parse the response
                if (typeof response === 'string') {
                    try {
                        response = JSON.parse(response);
                    } catch (e) {
                        console.error('Failed to parse response JSON:', e);
                        alert('Failed to generate Order ID. Please try again.');
                        return;
                    }
                }

                console.log('Response:', response);

                if (response.status === 'success' && response.hasOwnProperty('order_id')) {
                    var orderId = response.order_id;
                    alert('Order ID generated successfully: ' + orderId);
                    $('#detailsModal').modal('hide');
                    // Optionally refresh the page or update the status in the UI
                    location.reload();
                } else {
                    console.error('Failed to generate Order ID');
                    alert(response.message || 'Failed to generate Order ID. Please try again.');
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', status, error);
                alert('Failed to generate Order ID. Please try again.');
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
                            url: baseUrl + 'district/getRequestByDistrictId',
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
                        width: 25,
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
                        field: 'total_jawans_requested',
                        title: 'Total Jawans Requested',
                    },
                    {
                        field: 'block_ids',
                        title: 'Block Details',
                        width: 150,
                        align: 'left',
                        sortable: false,
                        template: function (row) {
                            var blockDetailsHtml = '<ol>';
                            Object.entries(row.block_ids).forEach(([blockName, quantity]) => {
                                blockDetailsHtml += '<li>' + blockName + ': ' + quantity + '</li>';
                            });
                            blockDetailsHtml += '</ol>';
                            return blockDetailsHtml;
                        }
                    },
                    {
                        field: 'status',
                        title: 'Status',
                        width: 150,
                        template: function (row) {
                            var status = {
                                "Pending": { 'title': 'Pending', 'class': 'label-light-primary' },
                                "Approved": { 'title': 'Approved', 'class': 'badge bg-warning text-dark' },
                                "Completed": { 'title': 'Completed', 'class': 'badge bg-success' },
                                "OrderIdGenerated": { 'title': 'OrderGenerated', 'class': 'badge bg-warning text-dark' },
                                "Rejected": { 'title': 'Rejected', 'class': ' badge bg-danger text-white' },
                            };
                            return '<span class="label label-lg font-weight-bold' + status[row.status].class + ' label-inline">' +
                                status[row.status].title + '</span>';

                        },
                    },
                    {
                        width: 90,
                        field: 'from_date',
                        title: 'From Date',
                    },
                    {
                        width: 90,
                        field: 'to_date',
                        title: 'To Date',
                    },
                    {
                        field: 'Actions',
                        title: 'Actions',
                        sortable: false,
                        width: 100,
                        overflow: 'visible',
                        autoHide: false,
                        template: function (row) {
                            return `
<a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="View details" data-row-id="${row.id}"
    onclick="showDetailsModal(${row.id})">
    <span class="svg-icon svg-icon-md">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
            viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="0" y="0" width="24" height="24" />
                <path
                    d="M12.2679464,5.5 L17.5,5.5 C18.3284271,5.5 19,6.17157288 19,7 L19,19 C19,19.8284271 18.3284271,20.5 17.5,20.5 L6.5,20.5 C5.67157288,20.5 5,19.8284271 5,19 L5,7 C5,6.17157288 5.67157288,5.5 6.5,5.5 L11.7320536,5.5 L12,5.5 L12.2679464,5.5 Z"
                    fill="#000000" opacity="0.3" />
                <path
                    d="M11.0679492,2.5 L12.9320508,2.5 C13.3117852,2.5 13.6474452,2.67687516 13.8415064,2.96966991 L14.3415064,3.78033009 C14.5355676,4.07312484 14.4893479,4.46724827 14.2132034,4.71782682 L12.671597,6.14324346 C12.2564902,6.52512939 11.7435098,6.52512939 11.328403,6.14324346 L9.78679664,4.71782682 C9.5106521,4.46724827 9.4644324,4.07312484 9.65849364,3.78033009 L10.1584936,2.96966991 C10.3525548,2.67687516 10.6882148,2.5 11.0679492,2.5 Z"
                    fill="#000000" />
            </g>
        </svg>
    </span>
</a>
<a href="editRequest/${row.id}" class="btn btn-sm btn-clean btn-icon" title="Edit details" data-row-id="${row.id}">
    <span class="svg-icon svg-icon-md">
        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="0" y="0" width="24" height="24" />
                <path
                    d="M7.10343995,21.9416807 L6,22 L5.48820489,21.4882049 C4.60556948,20.6055695 4.60556948,19.1940941 5.48820489,18.3114587 L14.688,9.11166382 L18.888,13.3116638 L9.68820489,22.5114587 C8.80556948,23.3940941 7.3940941,23.3940941 6.51145874,22.5114587 L6.395,22.395 L7.10343995,21.9416807 Z"
                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                <path
                    d="M12.5,8 L16,11.5 L21.2911413,6.20885868 C21.9209971,5.57900287 23,6.00949557 23,6.93933976 L23,17 L20,17 L20,19 L23,19 C24.1045695,19 25,18.1045695 25,17 L25,6.93933976 C25,4.97551032 23.3516456,4.02536256 21.7911413,5.58586688 L16.5,10.877 L13,7.5 L12.5,8 Z"
                    fill="#000000" fill-rule="nonzero" />
                <rect fill="#000000" opacity="0.3"
                    transform="translate(17.000000, 13.500000) rotate(-315.000000) translate(-17.000000, -13.500000) "
                    x="16" y="9" width="2" height="9" rx="1" />
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