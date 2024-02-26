<div class="table-responsive">
    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Invoice Number</th>
                <th>Expense Head</th>
                <th>Date</th>
               <th>Amount</th>

            </tr>
        </thead>


        <tbody>
            @foreach($final_search_result as $key=>$user)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>

                {{ $user->name}}
            </td>
            <td>
                {{ $user->invoice_number}}
            </td>

            <td>
                {{ $user->income_head}}
            </td>

            <td>
                {{ date('d-m-Y', strtotime($user->date))}}

            </td>
            <td>
                {{ $user->amount}}
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
