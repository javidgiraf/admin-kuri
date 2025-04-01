      @if($current_plan_history['scheme']['scheme_type_id'] == \App\Models\SchemeType::FIXED_PLAN)
      <h5 class="card-title">Unpaid List</h5>
      @endif
      <style>
        .change {
          padding: 10px;
          border: 1px solid #4154f1;
          font-weight: 700;
          text-align: center;
          color: white;
          background: #4154f1;
        }

        .total-amount {
          font-weight: 700;
          text-align: end;
        }
      </style>
      @if($current_plan_history['scheme']['scheme_type_id'] == \App\Models\SchemeType::FIXED_PLAN)
      <p class="change">
        Please check the list of unpaid date to pay from admin.
      </p>
      @endif
      <div class="success"></div>
      <div class="error_transaction_msg"></div>
      @if($current_plan_history['scheme']['scheme_type_id'] == \App\Models\SchemeType::FIXED_PLAN)
      <table class="table" id="upaid-list" width="100%">
        <thead>
          <tr>
            <th scope="col">
              <input type="checkbox" name="all_permission" class="all_permission">
            </th>
            <th scope="col">Date</th>
            <th scope="col">Amount</th>


          </tr>
        </thead>

        <tbody>
          @if(count($current_plan_history['result_dates']) > 0)
          @foreach($current_plan_history['result_dates'] as $result_date)

          @if($result_date['status']=='0'||$result_date['status']=='2')
          <tr id="tableRow_{{$result_date['date']}}">
            <th scope="row">
              <input type="checkbox" id="{{$result_date['date']}}" class='permission'>

            </th>
            <td id="date{{$result_date['date']}}">{{ $result_date['date'] }}</td>
            <td width="30%" id="amount{{$result_date['date']}}">@if($result_date['schemeType'] == \App\Models\SchemeType::FIXED_PLAN) {{ $result_date['amount'] }} @else <input type="text" name="amount" id="deposit_amount{{ $result_date['date'] }}" class="form-control"> @endif</td>



          </tr>
          @endif
          @endforeach

          @else
          <tr>
            <td colspan="3">No Records available in table</td>
          </tr>
          @endif

        </tbody>
      </table>
      @else

      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
          <input type="date" name="payment_date" class="form-control" id="payment_date">
          <span class="paymentDateError"></span>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Amount</label>
        <div class="col-sm-10">
          <input type="text" name="payment_amount" class="form-control" id="payment_amount">
          <span class="paymentAmountError"></span>
        </div>
      </div>

      @endif
      <div class="col-md-12">
        <input type="button" class="btn btn-success <?= $current_plan_history['scheme']['scheme_type_id'] == \App\Models\SchemeType::FIXED_PLAN ? 'btn-add-deposit-model' : '' ?>" id="submit" value="Submit" style="background:#4154f1;">
      </div>

      </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pay the deposit</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div id="yu" style="overflow:auto;height:200px;">
                <table id="permissionsTable" class="table">
                  <!-- Table headers (if any) -->
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <!-- Table body -->
                  <tbody>
                    <!-- Table rows will be dynamically added here -->
                  </tbody>

                </table>
              </div>
              <div class="row">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: left;">Enter Transaction Details</h5>
                  <div id="frmtrasaction"></div>

                  <!-- Horizontal Form -->
                  <form id="frm_transation_details">
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-12 col-form-label">Transaction No</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="transaction_no" name="transaction_no">
                        <span class="transaction_no"></span>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-12 col-form-label">Receipt Upload</label>
                      <div class="col-sm-12">
                        <input type="file" class="form-control" name="receipt_upload" id="receipt_upload" accept=".svg,.png,.jpeg,.jpg,.webp,.pdf">
                        <span class="receipt_upload"></span>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-12 col-form-label">Payment Method</label>
                      <div class="col-sm-12">
                        <select name="payment_method" class="form-control" id="payment_method">
                          <option value="">Select</option>
                          <option value="cash">Cash</option>
                          <option value="bank">Bank</option>
                          <option value="upi">Upi</option>
                        </select>
                        <span class="payment_method"></span>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-12 col-form-label">Payment Response</label>
                      <div class="col-sm-12">
                        <textarea class="form-control" id="payment_response" name="payment_response"></textarea>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-12 col-form-label">Remark</label>
                      <div class="col-sm-12">
                        <textarea class="form-control" id="remark" name="remark"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12" id="transaction-loading" style="text-align: center;display:none">
                      <img src="{{asset('assets/img/loading.gif')}}" style="width: 25%;">
                    </div>

                  </form><!-- End Horizontal Form -->

                </div>
              </div>

              <div class="row total-amount">
                <p>Total Amount : ₹ <span id="total-amount-value"></span></p>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary btn-pay-deposit">Save changes</button>
              <div class="col-md-12" id="loading" style="text-align: center;display:none">
                <img src="{{asset('assets/img/loading.gif')}}" style="width: 35%;">
              </div>
            </div>
          </div>
        </div>
      </div>


      <script>
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });


        function number_format(number, decimals, dec_point, thousands_sep) {
          number = parseFloat(number);
          if (!isFinite(number) || !Number.isInteger(decimals) || decimals < 0) {
            throw new TypeError('number_format: invalid parameters');
          }
          decimals = decimals || 0;
          dec_point = dec_point || '.';
          thousands_sep = thousands_sep || ',';
          var parts = number.toFixed(decimals).toString().split('.');
          parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);
          return parts.join(dec_point);
        }

        var table = $('#permissionsTable');

        function clearTable() {
          table.find("tr:gt(0)").remove(); // Remove all rows except the header
          $('#total-amount-value').val('0');
        }
        var checkedPermissions = [];
        var totalAmount = 0;
        $('.btn-add-deposit-model').on('click', function() {
          $('.error_transaction_msg').removeClass('alert alert-danger').html('');
          clearTable(); // Clear the table before appending new rows
          totalAmount = 0; // Reset total amount
          checkedPermissions = []; // Reset the permissions array
          let hasZeroAmount = false; // Flag to track zero amounts

          $.each($('.permission'), function() {
            if ($(this).is(':checked')) {
              const id = $(this).attr('id');
              const date = id;
              let amount = $('#amount' + id).html();

              // If amount is not set in the table cell, check input field
              if (!amount || isNaN(amount)) {
                amount = $("#deposit_amount" + id).val();
              }

              amount = parseFloat(amount || 0); // Ensure amount is a valid number

              if (amount === 0) {
                hasZeroAmount = true; // Set flag if zero amount is found
              }

              totalAmount += amount; // Add to total amount

              // Push the permission object to the array
              checkedPermissions.push({
                date: date,
                amount: amount
              });

              // Create the table row
              const row = $('<tr>').append(
                $('<td>').text(date),
                $('<td>').text(number_format(amount, 2, '.', ','))
              );
              table.append(row);
            }
          });

          // Show error message if zero amount is detected
          if (hasZeroAmount || totalAmount == 0) {

            toastr.error('Error: One or more selected items have an amount of zero. Please check and update the amounts.');
            return false;
          }

          // Display the modal if validation passes
          $('#total-amount-value').text(number_format(totalAmount, 2, '.', ','));
          $('#exampleModal').modal('show');
        });
      </script>
      <script>
        $(document).ready(function() {

          $('.btn-add-deposit-model').prop('disabled', true);
          $('[name="all_permission" ]').on('click', function() {
            $('.btn-add-deposit-model').prop('disabled', false);
            if ($(this).is(':checked')) {
              $.each($('.permission'), function() {
                $(this).prop('checked', true);
              });
            } else {
              $.each($('.permission'), function() {
                $(this).prop('checked', false);
                $('.btn-add-deposit-model').prop('disabled', true);
              });
            }
          });

          <?php if($current_plan_history['scheme']['scheme_type_id'] !== \App\Models\SchemeType::FIXED_PLAN): ?>

          $(document).on('click', '#submit', function() {
            let payment_date = $("#payment_date").val();
            let payment_amount = $("#payment_amount").val();

            $('.is-invalid').removeClass('is-invalid');
            $('.invalid-feedback').removeClass('invalid-feedback').text('');

            // Validation
            if (!payment_date) {
              $("#payment_date").addClass('is-invalid');
              $(".paymentDateError").addClass('invalid-feedback').text('Payment date is required.');
              return;
            }
            if (!payment_amount || isNaN(payment_amount) || parseFloat(payment_amount) <= 0) {
              $("#payment_amount").addClass('is-invalid');
              $(".paymentAmountError").addClass('invalid-feedback').text('Payment amount must be a positive number.');
              
              return;
            }

            // Proceed if validation passes
            $("#exampleModal").modal('show');

            totalAmount = payment_amount;
            checkedPermissions.push({
                date: payment_date,
                amount: payment_amount
            });
            const row = $('<tr>').append(
              $('<td>').text(payment_date),
              $('<td>').text(number_format(totalAmount, 2, '.', ','))
            );
            $("#permissionsTable tbody").html(row);
            $('#total-amount-value').text(number_format(payment_amount, 2, '.', ','));
          });
        });

        <?php endif; ?>



        function checkIfAnyChecked() {
          return $('.permission:checked').length > 0;
        }
        $(document).delegate(".permission", "click", function() {
          if ($(this).is(':checked')) {
            $('.btn').prop('disabled', false);
          } else {
            $('.btn').prop('disabled', !checkIfAnyChecked());
            //$('.btn').prop('disabled', true);
          }
        });
      </script>