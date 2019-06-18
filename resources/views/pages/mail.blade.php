@component('mail::message')
# Order Confirmation
Hi,
Your order has been received and your payment has been processed.
You will be contacted when your order is ready for pickup.

Here are your order details:

@component('mail::table')
| -------------|:----------------------:| 
| Flavour      | {{$order->flavour}}    |
| Size         | {{$order->size}}       |
| Icing        | {{$order->icing}}      |
| Addon        | {{$order->addon}}      |
| Inscription  | {{$order->inscription}}|
| Pickup date  | {{$order->date}}       |
@endcomponent

Thank you for sharing a sweet day with us,<br>
{{ config('app.name') }}
@endcomponent
