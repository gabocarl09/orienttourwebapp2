@extends('layouts.app')

@section('template_title')
    Craft
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Craft') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('crafts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Craft Name</th>
										<th>Craft Image</th>
										<th>Price</th>
										<th>Categories Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($crafts as $craft)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $craft->craft_name }}</td>
											<td>{{ $craft->craft_image }}</td>
											<td>{{ $craft->price }}</td>
											<td>{{ $craft->categories_id }}</td>

                                            <td>
                                                <form action="{{ route('crafts.destroy',$craft->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('crafts.show',$craft->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('crafts.edit',$craft->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $crafts->links() !!}
            </div>
        </div>
    </div>
@endsection
