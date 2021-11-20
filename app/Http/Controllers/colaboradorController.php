<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecolaboradorRequest;
use App\Http\Requests\UpdatecolaboradorRequest;
use App\Repositories\colaboradorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class colaboradorController extends AppBaseController
{
    /** @var  colaboradorRepository */
    private $colaboradorRepository;

    public function __construct(colaboradorRepository $colaboradorRepo)
    {
        $this->colaboradorRepository = $colaboradorRepo;
    }

    /**
     * Display a listing of the colaborador.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $colaboradors = $this->colaboradorRepository->all();

        return view('colaboradors.index')
            ->with('colaboradors', $colaboradors);
    }

    /**
     * Show the form for creating a new colaborador.
     *
     * @return Response
     */
    public function create()
    {
        return view('colaboradors.create');
    }

    /**
     * Store a newly created colaborador in storage.
     *
     * @param CreatecolaboradorRequest $request
     *
     * @return Response
     */
    public function store(CreatecolaboradorRequest $request)
    {
        $input = $request->all();

        $colaborador = $this->colaboradorRepository->create($input);

        Flash::success('Colaborador saved successfully.');

        return redirect(route('colaboradors.index'));
    }

    /**
     * Display the specified colaborador.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $colaborador = $this->colaboradorRepository->find($id);

        if (empty($colaborador)) {
            Flash::error('Colaborador not found');

            return redirect(route('colaboradors.index'));
        }

        return view('colaboradors.show')->with('colaborador', $colaborador);
    }

    /**
     * Show the form for editing the specified colaborador.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $colaborador = $this->colaboradorRepository->find($id);

        if (empty($colaborador)) {
            Flash::error('Colaborador not found');

            return redirect(route('colaboradors.index'));
        }

        return view('colaboradors.edit')->with('colaborador', $colaborador);
    }

    /**
     * Update the specified colaborador in storage.
     *
     * @param int $id
     * @param UpdatecolaboradorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecolaboradorRequest $request)
    {
        $colaborador = $this->colaboradorRepository->find($id);

        if (empty($colaborador)) {
            Flash::error('Colaborador not found');

            return redirect(route('colaboradors.index'));
        }

        $colaborador = $this->colaboradorRepository->update($request->all(), $id);

        Flash::success('Colaborador updated successfully.');

        return redirect(route('colaboradors.index'));
    }

    /**
     * Remove the specified colaborador from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $colaborador = $this->colaboradorRepository->find($id);

        if (empty($colaborador)) {
            Flash::error('Colaborador not found');

            return redirect(route('colaboradors.index'));
        }

        $this->colaboradorRepository->delete($id);

        Flash::success('Colaborador deleted successfully.');

        return redirect(route('colaboradors.index'));
    }
}
