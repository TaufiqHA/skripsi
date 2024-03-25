<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Template;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class SpreadsheetController extends Controller
{
    public function create(Request $request)
    {
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getDefaultStyle()->getFont()->setName('Garamond');
        $sheet = $spreadsheet->getActiveSheet();
        $header_data = ['Nama', 'NIM', 'Angkatan','Dosen Pembimbing 1', 'Dosen Pembimbing 2', 'Status tugas akhir'];
        $sheet->fromArray($header_data, null, 'A1');

        if($request->has('filter'))
        {
            $mahasiswa = Mahasiswa::where('angkatan', 'LIKE', '%' . $request->filter . '%')->get();
        } else {
            $mahasiswa = Mahasiswa::all();
        }

        $row = 2;

        foreach($mahasiswa as $mhs){

            $dospem1 = "";
            $dospem2 = "";
            foreach($mhs->judul as $judul)
            {
                if($judul->status === 'Diterima')
                {
                    $dospem1 = $judul->skripsi->dospem1->nama;
                    $dospem2 = $judul->skripsi->dospem2->nama;
                    break;
                }
            }

            $data = [$mhs->nama, $mhs->nim, $mhs->angkatan, $dospem1, $dospem2, $mhs->statusTA];

            $row = (string) $row;
            $sheet->fromArray($data, null, "A". $row);
            $row = (int) $row;
            $row++;
        }

        $highestColumn = $sheet->getHighestColumn();
        $highestRow = $sheet->getHighestRow();


        foreach(range('A', $highestColumn) as $column)
        {
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }

        $styleArray = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'font' => [
                'bold' => true,
                'italic' => true,
                'name' => 'Arial',
            ]
        ];


        $style2 = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                'indent' => 1
            ],
        ];

        // $sheet->getStyle('A1:' . $highestColumn . $highestRow)->applyFromArray($styleArray);

        $sheet->getStyle('A1:' . $highestColumn . '1')->applyFromArray($styleArray);
        $sheet->getStyle('A2:' . $highestColumn . $highestRow)->applyFromArray($style2);

        $writer = new Xlsx($spreadsheet);
        $writer->save('testing.xlsx');
        $filename = 'testing.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'. $filename .'"');
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
}
