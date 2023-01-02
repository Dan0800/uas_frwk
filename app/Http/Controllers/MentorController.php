<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMentorRequest;
use App\Http\Requests\UpdateMentorRequest;
use App\Repositories\MentorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MentorController extends AppBaseController
{
    /** @var MentorRepository $mentorRepository*/
    private $mentorRepository;

    public function __construct(MentorRepository $mentorRepo)
    {
        $this->mentorRepository = $mentorRepo;
    }

    /**
     * Display a listing of the Mentor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mentors = $this->mentorRepository->all();

        return view('mentors.index')
            ->with('mentors', $mentors);
    }

    /**
     * Show the form for creating a new Mentor.
     *
     * @return Response
     */
    public function create()
    {
        return view('mentors.create');
    }

    /**
     * Store a newly created Mentor in storage.
     *
     * @param CreateMentorRequest $request
     *
     * @return Response
     */
    public function store(CreateMentorRequest $request)
    {
        $input = $request->all();

        $mentor = $this->mentorRepository->create($input);

        Flash::success('Mentor saved successfully.');

        return redirect(route('mentors.index'));
    }

    /**
     * Display the specified Mentor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mentor = $this->mentorRepository->find($id);

        if (empty($mentor)) {
            Flash::error('Mentor not found');

            return redirect(route('mentors.index'));
        }

        return view('mentors.show')->with('mentor', $mentor);
    }

    /**
     * Show the form for editing the specified Mentor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mentor = $this->mentorRepository->find($id);

        if (empty($mentor)) {
            Flash::error('Mentor not found');

            return redirect(route('mentors.index'));
        }

        return view('mentors.edit')->with('mentor', $mentor);
    }

    /**
     * Update the specified Mentor in storage.
     *
     * @param int $id
     * @param UpdateMentorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMentorRequest $request)
    {
        $mentor = $this->mentorRepository->find($id);

        if (empty($mentor)) {
            Flash::error('Mentor not found');

            return redirect(route('mentors.index'));
        }

        $mentor = $this->mentorRepository->update($request->all(), $id);

        Flash::success('Mentor updated successfully.');

        return redirect(route('mentors.index'));
    }

    /**
     * Remove the specified Mentor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mentor = $this->mentorRepository->find($id);

        if (empty($mentor)) {
            Flash::error('Mentor not found');

            return redirect(route('mentors.index'));
        }

        $this->mentorRepository->delete($id);

        Flash::success('Mentor deleted successfully.');

        return redirect(route('mentors.index'));
    }
}
