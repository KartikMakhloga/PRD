<!-- Bootstrap CSS -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->

<?php
$blocks_jawans = json_decode($request->block_ids, true);
$skilled_jawans = json_decode($request->skilled_jawans, true);
?>

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
                            <a href="" class="text-muted">Request For Jawans</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a class="text-muted">Edit Request</a>
                        </li>

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <a href="<?= base_url('district/allRequest') ?>" class="btn btn-light-primary font-weight-bolder btn-sm">Back</a>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <!-- <div class="d-flex align-items-center"> -->
            <!--begin::Actions-->
            <!-- <a href="view" class="btn btn-light-primary font-weight-bolder btn-sm">View Blocks</a> -->
            <!--end::Actions-->
            <!-- </div> -->
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
                            <h3 class="card-title">Edit Request</h3>
                        </div>
                        <!--begin::Form-->
                        <form id="requestForm" action="<?= base_url('district/updateRequest/') . $request->id ?>"
                            method="post">
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
                                    <label>Select Department:</label>
                                    <select class="form-control form-control-solid mb-2" name="department_id">
                                        <option value="">Select Department</option>
                                        <?php foreach ($departments as $department) { ?>
                                            <option value="<?= $department->id ?>"
                                                <?= $request->department_id == $department->id ? 'selected' : '' ?>>
                                                <?= $department->name ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>From Date:</label>
                                    <input type="date" class="form-control" value="<?= $request->from_date ?>"
                                        name="from_date" id="from_date" placeholder="Enter from date" />
                                </div>

                                <div class="form-group">
                                    <label>To Date:</label>
                                    <input type="date" class="form-control" value="<?= $request->to_date ?>"
                                        name="to_date" id="to_date" placeholder="Enter to date" />
                                </div>



                                <div class="form-group">
                                    <label>Add Number of Jawans Required From Each Block:</label>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Block Name</th>
                                                <th>Number of Jawans</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($blocks as $block) {
                                                // Determine if inputs should be disabled based on the approval status
                                                $isDisabled = isset($request->skilled_jawans_by_block[$block->id]['approval']) && ($request->skilled_jawans_by_block[$block->id]['approval'] == 1 || $request->skilled_jawans_by_block[$block->id]['approval'] == 2) ? 'readonly' : '';
                                                ?>
                                                <tr>
                                                    <td><?= htmlspecialchars($block->name) ?></td>
                                                    <td>
                                                        <input type="hidden" name="block_ids[]"
                                                            value="<?= htmlspecialchars($block->id) ?>">
                                                        <input type="number" name="jawans[<?= $block->id ?>]" min="0"
                                                            class="form-control total-jawans"
                                                            placeholder="Enter total number of jawans for <?= htmlspecialchars($block->name) ?>"
                                                            data-block-id="<?= $block->id ?>"
                                                            value="<?= $blocks_jawans[$block->id] ?? "" ?>" <?= $isDisabled ?> />
                                                    </td>
                                                    <td><span id="error-<?= $block->id ?>"
                                                            style="color: red; display: none;"></span></td>
                                                </tr>
                                                <!-- Skills Row for each Block -->
                                                <tr id="skills-row-<?= $block->id ?>" class="skills-row">
                                                    <td colspan="3">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Skill Type</th>
                                                                    <th>Number of Skilled Jawans</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($skills as $skill) { ?>
                                                                    <tr>
                                                                        <td><?= htmlspecialchars($skill) ?></td>
                                                                        <td>
                                                                            <input type="number"
                                                                                name="skilled_jawans[<?= $block->id ?>][<?= $skill ?>]"
                                                                                min="0" class="form-control"
                                                                                placeholder="Enter number of <?= strtolower($skill) ?> jawans"
                                                                                value="<?= $request->skilled_jawans_by_block[$block->id]['skilled_jawans'][$skill] ?? "" ?>"
                                                                                <?= $isDisabled ?> />
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
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

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Confirm Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Container for dynamically added content -->
                <div id="dynamicContent"></div>
                <!-- Static content -->
                <div class="form-group">
                    <label for="demandNumber"><strong>Demand Number:</strong></label>
                    <input type="text" class="form-control" id="demandNumber" name="demandNumber"
                        value="<?= $request->demand_number ?>" required disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button>
                <button type="button" class="btn btn-primary" id="confirmSubmit">Confirm</button>
            </div>
        </div>
    </div>
</div>



<script>
    // Set the current date as the minimum for both date input fields
    document.addEventListener("DOMContentLoaded", function () {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById("from_date").setAttribute('min', today);
        document.getElementById("to_date").setAttribute('min', today);
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script>
    $(document).ready(function () {
        // Handle form submit event
        $('#requestForm').submit(function (event) {
            event.preventDefault(); // Prevent the default form submission

            var selectedDepartment = $('select[name="department_id"] option:selected').text();
            var fromDate = $('#from_date').val();
            var toDate = $('#to_date').val();

            var totalJawans = 0;

            // Clear existing content in the dynamic content container
            $('#dynamicContent').html('');

            // Append new content to the dynamic content container
            $('#dynamicContent').append(`<p><strong>Department:</strong> ${selectedDepartment}</p>`);
            $('#dynamicContent').append(`<p><strong>From Date:</strong> ${fromDate}</p>`);
            $('#dynamicContent').append(`<p><strong>To Date:</strong> ${toDate}</p>`);

            $('input[name^="jawans"]').each(function () {
                var blockId = $(this).data('block-id');
                var blockName = $(this).closest('tr').find('td:first').text().trim();
                var jawans = parseInt($(this).val()) || 0;
                totalJawans += jawans;

                if (jawans) {
                    $('#dynamicContent').append(`<p style="margin-top: 20px;"><strong>${blockName}:</strong> ${jawans} jawans requested</p>`);
                    $('#dynamicContent').append('<ul>');
                    $(`input[name^="skilled_jawans[${blockId}]"]`).each(function () {
                        var skillType = $(this).attr('name').split('[')[2].slice(0, -1);
                        var skilledCount = parseInt($(this).val()) || 0;
                        if (skilledCount > 0) {
                            $('#dynamicContent').append(`<li>${skillType}: ${skilledCount} jawans</li>`);
                        }
                    });
                    $('#dynamicContent').append('</ul>');
                }
            });
            $('#dynamicContent').append(`<p style="margin-top: 20px;"><strong>Total Jawans Required:</strong> ${totalJawans}</p>`);

            $('#confirmationModal').modal('show'); // Display the modal with all the details
        });

        // Handle the confirm button in the modal
        $('#confirmSubmit').click(function () {
            var demandNumber = $('#demandNumber').val(); // Get the demand number from the input
            if (!demandNumber) {
                alert('Please enter the Demand Number.');
                return;
            }
            $('<input>').attr({ // Create a hidden input to store the demand number
                type: 'hidden',
                id: 'hiddenDemandNumber',
                name: 'demandNumber',
                value: demandNumber
            }).appendTo('#requestForm');

            $('#confirmationModal').modal('hide');
            $('#requestForm').unbind('submit').submit(); // Submit the form unconditionally
        });
    });
</script>



<script>
    $(document).ready(function () {
        var lastVisibleBlockId = null; // Variable to keep track of the last opened block

        function validateSkilledJawans(blockId, blockName) {
            var totalJawans = parseInt($(`input[name="jawans[${blockId}]"]`).val()) || 0;
            var skilledJawansSum = 0;

            $(`input[name^="skilled_jawans[${blockId}]"]`).each(function () {
                skilledJawansSum += parseInt($(this).val()) || 0;
            });

            var errorElement = $(`#error-${blockId}`);
            if (skilledJawansSum > totalJawans) {
                errorElement.text(`You have exceeded the number in ${blockName} block.`).show();
                if (!isVisible(errorElement[0])) {
                    errorElement[0].scrollIntoView({ behavior: "smooth", block: "center" });
                }
            } else {
                errorElement.text('').hide();
            }
        }

        $('.total-jawans').on('input click', function (event) {
            var blockId = $(this).data('block-id');
            var blockName = $(this).closest('tr').find('td:first').text().trim();

            // Check if another block's skills table is open and hide it
            if (lastVisibleBlockId && lastVisibleBlockId !== blockId) {
                $('#skills-row-' + lastVisibleBlockId).hide();
            }

            // Update the validation whenever there's input
            if (event.type === 'input') {
                validateSkilledJawans(blockId, blockName);
                var jawanCount = parseInt($(this).val(), 10);
                var skillsRow = $('#skills-row-' + blockId);

                // Toggle the current block's skills table based on jawan count
                if (jawanCount > 0) {
                    skillsRow.show();
                    lastVisibleBlockId = blockId; // Update the last visible block ID
                } else {
                    skillsRow.hide();
                    lastVisibleBlockId = null; // Reset last visible block ID if no jawans
                }
            }
        });

        $('input[name^="skilled_jawans"]').on('input', function () {
            var blockId = $(this).closest('tr').closest('tbody').closest('table').closest('tr').prev().find('.total-jawans').data('block-id');
            var blockName = $(this).closest('tr').closest('tbody').closest('table').closest('tr').prev().find('td:first').text().trim();
            validateSkilledJawans(blockId, blockName);
        });

        function isVisible(elem) {
            var coords = elem.getBoundingClientRect();
            return (coords.top >= 0 && coords.bottom <= window.innerHeight);
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all input elements of type number
        var numberInputs = document.querySelectorAll('input[type=number]');

        numberInputs.forEach(function (input) {
            // Prevent mouse wheel from changing the input value when focused
            input.addEventListener('wheel', function (event) {
                event.preventDefault();  // Stop the action of the mouse wheel on the input
            });
        });
    });
</script>