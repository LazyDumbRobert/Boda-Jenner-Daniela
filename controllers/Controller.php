<?php

namespace Controllers;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use MVC\Router;

class Controller {
    public static function index(Router $router) {
        $router->render('boda/index');
    }

    public static function registrarInvitado()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Acceder a los datos del formulario
            $nombre_invitado = $_POST['nombre_invitado'] ?? null;
            $departe_de = $_POST['departe_de'] ?? null;
            $felicitacion = $_POST['felicitacion'] ?? null;
    
            // Procesar los datos
            if ($nombre_invitado && $departe_de && $felicitacion) {
                $filePath = dirname(__DIR__) . '/public/build/files/invitados.xlsx';
              
                // Cargar el archivo existente
                $spreadsheet = IOFactory::load($filePath);
                $sheet = $spreadsheet->getActiveSheet();

                // Obtener la última fila con datos
                $lastRow = $sheet->getHighestRow() + 1; // Obtiene la siguiente fila disponible

                // Agregar los nuevos datos
                $sheet->setCellValue('A' . $lastRow, $nombre_invitado);
                $sheet->setCellValue('B' . $lastRow, ($departe_de == 1) ? 'Novio' : 'Novia');
                $sheet->setCellValue('C' . $lastRow, $felicitacion);

                // Guardar el archivo
                $writer = new Xlsx($spreadsheet);
                $writer->save($filePath);

                $response = [
                    'success' => 200,
                    'message' => 'Gracias por confirmar su asistencia!'
                ];
            } else {
                //retonar error si no existen datos
                $response = [
                    'success' => 400,
                    'message' => 'Ingresa datos para poder confirmar tu asistencia'
                ];
            }
    
            echo json_encode($response);
        }
    }

    public static function documento(){
        $filePath = dirname(__DIR__) . '/public/build/files/invitados.xlsx';
        if (file_exists($filePath)) {
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="invitados.xlsx"');
            header('Cache-Control: max-age=0');
    
            // Lee y envía el archivo al navegador
            readfile($filePath);
            exit(); // Termina la ejecución del script
        } else {
            // Maneja el caso en que el archivo no existe
            echo json_encode(['success' => 404, 'message' => 'El archivo no existe.']);
        }
    }
}