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
                   {!! Form::model($pQR, ['route' => ['pQRS.update', $pQR->id], 'method' => 'patch']) !!}

                        @include('p_q_r_s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection