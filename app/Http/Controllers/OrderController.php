<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Twilio\Rest\Client;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with("product","user")->get();
        
        return view("dashboard.orders.index",["orders" => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        try {
            if(auth()->check()){
                $cart = session()->get('cart');
                
            if ($cart) {
                foreach ($cart as $key => $item) {

                    $product_name = $item['name'];
                    $product_type = $item['type'];

                    $order = Order::create([
                        'product_id' => $item['product_id'],
                        'user_id' => Auth::user()->id,
                        'qty' => $item['quantity'],
                        'status' => 0
                    ]);
                    $username = Auth::user()->name;

                    $message = "New order created by $username for product: $product_name";

                    $this->sendMessage($message,$product_type);

                }
            }


            session()->forget('cart');

            return response()->json(['success' => true, 'message' => 'Order created successfully']);
            
        }else{
                return response()->json(['success' => false, 'error' => 'You are not logged in']);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }



    public function sendMessage($message,$type) {

        $data_setting = Setting::first();

        $account_sid = $data_setting->sid;
        $auth_token = $data_setting->token;
        $twilioNumber = $data_setting->twilio_number;
        $sender_number = $data_setting->send_number;
        $send_number2 = $data_setting->send_number2;

        // Twilio credentials
        $sid = config($account_sid);
        $token = config($auth_token);
        $twilio_number = config($twilioNumber);
    
        // Recipient's WhatsApp number
        
        if($type == 1){
            $to_number = "whatsapp:$sender_number";
        }else{
            $to_number = "whatsapp:$send_number2";
        }
        
        try {
            // Initialize Twilio client
            $client = new Client($sid, $token);
    
            // Send WhatsApp message
            $client->messages->create($to_number, [
                'from' => $twilio_number,
                'body' => $message
            ]);
    
            // Message sent successfully
            return response()->json(['message' => 'WhatsApp message sent successfully'], 200);
        } catch (\Exception $e) {
            
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $order = Order::where("id",$id)->update([
            "status" => $request->status
        ]);
        return response()->json(["status" => true,"message" => "Order updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);

        $order->delete();

        return response()->json(["status" => true,"message" => "Order deleted successfully"]);
    
    }
}
