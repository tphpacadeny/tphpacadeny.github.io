<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel1 extends CI_Controller {

    public function index()
    {
        // echo "Excel!";

        $res = $this->db->query("SELECT *
										FROM it_brands

										")->result_array();

        $this->array2excel($res);



    }

    public function dump() {

        $this->load->library('excel');

        $excelFile = $_SERVER["DOCUMENT_ROOT"]."/files/uploads/xls/file.xls";

        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objPHPExcel = $objReader->load($excelFile);

        //Itrating through all the sheets in the excel workbook and storing the array data
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
        $arrayData[$worksheet->getTitle()] = $worksheet->toArray();
        }

        var_dump($arrayData);
    }

    public function array2excel($res) {

        $this->load->library('excel');
        // Letters Array
        $abc = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        // Create new PHPExcel object
        $objPHPExcel = $this->excel;
        // Set document properties
        $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
            ->setLastModifiedBy("Maarten Balliauw")
            ->setTitle("PHPExcel Test Document")
            ->setSubject("PHPExcel Test Document")
            ->setDescription("Test document for PHPExcel, generated using PHP classes.")
            ->setKeywords("office PHPExcel php")
            ->setCategory("Test result file");

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Main');


        $excel_id = 1;
        $i = 0;

        $table_columns = array_keys($res[0]);

        foreach ($table_columns as $column) {
            // Excel Add

            $objRichText = new PHPExcel_RichText();
            $objBold = $objRichText->createTextRun($column);
            $objBold->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getCell($abc[$i].$excel_id)->setValue($objRichText);

            $objPHPExcel->getActiveSheet()->getStyle($abc[$i].$excel_id)->applyFromArray(
                array(
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => 'DDDDFF')
                    )
                )
            );
            $i++;
            //----------------------------------------------------------------------------------------
        }

        $excel_id++;
        foreach ($res as $row) {

            $i = 0;
            foreach ($table_columns as $column) {

                $objPHPExcel->getActiveSheet()->setCellValue($abc[$i].$excel_id, $row[$column]);

                $i++;
            }

            $excel_id++;

        }


        // More Width for Name
        $objPHPExcel->getActiveSheet()->getColumnDimension($abc[1])->setWidth(70);

        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="file.xls"');

        // ------------------------   Save and Export Excel 2007 file   -----------------------------------------------
        try{

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            $objWriter->save("php://output");

        }catch(Exception $e){
            echo $e->__toString();
        }



    }



}
