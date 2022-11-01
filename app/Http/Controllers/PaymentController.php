<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct(){
        return $this->middleware("auth");
    }

    public function index(){
        $allPayments = Payment::latest()
        ->where("approved", true)
        ->where("debited", true)
        ->paginate(12);

        return view("payments.index", [
            "allPayments" => $allPayments,
        ]);;
    }

    public function getPaymentByDepartment(Request $request){
        $paymentByDepartment = Payment::where("department", $request->department)
        ->where("approved", true)
        ->paginate(12);
        return view("payment.department", [
            "paymentByDepartment" => $paymentByDepartment,
        ]);
    }
}
