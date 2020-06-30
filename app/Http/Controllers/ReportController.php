<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Letter as Letter;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Address as Address;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

class ReportController extends Controller
{

    //Exporter toutes les lettres
    public function exportAll()
    {
        $letters = Letter::all();
      
        $html = '';
    
        foreach ($letters as $letter){
        
            $view = view('reports.letter')->with(compact('letter'));
            $html .= $view->render().' ';
            
        }
        
          $pdf = PDF::loadHTML($html);
          
         return $pdf->download('lettres.pdf');
        
    }



    //Generer un pdf pour la lettre
    public function letterPdf(Letter $letter)
    {
        view()->share('reports.letter', compact('letter'));
        $pdf = PDF::loadView('reports.letter', compact('letter'));
        return $pdf->stream('lettre.pdf');
    }

 //Generer un pdf pour la reponse
    public function answerPdf(Answer $answer)
    {
        view()->share('reports.answer', compact('answer'));
        $pdf = PDF::loadView('reports.answer', compact('answer'));
        return $pdf->stream('reponse.pdf');
    }


    //Exporter toutes les adresses en pdf
    public function exportAddresses(){
        $addresses = Address::all();
        //view()->share('reports.addresses', compact('addresses'));
        $pdf = PDF::loadView('reports.addresses', compact('addresses'));
        return $pdf->stream('adresses.pdf');
    }
}
