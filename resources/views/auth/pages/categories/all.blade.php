<x-auth-layout pageTitle="{{__('All Categories')}}">

    <div class="row">
        <div class="col-md-12 mx-auto">
            <table id="myTable" class="display table table-responsive">
                <thead>
                    <tr>
                        <th>{{__('SR#')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Status')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['all'] as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <x-front.form action="{{ route('categories.toggleStatus', $item->id) }}">
                                    @if ($item->status === 'Active')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            {{ __('In-active') }}
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-sm btn-outline-primary">
                                            {{ __('Active') }}
                                        </button>
                                    @endif
                                </x-front.form>
                                <a href="{{route('categories.edit', $item->id)}}" class="btn btn-sm btn-outline-info" title="Edit Category"> <i class="fa fa-edit"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</x-auth-layout>
