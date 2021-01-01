@extends('admin.default.layouts.app')

@section('content')
<div class="aiz-titlebar mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col-md-6">
			<h1 class="h3">{{translate('Client Packages')}}</h1>
		</div>
		<div class="col-md-6 text-md-right">
			<a href="{{ route('client_package.create','client') }}" class="btn btn-primary">
				<span>{{translate('Create New Package')}}</span>
			</a>
		</div>
	</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="mb-0 h6">{{translate('All Packages')}}</h1>
            </div>
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{translate('Title')}}</th>
                            <th data-breakpoints="md">{{translate('Type')}}</th>
							<th data-breakpoints="sm">{{translate('Total sale')}}</th>
                            <th>{{translate('Badge')}}</th>
                            <th>{{translate('Price')}}</th>
                            <th data-breakpoints="md">{{translate('Recommended')}}</th>
                            <th data-breakpoints="md">{{translate('Icon')}}</th>
                            <th data-breakpoints="md">{{translate('Current Status')}}</th>
                            <th class="text-right">{{translate('Options')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($packages as $key => $package)
                            <tr>
                                <td>{{ ($key+1) + ($packages->currentPage() - 1)*$packages->perPage() }}</td>
                                <td>{{$package->name}}</td>
                                <td class="text-capitalize">{{str_replace('_', ' ', $package->type)}}</td>


								<td>{{count(\App\Models\PackagePayment::where('package_id', $package->id)->get())}} {{ translate('times') }}</td>
                                <td><img class="img-md" src="{{ my_asset($package->badge) }}" height="45px" alt="{{translate('badge')}}"></td>
                                <td>{{single_price($package->price)}}</td>
                                <td>
                                    @if ($package->recommended == "1")
                                        <span class="badge badge-inline badge-success">{{ translate('Recommended') }}</span>
                                    @elseif($package->recommended == "0")
                                        <span class="badge badge-inline badge-secondary">{{ translate('Not Recommended') }}</span>
                                    @endif
                                </td>
                                <td><img class="img-md" src="{{ my_asset($package->photo) }}" height="45px" alt="{{translate('icon')}}"></td>
                                <td>
                                    @if ($package->active == "1")
                                        <span class="badge badge-inline badge-primary">{{ translate('Active') }}</span>
                                    @elseif($package->active == "0")
                                        <span class="badge badge-inline badge-danger">{{ translate('Deactive') }}</span>
                                    @endif
                                </td>
								<td class="text-right">

                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{ route($package->type.'-index_package.edit', encrypt($package->id)) }}" title="{{ translate('Edit') }}">
                                        <i class="las la-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('package.destroy', $package->id)}}" title="{{ translate('Delete') }}">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination">
                    {{ $packages->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
