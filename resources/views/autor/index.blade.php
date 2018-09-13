<!-- Trae el template general del sistema -->
@extends('layouts.template') 

@section('title')
	Sistema Impactos - Autor
@endsection

<!-- COMIENZA SECCIÓN DE AUTOR -->
@section('content')
	<div class="container-fluid">
	    <div class="row">
			<div class="col-md-12">
	            <div class="card">
	                <div class="header">
	                    <h4 class="title"> Listado de Autores </h4>
	                </div><br>
	           		
	           		<div>
                        <div class="col-md-10">
                        	 {!! Form::open(array('url'=>'autor','method'=>'GET', 'role'=>'search'))!!}
	                            <div >
	                                <input type="text" class="form-control border-input" placeholder="Buscar... ">
	                                <button type="submit" class="btn btn-primary"><img length="30px" width="30px" src="{{asset('assets/img/buscar.svg')}}"></img></button>
	                            </div>
	                            {!! Form::close() !!}
                          
                        </div>
                    </div>

		            <div class="content table-responsive table-full-width">
	                    <table class="table table-striped">
	                        <thead>
	                            <th> Id </th>
	                           	<th> Pseudónimo </th>
	                            <th> Nombre </th>
	                           	<th> Opciones </th>
	                        </thead>
	                        <tbody>
	                        	@foreach ($autores as $item)
	                        	<tr>
	                        		<td> {{ $item->Id_autor }}</td>
	                        		<td> {{ $item->pseudonimo }}</td>
	                        		<td> {!! $item->nombre !!} {!! $item->apellidos !!}</td>
	                        		<td> 
										<a href="{{URL::action('Autor\AutorController@edit',$item ->Id_autor)}}">
                                     		<img length="30px" width="30px" src="{{asset('assets/img/editar.svg')}}" title="Editar"></img>
                                		</a>
                                		<a href="" data-target="#modal-delete-{{$item->Id_autor}}" data-toggle="modal">
                                    		<img length="30px" width="30px" src="{{asset('assets/img/eliminar.svg')}}" title="Eliminar"></img>
                                		</a>
                                		<a href="{{URL::action('Autor\AutorController@show',$item ->Id_autor)}}">
                                        	<img length="30px" width="30px" src="{{asset('assets/img/ver.svg')}}" title="Ver Detalle"></img>
                                 		</a>
	                        		</td>
	                        	</tr>
	                        	@endforeach        
	                        </tbody>
	                    </table>
	                    {!! $autores->render() !!}
			        </div>
	            </div>
	        </div>
	    </div>
	</div>
<!-- TERMINA SECCION DE AUTOR-->
@endsection