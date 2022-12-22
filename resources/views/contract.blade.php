<x-layout>
    <table>
        <tr>
            <th>ID</th>
            <th>Detail Contract</th>
            <th>Employee ID</th>
            <th>Batas Kontrak</th>
            <th>Edit/Delete</th>
        </tr>
        @foreach ($contracts as $contract)   
        <tr>
            <td>{{$contract->id}}</td>
            <td>{{$contract->contract_detail}}</td>
            <td>{{$contract->employee_id}}</td>
            <td>{{$contract->expired_at}}</td>
            <td>
                <a href="/contract/edit/{{$contract->id}}">Edit</a>
                <form action="/contract/delete/{{$contract->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href='#' onclick='this.parentNode.submit();'>Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
<div>
  
</div>

<form action="/contract" method="post" class="addContract">
    <h3>Input Contract</h3>
    @csrf
    <div>
        <p>Employee</p>
        <select name="employee_id">
            @foreach ($employees as $employee)
            <option value="{{$employee->id}}">{{$employee->employee_name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <p>Detail</p>
        <textarea name="contract_detail"cols="30" rows="10"></textarea>
    </div>
    <div>
        <p>Batas Kontrak</p>
        <input type="datetime-local" name="expired_at">
    </div>
   
    <input type="submit" value="Submit">
</form>

</x-layout>