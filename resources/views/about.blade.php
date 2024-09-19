@extends('layouts.main')
    @section('content')
    
    
    <!-- Navigation bar -->
    @include('layouts.nav')



    <form>
        <label for="fname">First Name:</label>
        <input type="text" name="" id="firstName" /><br />
        <label for="fname">Last Name:</label>
        <input type="text" name="" id="lastName" /><br />
        <label for="fname">Reg Number :</label>
        <input type="text" name="" id="regNumber" /><br />
        <label for="fname">Year of study :</label>
        <input type="number" name="" id="yearOfStudy" /><br />
        <button type="button" onclick="register()">Register</button>
        <button>Cancel</button>
    </form>

    
    
    
    <!-- footer bar -->
     @include('layouts.footer')
    @endsection()