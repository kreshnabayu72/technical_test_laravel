<x-layout>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Job</th>
            <th>Divisi</th>
            <th>Edit/Delete</th>
        </tr>
        @foreach ($jobs as $job)   
        <tr>
            <td>{{$job->id}}</td>
            <td>{{$job->job_name}}</td>
            <td>{{$job->division}}</td>
            <td>
                <a href="/job/edit/{{$job->id}}">Edit</a>
                <form action="/job/delete/{{$job->id}}" method="POST">
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

<form action="/job" method="post" class="addJob">
    <h3>Input Job</h3>
    @csrf
    <div>
        <p>Name</p>
        <input type="text" name="job_name">
    </div>
   
    <div>
        <p>Division</p>
        <input type="text" name="division">
    </div>
   
    <input type="submit" value="Submit">
</form>

</x-layout>