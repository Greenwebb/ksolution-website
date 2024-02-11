<?php

namespace App\Http\Livewire;

use App\Mail\ContactMessages;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{
    public $email, $messages, $subject, $name, $resp_message, $response = false;
    public function resetFilters(){
        $this->resetExcept(['email', 'messages', 'subject', 'name']);
    }
    public function render()
    {
        return view('livewire.contact-us');
    }

    public function submit(Request $req){

        try {
        // Create message record
        $details = ContactMessage::create([
            'name' => $req->name,
            'email' => $req->email,
            'subject'=> $req->subject,
            'message' => $req->message,
            'user_id' => null,
            'status' => 1
        ]);
        // Send contact message to administrator
        Mail::to(['nyeleti.bremah@gmail.com', 'customercare@k-solutions.com'])->send(new \App\Mail\ContactMessages($details));

        return response()->json(200);
        } catch (\Throwable $th) {
            $this->resp_message = 'Something went wrong. Could not send message';
            return response()->json(500);
        }

    }
}
