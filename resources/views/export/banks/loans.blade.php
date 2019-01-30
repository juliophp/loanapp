<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>Loan Applicant</th>
      <th>Loan Amount</th>
      <th>Loan purpose</th>
      <th>University</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($loans as $loan)
    <tr>
      <td>{{ $loan->user->firstname . ' '. $loan->user->lastname }}</td>
      <td>{{ number_format($loan->loanamount, 2) }}</td>
      <td>{{ $loan->loanpurpose }}</td>
      <td> {{ $loan->user->university->universityname }}</td>
      <td>
        <a href="{{route('bank.loans.show', $loan->id)}}" class="btn btn-sm btn-success">Claim Record</a>
      </td>
    </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
      <th>Loan Applicant</th>
      <th>Loan Amount</th>
      <th>Loan purpose</th>
      <th>University</th>
      <th>Action</th>
    </tr>
    </tfoot>
  </table>
</div>
