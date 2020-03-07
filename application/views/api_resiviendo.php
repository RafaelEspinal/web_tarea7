<?php
    
    $query = $this->db->get('pacientes');

    echo json_encode($query->result()));

    

