<div class="container">

    <form action="{{route('contact.update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" value="{{$contact->id}}" class="form-control" name="contactId" id="contactId">

        <div class="mb-3">
            <label for="nameInput" class="form-label">Name</label>
            <input min="5" type="text" value="{{$contact->name}}" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="emailInput" class="form-label">Email address</label>
            <input type="email" value="{{$contact->email}}" class="form-control" name="email" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="contactInput" class="form-label">Contact</label>
            <input min="9" max="9" value="{{$contact->contact}}" type="text" name="contact" class="form-control" id="name">
        </div>
        <button class="btn btn-secondary" type="submit">
            Submit
        </button>
    </form>

    
</div>