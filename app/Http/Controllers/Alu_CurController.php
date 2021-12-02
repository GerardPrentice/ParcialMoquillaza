<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlu_CurRequest;
use App\Http\Requests\UpdateAlu_CurRequest;
use App\Repositories\Alu_CurRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Alu_CurController extends AppBaseController
{
    /** @var  Alu_CurRepository */
    private $aluCurRepository;

    public function __construct(Alu_CurRepository $aluCurRepo)
    {
        $this->aluCurRepository = $aluCurRepo;
    }

    /**
     * Display a listing of the Alu_Cur.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $aluCurs = $this->aluCurRepository->all();

        return view('alu__curs.index')
            ->with('aluCurs', $aluCurs);
    }

    /**
     * Show the form for creating a new Alu_Cur.
     *
     * @return Response
     */
    public function create()
    {
        return view('alu__curs.create');
    }

    /**
     * Store a newly created Alu_Cur in storage.
     *
     * @param CreateAlu_CurRequest $request
     *
     * @return Response
     */
    public function store(CreateAlu_CurRequest $request)
    {
        $input = $request->all();

        $aluCur = $this->aluCurRepository->create($input);

        Flash::success('Alu  Cur saved successfully.');

        return redirect(route('aluCurs.index'));
    }

    /**
     * Display the specified Alu_Cur.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aluCur = $this->aluCurRepository->find($id);

        if (empty($aluCur)) {
            Flash::error('Alu  Cur not found');

            return redirect(route('aluCurs.index'));
        }

        return view('alu__curs.show')->with('aluCur', $aluCur);
    }

    /**
     * Show the form for editing the specified Alu_Cur.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aluCur = $this->aluCurRepository->find($id);

        if (empty($aluCur)) {
            Flash::error('Alu  Cur not found');

            return redirect(route('aluCurs.index'));
        }

        return view('alu__curs.edit')->with('aluCur', $aluCur);
    }

    /**
     * Update the specified Alu_Cur in storage.
     *
     * @param int $id
     * @param UpdateAlu_CurRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlu_CurRequest $request)
    {
        $aluCur = $this->aluCurRepository->find($id);

        if (empty($aluCur)) {
            Flash::error('Alu  Cur not found');

            return redirect(route('aluCurs.index'));
        }

        $aluCur = $this->aluCurRepository->update($request->all(), $id);

        Flash::success('Alu  Cur updated successfully.');

        return redirect(route('aluCurs.index'));
    }

    /**
     * Remove the specified Alu_Cur from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aluCur = $this->aluCurRepository->find($id);

        if (empty($aluCur)) {
            Flash::error('Alu  Cur not found');

            return redirect(route('aluCurs.index'));
        }

        $this->aluCurRepository->delete($id);

        Flash::success('Alu  Cur deleted successfully.');

        return redirect(route('aluCurs.index'));
    }
}
