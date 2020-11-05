<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterazaRequest;
use App\Http\Requests\UpdaterazaRequest;
use App\Repositories\razaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class razaController extends AppBaseController
{
    /** @var  razaRepository */
    private $razaRepository;

    public function __construct(razaRepository $razaRepo)
    {
        $this->razaRepository = $razaRepo;
    }

    /**
     * Display a listing of the raza.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $razas = $this->razaRepository->all();

        return view('razas.index')
            ->with('razas', $razas);
    }

    /**
     * Show the form for creating a new raza.
     *
     * @return Response
     */
    public function create()
    {
        return view('razas.create');
    }

    /**
     * Store a newly created raza in storage.
     *
     * @param CreaterazaRequest $request
     *
     * @return Response
     */
    public function store(CreaterazaRequest $request)
    {
        $input = $request->all();

        $raza = $this->razaRepository->create($input);

        Flash::success('Raza agregada correctamente.');

        return redirect(route('razas.index'));
    }

    /**
     * Display the specified raza.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raza = $this->razaRepository->find($id);

        if (empty($raza)) {
            Flash::error('Raza no se encontró');

            return redirect(route('razas.index'));
        }

        return view('razas.show')->with('raza', $raza);
    }

    /**
     * Show the form for editing the specified raza.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raza = $this->razaRepository->find($id);

        if (empty($raza)) {
            Flash::error('Raza no se encontró');

            return redirect(route('razas.index'));
        }

        return view('razas.edit')->with('raza', $raza);
    }

    /**
     * Update the specified raza in storage.
     *
     * @param int $id
     * @param UpdaterazaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterazaRequest $request)
    {
        $raza = $this->razaRepository->find($id);

        if (empty($raza)) {
            Flash::error('Raza no se encontró');

            return redirect(route('razas.index'));
        }

        $raza = $this->razaRepository->update($request->all(), $id);

        Flash::success('Raza actualizado correctamente.');

        return redirect(route('razas.index'));
    }

    /**
     * Remove the specified raza from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raza = $this->razaRepository->find($id);

        if (empty($raza)) {
            Flash::error('Raza no se encontró');

            return redirect(route('razas.index'));
        }

        $this->razaRepository->delete($id);

        Flash::success('Raza eliminado correctamente.');

        return redirect(route('razas.index'));
    }
}
