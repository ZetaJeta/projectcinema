<form action="{{route('employees.store')}}" method="post" enctype="multipart/form-data">
    >
    @csrf
    <input type="text" name="name" value="1111">
    <input type="file" name="image">
    <input type="submit" value="Save">
</form>