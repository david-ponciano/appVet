<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatehistorialRequest;
use App\Http\Requests\UpdatehistorialRequest;
use App\Repositories\historialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class historialController extends AppBaseController
{
    /** @var  historialRepository */
    private $historialRepository;

    public function __construct(historialRepository $historialRepo)
    {
        $this->historialRepository = $historialRepo;
    }

    /**
     * Display a listing of the historial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $historials = $this->historialRepository->all();

        return view('historials.index')
            ->with('historials', $historials);
    }

    /**
     * Show the form for creating a new historial.
     *
     * @return Response
     */
    public function create()
    {
        return view('historials.create');
    }

    /**
     * Store a newly created historial in storage.
     *
     * @param CreatehistorialRequest $request
     *
     * @return Response
     */
    public function store(CreatehistorialRequest $request)
    {
        $input = $request->all();

        $historial = $this->historialRepository->create($input);

        Flash::success('Historial agregado satisfactoriamente.');

        return redirect(route('historials.index'));
    }

    /**
     * Display the specified historial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $historial = $this->historialRepository->find($id);

        if (empty($historial)) {
            Flash::error('Historial no se encontró');

            return redirect(route('historials.index'));
        }

        return view('historials.show')->with('historial', $historial);
    }

    /**
     * Show the form for editing the specified historial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $historial = $this->historialRepository->find($id);

        if (empty($historial)) {
            Flash::error('Historial no se encontró');

            return redirect(route('historials.index'));
        }

        return view('historials.edit')->with('historial', $historial);
    }

    /**
     * Update the specified historial in storage.
     *
     * @param int $id
     * @param UpdatehistorialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehistorialRequest $request)
    {
        $historial = $this->historialRepository->find($id);

        if (empty($historial)) {
            Flash::error('Historial no se encontró');

            return redirect(route('historials.index'));
        }

        $historial = $this->historialRepository->update($request->all(), $id);

        Flash::success('Historial actualizado correctamente.');

        return redirect(route('historials.index'));
    }

    /**
     * Remove the specified historial from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $historial = $this->historialRepository->find($id);

        if (empty($historial)) {
            Flash::error('Historial no se encontró');

            return redirect(route('historials.index'));
        }

        $this->historialRepository->delete($id);

        Flash::success('Historial eliminado correctamente.');

        return redirect(route('historials.index'));
    }
}
