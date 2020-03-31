@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    Pizzas
                </div>
               
                <!--
                @for($i = 0; $i < count($pizzas); $i++)
                <p>Type: {{ $pizzas[$i]['type'] }} - Base: {{ $pizzas[$i]['base'] }}</p>
                @endfor
                -->

                @foreach($pizzas as $pizza)
                    <div>
                    <!--Loop es para ver caracteristicas del ciclo for-->
                        {{ $loop->index }} {{ $pizza['type']}} - {{ $pizza['base']}} 
                        @if($loop -> first)
                            <span>- first in the loop</span>
                        @endif
                        @if($loop -> last)
                            <span>- last in the loop</span>
                        @endif
                    </div>
                @endforeach

            </div>
        </div>
@endsection
