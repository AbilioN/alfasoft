<table class="container table  table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Actions</th>

      </tr>
    </thead>
    <tbody>

        @foreach ($contacts as $contact)
        <tr>
            <th scope="row">{{$contact->id}}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->contact}}</td>
            <td style="display:flex; justify-content:space-around;">
                <a href="{{route('contact.detail' , $contact->id)}}" class="btn btn-secondary">
                    <i class="fa fa-search" title="details" aria-hidden="true"></i>
                </a>
                <a href="{{route('contact.edit' , $contact->id)}}" class="btn btn-secondary">
                    <i class="fa fa-edit"  title="edit" aria-hidden="true"></i>
                </a>

                <form style="margin: 0; padding: 0;"   action="{{route('contact.delete')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="contact" value="{{$contact->id}}">
                    <button class="btn btn-danger" type="submit">
                        <i class="fa fa-trash"  title="delete" aria-hidden="true"></i>
                    </button>
                </form>
   
            </td>
        </tr>
        @endforeach
     
    </tbody>
  </table>