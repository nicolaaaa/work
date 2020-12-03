@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-body">

                            <table class="table table-bordered">
                                <tr>
                                    <th>@sortablelink('id')</th>
                                    <th>@sortablelink('name')</th>
                                    <th>@sortablelink('vorname')</th>
                                    <th>@sortablelink('FirmenIDs')</th>
                                    <th>@sortablelink('ort')</th>

                                </tr>
                                @if ($nutzer->count())
                                    @foreach ($nutzer as $person)
                                        <tr>
                                            <td>{{ $person->id }}</td>
                                            <td>{{ $person->name }}</td>
                                            <td>{{ $person->vorname }}</td>
                                            <td>{{ $person->FirmenIDs }}</td>
                                            <td>{{ $person->ort }}</td>

                                        </tr>
                                    @endforeach
                                @else
                                    <p>keine Nutzer</p>
                                @endif
                            </table>
                            {!! $nutzer->appends(request()->except('page'))->render() !!}

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
