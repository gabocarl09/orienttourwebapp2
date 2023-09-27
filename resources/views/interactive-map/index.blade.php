@extends('layouts.app')

@section('template_title')
    Interactive Map
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Interactive Map') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('interactive-maps.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Shop Names</th>
										<th>Location</th>
										<th>Type Of Shop</th>
										<th>Homepages Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($interactiveMaps as $interactiveMap)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $interactiveMap->shop_names }}</td>
											<td>{{ $interactiveMap->location }}</td>
											<td>{{ $interactiveMap->type_of_shop }}</td>
											<td>{{ $interactiveMap->homepages_id }}</td>

                                            <td>
                                                <form action="{{ route('interactive-maps.destroy',$interactiveMap->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('interactive-maps.show',$interactiveMap->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('interactive-maps.edit',$interactiveMap->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $interactiveMaps->links() !!}
            </div>
        </div>
    </div>
@endsection
