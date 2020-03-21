<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Group;
use App\SMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $type = $_GET['type'];
        if ($type == 'all') {
            $contacts = Contact::count();
            return view("admin.sms.all", compact("contacts"));
        } elseif ($type == 'contacts') {
            $contacts = Contact::all();
            return view("admin.sms.contact", compact("contacts"));
        } elseif ($type == 'group') {
            $groups = Group::all();
            return view("admin.sms.group", compact("groups"));
        } elseif ($type == 'show') {
            $messages = SMS::orderBy('created_at', 'DESC')->get();
            return view("admin.sms.index", compact("messages"));
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $type = $request->type;

        if ($type == 'all') {
            SMS::create([
                'msg' => $request->msg,
                'user_id' => Auth::user()->id,
                'to' => 'ALL',
            ]);

            $contacts = Contact::all();
            foreach ($contacts as $contact) {
                SMS::sms($contact->tel, $request->msg);
            }
        }
        if ($type == 'group') {
            $to = serialize($request->to);
            SMS::create([
                'msg' => $request->msg,
                'user_id' => Auth::user()->id,
                'to' => $to,
            ]);


            for ($i = 0; $i <= count($request->to) - 1; $i++) {
                $contacts = Contact::where('group_id', $request->to[$i])->get();

                foreach ($contacts as $contact) {
                    SMS::sms($contact->tel, $request->msg);
                }
            }
        }
        if ($type == 'contact') {

            $to = serialize($request->to);
            SMS::create([
                'msg' => $request->msg,
                'user_id' => Auth::user()->id,
                'to' => $to,
            ]);


            for ($i = 0; $i <= count($request->to) - 1; $i++) {
                $contact = Contact::findOrFail($request->to[$i]);
                SMS::sms($contact->tel, $request->msg);
            }
        }


        $request->session()->flash('sent', 'sent');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SMS  $sMS
     * @return \Illuminate\Http\Response
     */
    public function show(SMS $sMS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SMS  $sMS
     * @return \Illuminate\Http\Response
     */
    public function edit(SMS $sMS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SMS  $sMS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SMS $sMS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SMS  $sMS
     * @return \Illuminate\Http\Response
     */
    public function destroy(SMS $sMS)
    {
        //
    }
}
