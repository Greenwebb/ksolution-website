<?php

namespace App\Http\Livewire;

use App\Models\NewsSubscriber;
use Illuminate\Http\Request;
use Livewire\Component;



class AboutUsComponent extends Component
{

    public $email;
    public function mount(){
        // dd('am about us');
    }

    public function render()
    {
        return view('livewire.about-us-component');
    }

    public function subscribeToNewsletter(Request $req){
        try {
            NewsSubscriber::create([
                'email' => $req->email,
                'session' => $req->session,
            ]);
             
            //  Mail::to(['customercare@k-solutions.com'])->send(new \App\Mail\LoanApplicationEmail($details));
             return response()->json(['success'=>'Applied Successfully']);
     
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
