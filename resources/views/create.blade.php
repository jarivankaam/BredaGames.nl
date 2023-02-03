@extends('layouts.create')

@section('content')
        <form class="flex "action="/upload" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="row justify-content-center flex-column ">
                    @csrf
                    <div class="col-12 col-lg-6 col-sm-12 col-md-12">
                        <label for="firstname">voornaam</label>
                        <input type="text" name="firstname" id="firstname">
                    </div>
                    <div class="col-12 col-lg-6 col-sm-12 col-md-12">
                        <label for="surname">Achternaam</label>
                        <input type="text" name="surname" id="surname">
                    </div>
                    <div class="col-12 col-lg-6 col-sm-12 col-md-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="col-12 col-lg-6 col-sm-12 col-md-12">
                        <label for="phonenumber">Telefoonnummer</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <div class="col-12 col-lg-12 col-sm-12 col-md-12">
                        <label for="image">Image:</label>
                        <input name="image" id="image" type="file" accept="image/png, image/jpg, image/jpeg, image/svg" />
                    </div>
                    <div class="col-12 col-lg-12 col-sm-12 col-md-12">
                        <label for="comments">Opmerkingen</label>
                        <input type="text" name="comments" id="comments">
                    </div>
                    <div class="col-12 col-lg-12 col-sm-12 col-md-12 flex justify-content-center align-items-center">
                        <div class="button cta ">
                            <input type="submit">
                        </div>

                    </div>
                </div>
            </div>
        </form>
@endsection
