<x-layout>
    <h1>Edit Contract</h1>
    <form action="/contract/{{$contract->id}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <p>Name</p>
            <input type="text" name="contract_detail" value="{{$contract->contract_detail}}">
        </div>
        <div>
            <p>Employee</p>
            <select name="employee_id">
                @foreach ($employees as $employee)
                <option value="{{$employee->id}}">{{$employee->employee_name}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Save">
    </form>
</x-layout>