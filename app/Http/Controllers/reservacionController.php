<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatereservacionRequest;
use App\Http\Requests\UpdatereservacionRequest;
use App\Repositories\reservacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\Models\reservacion;


class reservacionController extends AppBaseController
{
    /** @var  reservacionRepository */
    private $reservacionRepository;

    public function __construct(reservacionRepository $reservacionRepo)
    {
        $this->reservacionRepository = $reservacionRepo;
    }

    /**
     * Display a listing of the reservacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$reservacions = $this->reservacionRepository->all();
        $reservacions = DB::table('tbreservacion')
            ->join('tbcolaborador', 'tbreservacion.idcolaborador', '=', 'tbcolaborador.idcolaborador')
            ->join('tbmedico', 'tbreservacion.idmedico', '=', 'tbmedico.idmedico')
            ->join('tbservicios', 'tbreservacion.idservicio', '=', 'tbservicios.idservicio')
            ->select('tbreservacion.idreservacion', 'tbcolaborador.nombrecolaborador', 'tbmedico.nombremedico','tbservicios.nombreservicio', 'tbreservacion.fechadereservacion','tbreservacion.hora')
            ->where('tbreservacion.deleted_at', null)
            ->get();


        return view('reservacions.index')
            ->with('reservacions', $reservacions);
    }

    /**
     * Show the form for creating a new reservacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('reservacions.create');
    }

    /**
     * Store a newly created reservacion in storage.
     *
     * @param CreatereservacionRequest $request
     *
     * @return Response
     */
    public function store(CreatereservacionRequest $request)
    {
        $input = $request->all();

        $reservacion = $this->reservacionRepository->create($input);

        Flash::success('Reservacion saved successfully.');

        return redirect(route('reservacions.index'));
    }

    /**
     * Display the specified reservacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //$reservacion = $this->reservacionRepository->find($id);
        $reservacion = reservacion::where('tbreservacion.idreservacion', $id)
        ->join('tbcolaborador', 'tbreservacion.idcolaborador', '=', 'tbcolaborador.idcolaborador')
            ->join('tbmedico', 'tbreservacion.idmedico', '=', 'tbmedico.idmedico')
            ->join('tbservicios', 'tbreservacion.idservicio', '=', 'tbservicios.idservicio')
            ->select('tbreservacion.idreservacion', 'tbcolaborador.nombrecolaborador', 'tbmedico.nombremedico','tbservicios.nombreservicio', 'tbreservacion.fechadereservacion','tbreservacion.hora','tbreservacion.created_at','tbreservacion.updated_at')->first();

        if (empty($reservacion)) {
            Flash::error('Reservacion not found');

            return redirect(route('reservacions.index'));
        }

        return view('reservacions.show')->with('reservacion', $reservacion);
    }

    /**
     * Show the form for editing the specified reservacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reservacion = $this->reservacionRepository->find($id);

        if (empty($reservacion)) {
            Flash::error('Reservacion not found');

            return redirect(route('reservacions.index'));
        }

        return view('reservacions.edit')->with('reservacion', $reservacion);
    }

    /**
     * Update the specified reservacion in storage.
     *
     * @param int $id
     * @param UpdatereservacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereservacionRequest $request)
    {
        $reservacion = $this->reservacionRepository->find($id);

        if (empty($reservacion)) {
            Flash::error('Reservacion not found');

            return redirect(route('reservacions.index'));
        }

        $reservacion = $this->reservacionRepository->update($request->all(), $id);

        Flash::success('Reservacion updated successfully.');

        return redirect(route('reservacions.index'));
    }

    /**
     * Remove the specified reservacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reservacion = $this->reservacionRepository->find($id);

        if (empty($reservacion)) {
            Flash::error('Reservacion not found');

            return redirect(route('reservacions.index'));
        }

        $this->reservacionRepository->delete($id);

        Flash::success('Reservacion deleted successfully.');

        return redirect(route('reservacions.index'));
    }
}
