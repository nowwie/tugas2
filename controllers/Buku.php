<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Base_Controller.php';

class Buku extends Base_Controller {

    //field tabel
    var $data = [
        'isbn' => '',
        'judul' => '',
        'pengarang' => ''
    ];

    //nama model
    var $context = 'buku';

    function form(){
        $id = $this->uri->segment(3);
        if($id){
            $this->data = $this->buku->find_by_id($id);
        }
        $this->load->view('buku/form',$this->data);
    }

    function save(){
        $id = $this->input->post('id');
        $this->form_validation->set_rules('isbn','isbn','required');
        $this->form_validation->set_rules('judul','judul','required');
        $this->form_validation->set_rules('pengarang','pengarang','required');

        $this->data = [
            'isbn' =>  $this->input->post('isbn'),
            'judul' =>  $this->input->post('judul'),
            'pengarang' =>  $this->input->post('pengarang'),
           
        ];
        if($this->form_validation->run() == FALSE){
            $this->load->view('buku/form',$this->data);
        }else{
            if($id == ''){
                $this->buku->insert($this->data);
            }else{
                $this->buku->update($id,$this->data);
            }
            redirect(base_url('buku'));
        }
    }

}