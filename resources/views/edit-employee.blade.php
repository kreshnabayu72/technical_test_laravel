<x-layout>
    <h1>Edit Employee</h1>
    <form action="/employee/{{$employee->id}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <p>Name</p>
            <input type="text" name="employee_name" value="{{$employee->employee_name}}">
        </div>
        <div>
            <p>Jabatan</p>
            <select name="job_id" value=>
            @foreach ($jobs as $job)
                @if($job->id == $employee->job_id)
                <option value="{{$job->id}}" selected>{{$job->job_name}}</option>
                @else
                <option value="{{$job->id}}">{{$job->job_name}}</option>
                @endif
            @endforeach
        </select>
        </div>
        <input type="submit" value="Save">
    </form>
</x-layout>