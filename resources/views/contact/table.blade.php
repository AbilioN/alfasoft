<table class="table  table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>

        @foreach ($contacts as $contact)
        <tr>
            <th scope="row">{{$contact->id}}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->contact}}</td>
            <td>
                <a href="{{route('contact.edit' , $contact->id)}}" class="btn btn-secondary">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </a>
                <a class="btn btn-danger">
                    <i class="fa fa-trash" aria-hidden="true"></i>

                </a>
            </td>
        </tr>
        @endforeach
     
    </tbody>
  </table>