@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-sm-8 col-lg-8 col-md-offset-2 col-sm-offset-2 col-lg-offset-2">
        <form action="/products/create" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Введите название:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alias">Введите alias:</label>
                <input type="text" name="alias" id="alias" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Введите цена:</label>
                <input type="text" name="price" id="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="short_description">Введите короткое описание:</label>
                <input type="text" name="short_description" id="short_description" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="categories_id">Введите category_id:</label>
                <input type="text" name="categories_id" id="categories_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Введите полное описание:</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            <div>
                <input type="submit" class="btn btn-danger">
            </div>
        </form>
    </div>
@stop