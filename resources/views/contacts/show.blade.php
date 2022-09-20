@extends('layouts.dashboard.dashboard')
   
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>
    <div class="card border-secondary mb-3" style="max-width: 50rem;">
        <div class="card-header"><h3><strong>Name:</strong>  {{ $contact->name }}</h3></div>
        <div class="card-body text-secondary">
          <h5 class="card-title"> <strong>Email:</strong>    {{ $contact->email }}</h5>
          <h5 class="card-title"><strong>Phone:</strong>    {{ $contact->phone }}</h5>
          <p class="card-text"><strong>Subject:</strong>    {{ $contact->subject }}</p>
          <p class="card-text"><strong>Message:</strong>    {{ $contact->message }}</p>
        </div>
      </div>
@endsection