<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemascotaRequest;
use App\Http\Requests\UpdatemascotaRequest;
use App\Repositories\mascotaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class mascotaController extends AppBaseController
{
    /** @var  mascotaRepository */
    private $mascotaRepository;

    public function __construct(mascotaRepository $mascotaRepo)
    {
        $this->mascotaRepository = $mascotaRepo;
    }

    /**
     * Display a listing of the mascota.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mascotas = $this->mascotaRepository->all();

        return view('mascotas.index')
            ->with('mascotas', $mascotas);
    }

    /**
     * Show the form for creating a new mascota.
     *
     * @return Response
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created mascota in storage.
     *
     * @param CreatemascotaRequest $request
     *
     * @return Response
     */
    public function store(CreatemascotaRequest $request)
    {
        $input = $request->all();

        $mascota = $this->mascotaRepository->create($input);

        Flash::success('Mascota agregada satisfactoriamente.');

        return redirect(route('mascotas.index'));
    }

    /**
     * Display the specified mascota.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mascota = $this->mascotaRepository->find($id);

        if (empty($mascota)) {
            Flash::error('Mascota no se encontró');

            return redirect(route('mascotas.index'));
        }

        return view('mascotas.show')->with('mascota', $mascota);
    }

    /**
     * Show the form for editing the specified mascota.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mascota = $this->mascotaRepository->find($id);

        if (empty($mascota)) {
            Flash::error('Mascota no se encontró');

            return redirect(route('mascotas.index'));
        }

        return view('mascotas.edit')->with('mascota', $mascota);
    }

    /**
     * Update the specified mascota in storage.
     *
     * @param int $id
     * @param UpdatemascotaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemascotaRequest $request)
    {
        $mascota = $this->mascotaRepository->find($id);

        if (empty($mascota)) {
            Flash::error('Mascota no se encontró');

            return redirect(route('mascotas.index'));
        }

        $mascota = $this->mascotaRepository->update($request->all(), $id);

        Flash::success('Mascota actualizada satisfactoriamente.');

        return redirect(route('mascotas.index'));
    }

    /**
     * Remove the specified mascota from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mascota = $this->mascotaRepository->find($id);

        if (empty($mascota)) {
            Flash::error('Mascota no se encontró');

            return redirect(route('mascotas.index'));
        }

        $this->mascotaRepository->delete($id);

        Flash::success('Mascota eliminada correctamente.');

        return redirect(route('mascotas.index'));
    }
}
