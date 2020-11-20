<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function processPdf(Request $request){

        session([
                'name' => $request->name,
                'job_title' => $request->job_title,
                'location' => $request->location,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'github' => $request->github,
                'linkedin' => $request->linkedin,
                'career_profile' => $request->career_profile,
                'work_title' => $request->work_title,
                'company' => $request->company,
                'tasks' => $request->tasks,
                'date_from' => $request->date_from,
                'date_to' => $request->date_to,
                'present' => $request->present,
                'degree' => $request->degree,
                'course' => $request->course,
                'institution' => $request->institution,
                'year_ended' => $request->year_ended,
                'cert_title' => $request->cert_title,
                'cert_link' => $request->cert_link,
                'corporation' => $request->corporation,
                'cert_year' => $request->cert_year,
        ]);
        $string = implode(" / ",$request->industry_skill);
        session(['industry_skill' => $string]);

        return view('view-pdf');

    }
}
