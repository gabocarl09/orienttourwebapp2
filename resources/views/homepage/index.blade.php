@extends('layouts.app')

@section('template_title')
    Homepage
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Homepage') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('homepages.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Crafts Recommendation</th>
										<th>Login</th>
										<th>Register</th>
										<th>Premium Plan</th>
										<th>Places Section</th>
										<th>Categories</th>
										<th>Interactive Maps</th>
										<th>Crafts</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($homepages as $homepage)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $homepage->crafts_recommendation }}</td>
											<td>{{ $homepage->login }}</td>
											<td>{{ $homepage->register }}</td>
											<td>{{ $homepage->premium_plan }}</td>
											<td>{{ $homepage->places_section }}</td>
											<td>{{ $homepage->categories }}</td>
											<td>{{ $homepage->interactive_maps }}</td>
											<td>{{ $homepage->crafts }}</td>

                                            <td>
                                                <form action="{{ route('homepages.destroy',$homepage->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('homepages.show',$homepage->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('homepages.edit',$homepage->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $homepages->links() !!}
            </div>
        </div>
    </div>
@endsection
