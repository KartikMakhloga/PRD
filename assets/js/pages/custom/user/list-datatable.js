// "use strict";
// // Class definition

// var KTAppsUsersListDatatable = function() {
// 	// Private functions

// 	// basic demo
// 	var _demo = function() {
// 		var baseUrl = "<?php echo base_url(); ?>";
// 		console.log(baseUrl + 'districts');
// 		var datatable = $('#kt_datatable').KTDatatable({
// 			// datasource definition
// 			data: {
// 				type: 'remote',
// 				source: {
// 					read: {
// 						url: baseUrl + '/districts',
// 						method: 'GET',
// 					},
// 				},
// 				pageSize: 10, // display 20 records per page
// 				serverPaging: true,
// 				serverFiltering: true,
// 				serverSorting: true,
// 			},

// 			// layout definition
// 			layout: {
// 				scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
// 				footer: false, // display/hide footer
// 			},

// 			// column sorting
// 			sortable: true,

// 			pagination: true,

// 			search: {
// 				input: $('#kt_subheader_search_form'),
// 				delay: 400,
// 				key: 'generalSearch'
// 			},

// 			// columns definition
// 			columns: [
// 				{
// 					field: 'id',
// 					title: '#',
// 					width: 30,
// 					type: 'number',
// 					selector: false,
// 					textAlign: 'center',
// 				}, {
// 					field: 'name',
// 					title: 'Name',
// 				}, {
// 					field: 'created_at',
// 					title: 'Created At',
// 					type: 'date',
// 					format: 'MM/DD/YYYY',
// 				}, {
// 					field: 'updated_at',
// 					title: 'Updated At',
// 					type: 'date',
// 					format: 'MM/DD/YYYY',
// 				}, {
// 					field: 'Actions',
// 					title: 'Actions',
// 					sortable: false,
// 					width: 125,
// 					overflow: 'visible',
// 					autoHide: false,
// 					template: function(row) {
// 						return '\
// 							<a href="/districts/'+row.id+'/edit" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">\
// 								<i class="la la-edit text-warning"></i>\
// 							</a>\
// 							<a href="/districts/'+row.id+'" class="btn btn-sm btn-clean btn-icon" title="Delete">\
// 								<i class="la la-trash text-danger"></i>\
// 							</a>\
// 						';
// 					}
// 				}
// 			],
// 		});

// 		$('#kt_datatable_search_status').on('change', function() {
// 			datatable.search($(this).val().toLowerCase(), 'Status');
// 		});

// 		$('#kt_datatable_search_type').on('change', function() {
// 			datatable.search($(this).val().toLowerCase(), 'Type');
// 		});

// 		$('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
// 	};

// 	return {
// 		// public functions
// 		init: function() {
// 			_demo();
// 		},
// 	};
// }();

// jQuery(document).ready(function() {
// 	KTAppsUsersListDatatable.init();
// });
