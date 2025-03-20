<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjecutorController extends Controller
{
    public function getDashboardContent()
    {
        return view('partials.dashboard');
    }

    public function getMisInvestigacionesContent()
    {
        return view('partials.m_investigacion');
    }

    public function getColaboradoresContent()
    {
        return view('partials.colab');
    }

    public function getEstadisticasContent()
    {
        return view('partials.estadisticas');
    }

}

