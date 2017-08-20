<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\callerId;
use App\patientId;
use DB;

class caller extends Controller
{
   public function saveCallerForm(Request $request)
   {
   		$cid = callerId::find(1);
	   	$pid = patientId::find(1);



   		DB::table('caller')->insert(['caller_id'=>'c'.$cid->num,'nature_of_emergency'=>$request->emergency,'c_time'=>date('Y-m-d H:m:s'),'c_day'=>date('D'),'finishTime'=>date('Y-m-d H:m:s'),'name'=>$request->mobile]);


   		DB::table('patient')->insert(['patient_id'=>'p'.$pid->num,'caller_id'=>'c'.$cid->num,'hospital_id'=>'NA','patient_status'=>$request->patient,'gender'=>$request->gender,'age'=>0,'education'=>'Na','latitude'=>$request->lat,'longitude'=>$request->lon,'incident_place'=>'NA','response_time'=>0,'response_millage'=>0]);


   		$cid->num = $cid->num+1;
   		$cid->update();

   		$pid->num = $pid->num+1;
   		$pid->update();

         $data = $request->emergency;

            $data = '{"data":"'.$data.'"}';  

   $url = "https://rescue1122-1a319.firebaseio.com/.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");                               
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));
    $jsonResponse = curl_exec($ch);
   
    if(curl_errno($ch))
    {
        echo 'Curl error: ' . curl_error($ch);
    }
    curl_close($ch);




   		echo 1;

   		

   }

   public function getActiviesCommit(Request $request)
   {
   			$call = DB::table('caller')->where('status',0)->get();
   			$a = array();

   			foreach ($call as $key => $value) {
   				$p  = DB::table('patient')->where('caller_id',$value->caller_id)->first();
   				$a[] = array('lat'=>$p->latitude,'lon'=>$p->longitude,'caller_id'=>$p->caller_id,'name'=>$value->name);
   			}

   			return $a;



   }

   public function StopActivityCommit(Request $request)
   {
      
         DB::table('caller')->where('caller_id',$request->id)->update(['finishTime'=>date('Y-m-d H:m:s'),'status'=>1]);

          DB::table('patient')->where('caller_id',$request->id)->update(['hospital_id'=>$request->hos]);

          return 1;
   }
}
