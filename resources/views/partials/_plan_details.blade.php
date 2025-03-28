 @foreach($current_plan_history['result_dates'] as $result_date)
 <tr>
   <th scope="row">{{$loop->iteration}}</th>
   <td>{{ $result_date['date'] }}</td>
   <td>{{ \App\Models\Setting::CURRENCY }} {{ number_format($result_date['amount'], 2) }}</td>
   <td>{{ ($result_date['is_due'] == 1) ? 'Payment is Delayed' : 'Payment on time' }}</td>
   <td>{{ $result_date['status'] == 1 ? 'Payment Completed' : 'Incomplete Payments' }}</td>

 </tr>
 @endforeach
 <!-- <tr colspan="4" style="text-align: end;">
   <th scope="row" colspan="4">Total Amount</th>
   <th scope="row" style="text-align: justify;">{{ \App\Models\Setting::CURRENCY }} {{number_format($current_plan_history['scheme']['total_amount'],2)}}</th>

 </tr> -->
 <tr colspan="4" style="text-align: end;">
   <th scope="row" colspan="4">Total Amount Paid </th>
   <th scope="row" style="text-align: justify;">{{ \App\Models\Setting::CURRENCY }} {{number_format($current_plan_history['total_amount_paid'],2)}}</th>

 </tr>
 <tr colspan="4" style="text-align: end;">
   <th scope="row" colspan="4">Balance Amount</th>
   <th scope="row" style="text-align: justify;"><?= ($current_plan_history['balance_amount'] > 0) ? \App\Models\Setting::CURRENCY ." ". number_format($current_plan_history['balance_amount'],2) : \App\Models\Setting::CURRENCY ." ". number_format(0, 2) ?></th>

 </tr>