<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetallecitaRequest;
use App\Http\Requests\UpdateDetallecitaRequest;
use App\Repositories\DetallecitaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DetallecitaController extends AppBaseController
{
    /** @var  DetallecitaRepository */
    private $detallecitaRepository;

    public function __construct(DetallecitaRepository $detallecitaRepo)
    {
        $this->detallecitaRepository = $detallecitaRepo;
    }

    /**
     * Display a listing of the Detallecita.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detallecitas = $this->detallecitaRepository->all();

        return view('detallecitas.index')
            ->with('detallecitas', $detallecitas);
    }

    /**
     * Show the form for creating a new Detallecita.
     *
     * @return Response
     */
    public function create()
    {
        return view('detallecitas.create');
    }

    /**
     * Store a newly created Detallecita in storage.
     *
     * @param CreateDetallecitaRequest $request
     *
     * @return Response
     */
    public function store(CreateDetallecitaRequest $request)
    {
        $input = $request->all();

        $detallecita = $this->detallecitaRepository->create($input);

        Flash::success('Detallecita saved successfully.');

        return redirect(route('detallecitas.index'));
    }

    /**
     * Display the specified Detallecita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detallecita = $this->detallecitaRepository->find($id);

        if (empty($detallecita)) {
            Flash::error('Detallecita not found');

            return redirect(route('detallecitas.index'));
        }

        return view('detallecitas.show')->with('detallecita', $detallecita);
    }

    /**
     * Show the form for editing the specified Detallecita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detallecita = $this->detallecitaRepository->find($id);

        if (empty($detallecita)) {
            Flash::error('Detallecita not found');

            return redirect(route('detallecitas.index'));
        }

        return view('detallecitas.edit')->with('detallecita', $detallecita);
    }

    /**
     * Update the specified Detallecita in storage.
     *
     * @param int $id
     * @param UpdateDetallecitaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetallecitaRequest $request)
    {
        $detallecita = $this->detallecitaRepository->find($id);

        if (empty($detallecita)) {
            Flash::error('Detallecita not found');

            return redirect(route('detallecitas.index'));
        }

        $detallecita = $this->detallecitaRepository->update($request->all(), $id);

        Flash::success('Detallecita updated successfully.');

        return redirect(route('detallecitas.index'));
    }

    /**
     * Remove the specified Detallecita from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detallecita = $this->detallecitaRepository->find($id);

        if (empty($detallecita)) {
            Flash::error('Detallecita not found');

            return redirect(route('detallecitas.index'));
        }

        $this->detallecitaRepository->delete($id);

        Flash::success('Detallecita deleted successfully.');

        return redirect(route('detallecitas.index'));
    }
}
