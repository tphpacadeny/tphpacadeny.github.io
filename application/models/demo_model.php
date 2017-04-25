<?php
class Demo_Model extends CI_Model
{

    var $table_id_column = "content_id";

    var $table_columns_arr = Array (
        "checkbox" => Array(
            "crud_name" => "<input type=\"checkbox\" class=\"check_all\">",
            "custom_table_cell_view" => "outside/pages/crud/demo_checkbox_cell",
        ),
        "content_id" => Array(
        "column_name" => "content_id",
        "crud_name" => "ID",
        ),
        "content_name" => Array(
            "crud_name" => "Название",
        ),
        "content_desc" => Array(
            "crud_name" => "Описание",
            "custom_table_cell_view" => "outside/pages/crud/demo_custom_cell",
        ),
        "content_img" => Array(
            "crud_name" => "Картинка",
        ),
        "controls" => Array(
            "crud_name" => "Действия",
            "custom_table_cell_view" => "outside/pages/crud/demo_control_cell",
        ),
    );

    public function get_main() {

        $where_search = "AND it_content.content_name LIKE ".$this->db->escape('%'.$this->input->get('search', true).'%')." ";

        $sql = "SELECT *
                    FROM it_content
                    WHERE content_invisible = 0
                    {$where_search}
                    ORDER BY content_name ASC
                    ";

        echo $sql;
        $res = $this->db->query($sql)->result_array();

        return $res;

    }

    public function check_access($access_target, $user = false, $data = Array()) {
        if ($user AND $user->id == 11) {

        } else exit;
    }

}