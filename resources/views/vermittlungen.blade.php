@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Neue Vermittlung</div>

                        <div class="card-body">
                            <form action="{{ route('vermittlungen') }}" method="post" class="mb-4">
                                @csrf

                                <div>
                                    <button type="submit" class="btn-dark text-white px-4 py-2 rounded font-medium">Neue
                                        Suchanfrage</button>
                                </div>
                            </form>

                            <table class="table table-bordered">
                                <tr>
                                    <th>@sortablelink('id')</th>
                                    <th>@sortablelink('PL1')</th>
                                    <th>@sortablelink('FirmenIDs')</th>
                                    <th>@sortablelink('contractor')</th>
                                    <th>@sortablelink('Angebotsnr')</th>
                                    <th>@sortablelink('status')</th>
                                    <th>@sortablelink('type_med')</th>
                                    <th>@sortablelink('type_search')</th>
                                    <th>@sortablelink('fachgebiet')</th>
                                    <th>@sortablelink('ort')</th>
                                    <th>@sortablelink('AkquiseID')</th>


                                </tr>
                                @if ($vermittlungen->count())
                                    @foreach ($vermittlungen as $vermittlung)
                                        <tr>
                                            <td>
                                                <a href="{{ route('vermittlung_details', ['id' => $vermittlung->id]) }}">
                                                    {{ $vermittlung->id }}
                                                </a>
                                            </td>
                                            <td>{{ $vermittlung->PL1 }}</td>
                                            <td>{{ $vermittlung->FirmenIDs }}</td>
                                            <td>{{ $vermittlung->contractor }}</td>
                                            <td>{{ $vermittlung->Angebotsnr }}</td>
                                            <td>{{ $vermittlung->status }}</td>
                                            <td>{{ $vermittlung->type_med }}</td>
                                            <td>{{ $vermittlung->type_search }}</td>
                                            <td>{{ $vermittlung->fachgebiet }}</td>
                                            <td>{{ $vermittlung->ort }}</td>
                                            <td>{{ $vermittlung->AkquiseID }}</td>

                                        </tr>
                                    @endforeach
                                @else
                                    <p>keine Vermittlungen</p>
                                @endif
                            </table>
                            {!! $vermittlungen->appends(request()->except('page'))->render() !!}

                            {{-- @if ($vermittlungen->count())
                                <ul class="list-group">
                                    @foreach ($vermittlungen as $vermittlung)
                                        <li class="list-group-item">
                                            {{ $vermittlung->id }}
                                        </li>
                                    @endforeach
                                </ul>
                                @else
                                <p>keine Vermittlungen</p>
                            @endif --}}

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
