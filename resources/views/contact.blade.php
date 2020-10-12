@extends('layouts.app')

@section('content')
 
<form method="POST">
 
    @csrf
 
    <p>
        <label for="name">Full Name</label>
        <input 
            type="text" id="name" name="name"            
            class="{{ $errors->has('name') ? 'invalid' : '' }}"            
            value="{{ old('name') }}" />
    </p>
 
    <p>
        <label for="business">Business Name</label>
        <input 
            type="business" id="business" name="business"
            class="{{ $errors->has('business') ? 'invalid' : '' }}" 
            value="{{ old('business') }}" />
    </p>
 
    <p>
        <label for="number">Contact Number</label>
        <input 
            type="text" id="number" name="number"
            class="{{ $errors->has('number') ? 'invalid' : '' }}"
            value="{{ old('number') }}" />
    </p>
 
 
    <p><button type="submit" class="button">GET A QUOTE</button></p>     
 
</form>
 
 
@endsection