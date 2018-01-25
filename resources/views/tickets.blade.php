@extends('layouts.app')
    <div class="bg">

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="hall">
                        <div class="hall__screen"></div>
                        <div class="seats">
                            <div class="seats__row"  data-index="0" data-id="{!! $chairs->id !!}">
                                @for ($i = 1; $i < 11; $i++)
                                     <?php $num= 'a'.$i ?>
                                    @if($chairs->$num == 1)
                                        <div class="seats__item seats__item_selected" data-a="a{{$i}}">
                                            <span class="seats__item-num" >{{$i}}</span>
                                        </div>
                                    @elseif($chairs->$num==0)
                                        <div class="seats__item" data-a="a{{$i}}">
                                            <span class="seats__item-num" >{{$i}}</span>
                                        </div>
                                    @endif


                                @endfor
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



