<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateusuariosRequest;
use App\Http\Requests\UpdateusuariosRequest;
use App\Repositories\usuariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class usuariosController extends AppBaseController
{
    /** @var  usuariosRepository */
    private $usuariosRepository;

    public function __construct(usuariosRepository $usuariosRepo)
    {
        $this->usuariosRepository = $usuariosRepo;
    }

    /**
     * Display a listing of the usuarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usuarios = $this->usuariosRepository->all();

        return view('usuarios.index')
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new usuarios.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created usuarios in storage.
     *
     * @param CreateusuariosRequest $request
     *
     * @return Response
     */
    public function store(CreateusuariosRequest $request)
    {
        $input = $request->all();

        $usuarios = $this->usuariosRepository->create($input);

        Flash::success('Usuarios guardados satisfactoriamente.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios no encontrados');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.show')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for editing the specified usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios no encontrados');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.edit')->with('usuarios', $usuarios);
    }

    /**
     * Update the specified usuarios in storage.
     *
     * @param int $id
     * @param UpdateusuariosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateusuariosRequest $request)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios no encontrados');

            return redirect(route('usuarios.index'));
        }

        $usuarios = $this->usuariosRepository->update($request->all(), $id);

        Flash::success('Usuarios actualizados satisfactoriamente.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified usuarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios no encontrados');

            return redirect(route('usuarios.index'));
        }

        $this->usuariosRepository->delete($id);

        Flash::success('Usuarios eliminados correctamente.');

        return redirect(route('usuarios.index'));
    }
}
