@extends('layouts.create')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-sm-12 col-md-12">
                <form class="flex justify-content-center flex-column"action="/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="firstname">voornaam</label>
                        <input type="text" name="firstname" id="firstname">
                    <label for="surname">Achternaam</label>
                        <input type="text" name="surname" id="surname">
                    <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    <label for="phonenumber">Telefoonnummer</label>
                        <input type="text" name="phone" id="phone">
                    <label for="image">Image:</label>
                        <input name="image" type="file" accept="image/png, image/jpg, image/jpeg, image/svg" />
                    <label for="comments">Opmerkingen</label>
                        <input type="text" name="comments" id="comments">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
