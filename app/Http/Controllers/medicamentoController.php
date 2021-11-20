<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemedicamentoRequest;
use App\Http\Requests\UpdatemedicamentoRequest;
use App\Repositories\medicamentoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class medicamentoController extends AppBaseController
{
    /** @var  medicamentoRepository */
    private $medicamentoRepository;

    public function __construct(medicamentoRepository $medicamentoRepo)
    {
        $this->medicamentoRepository = $medicamentoRepo;
    }

    /**
     * Display a listing of the medicamento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $medicamentos = $this->medicamentoRepository->all();

        return view('medicamentos.index')
            ->with('medicamentos', $medicamentos);
    }

    /**
     * Show the form for creating a new medicamento.
     *
     * @return Response
     */
    public function create()
    {
        return view('medicamentos.create');
    }

    /**
     * Store a newly created medicamento in storage.
     *
     * @param CreatemedicamentoRequest $request
     *
     * @return Response
     */
    public function store(CreatemedicamentoRequest $request)
    {
        $input = $request->all();

        $medicamento = $this->medicamentoRepository->create($input);

        Flash::success('Medicamento saved successfully.');

        return redirect(route('medicamentos.index'));
    }

    /**
     * Display the specified medicamento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medicamento = $this->medicamentoRepository->find($id);

        if (empty($medicamento)) {
            Flash::error('Medicamento not found');

            return redirect(route('medicamentos.index'));
        }

        return view('medicamentos.show')->with('medicamento', $medicamento);
    }

    /**
     * Show the form for editing the specified medicamento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medicamento = $this->medicamentoRepository->find($id);

        if (empty($medicamento)) {
            Flash::error('Medicamento not found');

            return redirect(route('medicamentos.index'));
        }

        return view('medicamentos.edit')->with('medicamento', $medicamento);
    }

    /**
     * Update the specified medicamento in storage.
     *
     * @param int $id
     * @param UpdatemedicamentoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemedicamentoRequest $request)
    {
        $medicamento = $this->medicamentoRepository->find($id);

        if (empty($medicamento)) {
            Flash::error('Medicamento not found');

            return redirect(route('medicamentos.index'));
        }

        $medicamento = $this->medicamentoRepository->update($request->all(), $id);

        Flash::success('Medicamento updated successfully.');

        return redirect(route('medicamentos.index'));
    }

    /**
     * Remove the specified medicamento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medicamento = $this->medicamentoRepository->find($id);

        if (empty($medicamento)) {
            Flash::error('Medicamento not found');

            return redirect(route('medicamentos.index'));
        }

        $this->medicamentoRepository->delete($id);

        Flash::success('Medicamento deleted successfully.');

        return redirect(route('medicamentos.index'));
    }
}
