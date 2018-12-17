<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FileSessionHandler implements SessionHandlerInterface
{
    private $savePath;
    /*private $CI;

    function __construct()
    {
        $CI = & get_instance();
    }*/

    function open($savePath, $sessionName)
    {
        $this->savePath = $savePath;
        if (!is_dir($this->savePath)) {
            mkdir($this->savePath, 0777);
        }

        return true;
    }

    function close()
    {
        return true;
    }

    function read($id)
    {
        return (string)@file_get_contents("$this->savePath/sess_$id");
    }

    function write($id, $data)
    {
        if (isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true) {
            if (isset($_SESSION['acc_type']) && $_SESSION['acc_type'] == "student") {
                $CI = & get_instance();

                $check_query = $CI->db->where('user_id',$_SESSION['acc_id'])->order_by('id','DESC')->get('student_visites');

                if ($check_query->num_rows() == 0) {
                    $CI->db->set('user_id',$_SESSION['acc_id'])->set('time_in',time())->insert('student_visites');
                }else{
                    if ($check_query->row()->time_out > 0 ) {
                        $CI->db->set('user_id',$_SESSION['acc_id'])->set('time_in',time())->insert('student_visites');
                    }
                }
            }
        }
        return file_put_contents("$this->savePath/sess_$id", $data) === false ? false : true;
    }

    function destroy($id)
    {
        if (isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true) {
            if (isset($_SESSION['acc_type']) && $_SESSION['acc_type'] == "student") {
                $CI = & get_instance();

                $check_query = $CI->db->where('user_id',$_SESSION['acc_id'])->where('time_out',0)->order_by('id','DESC')->get('student_visites');

                if ($check_query->num_rows() > 0) {
                    $CI->db->where('id',$check_query->row()->id)->set('user_id',$_SESSION['acc_id'])->set('time_out',time())->update('student_visites');
                }
            }
        }

        $file = "$this->savePath/sess_$id";
        if (file_exists($file)) {
            unlink($file);
        }

        return true;
    }

    function gc($maxlifetime)
    {
        foreach (glob("$this->savePath/sess_*") as $file) {
            if (filemtime($file) < time() && file_exists($file)) {
                unlink($file);
            }
        }

        return true;
    }
}