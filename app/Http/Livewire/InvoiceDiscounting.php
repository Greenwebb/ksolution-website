<?php

namespace App\Http\Livewire;

use App\Models\UserLoan;
use App\Models\UserLoanFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class InvoiceDiscounting extends Component
{
    use WithFileUploads;
    public $desc = 'Invoice Discount';
    public $api = 'apply-invoice-disc';
    public $fname, $lname, $email, $phone, $docFile, $cust_type, $pracrafiles, $nrc, $passportfiles, $chequefiles, $zrafiles, $nrcfiles, $utilityfiles, $payslipfiles, $letterfiles, $amount;
    
    public function render()
    {
        return view('livewire.invoice-discounting');
    }
    public function submit(Request $req){
            $details = UserLoan::create([
                'desc' => 'Invoice Discount',
                'name' => $req->name,
                'customer_type' => $req->cust_type,
                'nrc_no' => $req->nrc_no,
                'total_loan' => $req->total_loan,
                'email' => $req->email,
                'phone' => $req->phone,
                'amount_balance' => $req->total_loan,
                'next_date' => '2022-10-26 14:26:57'
             ]);
             foreach ($req->files as $x => $value) {
                 foreach ($value as $key => $file) {
                     $path = $req->file('upload_imgs')[$key]->store('applied_loans');
                     UserLoanFile::create([
                         'loan_id' => $details->id,
                         'name' => $path
                     ]);
                 }
                 continue;
             }
             // Send email to borrower
             Mail::to([$req->email,'customercare@k-solutions.com'])->send(new \App\Mail\LoanApplicationEmail($details));
             return response()->json(['success'=>'Applied Successfully']);
     
    }
}
