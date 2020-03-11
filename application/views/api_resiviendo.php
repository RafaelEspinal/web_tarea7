<?php
    
    $query = $this->db->get('pacientes');
    print(json_encode($query->result()));

   

