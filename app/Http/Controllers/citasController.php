<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecitasRequest;
use App\Http\Requests\UpdatecitasRequest;
use App\Repositories\citasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class citasController extends AppBaseController
{
    /** @var  citasRepository */
    private $citasRepository;

    public function __construct(citasRepository $citasRepo)
    {
        $this->citasRepository = $citasRepo;
    }

    /**
     * Display a listing of the citas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $citas = $this->citasRepository->all();

        return view('citas.index')
            ->with('citas', $citas);
    }

    /**
     * Show the form for creating a new citas.
     *
     * @return Response
     */
    public function create()
    {
        return view('citas.create');
    }

    /**
     * Store a newly created citas in storage.
     *
     * @param CreatecitasRequest $request
     *
     * @return Response
     */
    public function store(CreatecitasRequest $request)
    {
        $input = $request->all();

        $citas = $this->citasRepository->create($input);

        Flash::success('Citas agregada correctamente.');

        return redirect(route('citas.index'));
    }

    /**
     * Display the specified citas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $citas = $this->citasRepository->find($id);

        if (empty($citas)) {
            Flash::error('Citas no se encontró');

            return redirect(route('citas.index'));
        }

        return view('citas.show')->with('citas', $citas);
    }

    /**
     * Show the form for editing the specified citas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $citas = $this->citasRepository->find($id);

        if (empty($citas)) {
            Flash::error('Citas no se encontró');

            return redirect(route('citas.index'));
        }

        return view('citas.edit')->with('citas', $citas);
    }

    /**
     * Update the specified citas in storage.
     *
     * @param int $id
     * @param UpdatecitasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecitasRequest $request)
    {
        $citas = $this->citasRepository->find($id);

        if (empty($citas)) {
            Flash::error('Citas not found');

            return redirect(route('citas.index'));
        }

        $citas = $this->citasRepository->update($request->all(), $id);

        Flash::success('Citas actualizada correctamente.');

        return redirect(route('citas.index'));
    }

    /**
     * Remove the specified citas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $citas = $this->citasRepository->find($id);

        if (empty($citas)) {
            Flash::error('Citas no se encontró');

            return redirect(route('citas.index'));
        }

        $this->citasRepository->delete($id);

        Flash::success('Citas eliminada correctamente.');

        return redirect(route('citas.index'));
    }
}
