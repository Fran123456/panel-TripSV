<?php

namespace App\Http\Controllers\excel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Guia;
use App\transporte_model;
use App\turista_cliente;
use Maatwebsite\Excel\Facades\Excel;
use PHPExcel_Style_Fill;

class excelController extends Controller
{
    public function index()
    {
        return view('excel.excel');
    }
    
    public function guiasExcel()
    {
        Excel::create('Guias Excel', function($excel) {
            $excel->sheet('Guias', function($sheet) {
                $guias = Guia::select('nombre as NOMBRE','apellido as APELLIDO','dui as DUI')->get();                
                $sheet->fromArray($guias);
                $sheet->setOrientation('landscape');
                $sheet->getStyle('A1:C1')->ApplyFromArray(array(
                    'fill'=>array(
                        'type'=>PHPExcel_Style_Fill::FILL_SOLID,
                        'color'=>array('rgb'=>'82e0aa')
                    )
                ));
                $sheet->setBorder('A1:C4','thin');
            });
        })->export('xls');
    }
    
    public function unidadesExcel()
    {
        Excel::create('Unidades Excel', function($excel){
            $excel->sheet('Unidades',function($sheet){
                $unidades = transporte_model::select('nombre as NOMBRE','descripcion as DESCRIPCION','capacidad as CAPACIDAD')->get();
                $sheet->fromArray($unidades);
                $sheet->setOrientation('landscape');
                $sheet->getStyle('A1:C1')->ApplyFromArray(array(
                    'fill'=>array(
                        'type'=>PHPExcel_Style_Fill::FILL_SOLID,
                        'color'=>array('rgb'=>'82e0aa')
                    )
                ));
                $sheet->setBorder('A1:C4');
            });
        })->export('xls');
    }
    
    public function turistasExcel()
    {
        Excel::create('Turistas',function($excel){
           $excel->sheet('Turistas',function($sheet){
               $turista = turista_cliente::select('nombre','dui','direccion','telefono')->get();
               $sheet->fromArray($turista);
               $sheet->setOrientation('landscape');
               $sheet->getStyle('A1:C1')->ApplyFromArray(array(
                    'fill'=>array(
                        'type'=>PHPExcel_Style_Fill::FILL_SOLID,
                        'color'=>array('rgb'=>'82e0aa')
                    )
                ));
           });
        })->export('xls');
    }
}
