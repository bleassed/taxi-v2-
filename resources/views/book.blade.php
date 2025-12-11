@extends('layouts.layout')


@section('title', 'create book')


@section('main')


    <div class = "form_container">
        <form class = "form">
            <div class = "input">
                <label for="exampleFormControlInput1" class="form-label">Date and time</label>
                <input class="form-control inp" type="datetime-local" id="date_time" name="date_time" min="0000-06-00T00:00" max="3000-06-10T00:00"/>
            </div>
            <div class = "input">
                <label for="exampleFormControlInput1" class="form-label">Whence</label>
                <input class="form-control inp" type="string" id="add_from" name="add_from"/>
            </div>
            <div class = "input">
                <label for="exampleFormControlInput1" class="form-label">Wherever</label>
                <input class="form-control inp" type="string" id="add_to" name="add_to"/>
            </div>
            <div class = "input">
            <label for="exampleFormControlInput1" class="form-label">Car class</label>
            <select class="form-select form-control" aria-label="select car class">
                <option value="1">economy</option>
                <option value="2">comfort</option>
                <option value="3">business</option>
                <option value="3">family</option>
            </select>
            </div>
            <div class = "input">
                <label for="exampleFormControlInput1" class="form-label">Comment</label>
                <input class="form-control inp" type="text" id="comment" name="comment"/>
            </div>




        </form>
    </div>


@endsection('main')