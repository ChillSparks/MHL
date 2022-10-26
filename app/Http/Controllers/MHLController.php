<?php

namespace App\Http\Controllers;
use App\Models\Forms;
use Illuminate\Http\Request;
use App\Exports\FormsExport;
use Excel;


class MHLController extends Controller
{
    function form7get()
    {
        $data=forms::where('status','=','form7')->distinct()->select('created_at')->get();
        return view('form7',compact('data'));
    }

    function form10get()
    {
        $data=forms::where('status','=','form10')->distinct()->select('created_at')->get();
        return view('form10',compact('data'));
    }
    
    function formedit($created_at)
    {
        $data=forms::where('created_at','=',$created_at)->get();
        return view('formedit',compact('data','created_at'));
    }

    function formupdate(Request $request)
    {
        $updated_at=date('Y-m-d H:i:s');
        
        for($i=0;$i<count($request->fish);$i++)
        {
            $data=[
                'fish'  => $request->fish[$i],
                'uom'   => $request->uom[$i],
                'kg'    => $request->weight[$i],
                'size1d'=> $request->size1d[$i],
                'size1015'=>$request->size1015[$i],
                'size12'=> $request->size12[$i],
                'size23'=> $request->size23[$i],
                'size34'=> $request->size34[$i],
                'size35'=>$request->size35[$i],
                'size45'=> $request->size45[$i],
                'size46'=> $request->size46[$i],
                'size56'=> $request->size56[$i],
                'size58'=>$request->size58[$i],
                'size68'=> $request->size68[$i],
                'size810'=> $request->size810[$i],
                'size1012'=> $request->size1012[$i],
                'size1015'=>$request->size1015[$i],
                'size1215'=> $request->size1215[$i],
                'size15up'=> $request->size15up[$i],
                'tcarton'=> $request->tcarton[$i],
                'tkg'   => $request->tkg[$i],
                'status'=>$request->status,
                'updated_at'=>$updated_at
            ];
            forms::where('id', $request->fishid[$i])
                  ->update($data);
        }
        return back()->with('success','Form successfully updated');
    }
   
    function form10Save(Request $request)
    {    
        $created_at=date('Y-m-d H:i:s');
        $insert='false';
    
        for($i=0;$i<count($request->fish);$i++)
        {
            $data=[
            'fish'  => $request->fish[$i],
            'uom'   => $request->uom[$i],
            'kg'    => $request->weight[$i],
            'size1d'=> $request->size1d[$i],
            'size1015'=>$request->size1015[$i],
            'size12'=> $request->size12[$i],
            'size23'=> $request->size23[$i],
            'size34'=> $request->size34[$i],
            'size35'=>$request->size35[$i],
            'size45'=> $request->size45[$i],
            'size46'=> $request->size46[$i],
            'size56'=> $request->size56[$i],
            'size58'=>$request->size58[$i],
            'size68'=> $request->size68[$i],
            'size810'=> $request->size810[$i],
            'size1012'=> $request->size1012[$i],
            'size1015'=>$request->size1015[$i],
            'size1215'=> $request->size1215[$i],
            'size15up'=> $request->size15up[$i],
            'tcarton'=> $request->tcarton[$i],
            'tkg'   => $request->tkg[$i],
            'status'=>$request->status,
            'created_at'=>$created_at
            ];
            
            if($request->fish[$i]!=NULL)
            {
                forms::insert($data);
                $insert='true';
            }
    
        }  
            if($insert=='false')
                return back()->with('fail', 'No data was inserted');
            elseif($request->status=='form7')
                return back()->with('success', 'Form (7) successfully submitted');
            elseif($request->status=='form10')
                return back()->with('success', 'Form (10) successfully submitted');
            
    }

    function form7Save(Request $request)
    {    
        $created_at=date('Y-m-d H:i:s');
        $insert='false';
    
        for($i=0;$i<count($request->fish);$i++)
        {
            $data=[
            'fish'  => $request->fish[$i],
            'uom'   => $request->uom[$i],
            'kg'    => $request->weight[$i],
            'size1d'=> $request->size1d[$i],
            'size1015'=>$request->size1015[$i],
            'size12'=> $request->size12[$i],
            'size23'=> $request->size23[$i],
            'size34'=> $request->size34[$i],
            'size35'=>$request->size35[$i],
            'size45'=> $request->size45[$i],
            'size46'=> $request->size46[$i],
            'size56'=> $request->size56[$i],
            'size58'=>$request->size58[$i],
            'size68'=> $request->size68[$i],
            'size810'=> $request->size810[$i],
            'size1012'=> $request->size1012[$i],
            'size1015'=>$request->size1015[$i],
            'size1215'=> $request->size1215[$i],
            'size15up'=> $request->size15up[$i],
            'tcarton'=> $request->tcarton[$i],
            'tkg'   => $request->tkg[$i],
            'status'=>$request->status,
            'created_at'=>$created_at
            ];
            
            if($request->fish[$i]!=NULL)
            {
                forms::insert($data);
                $insert='true';
            }
    
        }  
            if($insert=='false')
                return back()->with('fail', 'No data was inserted');
            elseif($request->status=='form7')
                return back()->with('success', 'Form (7) successfully submitted');
            elseif($request->status=='form10')
                return back()->with('success', 'Form (10) successfully submitted');
            
    }

    public function excel(Request $request)
    {
        return Excel::download(new FormsExport($request->id),'Forms.xlsx');
    }

    public function csv(Request $request)
    {
        return Excel::download(new FormsExport($request->id),'Forms.csv');
    }
}
