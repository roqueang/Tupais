<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateencuestaRequest;
use App\Http\Requests\UpdateencuestaRequest;
use App\Repositories\encuestaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\Models\encuesta;


class encuestaController extends AppBaseController
{
    /** @var  encuestaRepository */
    private $encuestaRepository;

    public function __construct(encuestaRepository $encuestaRepo)
    {
        $this->encuestaRepository = $encuestaRepo;
    }

    /**
     * Display a listing of the encuesta.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$encuestas = $this->encuestaRepository->all();
        $encuestas = DB::table('tbencuesta')
            ->join('tbcolaborador', 'tbencuesta.idcolaborador', '=', 'tbcolaborador.idcolaborador')
            ->join('tbmedico', 'tbencuesta.idmedico', '=', 'tbmedico.idmedico')
            ->join('tbservicios', 'tbencuesta.idservicio', '=', 'tbservicios.idservicio')
            ->select('tbencuesta.idencuesta', 'tbcolaborador.nombrecolaborador','tbservicios.nombreservicio', 'tbmedico.nombremedico','tbencuesta.fechadeatencion','tbencuesta.calidaddeservicio', 'tbencuesta.comentario')
            ->where('tbencuesta.deleted_at', null)
            ->get();

        return view('encuestas.index')
            ->with('encuestas', $encuestas);
    }

    /**
     * Show the form for creating a new encuesta.
     *
     * @return Response
     */
    public function create()
    {
        return view('encuestas.create');
    }

    /**
     * Store a newly created encuesta in storage.
     *
     * @param CreateencuestaRequest $request
     *
     * @return Response
     */
    public function store(CreateencuestaRequest $request)
    {
        $input = $request->all();

        $encuesta = $this->encuestaRepository->create($input);

        Flash::success('Encuesta saved successfully.');

        return redirect(route('encuestas.index'));
    }

    /**
     * Display the specified encuesta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //$encuesta = $this->encuestaRepository->find($id);
        $encuesta = encuesta::where('tbencuesta.idencuesta', $id)
       ->join('tbcolaborador', 'tbencuesta.idcolaborador', '=', 'tbcolaborador.idcolaborador')
            ->join('tbmedico', 'tbencuesta.idmedico', '=', 'tbmedico.idmedico')
            ->join('tbservicios', 'tbencuesta.idservicio', '=', 'tbservicios.idservicio')
            ->select('tbencuesta.idencuesta', 'tbcolaborador.nombrecolaborador','tbservicios.nombreservicio','tbmedico.nombremedico','tbencuesta.fechadeatencion','tbencuesta.calidaddeservicio', 'tbencuesta.comentario','tbencuesta.created_at','tbencuesta.updated_at')->first();


        if (empty($encuesta)) {
            Flash::error('Encuesta not found');

            return redirect(route('encuestas.index'));
        }

        return view('encuestas.show')->with('encuesta', $encuesta);
    }

    /**
     * Show the form for editing the specified encuesta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $encuesta = $this->encuestaRepository->find($id);

        if (empty($encuesta)) {
            Flash::error('Encuesta not found');

            return redirect(route('encuestas.index'));
        }

        return view('encuestas.edit')->with('encuesta', $encuesta);
    }

    /**
     * Update the specified encuesta in storage.
     *
     * @param int $id
     * @param UpdateencuestaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateencuestaRequest $request)
    {
        $encuesta = $this->encuestaRepository->find($id);

        if (empty($encuesta)) {
            Flash::error('Encuesta not found');

            return redirect(route('encuestas.index'));
        }

        $encuesta = $this->encuestaRepository->update($request->all(), $id);

        Flash::success('Encuesta updated successfully.');

        return redirect(route('encuestas.index'));
    }

    /**
     * Remove the specified encuesta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $encuesta = $this->encuestaRepository->find($id);

        if (empty($encuesta)) {
            Flash::error('Encuesta not found');

            return redirect(route('encuestas.index'));
        }

        $this->encuestaRepository->delete($id);

        Flash::success('Encuesta deleted successfully.');

        return redirect(route('encuestas.index'));
    }
}
