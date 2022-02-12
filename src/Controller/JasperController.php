<?php

namespace App\Controller;

use Jaspersoft\Client\Client;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JasperController extends AbstractController
{
    #[Route('/jasper', name: 'jasper')]
    public function index(Request $request): Response
    {
        $c = new \Jaspersoft\Client\Client(
          "http://127.0.0.1:11001/jasperserver", "jasperadmin", "jasperadmin", ""
        );
    
	$controls=array(); 
        $report = $c->reportService()->runReport('/reports/Blank_A4', 'pdf', null, null,$controls);
        return new Response($report, 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Reporte.pdf"'
               )
        );    
    
    }
}
