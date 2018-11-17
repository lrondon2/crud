<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePQRRequest;
use App\Http\Requests\UpdatePQRRequest;
use App\Repositories\PQRRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PQRController extends AppBaseController
{
    /** @var  PQRRepository */
    private $pQRRepository;

    public function __construct(PQRRepository $pQRRepo)
    {
        $this->pQRRepository = $pQRRepo;
    }

    /**
     * Display a listing of the PQR.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pQRRepository->pushCriteria(new RequestCriteria($request));
        $pQRS = $this->pQRRepository->all();

        return view('p_q_r_s.index')
            ->with('pQRS', $pQRS);
    }

    /**
     * Show the form for creating a new PQR.
     *
     * @return Response
     */
    public function create()
    {
        return view('p_q_r_s.create');
    }

    /**
     * Store a newly created PQR in storage.
     *
     * @param CreatePQRRequest $request
     *
     * @return Response
     */
    public function store(CreatePQRRequest $request)
    {
        $input = $request->all();

        $pQR = $this->pQRRepository->create($input);

        Flash::success('P Q R saved successfully.');

        return redirect(route('pQRS.index'));
    }

    /**
     * Display the specified PQR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pQR = $this->pQRRepository->findWithoutFail($id);

        if (empty($pQR)) {
            Flash::error('P Q R not found');

            return redirect(route('pQRS.index'));
        }

        return view('p_q_r_s.show')->with('pQR', $pQR);
    }

    /**
     * Show the form for editing the specified PQR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pQR = $this->pQRRepository->findWithoutFail($id);

        if (empty($pQR)) {
            Flash::error('P Q R not found');

            return redirect(route('pQRS.index'));
        }

        return view('p_q_r_s.edit')->with('pQR', $pQR);
    }

    /**
     * Update the specified PQR in storage.
     *
     * @param  int              $id
     * @param UpdatePQRRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePQRRequest $request)
    {
        $pQR = $this->pQRRepository->findWithoutFail($id);

        if (empty($pQR)) {
            Flash::error('P Q R not found');

            return redirect(route('pQRS.index'));
        }

        $pQR = $this->pQRRepository->update($request->all(), $id);

        Flash::success('P Q R updated successfully.');

        return redirect(route('pQRS.index'));
    }

    /**
     * Remove the specified PQR from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pQR = $this->pQRRepository->findWithoutFail($id);

        if (empty($pQR)) {
            Flash::error('P Q R not found');

            return redirect(route('pQRS.index'));
        }

        $this->pQRRepository->delete($id);

        Flash::success('P Q R deleted successfully.');

        return redirect(route('pQRS.index'));
    }
}
