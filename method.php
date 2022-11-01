<?php

class Mahasiswa
{
    public function get_mhs()
    {
        $data = array(
            'id' => '1',
            'Nama' => "Ratu Noor Hasannah",
            'NIM' => '162112133112'
        );
        $response = array(
            'status' => '1',
            'message' => 'Get List Mahasiswa Succes.',
            'data' => $data
        );
        header('Content-Type: application/json');
        echo json_encode($response); //return json
    }
    
    public function insert_mhs()
    {   
        $data = array(
            'id' => '1',
            'Nama' => "Ratu Noor Hasannah",
            'NIM' => '162112133112',
        );
        if(!empty($_POST['id']) && !empty($_POST['Nama']) && !empty($_POST['NIM'])){
        //data input
        $newdata = array(
            'id' => $_POST['id'],
            'Nama' => $_POST['Nama'],
            'NIM' => $_POST['NIM'],
        );
        //add data
        $data[] = $newdata;
        //new data
        foreach($data as $d) {
            $result['Data Mahasiswa'][] = array(
            'id' => $d['id'],
            'Nama' => $d['Nama'],
            'NIM' => $d['NIM'],
            );
        }
        $result['status'] = 'success';
        } else {
            foreach($data as $d) {
            $result['Data Mahasiswa'][] = array(
            'id' => $d['id'],
            'Nama' => $d['Nama'],
            'NIM' => $d['NIM'],
            );
        }
        $result['status'] = 'success';
        }


        http_response_code(200);
        echo json_encode($result); //return json
    }
}
?>