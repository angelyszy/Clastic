public function index()
{
    $orders = PickupOrder::with(['user', 'assignments.driver'])->get();
    return view('pickup-orders', compact('orders'));
}