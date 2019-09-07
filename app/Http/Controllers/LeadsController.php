<?php

namespace App\Http\Controllers;

use App\Lead;

use Illuminate\Http\Request;

class LeadsController extends Controller
{
    
	/* -------------------- *\
		CRUD Functions
	\* -------------------- */

	public function create(Request $data) {
		if (Lead::where('email', $data->email)->count() > 0) {
			return response()->json(false, 200);
		} else {
			$lead = new Lead;
			$lead->iteration = env('ITERATION_VERSION');
			$lead->email = $data->email;
			$lead->save();

			return response()->json(true, 200);
		}
	}

	public function read() {
		return response()->json(Lead::find($_GET['lead_id'])->toArray(), 200);
	}

	public function delete(Request $data) {
		$lead = Lead::find($data->lead_id);
		$lead->status = 0;
		$lead->save();

		return response()->json(true, 200);
	}

}
