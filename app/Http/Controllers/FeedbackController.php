<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackStoreRequest;
use App\Http\Requests\FeedbackUpdateRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function index(Request $request)
    {
        if(!checkPermission('read_feedback')){
           abort(403);
        }
        $feedback = Feedback::orderBy('id','DESC')->get();

        return view('feedback.index', [
            'feedback' => $feedback,
        ]);
    }

    public function create(Request $request)
    {
               abort(404);

    }

    public function store(FeedbackStoreRequest $request)
    {
                abort(404);

    }

    public function show(Request $request, Feedback $feedback)
    {
                abort(404);

    }

    public function edit(Request $request, Feedback $feedback)
    {
               abort(404);

    }

    public function update(FeedbackUpdateRequest $request, Feedback $feedback)
    {
                abort(404);

    }

    public function destroy(Request $request, Feedback $feedback)
    {
        if(!checkPermission('delete_feedback')){
           abort(403);
        }
        $feedback->delete();

        return redirect()->route('feedback.index');
    }
}
