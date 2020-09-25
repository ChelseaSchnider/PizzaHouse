@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
   <h1>Create a new Pizza</h1>
    
    <form action="{{ route('pizzas.store') }}" method="POST">
        @csrf
       <label for="name">Your name:</label>
       <input type="text" id="name" name="name"><br />
       <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
           <option value="margarita">Margarita</option>
           <option value="hawaiian">Hawaiian</option>
           <option value="Four Seasons">Four Seasons</option>
           <option value="Miami">Miami</option>
           <option value="Three Cheeses">Three Cheeses</option>
           <option value="meat supreme">Meat Supreme</option>
        </select>
        <br />
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
           <option value="cheesy crust">Cheesy Crust</option>
           <option value="garlic crust">Garlic Crust</option>
           <option value="thin">Thin crust</option>
           <option value="thick">Thick</option>
        </select><br />
        <fieldset>
          <label>Extra Toppings:</label><br />
          <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
          <input type="checkbox" name="toppings[]" value="olives">Olives<br />
          <input type="checkbox" name="toppings[]" value="bacon">Bacon<br />
          <input type="checkbox" name="toppings[]" value="Feta">Feta<br />
          <input type="checkbox" name="toppings[]" value="Avo">Avo<br />
          <input type="checkbox" name="toppings[]" value="salami">salami<br />
        </fieldset>
       <input type="submit" value="Order Pizza">
    </form>
    
</div>
@endsection