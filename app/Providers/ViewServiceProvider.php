<?php

namespace App\Providers;



use App\Models\medicamento;
use App\Models\servicio;
use App\Models\medico;
use App\Models\colaborador;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['encuestas.fields'], function ($view) {
            $tbmedicoItems = medico::pluck('nombremedico','idmedico')->toArray();
            $view->with('tbmedicoItems', $tbmedicoItems);
        });
        View::composer(['encuestas.fields'], function ($view) {
            $tbservicioItems = servicio::pluck('nombreservicio','idservicio')->toArray();
            $view->with('tbservicioItems', $tbservicioItems);
        });
        View::composer(['encuestas.fields'], function ($view) {
            $tbcolaboradorItems = colaborador::pluck('nombrecolaborador','idcolaborador')->toArray();
            $view->with('tbcolaboradorItems', $tbcolaboradorItems);
        });
       
        View::composer(['recetas.fields'], function ($view) {
            $tbservicioItems = servicio::pluck('nombreservicio','idservicio')->toArray();
            $view->with('tbservicioItems', $tbservicioItems);
        });
        View::composer(['recetas.fields'], function ($view) {
            $tbmedicamentoItems = medicamento::pluck('nombremedicamento','idmedicamento')->toArray();
            $view->with('tbmedicamentoItems', $tbmedicamentoItems);
        });
        View::composer(['recetas.fields'], function ($view) {
            $tbcolaboradorItems = colaborador::pluck('nombrecolaborador','idcolaborador')->toArray();
            $view->with('tbcolaboradorItems', $tbcolaboradorItems);
        });
        View::composer(['recetas.fields'], function ($view) {
            $tbmedicoItems = medico::pluck('nombremedico','idmedico')->toArray();
            $view->with('tbmedicoItems', $tbmedicoItems);
        });
        View::composer(['reservacions.fields'], function ($view) {
            $tbservicioItems = servicio::pluck('nombreservicio','idservicio')->toArray();
            $view->with('tbservicioItems', $tbservicioItems);
        });
        View::composer(['reservacions.fields'], function ($view) {
            $tbmedicoItems = medico::pluck('nombremedico','idmedico')->toArray();
            $view->with('tbmedicoItems', $tbmedicoItems);
        });
        View::composer(['reservacions.fields'], function ($view) {
            $tbcolaboradorItems = colaborador::pluck('nombrecolaborador','idcolaborador')->toArray();
            $view->with('tbcolaboradorItems', $tbcolaboradorItems);
        });
        
        //
    }
}