<x-layout>
    <h1>Edit Job</h1>
    <form action="/job/{{$job->id}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <p>Name</p>
            <input type="text" name="job_name" value="{{$job->job_name}}">
        </div>
        <div>
            <p>Division</p>
            <input type="text" name="division" value="{{$job->division}}">
        </div>
        <input type="submit" value="Save">
    </form>
</x-layout>