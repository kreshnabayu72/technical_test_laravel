<x-layout>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Employee</th>
            <th>Job ID</th>
            <th>Edit/Delete</th>
        </tr>
        @foreach ($employees as $employee)   
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->employee_name}}</td>
            <td>{{$employee->job_id}}</td>
            <td>
                <a href="/employee/edit/{{$employee->id}}">Edit</a>
                <form action="/employee/delete/{{$employee->id}}" method="POST">
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

<form action="/employee" method="post" class="addEmployee">
    <h3>Input Employee</h3>
    @csrf
    <div>
        <p>Name</p>
        <input type="text" name="employee_name">
    </div>

    <div>
        <p>Jabatan</p>
        <select name="job_id">
            @foreach ($jobs as $job)
            <option value="{{$job->id}}">{{$job->job_name}}</option>
            @endforeach
        </select>
    </div>
   
    <input type="submit" value="Submit">
</form>

</x-layout>