<?php

defined('BASEPATH') or exit('No direct script access allowed');

class RequestModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getRequests()
    {
        $query = $this->db->get('requests');
        return $query->result();
    }

    public function getRequestById($id)
    {
        $this->db->select('requests.*, skilled_jawan_request.block_id, skilled_jawan_request.skilled_jawans, skilled_jawan_request.approval');
        $this->db->from('requests');
        $this->db->join('skilled_jawan_request', 'skilled_jawan_request.request_id = requests.id', 'left');
        $this->db->where('requests.id', $id);
        $query = $this->db->get();

        // Check if any result was returned
        if ($query->num_rows() == 0) {
            return null; // or handle as needed
        }

        // Initialize an array to store skilled jawans data by block ID
        $skilledJawansByBlock = [];

        // Iterate over all rows returned
        foreach ($query->result() as $row) {
            if (!empty($row->block_id)) {
                // Decode skilled_jawans and add them along with approval into the array
                $skilledJawansByBlock[$row->block_id] = [
                    'skilled_jawans' => json_decode($row->skilled_jawans, true),
                    'approval' => $row->approval
                ];
            }
        }

        // Get the first row to use as the base object
        $result = $query->first_row();

        // Add the skilled jawans by block to the result object
        $result->skilled_jawans_by_block = $skilledJawansByBlock;
        return $result;
    }



    public function getRequestByIdForDistrict($id)
    {
        // Select fields from the requests, skilled_jawan_request, block, and now department
        $this->db->select('requests.*, skilled_jawan_request.block_id, skilled_jawan_request.skilled_jawans, skilled_jawan_request.approval, block.name as block_name, department.name as department_name');

        // From the requests table
        $this->db->from('requests');

        // Join the skilled_jawan_request table on request_id
        $this->db->join('skilled_jawan_request', 'skilled_jawan_request.request_id = requests.id', 'left');

        // Join the block table on block_id
        $this->db->join('block', 'block.id = skilled_jawan_request.block_id', 'left');

        // Join the department table to get department_name
        $this->db->join('department', 'department.id = requests.department_id', 'left');

        // Where clause to filter by the given request id
        $this->db->where('requests.id', $id);

        // Execute the query
        $query = $this->db->get();

        // Return all the results
        return $query->result();
    }

    public function getRequestByIdForBlock($id, $block_id)
    {
        $this->db->select('requests.*, skilled_jawan_request.block_id, skilled_jawan_request.skilled_jawans, skilled_jawan_request.approval, department.name as department_name');
        $this->db->from('requests');
        $this->db->join('skilled_jawan_request', 'skilled_jawan_request.request_id = requests.id AND skilled_jawan_request.block_id = ' . $this->db->escape($block_id), 'left');
        $this->db->join('department', 'department.id = requests.department_id', 'left');
        $this->db->where('requests.id', $id);
        $query = $this->db->get();
        return $query->row();
    }


    public function createRequest($data)
    {
        $this->db->insert('requests', $data);
    }

    public function updateRequest($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('requests', $data);
        return $id;
    }

    public function deleteRequest($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('requests');

    }

    public function getDepartmentByBlockIds($blockId)
    {
        // Prepare the blockId key for JSON search
        $blockIdKey = '$."' . $blockId . '"';

        // Query to join requests table with departments table
        $this->db->select('department.name AS department_name, department.id AS department_id, requests.*');
        $this->db->from('requests');
        $this->db->join('department', 'department.id = requests.department_id', 'left');
        // Using JSON_EXTRACT and checking if the result is NOT NULL
        $this->db->where("JSON_EXTRACT(requests.block_ids, '" . $blockIdKey . "') IS NOT NULL");

        // Get the result of the query
        $query = $this->db->get();

        // Returning the result as an array of objects
        return $query->result();
    }

    public function insertRequest($data)
    {
        $this->db->insert('requests', $data);
        return $this->db->insert_id(); // Returns the ID of the inserted record
    }

    public function insertSkilledJawans($data)
    {
        // Ensure that data is not empty and is an array
        if (!empty($data) && is_array($data)) {
            // Insert multiple rows at once into the 'skilled_jawan_request' table
            $this->db->insert_batch('skilled_jawan_request', $data);

            // Optionally, you can check how many rows were inserted
            $insertedCount = $this->db->affected_rows();

            // Return true if at least one row was inserted
            return $insertedCount > 0;
        }
    }



    public function getRequestByDistrictId($districtId)
    {
        // Load BlockModel to use for fetching block names
        $this->load->model('BlockModel');

        $blocks = $this->BlockModel->getAllBlockNames();
        $blockNameMap = [];
        foreach ($blocks as $block) {
            $blockNameMap[$block['id']] = $block['name'];
        }

        // Prepare and execute the database query
        $this->db->select('requests.*, skilled_jawan_request.block_id, skilled_jawan_request.skilled_jawans');
        $this->db->from('requests');
        $this->db->join('skilled_jawan_request', 'skilled_jawan_request.request_id = requests.id', 'left');
        $this->db->where('requests.district_id', $districtId);
        $query = $this->db->get();

        // Process the results
        $results = $query->result();
        $formattedResults = [];

        foreach ($results as $row) {
            if (!isset($formattedResults[$row->id])) {
                $formattedResults[$row->id] = [
                    "id" => $row->id,
                    "district_id" => $row->district_id,
                    "department_id" => $row->department_id,
                    "total_jawans_requested" => $row->total_jawans_requested,
                    "status" => $row->status,
                    "demand_number" => $row->demand_number,
                    "order_id" => $row->order_id,
                    "from_date" => $row->from_date,
                    "to_date" => $row->to_date,
                    "block_ids" => json_decode($row->block_ids, true),
                    "created_at" => $row->created_at,
                    "updated_at" => $row->updated_at,
                    "blocks" => []
                ];
            }
            $blockId = $row->block_id;
            if ($row->skilled_jawans !== null) {
                $blockName = $blockNameMap[$blockId] ?? "Unknown Block";  // Use block name if available, otherwise "Unknown Block"
                $formattedResults[$row->id]['blocks'][$blockName] = json_decode($row->skilled_jawans, true);
            }
        }

        return array_values($formattedResults);
    }


    public function getRequestsByBlockId($blockId)
    {
        // Select the necessary columns from both tables
        $this->db->select('requests.*, skilled_jawan_request.skilled_jawans');
        $this->db->from('requests');

        // Perform a left join with the skilled_jawan_request table
        $this->db->join('skilled_jawan_request', 'skilled_jawan_request.request_id = requests.id', 'left');

        // Execute the query without the JSON_CONTAINS filter
        $query = $this->db->get();
        $results = $query->result();

        // Filter the results in PHP
        $filteredResults = array_filter($results, function ($request) use ($blockId) {
            $blockIds = json_decode($request->block_ids, true);
            return in_array($blockId, $blockIds);
        });

        return $filteredResults;
    }

    public function getRequestByBlockIdForAllocation($blockId)
    {
        // Define the blockId as a string to match the JSON key format
        $blockIdKey = '"' . $blockId . '"'; 
    
        // get all requests where blockId is a key in the blockIds JSON object
        $this->db->select('requests.*');
        $this->db->from('requests');
        // Check for existence of blockId as a key in the JSON object
        $this->db->where("JSON_CONTAINS_PATH(block_ids, 'one', '$.$blockIdKey')", NULL, FALSE);
        $query = $this->db->get();

    
        return $query->result();
    }
    


    public function getRequestsWithSkilledJawans($blockId)
    {
        $blockIdKey = '"' . $blockId . '"';

        $this->db->select('r.*, s.*');
        $this->db->from('requests r');
        $this->db->join('skilled_jawan_request s', 'r.id = s.request_id AND s.block_id = ' . $this->db->escape($blockId), 'inner');
        $this->db->where("JSON_CONTAINS_PATH(r.block_ids, 'one', CONCAT('$.', $blockIdKey))", NULL, FALSE); // Checking for the existence of the block ID key

        $query = $this->db->get();
        return $query->result();
    }

    public function approveRequest($requestId, $blockId)
    {
        // Check if the record exists in skilled_jawan_request
        $this->db->where('request_id', $requestId);
        $this->db->where('block_id', $blockId);
        $query = $this->db->get('skilled_jawan_request');

        if ($query->num_rows() == 0) {
            // Record does not exist
            return false;
        }

        // Get current record
        $currentRecord = $query->row_array();

        // Check if approval is already set to 1
        if ($currentRecord['approval'] == '1') { // Ensure comparison with string '1'
            return true;
        }

        // Update skilled_jawan_request
        $this->db->where('request_id', $requestId);
        $this->db->where('block_id', $blockId);
        $this->db->update('skilled_jawan_request', ['approval' => '1']); // Ensure setting string '1'

        // Check if update affected rows
        return $this->db->affected_rows() > 0;
    }

    public function allocateRequest($requestId, $blockId)
    {
        // Check if the record exists in skilled_jawan_request
        $this->db->where('request_id', $requestId);
        $this->db->where('block_id', $blockId);
        $query = $this->db->get('skilled_jawan_request');

        if ($query->num_rows() == 0) {
            // Record does not exist
            return false;
        }

        // Update skilled_jawan_request
        $this->db->where('request_id', $requestId);
        $this->db->where('block_id', $blockId);
        $this->db->update('skilled_jawan_request', ['approval' => '2']); // Ensure setting string '2'

        // Check if update affected rows
        return $this->db->affected_rows() > 0;
    }


    public function updateSkilledJawans($requestId, $block_id, $skilledDataJson)
    {
        // Check if the entry exists
        $this->db->from('skilled_jawan_request');
        $this->db->where('request_id', $requestId);
        $this->db->where('block_id', $block_id);
        $exists = $this->db->count_all_results() > 0;

        // Perform update or insert based on existence of the record
        if ($exists) {
            $this->db->where('request_id', $requestId);
            $this->db->where('block_id', $block_id);
            $this->db->update('skilled_jawan_request', ['skilled_jawans' => $skilledDataJson]);
        } else {
            // Insert the new record if it does not exist
            $this->db->insert('skilled_jawan_request', [
                'request_id' => $requestId,
                'block_id' => $block_id,
                'skilled_jawans' => $skilledDataJson
            ]);
        }

        // Check for successful operation
        if ($this->db->affected_rows() > 0) {
            return true; // Success: at least one row affected
        } else if ($this->db->trans_status() === FALSE) {
            return false; // Actual database error occurred
        } else {
            return false; // No rows affected, but no database errors
        }
    }

    public function SaveOrderId($requestId, $orderId)
    {

        $this->db->select('order_id');
        $this->db->from('requests');
        $this->db->where('id', $requestId);
        $query = $this->db->get();
        $result = $query->row();
        if ($result->order_id == null) {
            $this->db->where('id', $requestId);
            $this->db->update('requests', ['order_id' => $orderId, 'status' => 'OrderIdGenerated']);
            return $this->db->affected_rows() > 0;
        }

        return false;
    }

    public function updateOrderStatusReject($id, $status)
    {
        $this->db->where('id', $id);
        return $this->db->update('requests', ['status' => $status]);
    }

    public function updateOrderStatus($id, $status, $order_id)
    {
        $this->db->where('id', $id);
        return $this->db->update('requests', ['status' => $status, 'order_id' => $order_id]);
    }

    public function getRequestByDistrictIdForReport($districtId)
    {
        $this->db->select('requests.*');
        $this->db->from('requests');
        $this->db->where('requests.district_id', $districtId);
        $query = $this->db->get();
        return $query->result();
    }


}