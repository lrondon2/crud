@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P Q R
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'pQRS.store']) !!}

                        @include('p_q_r_s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
