<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\LoanApplicationEmail;
use App\Models\UserLoan;
use Illuminate\Support\Facades\Mail;
use Livewire\WithFileUploads;

class HomeComponent extends Component
{
    use WithFileUploads;
    public $submitted, $fname, $lname, $email, $phone, $docFile, $cust_type, $pracrafiles, $nrc, $zrafiles, $nrcfiles, $utilityfiles, $payslipfiles, $letterfiles, $amount;
    public $isLoading = false, $ui = true;

    public function render()
    {
        return view('livewire.home-component');
    }

    public function submit(){
        // $this->validate();
        $this->ui = false;
        $this->isLoading = true;
        // Personal Loan.
        $nrc_file = $this->nrcfiles->store('applied_loans');
        $utilityfiles = $this->utilityfiles->store('applied_loans');
        $letterfiles = $this->letterfiles->store('applied_loans');
        $payslipfiles = $this->payslipfiles->store('applied_loans');
        
        $details = UserLoan::create([
           'desc' => 'Personal',
           'name' => $this->fname.' '.$this->lname,
           'file' => $nrc_file ?? '',
           'file2' => $utilityfiles ?? '',
           'file3' => $letterfiles ?? '',
           'file4' => $payslipfiles ?? '',
           'customer_type' => $this->cust_type,
           'nrc_no' => $this->nrc,
           'total_loan' => $this->amount,
           'email' => $this->email,
           'phone' => $this->phone,
           'amount_balance' => $this->amount,
           'next_date' => '2022-10-26 14:26:57'
        ]);

        
        // Send email to borrower
        Mail::to([$this->email])->send(new \App\Mail\LoanApplicationEmail($details));

        return redirect()->to('/successfully-applied');

    }
}

