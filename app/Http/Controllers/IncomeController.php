<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IncomeHead;
use App\Income;
use Carbon\Carbon;
class IncomeController extends Controller
{
    public function index(){


        $income_head_details = IncomeHead::latest()->get();
        $income_details = Income::latest()->get();


        return view('admin.income.index',['income_head_details'=>$income_head_details,'income_details'=>$income_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'income_head' => 'required|max:350',
            'name' => 'required|max:350',
            'date' => 'required|max:350',
            'amount' => 'required|max:350',

        ]);

        // Create New User
        $user = new Income();
        $user->income_head = $request->income_head;
        $user->des = $request->des;
        $user->invoice_number= $request->invoice_number;
        $user->name = $request->name;
        $user->month = date('F');
        $user->year =date('Y');
        $user->date = $request->date;

        $user->amount = $request->amount;
        if ($request->hasfile('doc')) {
            $file = $request->file('doc');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->doc =  $filename;
        }

        $user->save();

        return redirect()->route('admin.income')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Income::find($request->id);
        $user->income_head = $request->income_head;
        $user->des = $request->des;
        $user->invoice_number= $request->invoice_number;
        $user->name = $request->name;
        $user->date = $request->date;

        $user->amount = $request->amount;
        if ($request->hasfile('doc')) {
            $file = $request->file('doc');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->doc =  $filename;
        }

        $user->save();

        return redirect()->route('admin.income')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Income::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.income')->with('error','Deleted successfully!');
    }

    public function income_search_list(){



        $income_head_details = IncomeHead::latest()->get();
        $income_details = Income::latest()->get();


        return view('admin.income.income_search.index',['income_head_details'=>$income_head_details,'income_details'=>$income_details]);


    }


    public function income_search(Request $request){

        $search_type_value = $request->search_type_value;
        $from_date = Carbon::parse($request->from_date)->toDateTimeString();
        $to_date = Carbon::parse($request->to_date)->toDateTimeString();;
        $search_text = $request->search_text;
        $button_value = $request->search_full;

        if($button_value == 'search_full'){



            $final_search_result = Income::where('name','LIKE','%'.$search_text.'%')
                           ->orWhere('income_head','LIKE','%'.$search_text.'%')
                           ->orWhere('des','LIKE','%'.$search_text.'%')
                           ->orWhere('invoice_number','LIKE','%'.$search_text.'%')

                           ->get();




        }else{


            //search_type_wise_search

            if( $search_type_value == 'today'){

                $today_date = date('Y-m-d');

                $final_search_result = Income::whereDate('created_at', Carbon::today())->get();

            }elseif($search_type_value == 'this_week'){


                $final_search_result = Income::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

            }elseif($search_type_value == 'last_week'){



                $final_search_result = Income::whereBetween('created_at',
                [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()]
            )->get();

            }elseif($search_type_value == 'this_month'){

                $final_search_result = Income::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get();

            }elseif($search_type_value == 'last_month'){

                $final_search_result = Income::whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->get();

            }elseif($search_type_value == 'last_3_month'){

                $final_search_result = Income::whereBetween('created_at',
                [Carbon::now()->subMonth(3), Carbon::now()]
            )->get();

            }elseif($search_type_value == 'last_6_month'){

                $final_search_result = Income::whereBetween('created_at',
                [Carbon::now()->subMonth(6), Carbon::now()]
            )->get();

            }elseif($search_type_value == 'last_12_month'){

                $final_search_result = Income::whereBetween('created_at',
                [Carbon::now()->subYear(), Carbon::now()]
            )->get();

            }elseif($search_type_value == 'this_year'){


                $final_search_result = Income::where('year', date('Y'))->get();

            }elseif($search_type_value == 'last_year'){


                $final_search_result = Income::whereYear('created_at', date('Y', strtotime('-1 year')))->get();

            }elseif($search_type_value == 'period'){

                $final_search_result = Income::whereBetween('created_at',[$from_date,$request->to_date])
                ->get();

            }



//search_type_wise_search


        }

        return view('admin.income.income_search.search_result',['final_search_result'=>$final_search_result]);
    }
}
