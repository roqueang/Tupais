<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterecetaRequest;
use App\Http\Requests\UpdaterecetaRequest;
use App\Repositories\recetaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\Models\receta;

class recetaController extends AppBaseController
{
    /** @var  recetaRepository */
    private $recetaRepository;

    public function __construct(recetaRepository $recetaRepo)
    {
        $this->recetaRepository = $recetaRepo;
    }

    /**
     * Display a listing of the receta.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       // $recetas = $this->recetaRepository->all();
       $recetas = DB::table('tbreceta')
            ->join('tbcolaborador', 'tbreceta.idcolaborador', '=', 'tbcolaborador.idcolaborador')
            ->join('tbmedico', 'tbreceta.idmedico', '=', 'tbmedico.idmedico')
            ->join('tbmedicamento', 'tbreceta.idmedicamento', '=', 'tbmedicamento.idmedicamento')
            ->join('tbservicios', 'tbreceta.idservicio', '=', 'tbservicios.idservicio')
            ->select('tbreceta.idreceta', 'tbmedico.nombremedico','tbcolaborador.nombrecolaborador','tbmedicamento.nombremedicamento', 'tbservicios.nombreservicio', 'tbreceta.fechadeemision')
            ->where('tbreceta.deleted_at', null)
            ->get();

        return view('recetas.index')
            ->with('recetas', $recetas);
    }

    /**
     * Show the form for creating a new receta.
     *
     * @return Response
     */
    public function create()
    {
        return view('recetas.create');
    }

    /**
     * Store a newly created receta in storage.
     *
     * @param CreaterecetaRequest $request
     *
     * @return Response
     */
    public function store(CreaterecetaRequest $request)
    {
        $input = $request->all();

        $receta = $this->recetaRepository->create($input);

        Flash::success('Receta saved successfully.');

        return redirect(route('recetas.index'));
    }

    /**
     * Display the specified receta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $receta = $this->recetaRepository->find($id);

        if (empty($receta)) {
            Flash::error('Receta not found');

            return redirect(route('recetas.index'));
        }

        return view('recetas.show')->with('receta', $receta);
    }

    /**
     * Show the form for editing the specified receta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $receta = $this->recetaRepository->find($id);

        if (empty($receta)) {
            Flash::error('Receta not found');

            return redirect(route('recetas.index'));
        }

        return view('recetas.edit')->with('receta', $receta);
    }

    /**
     * Update the specified receta in storage.
     *
     * @param int $id
     * @param UpdaterecetaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterecetaRequest $request)
    {
        $receta = $this->recetaRepository->find($id);

        if (empty($receta)) {
            Flash::error('Receta not found');

            return redirect(route('recetas.index'));
        }

        $receta = $this->recetaRepository->update($request->all(), $id);

        Flash::success('Receta updated successfully.');

        return redirect(route('recetas.index'));
    }

    /**
     * Remove the specified receta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $receta = $this->recetaRepository->find($id);

        if (empty($receta)) {
            Flash::error('Receta not found');

            return redirect(route('recetas.index'));
        }

        $this->recetaRepository->delete($id);

        Flash::success('Receta deleted successfully.');

        return redirect(route('recetas.index'));
    }
}
