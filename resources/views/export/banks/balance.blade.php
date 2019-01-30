<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped primary">
    <thead>
    <tr>
      <th>Bank</th>
      <th>Debit</th>
      <th>Credit</th>
      <th>Approved by</th>
      <th>Balance</th>
      <th>Time Created</th>
    </tr>
    </thead>
    <tbody>
    @foreach($balances as $balance)
    <tr>
      <td>{{ $balance->bank->bankname }}</td>
      <td>{{ $balance->debit }}</td>
      <td>{{ $balance->credit }}</td>
      <td>@if($balance->admin){{ $balance->admin->firstname }}@endif</td>
      <td>{{ $balance->balance }}</td>
      <td> {{ $balance->created_at }}</td>

    </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
      <th>Bank</th>
      <th>Debit</th>
      <th>Credit</th>
      <th>Approved by</th>
      <th>Balance</th>
      <th>Time Created</th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- /.box-body -->
