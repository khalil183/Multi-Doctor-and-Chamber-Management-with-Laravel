<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td>{{ $doctor->name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $doctor->email }}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>{{ $doctor->phone }}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{ $doctor->address }}</td>
    </tr>
    <tr>
        <td>Category</td>
        <td>{{ $doctor->category->name }}</td>
    </tr>
    <tr>
        <td>Education</td>
        <td>{{ $doctor->education }}</td>
    </tr>
    <tr>
        <td>Experience</td>
        <td>{{ $doctor->experience }}</td>
    </tr>
    <tr>
        <td>Bio</td>
        <td>{{ $doctor->bio }}</td>
    </tr>
    <tr>
        <td>View Profile</td>
        <td> <a href="" class="btn btn-primary"> Click Here</a> </td>
    </tr>


</table>
