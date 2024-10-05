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
            $nombre_invitado = $_POST['invitado'] ?? $_POST['nombre_invitado'];
            $departe_de = $_POST['departe_de'];
            $felicitacion = $_POST['felicitacion'];
                // Procesar los datos
                $filePath = '../public/uploads/invitados.xlsx';
                try {
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
                        'message' => 'Tu asistencia se registró, gracias!'
                    ];
                } catch (\Throwable $e) {
                    $response = [
                        'success' => 400,
                        'message' => $e->getMessage()
                    ];
                    echo json_encode($response);
                }
               
                echo json_encode($response);
            }
    }

    public static function documento(){
        $filePath = '../public/uploads/invitados.xlsx';
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